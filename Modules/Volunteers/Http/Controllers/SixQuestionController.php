<?php

namespace Modules\Volunteers\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Modules\Volunteers\Entities\QuestionSix;
use Modules\Volunteers\Http\Requests\CategoryRequest;
use Modules\Volunteers\Repositories\SixRepository;

class SixQuestionController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var sixRepository
     */
    private $repository;

    /**
     * VolunteerController constructor.
     * @param sixRepository $repository
     */
    public function __construct(SixRepository $repository)
    {
        $this->middleware('permission:read_volunteers')->only(['index']);
        $this->middleware('permission:create_volunteers')->only(['create', 'store']);
        $this->middleware('permission:update_volunteers')->only(['edit', 'update']);
        $this->middleware('permission:delete_volunteers')->only(['destroy']);
        $this->middleware('permission:show_volunteers')->only(['show']);
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     * @return Factory|View
     */
    public function index()
    {
        $questions = $this->repository->all();

        return view('volunteers::sixquestions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Factory|View
     */
    public function create()
    {
        return view('volunteers::sixquestions.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param CategoryRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        $question = $this->repository->create($request->all());

        flash(trans('volunteers::sixquestions.messages.created'))->success();

        return redirect()->route('dashboard.sixquestions.show', $question);
    }

    /**
     * Show the specified resource.
     * @param QuestionSix $sixquestion
     * @return Factory|View
     */
    public function show(QuestionSix $sixquestion)
    {
        $question = $sixquestion;
        $question = $this->repository->find($question);
        return view('volunteers::sixquestions.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param QuestionSix $sixquestion
     * @return Factory|View
     */
    public function edit(QuestionSix $sixquestion)
    {
        $question = $sixquestion;
        return view('volunteers::sixquestions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     * @param CategoryRequest $request
     * @param QuestionSix $sixquestion
     * @return RedirectResponse
     */
    public function update(CategoryRequest $request, QuestionSix $sixquestion)
    {
        $question = $sixquestion;
        $question = $this->repository->update($question, $request->all());

        flash(trans('volunteers::sixquestions.messages.updated'))->success();

        return redirect()->route('dashboard.sixquestions.show', $question);
    }

    /**
     * Remove the specified resource from storage.
     * @param QuestionSix $sixquestion
     * @return RedirectResponse
     */
    public function destroy(QuestionSix $sixquestion)
    {
        $question = $sixquestion;
        $this->repository->delete($question);

        flash(trans('volunteers::sixquestions.messages.deleted'))->error();

        return redirect()->route('dashboard.sixquestions.index');
    }
}
