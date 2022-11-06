@extends('dashboard::layouts.default')

@section('title')
    @lang('volunteers::fivequestions.actions.create')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('volunteers::fivequestions.plural'))
        @slot('breadcrumbs', ['dashboard.fivequestions.create'])

        {{ BsForm::resource('volunteers::fivequestions')->post(route('dashboard.fivequestions.store'), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('volunteers::fivequestions.actions.create'))

            @include('volunteers::fivequestions.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('volunteers::fivequestions.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
