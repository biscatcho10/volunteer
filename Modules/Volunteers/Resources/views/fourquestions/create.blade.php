@extends('dashboard::layouts.default')

@section('title')
    @lang('volunteers::fourquestions.actions.create')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('volunteers::fourquestions.plural'))
        @slot('breadcrumbs', ['dashboard.fourquestions.create'])

        {{ BsForm::resource('volunteers::fourquestions')->post(route('dashboard.fourquestions.store'), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('volunteers::fourquestions.actions.create'))

            @include('volunteers::fourquestions.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('volunteers::fourquestions.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
