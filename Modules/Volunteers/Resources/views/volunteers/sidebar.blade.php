@component('dashboard::layouts.components.sidebarItem')
    @slot('can', ['permission' => 'read_volunteers'])
    @slot('url', route('dashboard.volunteers.index'))
    @slot('name', trans('volunteers::volunteers.plural'))
    @slot('isActive', request()->routeIs('*volunteers*'))
    @slot('icon', 'fas fa-people-carry')
    @slot('tree', [
        [
            'name' => trans('volunteers::volunteers.plural'),
            'url' => route('dashboard.volunteers.index'),
            'can' => ['permission' => 'read_volunteers'],
            'isActive' => request()->routeIs('*volunteers.index'),
            'module' => 'Volunteers',
        ],
        [
            'name' => trans('volunteers::fields.plural'),
            'url' => route('dashboard.fields.index'),
            'can' => ['permission' => 'read_fields'],
            'isActive' => request()->routeIs('*fields.index'),
            'module' => 'Volunteers',
        ],
        [
            'name' => trans('volunteers::categories.plural'),
            'url' => route('dashboard.categories.index'),
            'can' => ['permission' => 'read_categories'],
            'isActive' => request()->routeIs('*categories.index'),
            'module' => 'Volunteers',
        ],
        [
            'name' => trans('howknow::reasons.reason'),
            'url' => route('dashboard.reasons.index'),
            'can' => ['permission' => 'read_reasons'],
            'isActive' => request()->routeIs('*reasons.index'),
            'module' => 'HowKnow',
        ],
        [
            'name' => trans('volunteers::volunteers.questions'),
            'url' => route('dashboard.volunteers.questions'),
            'can' => ['permission' => 'read_volunteers'],
            'isActive' => request()->routeIs('*volunteers.questions'),
            'module' => 'Volunteers',
        ],
    ])
@endcomponent
