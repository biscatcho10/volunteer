<?php

namespace Modules\Services\Repositories;

use Modules\Contracts\ChildCrudRepository;
use Modules\Services\Entities\Video;
use Modules\Services\Http\Filters\VideoFilter;

class VideoRepository implements ChildCrudRepository
{
    /**
     * @var \Modules\Services\Http\Filters\VideoFilter
     */
    private $filter;

    /**
     * ServiceRepository constructor.
     *
     * @param \Modules\Services\Http\Filters\VideoFilter $filter
     */
    public function __construct(VideoFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Get all images as a collection.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function all($event)
    {
        return $event->videos()->filter($this->filter)->paginate(request('perPage'));
    }

    /**
     * Save the created model to storage.
     *
     * @param array $data
     * @return \Modules\Services\Entities\Event
     */
    public function create($event, array $data)
    {
        $video = $event->videos()->create($data);

        // $video->addAllMediaFromTokens();

        $video->addMediaFromRequest('image')->toMediaCollection('images');

        if (isset($data['video'])) {
            $video->addMediaFromRequest('video')->toMediaCollection('videos');
        }

        return $video;
    }

    /**
     * Display the given Event instance.
     *
     * @param mixed $model
     * @return \Modules\Services\Entities\Event
     */
    public function find($model)
    {
        if ($model instanceof Video) {
            return $model;
        }

        return Video::findOrFail($model);
    }

    /**
     * Update the given Event in the storage.
     *
     * @param mixed $model
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($model, array $data)
    {
        $video = $this->find($model);

        if ($data['type'] == 'upload') {
            $data['url'] = '';
        }

        $video->update($data);

        // $video->addAllMediaFromTokens();
        if (isset($data['image'])) {
            delFile($video->getMediaResource('images'));
            $video->addMediaFromRequest('image')->toMediaCollection('images');
        }

        if (isset($data['video'])) {
            delFile($video->getMediaResource('videos'));
            $video->addMediaFromRequest('video')->toMediaCollection('videos');
        }

        return $video;
    }

    /**
     * Delete the given Event from storage.
     *
     * @param mixed $model
     * @return void
     * @throws \Exception
     */
    public function delete($model)
    {
        $this->find($model)->delete();
    }
}
