<?php


Breadcrumbs::for('dashboard.videos.create', function ($breadcrumb, $item) {
    $breadcrumb->parent('dashboard.events.show', [$item[0], $item[1]]);
    $breadcrumb->push(trans('services::videos.actions.create'), route('dashboard.videos.create', $item[0]));
});


Breadcrumbs::for('dashboard.videos.show', function ($breadcrumb, $item) {
    $breadcrumb->parent('dashboard.events.show', [$item[0], $item[1], $item[2]]);
    $breadcrumb->push($item[2]->type, route('dashboard.videos.show', [$item[0], $item[1]]));
});


Breadcrumbs::for('dashboard.videos.edit', function ($breadcrumb, $item) {
    $breadcrumb->parent('dashboard.events.show', [$item[0], $item[1], $item[2]]);
    $breadcrumb->push(trans('services::videos.actions.edit'), route('dashboard.videos.edit', [$item[0], $item[1]]));
});
