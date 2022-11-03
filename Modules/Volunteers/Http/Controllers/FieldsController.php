<?php

namespace Modules\Volunteers\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Modules\Volunteers\Entities\Field;
use Modules\Volunteers\Http\Requests\FieldRequest;
use Modules\Volunteers\Repositories\FieldRepository;

class FieldsController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var FieldRepository
     */
    private $repository;

    /**
     * VolunteerController constructor.
     * @param FieldRepository $repository
     */
    public function __construct(FieldRepository $repository)
    {
        $this->middleware('permission:read_fields')->only(['index']);
        $this->middleware('permission:create_fields')->only(['create', 'store']);
        $this->middleware('permission:update_fields')->only(['edit', 'update']);
        $this->middleware('permission:delete_fields')->only(['destroy']);
        $this->middleware('permission:show_fields')->only(['show']);
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     * @return Factory|View
     */
    public function index()
    {
        $fields = $this->repository->all();

        return view('volunteers::fields.index', compact('fields'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Factory|View
     */
    public function create()
    {
        return view('volunteers::fields.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param FieldRequest $request
     * @return RedirectResponse
     */
    public function store(FieldRequest $request)
    {
        $field = $this->repository->create($request->all());

        flash(trans('volunteers::fields.messages.created'))->success();

        return redirect()->route('dashboard.fields.show', $field);
    }

    /**
     * Show the specified resource.
     * @param Field $field
     * @return Factory|View
     */
    public function show(Field $field)
    {
        $field = $this->repository->find($field);
        return view('volunteers::fields.show', compact('field'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param Field $field
     * @return Factory|View
     */
    public function edit(Field $field)
    {
        return view('volunteers::fields.edit', compact('field'));
    }

    /**
     * Update the specified resource in storage.
     * @param FieldRequest $request
     * @param Field $field
     * @return RedirectResponse
     */
    public function update(FieldRequest $request, Field $field)
    {
        $field = $this->repository->update($field, $request->all());

        flash(trans('volunteers::fields.messages.updated'))->success();

        return redirect()->route('dashboard.fields.show', $field);
    }

    /**
     * Remove the specified resource from storage.
     * @param Field $field
     * @return RedirectResponse
     */
    public function destroy(Field $field)
    {
        $this->repository->delete($field);

        flash(trans('volunteers::fields.messages.deleted'))->error();

        return redirect()->route('dashboard.fields.index');
    }
}
