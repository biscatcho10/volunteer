@component('dashboard::layouts.components.sidebarItem')
    @slot('can', ['permission' => 'read_reports'])
    @slot('url', route('dashboard.reports.index'))
    @slot('name', trans('reports::reports.plural'))
    @slot('isActive', request()->routeIs('*reports*'))
    @slot('icon', 'fas fa-file-alt')
    @slot('tree', [
        [
            'name' => trans('reports::reports.actions.list'),
            'url' => route('dashboard.reports.index'),
            'can' => ['permission' => 'read_reports'],
            'isActive' => request()->routeIs('*reports.index'),
            'module' => 'Reports',
        ],
        [
            'name' => trans('reports::reports.actions.create'),
            'url' => route('dashboard.reports.create'),
            'can' => ['permission' => 'create_reports'],
            'isActive' => request()->routeIs('*reports.create'),
            'module' => 'Reports',
        ],
    ])
@endcomponent
