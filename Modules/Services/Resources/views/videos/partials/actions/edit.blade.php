@if(auth()->user()->hasPermission('update_videos'))
    <a href="{{ route('dashboard.videos.edit', [$event, $video]) }}"
       class="btn btn-outline-primary waves-effect waves-light btn-sm">
        <i class="fas fa-edit fa fa-fw"></i>
    </a>
@else
    <button
        type="button"
        disabled
        class="btn btn-outline-primary waves-effect waves-light btn-sm">
        <i class="fas fa-edit fa fa-fw"></i>
    </button>
@endcan
