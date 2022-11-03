<?php

namespace Modules\Reports\Entities;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Http\Filters\Filterable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Report extends Model implements HasMedia
{
    use HasFactory, Translatable, Filterable, HasUploader, InteractsWithMedia;

    protected $fillable = ['downloads', 'views', 'direction'];

    protected $table = 'reports';

    public $translatedAttributes = ['name', 'description'];

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
        $this->addMediaCollection('ar_files');
        $this->addMediaCollection('en_files');

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

    public function getFile($lang)
    {
        $rev = ($lang == 'en') ? 'ar' : 'en';
        if ($file = $this->getFirstMediaUrl($lang . '_files')) {
            return $file;
        } else {
            return $this->getFirstMediaUrl($rev . '_files');
        }
    }

    public function getArFile()
    {
        return $this->getFirstMediaUrl('ar_files');
    }

    public function getEnFile()
    {
        return $this->getFirstMediaUrl('en_files');
    }
}
