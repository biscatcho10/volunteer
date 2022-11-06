@extends('dashboard::layouts.default')

@section('title')
    {{ $question->name }}
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $question->name)
        @slot('breadcrumbs', ['dashboard.fivequestions.edit', $question])

        {{ BsForm::resource('volunteers::fivequestions')->putModel($question, route('dashboard.fivequestions.update', $question), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('volunteers::fivequestions.actions.edit'))

            @include('volunteers::fivequestions.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('volunteers::fivequestions.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
