<?php

namespace Modules\Services\Repositories;

use Modules\Contracts\CrudRepository;
use Modules\Services\Entities\Service;
use Modules\Services\Http\Filters\ServiceFilter;

class ServiceRepository implements CrudRepository
{
    /**
     * @var \Modules\Services\Http\Filters\ServiceFilter
     */
    private $filter;

    /**
     * ServiceRepository constructor.
     *
     * @param \Modules\Services\Http\Filters\ServiceFilter $filter
     */
    public function __construct(ServiceFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Get all Services as a collection.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function all()
    {
        return Service::filter($this->filter)->paginate(request('perPage'));
    }

    /**
     * Save the created model to storage.
     *
     * @param array $data
     * @return \Modules\Services\Entities\Service
     */
    public function create(array $data)
    {
        /** @var Service $service */
        $service = Service::create($data);

        $service->update(['rank' => $service->id]);

        // $service->addAllMediaFromTokens();

        $service->addMediaFromRequest('image')->toMediaCollection('images');
        $service->addMediaFromRequest('icon')->toMediaCollection('icons');

        return $service;
    }

    /**
     * Display the given Service instance.
     *
     * @param mixed $model
     * @return \Modules\Services\Entities\Service
     */
    public function find($model)
    {
        if ($model instanceof Service) {
            return $model;
        }

        return Service::findOrFail($model);
    }

    /**
     * Update the given Service in the storage.
     *
     * @param mixed $model
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($model, array $data)
    {
        $service = $this->find($model);

        $service->update($data);

        // $service->addAllMediaFromTokens();
        if (isset($data['image'])) {
            delFile($service->getMediaResource('images'));
            $service->addMediaFromRequest('image')->toMediaCollection('images');
        }

        if (isset($data['file'])) {
            delFile($service->getMediaResource('icons'));
            $service->addMediaFromRequest('icon')->toMediaCollection('icons');
        }

        return $service;
    }

    /**
     * Delete the given Service from storage.
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
