@extends('dashboard::layouts.default')

@section('title')
    {{ $video->type }}
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $video->type)
        @slot('breadcrumbs', ['dashboard.videos.edit', [$event->album, $event, $video]])

        {{ BsForm::resource('services::videos')->putModel($video, route('dashboard.videos.update', [$event, $video]), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('services::videos.actions.edit'))

            @include('services::videos.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('services::videos.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
