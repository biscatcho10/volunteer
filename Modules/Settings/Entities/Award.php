<?php

namespace Modules\Settings\Entities;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Http\Filters\Filterable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Award extends Model implements HasMedia
{
    use HasFactory, Filterable, HasUploader, InteractsWithMedia, Translatable;

    protected $fillable = ['url', 'date', 'meta_title', 'meta_description', 'meta_keywords'];

    protected $table = 'awards';

    public $translatedAttributes = ['name'];

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
        $this->addMediaCollection('images');
    }


    /**
     * The Partner image url.
     *
     * @return bool
     */
    public function getImage()
    {
        return $this->getFirstMediaUrl('images');
    }


    // get the award year
    public function getYear()
    {
        if (app()->getLocale() == 'en') {
            $year = 'Year ' . substr($this->date, 0, 4);
        } else {
            $year = 'السنة ' . substr($this->date, 0, 4);
        }
        return $year;
    }
}
