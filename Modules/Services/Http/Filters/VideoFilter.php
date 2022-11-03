<?php

namespace Modules\Services\Http\Filters;

use App\Http\Filters\BaseFilters;

class VideoFilter extends BaseFilters
{
    /**
     * Registered filters to operate upon.
     *
     * @var array
     */
    protected $filters = [
        'type'
    ];

    /**
     * Filter the query by a given name.
     *
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function type($value)
    {
        if ($value) {
            return $this->builder->where('type', 'LIKE', $value);
        }

        return $this->builder;
    }

}
