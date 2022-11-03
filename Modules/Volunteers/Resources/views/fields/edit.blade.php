@extends('dashboard::layouts.default')

@section('title')
    {{ $field->name }}
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $field->name)
        @slot('breadcrumbs', ['dashboard.fields.edit', $field])

        {{ BsForm::resource('volunteers::fields')->putModel($field, route('dashboard.fields.update', $field), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('volunteers::fields.actions.edit'))

            @include('volunteers::fields.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('volunteers::fields.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
