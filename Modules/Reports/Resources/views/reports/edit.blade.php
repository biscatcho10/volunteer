@extends('dashboard::layouts.default')

@section('title')
    {{ $report->name }}
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $report->name)
        @slot('breadcrumbs', ['dashboard.reports.edit', $report])

        {{ BsForm::resource('reports::reports')->putModel($report, route('dashboard.reports.update', $report), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('reports::reports.actions.edit'))

            @include('reports::reports.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('reports::reports.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
