<?php

namespace Modules\News\Entities;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Http\Filters\Filterable;
use Astrotomic\Translatable\Translatable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class News extends Model implements HasMedia
{
    use HasFactory, Translatable, Filterable, HasUploader, InteractsWithMedia;

    protected $fillable = ['published_at', 'created_at', 'updated_at', 'meta_title', 'meta_description', 'meta_keywords'];

    protected $table = 'news';

    public $translatedAttributes = ['title', 'content'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'translations',
        'media',
    ];


    /**
     * Define the media collections.
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('images');
    }



    /**
     * The news image url.
     *
     * @return bool
     */
    public function getImage()
    {
        return $this->getFirstMediaUrl('images');
    }


    public function getPublishedAtAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');;
    }

    // get the news day
    public function getDayAttribute()
    {
        return Carbon::parse($this->published_at)->format('d');
    }

    // get the news month
    public function getMonthAttribute()
    {
        $arabicMonths = [
            'Jan' => ['ar' => 'يناير', 'en' => 'January'],
            'Feb' => ['ar' => 'فبراير', 'en' => 'February'],
            'Mar' => ['ar' => 'مارس', 'en' => 'March'],
            'Apr' => ['ar' => 'أبريل', 'en' => 'April'],
            'May' => ['ar' => 'مايو', 'en' => 'May'],
            'Jun' => ['ar' => 'يونيو', 'en' => 'June'],
            'Jul' => ['ar' => 'يوليو', 'en' => 'July'],
            'Aug' => ['ar' => 'أغسطس', 'en' => 'August'],
            'Sep' => ['ar' => 'سبتمبر', 'en' => 'September'],
            'Oct' => ['ar' => 'أكتوبر', 'en' => 'October'],
            'Nov' => ['ar' => 'نوفمبر', 'en' => 'November'],
            'Dec' => ['ar' => 'ديسمبر', 'en' => 'December'],
        ];

        $month = $arabicMonths[Carbon::parse($this->published_at)->format('M')][app()->getLocale()];
        return $month;
    }

     // get the news year
     public function getYearAttribute()
     {
         return Carbon::parse($this->published_at)->format('Y');
     }


    public function getContent()
    {
        return "<ape class='editor_'>" . $this->content . "</ape>";
    }
}
