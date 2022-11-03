<?php

namespace Modules\Reports\Repositories;

use Modules\Contracts\CrudRepository;
use Modules\Reports\Entities\Report;
use Modules\Reports\Http\Filters\ReportFilter;

class ReportRepository implements CrudRepository
{
    /**
     * @var \Modules\Reports\Http\Filters\ReportFilter
     */
    private $filter;

    /**
     * ReportRepository constructor.
     *
     * @param \Modules\Reports\Http\Filters\ReportFilter $filter
     */
    public function __construct(ReportFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Get all Reports as a collection.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function all()
    {
        return Report::filter($this->filter)->paginate(request('perPage'));
    }

    /**
     * Save the created model to storage.
     *
     * @param array $data
     * @return \Modules\Reports\Entities\Report
     */
    public function create(array $data)
    {
        /** @var Report $report */
        $report = Report::create($data);

        // $report->addAllMediaFromTokens();
        if (isset($data['ar_file'])) {
            $report->addMediaFromRequest('ar_file')->toMediaCollection('ar_files');
        }

        if (isset($data['en_file'])) {
            $report->addMediaFromRequest('en_file')->toMediaCollection('en_files');
        }

        $report->addMediaFromRequest('image')->toMediaCollection('images');


        return $report;
    }

    /**
     * Display the given Report instance.
     *
     * @param mixed $model
     * @return \Modules\Reports\Entities\Report
     */
    public function find($model)
    {
        if ($model instanceof Report) {
            return $model;
        }

        return Report::findOrFail($model);
    }

    /**
     * Update the given Report in the storage.
     *
     * @param mixed $model
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($model, array $data)
    {
        $report = $this->find($model);

        $report->update($data);

        // $report->addAllMediaFromTokens();

        if (isset($data['ar_file'])) {
            delFile($report->getMediaResource('ar_files'));
            $report->addMediaFromRequest('ar_file')->toMediaCollection('ar_files');
        }

        if (isset($data['en_file'])) {
            delFile($report->getMediaResource('en_files'));
            $report->addMediaFromRequest('en_file')->toMediaCollection('en_files');
        }

        if (isset($data['image'])) {
            delFile($report->getMediaResource('images'));
            $report->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return $report;
    }

    /**
     * Delete the given Report from storage.
     *
     * @param mixed $model
     * @return void
     * @throws \Exception
     */
    public function delete($model)
    {
        $this->find($model)->delete();
    }
}
