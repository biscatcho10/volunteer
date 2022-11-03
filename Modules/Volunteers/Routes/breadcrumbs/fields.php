<?php

Breadcrumbs::for('dashboard.fields.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('volunteers::fields.plural'), route('dashboard.fields.index'));
});

Breadcrumbs::for('dashboard.fields.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.fields.index');
    $breadcrumb->push(trans('volunteers::fields.actions.create'), route('dashboard.fields.create'));
});

Breadcrumbs::for('dashboard.fields.show', function ($breadcrumb, $field) {
    $breadcrumb->parent('dashboard.fields.index');
    $breadcrumb->push($field->name, route('dashboard.fields.show', $field));
});

Breadcrumbs::for('dashboard.fields.edit', function ($breadcrumb, $field) {
    $breadcrumb->parent('dashboard.volunteers.show', $field);
    $breadcrumb->push(trans('volunteers::fields.actions.edit'), route('dashboard.fields.edit', $field));
});
