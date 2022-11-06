@if(auth()->user()->hasPermission('create_volunteers'))
    <a href="{{ route('dashboard.sixquestions.create') }}"
       class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('volunteers::sixquestions.actions.create')
    </a>
@else
    <button
        type="button"
        disabled
        class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('volunteers::sixquestions.actions.create')
    </button>
@endif
