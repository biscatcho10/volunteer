@extends('dashboard::layouts.default')

@section('title')
    {{ $category->name }}
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $category->name)
        @slot('breadcrumbs', ['dashboard.categories.edit', $category])

        {{ BsForm::resource('volunteers::categories')->putModel($category, route('dashboard.categories.update', $category), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('volunteers::categories.actions.edit'))

            @include('volunteers::categories.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('volunteers::categories.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
