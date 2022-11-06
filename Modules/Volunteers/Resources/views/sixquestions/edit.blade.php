@extends('dashboard::layouts.default')

@section('title')
    {{ $question->name }}
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $question->name)
        @slot('breadcrumbs', ['dashboard.sixquestions.edit', $question])

        {{ BsForm::resource('volunteers::sixquestions')->putModel($question, route('dashboard.sixquestions.update', $question), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('volunteers::sixquestions.actions.edit'))

            @include('volunteers::sixquestions.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('volunteers::sixquestions.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
