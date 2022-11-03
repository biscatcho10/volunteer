@extends('dashboard::layouts.default')

@section('title')
    {{ $event->name }}
@endsection
@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $event->name)
        @slot('breadcrumbs', ['dashboard.events.show', [$gallery, $event]])

        <div class="row">
            <div class="col-md-12">
                @component('dashboard::layouts.components.box')
                    @slot('bodyClass', 'p-0')

                    <table class="table table-middle">
                        <tbody>
                            <tr>
                                <th width="400">@lang('services::events.attributes.name')</th>
                                <td>
                                    {{ $event->name }}
                                </td>
                            </tr>
                            <tr>
                                <th width="400">@lang('services::events.attributes.description')</th>
                                <td>
                                    {{ $event->description }}
                                </td>
                            </tr>
                            <tr>
                                <th width="400">@lang('services::events.attributes.image')</th>
                                <td class="d-flex justify-center">
                                    <div class="row mt-1">
                                        @foreach ($event->images as $album)
                                            @if ($album['mime_type'] == 'video/mp4')
                                                <div class="col-3">
                                                    <video class="img-thumbnail" controls>
                                                        <source src="{{ $album['url'] }}" type="video/mp4">
                                                    </video>
                                                </div>
                                            @else
                                                <div class="col-3">
                                                    <img src="{{ $album['url'] }}" class="mr-2 img-thumbnail">
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    @slot('footer')
                        @include('services::events.partials.actions.edit')
                        @include('services::events.partials.actions.delete')
                    @endslot
                @endcomponent
            </div>
        </div>
    @endcomponent

    @include('services::videos.index')
@endsection
