<?php

namespace Modules\Volunteers\Entities;

use App\Http\Filters\Filterable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Support\Traits\Selectable;

class QuestionFour extends Model
{
    use HasFactory, Translatable, Selectable, Filterable;

    protected $table = 'question_fours';

    protected $fillable = ['created_at', 'updated_at'];

    public $translatedAttributes = ['name'];

    protected $with = ['translations'];

    public function volunteers()
    {
        return $this->hasOne(Volunteer::class);
    }
}
