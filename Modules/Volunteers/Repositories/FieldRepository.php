<?php

namespace Modules\Volunteers\Repositories;

use Modules\Contracts\CrudRepository;
use Modules\Volunteers\Entities\Field;
use Modules\Volunteers\Entities\Volunteer;
use Modules\Volunteers\Http\Filters\FieldFilter;

class FieldRepository implements CrudRepository
{
    /**
     * @var \Modules\Volunteers\Http\Filters\FieldFilter
     */
    private $filter;

    /**
     * FieldRepository constructor.
     *
     * @param \Modules\Volunteers\Http\Filters\FieldFilter $filter
     */
    public function __construct(FieldFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Get all Fields as a collection.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function all()
    {
        return Field::filter($this->filter)->paginate(request('perPage'));
    }

    /**
     * Save the created model to storage.
     *
     * @param array $data
     * @return \Modules\Volunteers\Entities\Volunteer
     */
    public function create(array $data)
    {
        /** @var Field $field */
        $field = Field::create($data);

        return $field;
    }

    /**
     * Display the given Field instance.
     *
     * @param mixed $model
     * @return \Modules\Volunteers\Entities\Field
     */
    public function find($model)
    {
        if ($model instanceof Field) {
            return $model;
        }

        return Field::findOrFail($model);
    }

    /**
     * Update the given Field in the storage.
     *
     * @param mixed $model
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($model, array $data)
    {
        $field = $this->find($model);

        if (!empty($field)) {
            $field->update($data);
        }

        return $field;
    }

    /**
     * Delete the given Field from storage.
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
