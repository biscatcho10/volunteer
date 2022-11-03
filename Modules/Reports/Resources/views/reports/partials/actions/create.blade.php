@if(auth()->user()->hasPermission('create_reports'))
    <a href="{{ route('dashboard.reports.create') }}"
       class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('reports::reports.actions.create')
    </a>
@else
    <button
        type="button"
        disabled
        class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('reports::reports.actions.create')
    </button>
@endif
