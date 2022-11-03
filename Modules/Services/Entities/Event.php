<?php

namespace Modules\Services\Entities;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Http\Filters\Filterable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;
use Modules\Services\Transformers\MediaResource;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory, Translatable, Filterable, HasUploader, InteractsWithMedia;

    protected $fillable = ['album_id', 'meta_title', 'meta_description', 'meta_keywords'];

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
        $this->addMediaCollection('events');
    }


    public function getImagesAttribute()
    {
        return $this->getMediaResource('events');
    }


    /**
     * The service image url.
     *
     * @return bool
     */
    public function getImage()
    {
        return $this->getFirstMediaUrl('events');
    }


    // Relationships
    public function album()
    {
        return $this->belongsTo(Gallery::class, 'album_id');
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }


    public function getDataAttribute()
    {
        $media1 = collect(MediaResource::Collection($this->videos)->response()->getData(true))->toArray()['data'];
        $media2 = collect(MediaResource::Collection($this->getMediaResource('events'))->response()->getData(true))->toArray()['data'];
        $media = array_merge($media1, $media2);
        return $this->random($media);
    }


    protected function random($array)
    {
        $i = count($array);
        while (--$i) {
            $j = mt_rand(0, $i);
            if ($i != $j) {
                $tmp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $tmp;
            }
        }
        return $array;
    }
}
