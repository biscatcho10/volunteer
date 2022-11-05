<?php

Breadcrumbs::for('dashboard.fourquestions.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('volunteers::fourquestions.plural'), route('dashboard.fourquestions.index'));
});

Breadcrumbs::for('dashboard.fourquestions.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.fourquestions.index');
    $breadcrumb->push(trans('volunteers::fourquestions.actions.create'), route('dashboard.fourquestions.create'));
});

Breadcrumbs::for('dashboard.fourquestions.show', function ($breadcrumb, $question) {
    $breadcrumb->parent('dashboard.fourquestions.index');
    $breadcrumb->push($question->name, route('dashboard.fourquestions.show', $question));
});

Breadcrumbs::for('dashboard.fourquestions.edit', function ($breadcrumb, $question) {
    $breadcrumb->parent('dashboard.volunteers.show', $question);
    $breadcrumb->push(trans('volunteers::fourquestions.actions.edit'), route('dashboard.fourquestions.edit', $question));
});
