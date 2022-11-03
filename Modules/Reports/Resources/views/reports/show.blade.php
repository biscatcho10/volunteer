@extends('dashboard::layouts.default')

@section('title')
    {{ $report->name }}
@endsection
@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $report->name)
        @slot('breadcrumbs', ['dashboard.reports.show', $report])

        <div class="row">
            <div class="col-md-12">
                @component('dashboard::layouts.components.box')
                    @slot('bodyClass', 'p-0')

                    <table class="table table-middle">
                        <tbody>
                            <tr>
                                <th width="200">@lang('reports::reports.attributes.name')</th>
                                <td>{{ $report->name }}</td>
                            </tr>
                            <tr>
                                <th>@lang('reports::reports.attributes.description')</th>
                                <td>{{ $report->description }}</td>
                            </tr>
                            <tr>
                                <th>@lang('reports::reports.attributes.downloads')</th>
                                <td>{{ $report->downloads }}</td>
                            </tr>
                            <tr>
                                <th>@lang('reports::reports.attributes.views')</th>
                                <td>{{ $report->views }}</td>
                            </tr>
                            <tr>
                                <th>@lang('reports::reports.attributes.image')</th>
                                <td>
                                    <img src="{{ $report->getImage() }}" width="300" height="150" alt="" />
                                </td>
                            </tr>
                            @if ($report->getFirstMediaUrl('en_files') != '')
                                <tr>
                                    <th>
                                        @lang('reports::reports.attributes.en_file')</th>
                                    <td>
                                        <iframe src="{{ asset('/laraview/#..' . $report->getFirstMediaUrl('en_files')) }}"
                                            width="300" height="200px"></iframe>
                                    </td>
                                </tr>
                            @endif
                            @if ($report->getFirstMediaUrl('ar_files') != '')
                                <tr>
                                    <th>
                                        @lang('reports::reports.attributes.ar_file')</th>
                                    <td>
                                        <iframe src="{{ asset('/laraview/#..' . $report->getFirstMediaUrl('ar_files')) }}"
                                            width="300" height="200px"></iframe>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    @slot('footer')
                        @include('reports::reports.partials.actions.edit')
                        @include('reports::reports.partials.actions.delete')
                    @endslot
                @endcomponent
            </div>
        </div>
    @endcomponent
@endsection
