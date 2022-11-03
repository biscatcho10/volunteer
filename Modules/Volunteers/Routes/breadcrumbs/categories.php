<?php

Breadcrumbs::for('dashboard.categories.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('volunteers::categories.plural'), route('dashboard.categories.index'));
});

Breadcrumbs::for('dashboard.categories.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.categories.index');
    $breadcrumb->push(trans('volunteers::categories.actions.create'), route('dashboard.categories.create'));
});

Breadcrumbs::for('dashboard.categories.show', function ($breadcrumb, $category) {
    $breadcrumb->parent('dashboard.categories.index');
    $breadcrumb->push($category->name, route('dashboard.categories.show', $category));
});

Breadcrumbs::for('dashboard.categories.edit', function ($breadcrumb, $category) {
    $breadcrumb->parent('dashboard.volunteers.show', $category);
    $breadcrumb->push(trans('volunteers::categories.actions.edit'), route('dashboard.categories.edit', $category));
});
