@extends('dashboard::layouts.default')

@section('title')
    {{ $volunteer->name }}
@endsection
@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $volunteer->name)
        @slot('breadcrumbs', ['dashboard.volunteers.show', $volunteer])

        <div class="row">
            <div class="col-md-12">
                @component('dashboard::layouts.components.box')
                    @slot('bodyClass', 'p-0')

                    <table class="table table-middle">
                        <tbody>
                            <tr>
                                <th width="200">@lang('volunteers::volunteers.attributes.name')</th>
                                <td>{{ $volunteer->name }}</td>
                            </tr>
                            <tr>
                                <th>@lang('volunteers::volunteers.attributes.email')</th>
                                <td>{{ $volunteer->email }}</td>
                            </tr>
                            <tr>
                                <th>@lang('volunteers::volunteers.attributes.phone')</th>
                                <td>{{ $volunteer->phone }}</td>
                            </tr>
                            <tr>
                                <th>@lang('volunteers::volunteers.attributes.address')</th>
                                <td>
                                    {{ $volunteer->address }}
                                </td>
                            </tr>
                            <tr>
                                <th>@lang('volunteers::volunteers.attributes.dob')</th>
                                <td>{{ Carbon\Carbon::parse($volunteer->dob)->format('d/m/Y') }}</td>
                            </tr>
                            <tr>
                                <th>@lang('volunteers::volunteers.attributes.job')</th>
                                <td>
                                    {{ $volunteer->job }}
                                </td>
                            </tr>
                            <tr>
                                <th>@lang('volunteers::volunteers.attributes.nationality')</th>
                                <td>{{ $volunteer->nationality }}</td>
                            </tr>
                            <tr>
                                <th>@lang('volunteers::volunteers.attributes.educational_qualification')</th>
                                <td>{{ $volunteer->educational_qualification }}</td>
                            </tr>

                        </tbody>
                    </table>

                    @slot('footer')
                        @include('volunteers::volunteers.partials.actions.edit')
                        @include('volunteers::volunteers.partials.actions.delete')
                    @endslot
                @endcomponent
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @component('dashboard::layouts.components.box')
                    @slot('bodyClass', 'p-0')
                    @slot('title', __('More information'))

                    <table class="table table-middle">
                        <tbody>
                            <tr>
                                <th width="200">@lang('volunteers::volunteers.attributes.how_know_id')</th>
                                <td>{{ $volunteer->how_know }}</td>
                            </tr>
                            <tr>
                                <th width="200">@lang('volunteers::volunteers.attributes.field_id')</th>
                                <td>{{ $volunteer->field }}</td>
                            </tr>
                            <tr>
                                <th width="200">@lang('volunteers::volunteers.attributes.skills')</th>
                                <td>{!! $volunteer->skills !!}</td>
                            </tr>
                            <tr>
                                <th width="200">@lang('volunteers::volunteers.attributes.experiences')</th>
                                <td>{!! $volunteer->experiences !!}</td>
                            </tr>
                            <tr>
                                <th width="200">@lang('volunteers::volunteers.attributes.motives')</th>
                                <td>{!! $volunteer->motives !!}</td>
                            </tr>
                            <tr>
                                <th width="200">@lang('volunteers::volunteers.attributes.favorite_time')</th>
                                <td>{!! $volunteer->favorite_time !!}</td>
                            </tr>
                            <tr>
                                <th width="200">@lang('volunteers::volunteers.attributes.has_car')</th>
                                <td>{{ $volunteer->has_car ? __('Yes') : __('No') }}</td>
                            </tr>
                            <tr>
                                <th width="200">@lang('volunteers::volunteers.attributes.volunteer_category')</th>
                                <td>{{ $volunteer->category }}</td>
                            </tr>

                        </tbody>
                    </table>
                @endcomponent
            </div>
        </div>
    @endcomponent
@endsection
