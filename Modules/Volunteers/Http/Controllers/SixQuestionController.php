<?php

namespace Modules\Volunteers\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Modules\Volunteers\Entities\Category;
use Modules\Volunteers\Http\Requests\CategoryRequest;
use Modules\Volunteers\Repositories\CategoryRepository;

class SixQuestionController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var CategoryRepository
     */
    private $repository;

    /**
     * VolunteerController constructor.
     * @param CategoryRepository $repository
     */
    public function __construct(CategoryRepository $repository)
    {
        $this->middleware('permission:read_categories')->only(['index']);
        $this->middleware('permission:create_categories')->only(['create', 'store']);
        $this->middleware('permission:update_categories')->only(['edit', 'update']);
        $this->middleware('permission:delete_categories')->only(['destroy']);
        $this->middleware('permission:show_categories')->only(['show']);
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     * @return Factory|View
     */
    public function index()
    {
        $categories = $this->repository->all();

        return view('volunteers::categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Factory|View
     */
    public function create()
    {
        return view('volunteers::categories.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param CategoryRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        $category = $this->repository->create($request->all());

        flash(trans('volunteers::categories.messages.created'))->success();

        return redirect()->route('dashboard.categories.show', $category);
    }

    /**
     * Show the specified resource.
     * @param Category $category
     * @return Factory|View
     */
    public function show(Category $category)
    {
        $category = $this->repository->find($category);
        return view('volunteers::categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param Category $category
     * @return Factory|View
     */
    public function edit(Category $category)
    {
        return view('volunteers::categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     * @param CategoryRequest $request
     * @param Category $category
     * @return RedirectResponse
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category = $this->repository->update($category, $request->all());

        flash(trans('volunteers::categories.messages.updated'))->success();

        return redirect()->route('dashboard.categories.show', $category);
    }

    /**
     * Remove the specified resource from storage.
     * @param Category $category
     * @return RedirectResponse
     */
    public function destroy(Category $category)
    {
        $this->repository->delete($category);

        flash(trans('volunteers::categories.messages.deleted'))->error();

        return redirect()->route('dashboard.categories.index');
    }
}
