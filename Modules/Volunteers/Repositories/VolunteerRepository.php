<?php

namespace Modules\Volunteers\Repositories;

use Modules\Contracts\CrudRepository;
use Modules\Volunteers\Entities\Volunteer;
use Modules\Volunteers\Http\Filters\VolunteerFilter;

class VolunteerRepository implements CrudRepository
{
    /**
     * @var \Modules\Volunteers\Http\Filters\VolunteerFilter
     */
    private $filter;

    /**
     * VolunteerRepository constructor.
     *
     * @param \Modules\Volunteers\Http\Filters\VolunteerFilter $filter
     */
    public function __construct(VolunteerFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Get all Volunteers as a collection.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function all()
    {
        return Volunteer::filter($this->filter)->paginate(request('perPage'));
    }

    /**
     * Save the created model to storage.
     *
     * @param array $data
     * @return \Modules\Volunteers\Entities\Volunteer
     */
    public function create(array $data)
    {
        /** @var Volunteer $volunteer */
        $volunteer = Volunteer::create($data);

        $volunteer->reasons()->attach($data['how_know_id']);
        $volunteer->fields()->attach($data['field_id']);
        $volunteer->categories()->attach($data['volunteer_category']);

        return $volunteer;
    }

    /**
     * Display the given Volunteer instance.
     *
     * @param mixed $model
     * @return \Modules\Volunteers\Entities\Volunteer
     */
    public function find($model)
    {
        if ($model instanceof Volunteer) {
            return $model;
        }

        return Volunteer::findOrFail($model);
    }

    /**
     * Update the given Volunteer in the storage.
     *
     * @param mixed $model
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($model, array $data)
    {
        $volunteer = $this->find($model);

        if (!empty($volunteer)) {
            $volunteer->update($data);
            $volunteer->reasons()->sync($data['how_know_id']);
            $volunteer->fields()->sync($data['field_id']);
            $volunteer->categories()->sync($data['volunteer_category']);
        }

        return $volunteer;
    }

    /**
     * Delete the given Volunteer from storage.
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
