<?php

Breadcrumbs::for('dashboard.sixquestions.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('volunteers::sixquestions.plural'), route('dashboard.sixquestions.index'));
});

Breadcrumbs::for('dashboard.sixquestions.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.sixquestions.index');
    $breadcrumb->push(trans('volunteers::sixquestions.actions.create'), route('dashboard.sixquestions.create'));
});

Breadcrumbs::for('dashboard.sixquestions.show', function ($breadcrumb, $question) {
    $breadcrumb->parent('dashboard.sixquestions.index');
    $breadcrumb->push($question->name, route('dashboard.sixquestions.show', $question));
});

Breadcrumbs::for('dashboard.sixquestions.edit', function ($breadcrumb, $question) {
    $breadcrumb->parent('dashboard.volunteers.show', $question);
    $breadcrumb->push(trans('volunteers::sixquestions.actions.edit'), route('dashboard.sixquestions.edit', $question));
});
