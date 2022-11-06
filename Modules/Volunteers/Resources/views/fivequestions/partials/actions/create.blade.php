@if(auth()->user()->hasPermission('create_volunteers'))
    <a href="{{ route('dashboard.fivequestions.create') }}"
       class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('volunteers::fivequestions.actions.create')
    </a>
@else
    <button
        type="button"
        disabled
        class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('volunteers::fivequestions.actions.create')
    </button>
@endif
