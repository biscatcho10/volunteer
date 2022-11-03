@if(auth()->user()->hasPermission('create_videos'))
    <a href="{{ route('dashboard.videos.create', $event) }}"
       class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('services::videos.actions.create')
    </a>
@else
    <button
        type="button"
        disabled
        class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('services::videos.actions.create')
    </button>
@endif
