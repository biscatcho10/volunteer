<?php

namespace Modules\Volunteers\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Modules\HowKnow\Entities\Reason;
use Modules\Volunteers\Entities\Category;
use Modules\Volunteers\Entities\Field;
use Modules\Volunteers\Entities\QuestionFive;
use Modules\Volunteers\Entities\QuestionFour;
use Modules\Volunteers\Entities\QuestionSix;
use Modules\Volunteers\Repositories\VolunteerRepository;
use Modules\Volunteers\Entities\Volunteer;
use Modules\Volunteers\Http\Requests\VolunteerRequest;
use View;

class VolunteersController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var VolunteerRepository
     */
    private $repository;

    /**
     * VolunteerController constructor.
     * @param VolunteerRepository $repository
     */
    public function __construct(VolunteerRepository $repository)
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
        $volunteers = $this->repository->all();

        return view('volunteers::volunteers.index', compact('volunteers'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Factory|View
     */
    public function create()
    {
        $fields = Field::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();
        $reasons = Reason::listsTranslations('reason', 'id')->pluck('reason', 'id')->toArray();
        $categories = Category::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();
        $questionFour = QuestionFour::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();
        $questionFive = QuestionFive::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();
        $questionSix = QuestionSix::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();
        return view('volunteers::volunteers.create', compact('fields', 'reasons', 'categories', 'questionFour', 'questionFive', 'questionSix'));
    }

    /**
     * Store a newly created resource in storage.
     * @param VolunteerRequest $request
     * @return RedirectResponse
     */
    public function store(VolunteerRequest $request)
    {
        $volunteer = $this->repository->create($request->all());

        flash(trans('volunteers::volunteers.messages.created'))->success();

        return redirect()->route('dashboard.volunteers.show', $volunteer);
    }

    /**
     * Show the specified resource.
     * @param Volunteer $volunteer
     * @return Factory|View
     */
    public function show(Volunteer $volunteer)
    {
        $lang = app()->getLocale();
        $volunteer = $this->repository->find($volunteer);
        return view('volunteers::volunteers.show', compact('volunteer', 'lang'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param Volunteer $volunteer
     * @return Factory|View
     */
    public function edit(Volunteer $volunteer)
    {
        $fields = Field::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();
        $reasons = Reason::listsTranslations('reason', 'id')->pluck('reason', 'id')->toArray();
        $categories = Category::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();
        $questionFour = QuestionFour::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();
        $questionFive = QuestionFive::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();
        $questionSix = QuestionSix::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();
        return view('volunteers::volunteers.edit', compact('volunteer', 'fields', 'reasons', 'categories','questionFour', 'questionFive', 'questionSix'));
    }

    /**
     * Update the specified resource in storage.
     * @param VolunteerRequest $request
     * @param Volunteer $volunteer
     * @return RedirectResponse
     */
    public function update(VolunteerRequest $request, Volunteer $volunteer)
    {
        $volunteer = $this->repository->update($volunteer, $request->all());

        flash(trans('volunteers::volunteers.messages.updated'))->success();

        return redirect()->route('dashboard.volunteers.show', $volunteer);
    }

    /**
     * Remove the specified resource from storage.
     * @param Volunteer $volunteer
     * @return RedirectResponse
     */
    public function destroy(Volunteer $volunteer)
    {
        $this->repository->delete($volunteer);

        flash(trans('volunteers::volunteers.messages.deleted'))->error();

        return redirect()->route('dashboard.volunteers.index');
    }


    public function questions()
    {
        return view('volunteers::volunteers.questions');
    }
}
