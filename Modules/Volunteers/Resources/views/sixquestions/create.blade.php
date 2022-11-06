@extends('dashboard::layouts.default')

@section('title')
    @lang('volunteers::sixquestions.actions.create')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('volunteers::sixquestions.plural'))
        @slot('breadcrumbs', ['dashboard.sixquestions.create'])

        {{ BsForm::resource('volunteers::sixquestions')->post(route('dashboard.sixquestions.store'), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('volunteers::sixquestions.actions.create'))

            @include('volunteers::sixquestions.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('volunteers::sixquestions.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
