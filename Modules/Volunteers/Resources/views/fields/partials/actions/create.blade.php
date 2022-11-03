@if(auth()->user()->hasPermission('create_fields'))
    <a href="{{ route('dashboard.fields.create') }}"
       class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('volunteers::fields.actions.create')
    </a>
@else
    <button
        type="button"
        disabled
        class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('volunteers::fields.actions.create')
    </button>
@endif
