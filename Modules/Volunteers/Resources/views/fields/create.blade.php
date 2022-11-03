@extends('dashboard::layouts.default')

@section('title')
    @lang('volunteers::fields.actions.create')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('volunteers::fields.plural'))
        @slot('breadcrumbs', ['dashboard.fields.create'])

        {{ BsForm::resource('volunteers::fields')->post(route('dashboard.fields.store'), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('volunteers::fields.actions.create'))

            @include('volunteers::fields.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('volunteers::fields.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
