<?php

namespace Modules\Volunteers\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Modules\Volunteers\Entities\Category;
use Modules\Volunteers\Entities\QuestionFive;
use Modules\Volunteers\Http\Requests\CategoryRequest;
use Modules\Volunteers\Repositories\FiveRepository;

class FiveQuestionController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var FiveRepository
     */
    private $repository;

    /**
     * VolunteerController constructor.
     * @param FiveRepository $repository
     */
    public function __construct(FiveRepository $repository)
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

        return view('volunteers::fivequestions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Factory|View
     */
    public function create()
    {
        return view('volunteers::fivequestions.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param CategoryRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        $question = $this->repository->create($request->all());

        flash(trans('volunteers::fivequestions.messages.created'))->success();

        return redirect()->route('dashboard.fivequestions.show', $question);
    }

    /**
     * Show the specified resource.
     * @param QuestionFive $fivequestion
     * @return Factory|View
     */
    public function show(QuestionFive $fivequestion)
    {
        $question = $fivequestion;
        $question = $this->repository->find($question);
        return view('volunteers::fivequestions.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param QuestionFive $fivequestion
     * @return Factory|View
     */
    public function edit(QuestionFive $fivequestion)
    {
        $question = $fivequestion;
        return view('volunteers::fivequestions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     * @param CategoryRequest $request
     * @param QuestionFive $fivequestion
     * @return RedirectResponse
     */
    public function update(CategoryRequest $request, QuestionFive $fivequestion)
    {
        $question = $fivequestion;
        $question = $this->repository->update($question, $request->all());

        flash(trans('volunteers::fivequestions.messages.updated'))->success();

        return redirect()->route('dashboard.fivequestions.show', $question);
    }

    /**
     * Remove the specified resource from storage.
     * @param QuestionFive $fivequestion
     * @return RedirectResponse
     */
    public function destroy(QuestionFive $fivequestion)
    {
        $question = $fivequestion;
        $this->repository->delete($question);

        flash(trans('volunteers::fivequestions.messages.deleted'))->error();

        return redirect()->route('dashboard.fivequestions.index');
    }
}
