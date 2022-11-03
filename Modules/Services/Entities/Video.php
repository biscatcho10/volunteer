<?php

namespace Modules\Services\Entities;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Video extends Model implements HasMedia
{
    use HasFactory, Filterable, HasUploader, InteractsWithMedia;

    protected $fillable = [
        'type',
        'url',
        'event_id',
    ];


    /**
     * Define the media collections.
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('videos');
        $this->addMediaCollection('images');
    }


    public function event()
    {
        return $this->belongsTo(Event::class);
    }


    // get image
    public function getImage()
    {
        return $this->getFirstMediaUrl('images');
    }


     // get video link
     public function getLinkAttribute()
     {
         if ($this->type == 'url') {
             return $this->url;
         } else {
             return asset($this->getFirstMediaUrl('videos'));
         }
     }

}
