<?php

namespace Modules\Volunteers\Repositories;

use Modules\Contracts\CrudRepository;
use Modules\Volunteers\Entities\QuestionFive;
use Modules\Volunteers\Http\Filters\CategoryFilter;

class FiveRepository implements CrudRepository
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
        return QuestionFive::filter($this->filter)->paginate(request('perPage'));
    }

    /**
     * Save the created model to storage.
     *
     * @param array $data
     * @return \Modules\Volunteers\Entities\Volunteer
     */
    public function create(array $data)
    {
        /** @var QuestionFive $question */
        $question = QuestionFive::create($data);

        return $question;
    }

    /**
     * Display the given Category instance.
     *
     * @param mixed $model
     * @return \Modules\Volunteers\Entities\QuestionFive
     */
    public function find($model)
    {
        if ($model instanceof QuestionFive) {
            return $model;
        }

        return QuestionFive::findOrFail($model);
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
        $question = $this->find($model);

        if (!empty($question)) {
            $question->update($data);
        }

        return $question;
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
