@extends('dashboard::layouts.default')

@section('title')
    @lang('reports::reports.actions.create')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('reports::reports.plural'))
        @slot('breadcrumbs', ['dashboard.reports.create'])

        {{ BsForm::resource('reports::reports')->post(route('dashboard.reports.store'), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('reports::reports.actions.create'))

            @include('reports::reports.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('reports::reports.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
