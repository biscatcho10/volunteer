<?php

namespace Modules\Volunteers\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $table = 'category_translations';

    public $timestamps = false;
}
