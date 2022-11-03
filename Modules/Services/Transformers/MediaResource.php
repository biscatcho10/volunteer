<?php

namespace Modules\Services\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Services\Entities\Video;

class MediaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        // dd($this->resource['mime_type']);
        if (isset($this->resource['mime_type'])) {
            $media = [
                'type' => $this->resource['type'],
                'preview' => $this->resource['preview'],
                'url' => $this->resource['url']
            ];
        } else {
            $media = [
                'type' => 'video',
                'preview' => $this->getImage(),
                'url' => $this->link
            ];
        }

        return $media;
    }
}
