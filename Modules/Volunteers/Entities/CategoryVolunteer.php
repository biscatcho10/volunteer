<?php

namespace Modules\Volunteers\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryVolunteer extends Model
{
    use HasFactory;

    protected $table = 'category_volunteers';

    public $timestamps = false;
}
