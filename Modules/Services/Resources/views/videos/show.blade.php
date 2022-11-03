@extends('dashboard::layouts.default')

@section('title')
    {{ $video->type }}
@endsection
@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $video->type)
        @slot('breadcrumbs', ['dashboard.videos.show', [$event->album, $event, $video]])

        <div class="row">
            <div class="col-md-12">
                @component('dashboard::layouts.components.box')
                    @slot('bodyClass', 'p-0')

                    <table class="table table-middle">
                        <tbody>
                            <tr>
                                <th width="400">@lang('services::videos.attributes.type')</th>
                                <td>
                                    {{ $video->type }}
                                </td>
                            </tr>
                            <tr>
                                <th width="400">@lang('services::videos.attributes.image')</th>
                                <td>
                                    <img src="{{ $video->getFirstMediaUrl('images') }}" class="mr-2 img-thumbnail"
                                        style="width: 140px; height: 110px;">
                                </td>
                            </tr>
                            <tr>
                                <th width="400">@lang('services::videos.attributes.video')</th>
                                <td class="d-flex justify-center">
                                    @if ($video->type == 'url')
                                        <iframe src="{{ $video->link }}" width="300" height="300" frameborder="0"></iframe>
                                    @else
                                        <video width="300" height="300" class="img-thumbnail" controls>
                                            <source src="{{ $video->link }}" type="video/mp4">
                                        </video>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    @slot('footer')
                        @include('services::videos.partials.actions.edit')
                        @include('services::videos.partials.actions.delete')
                    @endslot
                @endcomponent
            </div>
        </div>
    @endcomponent
@endsection
