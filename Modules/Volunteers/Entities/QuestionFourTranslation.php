<?php

namespace Modules\Volunteers\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuestionFourTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $table = 'question_four_translations';

    public $timestamps = false;
}
