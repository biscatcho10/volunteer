@extends('dashboard::layouts.default')

@section('title')
    {{ $question->name }}
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $question->name)
        @slot('breadcrumbs', ['dashboard.fourquestions.edit', $question])

        {{ BsForm::resource('volunteers::fourquestions')->putModel($question, route('dashboard.fourquestions.update', $question), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('volunteers::fourquestions.actions.edit'))

            @include('volunteers::fourquestions.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('volunteers::fourquestions.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
