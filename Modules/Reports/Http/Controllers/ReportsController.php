<?php

namespace Modules\Reports\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Reports\Entities\Report;
use Modules\Reports\Http\Requests\ReportRequest;
use Modules\Reports\Repositories\ReportRepository;

class ReportsController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var ReportRepository
     */
    private $repository;

    /**
     * CountryController constructor.
     *
     * @param ReportRepository $repository
     * @param CityRepository $cityRepository
     */
    public function __construct(ReportRepository $repository)
    {
        $this->middleware('permission:read_reports')->only(['index']);
        $this->middleware('permission:create_reports')->only(['create', 'store']);
        $this->middleware('permission:update_reports')->only(['edit', 'update']);
        $this->middleware('permission:delete_reports')->only(['destroy']);
        $this->middleware('permission:show_reports')->only(['show']);

        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $reports = $this->repository->all();

        return view('reports::reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('reports::reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CountryRequest $request
     * @return RedirectResponse
     * @throws Exception
     */
    public function store(ReportRequest $request)
    {
        if(!($request->hasFile('ar_file') || $request->hasFile('en_file')))
        {
            $request->validate([
                'ar_file' => 'required',
            ],[
                'ar_file.required' => __('You should upload at least one file.'),
            ]);
        }

        $report = $this->repository->create($request->all());

        flash(trans('reports::reports.messages.created'))->success();

        return redirect()->route('dashboard.reports.show', $report);
    }

    /**
     * Display the specified resource.
     *
     * @param Report $report
     * @return Application|Factory|View
     * @throws AuthorizationException
     * @throws Exception
     */
    public function show(Report $report)
    {
        $report = $this->repository->find($report);

        return view('reports::reports.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Report $report
     * @return Application|Factory|View
     */
    public function edit(Report $report)
    {
        return view('reports::reports.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CountryRequest $request
     * @param Report $report
     * @return RedirectResponse
     */
    public function update(ReportRequest $request, Report $report)
    {
        $report = $this->repository->update($report, $request->all());

        flash(trans('reports::reports.messages.updated'))->success();

        return redirect()->route('dashboard.reports.show', $report);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Report $report
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Report $report)
    {
        $this->repository->delete($report);

        flash(trans('reports::reports.messages.deleted'))->error();

        return redirect()->route('dashboard.reports.index');
    }
}
