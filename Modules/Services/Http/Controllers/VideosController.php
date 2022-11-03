<?php

namespace Modules\Services\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\Services\Entities\Event;
use Modules\Services\Entities\Video;
use Modules\Services\Http\Requests\VideoRequest;
use Modules\Services\Repositories\VideoRepository;

class VideosController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var VideoRepository
     */
    private $repository;

    /**
     * @var CityRepository
     */
    private $cityRepository;


    /**
     * ServiceController constructor.
     *
     * @param VideoRepository $repository
     * @param CityRepository $cityRepository
     */
    public function __construct(VideoRepository $repository)
    {
        $this->middleware('permission:read_videos')->only(['index']);
        $this->middleware('permission:create_videos')->only(['create', 'store']);
        $this->middleware('permission:update_videos')->only(['edit', 'update']);
        $this->middleware('permission:delete_videos')->only(['destroy']);
        $this->middleware('permission:show_videos')->only(['show']);

        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(Event $event)
    {
        $videos = $this->repository->all($event);
        return view('services::videos.show', compact('event', 'videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(Event $event)
    {
        return view('services::videos.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param VideoRequest $request
     * @return RedirectResponse
     * @throws Exception
     */
    public function store(VideoRequest $request, Event $event)
    {
        $event = $this->repository->create($event, $request->all());

        flash(trans('services::videos.messages.created'))->success();

        return redirect()->route('dashboard.videos.show', [$event, $event]);
    }

    /**
     * Display the specified resource.
     *
     * @param Event $event
     * @return Application|Factory|View
     * @throws AuthorizationException
     * @throws Exception
     */
    public function show(Event $event, Video $video)
    {
        $video = $this->repository->find($video);

        return view('services::videos.show', compact('event', 'video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Event $event
     * @return Application|Factory|View
     */
    public function edit(Event $event, Video $video)
    {
        return view('services::videos.edit', compact('event', 'video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param VideoRequest $request
     * @param Event $event
     * @return RedirectResponse
     */
    public function update(VideoRequest $request, Event $event, Video $video)
    {
        $video = $this->repository->update($video, $request->all());

        flash(trans('services::videos.messages.updated'))->success();

        return redirect()->route('dashboard.videos.show', [$event, $video]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Event $event
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Event $event, Video $video)
    {
        $this->repository->delete($video);

        flash(trans('services::videos.messages.deleted'))->error();

        return redirect()->route('dashboard.videos.index', $event);
    }
}
