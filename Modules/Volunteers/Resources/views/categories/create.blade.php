@extends('dashboard::layouts.default')

@section('title')
    @lang('volunteers::categories.actions.create')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('volunteers::categories.plural'))
        @slot('breadcrumbs', ['dashboard.categories.create'])

        {{ BsForm::resource('volunteers::categories')->post(route('dashboard.categories.store'), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('volunteers::categories.actions.create'))

            @include('volunteers::categories.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('volunteers::categories.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
