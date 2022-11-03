<?php

namespace Modules\Volunteers\Repositories;

use Modules\Contracts\CrudRepository;
use Modules\Volunteers\Entities\Category;
use Modules\Volunteers\Http\Filters\CategoryFilter;

class CategoryRepository implements CrudRepository
{
    /**
     * @var \Modules\Volunteers\Http\Filters\CategoryFilter
     */
    private $filter;

    /**
     * FieldRepository constructor.
     *
     * @param \Modules\Volunteers\Http\Filters\CategoryFilter $filter
     */
    public function __construct(CategoryFilter $filter)
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
        return Category::filter($this->filter)->paginate(request('perPage'));
    }

    /**
     * Save the created model to storage.
     *
     * @param array $data
     * @return \Modules\Volunteers\Entities\Volunteer
     */
    public function create(array $data)
    {
        /** @var Category $category */
        $category = Category::create($data);

        return $category;
    }

    /**
     * Display the given Category instance.
     *
     * @param mixed $model
     * @return \Modules\Volunteers\Entities\Category
     */
    public function find($model)
    {
        if ($model instanceof Category) {
            return $model;
        }

        return Category::findOrFail($model);
    }

    /**
     * Update the given Category in the storage.
     *
     * @param mixed $model
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($model, array $data)
    {
        $category = $this->find($model);

        if (!empty($category)) {
            $category->update($data);
        }

        return $category;
    }

    /**
     * Delete the given Category from storage.
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
