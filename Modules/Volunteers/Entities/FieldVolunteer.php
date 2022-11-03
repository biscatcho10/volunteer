<?php

namespace Modules\Volunteers\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FieldVolunteer extends Model
{
    use HasFactory;

    protected $table = 'field_volunteers';

    public $timestamps = false;

}
