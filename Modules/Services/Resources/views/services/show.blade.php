@extends('dashboard::layouts.default')

@section('title')
    {{ $service->name }}
@endsection
@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $service->name)
        @slot('breadcrumbs', ['dashboard.services.show', $service])

        <div class="row">
            <div class="col-md-12">
                @component('dashboard::layouts.components.box')
                    @slot('bodyClass', 'p-0')

                    <table class="table table-middle">
                        <tbody>
                        <tr>
                            <th width="200">@lang('services::services.attributes.name')</th>
                            <td>{{ $service->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('services::services.attributes.description')</th>
                            <td>{{ $service->description }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('services::services.attributes.image')</th>
                            <td>
                                <img src="{{ $service->getFirstMediaUrl('images') }}" class="mr-2 img-thumbnail" style="width: 140px; height: 110px;">
                            </td>
                        </tr>
                        <tr>
                            <th width="200">@lang('services::services.attributes.icon')</th>
                            <td>
                                <img src="{{ $service->getFirstMediaUrl('icons') }}" class="mr-2 img-thumbnail"style="width: 140px; height: 110px;">
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    @slot('footer')
                        @include('services::services.partials.actions.edit')
                        @include('services::services.partials.actions.delete')
                    @endslot
                @endcomponent
            </div>
        </div>

    @endcomponent

    @include('services::subservices.index')
@endsection
