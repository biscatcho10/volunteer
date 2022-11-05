<?php

namespace Modules\Volunteers\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Modules\Volunteers\Entities\Category;
use Modules\Volunteers\Entities\QuestionFour;
use Modules\Volunteers\Http\Requests\CategoryRequest;
use Modules\Volunteers\Repositories\FourRepository;

class FourQuestionController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var FourRepository
     */
    private $repository;

    /**
     * VolunteerController constructor.
     * @param FourRepository $repository
     */
    public function __construct(FourRepository $repository)
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

        return view('volunteers::fourquestions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Factory|View
     */
    public function create()
    {
        return view('volunteers::fourquestions.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param CategoryRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        $question = $this->repository->create($request->all());

        flash(trans('volunteers::categories.messages.created'))->success();

        return redirect()->route('dashboard.categories.show', $question);
    }

    /**
     * Show the specified resource.
     * @param QuestionFour $question
     * @return Factory|View
     */
    public function show(QuestionFour $question)
    {
        $question = $this->repository->find($question);
        return view('volunteers::fourquestions.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param QuestionFour $question
     * @return Factory|View
     */
    public function edit(QuestionFour $question)
    {
        return view('volunteers::fourquestions.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     * @param CategoryRequest $request
     * @param QuestionFour $question
     * @return RedirectResponse
     */
    public function update(CategoryRequest $request, QuestionFour $question)
    {
        $question = $this->repository->update($question, $request->all());

        flash(trans('volunteers::categories.messages.updated'))->success();

        return redirect()->route('dashboard.categories.show', $question);
    }

    /**
     * Remove the specified resource from storage.
     * @param QuestionFour $question
     * @return RedirectResponse
     */
    public function destroy(QuestionFour $question)
    {
        $this->repository->delete($question);

        flash(trans('volunteers::categories.messages.deleted'))->error();

        return redirect()->route('dashboard.categories.index');
    }
}
