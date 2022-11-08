<?php

namespace Modules\Volunteers\Entities;

use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Countries\Entities\Address;
use Modules\HowKnow\Entities\Reason;
use Modules\Volunteers\Entities\Helpers\VolunteerHelper;

class Volunteer extends Model
{
    use HasFactory, VolunteerHelper, Filterable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'dob',
        'job',
        'nationality',
        'educational_qualification',
        // 'how_know_id',
        'skills',
        'experiences',
        'motives',
        // 'field_id',
        'other_sector',
        // 'volunteer_category',
        'category_exp',
        'question4_exp',
        'question5_exp',
        'question6_exp',
        'favorite_time',
        'has_car',
    ];


    protected $casts = [
        'has_car' => 'boolean',
    ];


    // Relationships

    /**
     * @return BelongsToMany
     */
    public function reasons()
    {
        return $this->belongsToMany(Reason::class, 'knowledge_reasons');
    }


    /**
     * @return BelongsToMany
     */
    public function fields()
    {
        return $this->belongsToMany(Field::class, 'field_volunteers');
    }


    /**
     * @return BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_volunteers');
    }


    /**
     * @return BelongsToMany
     */
    public function question_four()
    {
        return $this->belongsToMany(QuestionFour::class, 'question_four_volunteers');
    }


    /**
     * @return BelongsToMany
     */
    public function question_five()
    {
        return $this->belongsToMany(QuestionFive::class, 'question_five_volunteers');
    }


    /**
     * @return BelongsToMany
     */
    public function question_six()
    {
        return $this->belongsToMany(QuestionSix::class, 'question_six_volunteers');
    }


    // get how know
    public function getHowKnowAttribute()
    {
        return $this->reasons->implode('reason', ', ');
    }

    // get field
    public function getFieldAttribute()
    {
        if ($this->field_id == 1)
            return $this->other_sector;
        else {
            return implode(" - ", $this->fields()->listsTranslations('name')->pluck('name')->toArray());
        }
    }

    // get volunteer category
    public function getCategoryAttribute()
    {
        if (in_array(1, $this->categories->pluck('id')->toArray()))
            return $this->category_exp;
        else
            return implode(" - ", $this->categories()->listsTranslations('name')->pluck('name')->toArray());
    }

    // get volunteer question_four
    public function getQuesFourAttribute()
    {
        $arr = $this->question_four->pluck('id')->toArray();
        if (in_array(1, $arr) || empty($arr))
            return $this->question4_exp;
        else
            return implode(" - ", $this->question_four()->listsTranslations('name')->pluck('name')->toArray());
    }

    // get volunteer question_five
    public function getQuesFiveAttribute()
    {
        $arr = $this->question_five->pluck('id')->toArray();
        if (in_array(1, $arr) || empty($arr))
            return $this->question5_exp;
        else
            return implode(" - ", $this->question_five()->listsTranslations('name')->pluck('name')->toArray());
    }

    // get volunteer question_six
    public function getQuesSixAttribute()
    {
        $arr = $this->question_six->pluck('id')->toArray();
        if (in_array(1, $arr) || empty($arr))
            return $this->question6_exp;
        else
            return implode(" - ", $this->question_six()->listsTranslations('name')->pluck('name')->toArray());
    }
}
