@extends('dashboard::layouts.default')

@section('title')
    @lang('services::videos.actions.create')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('services::videos.plural'))
        @slot('breadcrumbs', ['dashboard.videos.create', [$event->album, $event]])

        {{ BsForm::resource('services::videos')->post(route('dashboard.videos.store',$event), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('services::videos.actions.create'))

            @include('services::videos.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('services::videos.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
