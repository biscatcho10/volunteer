<?php

namespace Modules\Settings\Entities;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Http\Filters\Filterable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class PaymentMethod extends Model implements HasMedia
{
    use HasFactory, Filterable, HasUploader, InteractsWithMedia, Translatable;

    protected $fillable = [
        'status', 'meta_title', 'meta_description', 'meta_keywords'
    ];

    protected $table = 'payment_methods';

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
}
