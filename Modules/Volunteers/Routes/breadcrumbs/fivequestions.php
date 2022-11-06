<?php

Breadcrumbs::for('dashboard.fivequestions.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('volunteers::fivequestions.plural'), route('dashboard.fivequestions.index'));
});

Breadcrumbs::for('dashboard.fivequestions.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.fivequestions.index');
    $breadcrumb->push(trans('volunteers::fivequestions.actions.create'), route('dashboard.fivequestions.create'));
});

Breadcrumbs::for('dashboard.fivequestions.show', function ($breadcrumb, $question) {
    $breadcrumb->parent('dashboard.fivequestions.index');
    $breadcrumb->push($question->name, route('dashboard.fivequestions.show', $question));
});

Breadcrumbs::for('dashboard.fivequestions.edit', function ($breadcrumb, $question) {
    $breadcrumb->parent('dashboard.volunteers.show', $question);
    $breadcrumb->push(trans('volunteers::fivequestions.actions.edit'), route('dashboard.fivequestions.edit', $question));
});
