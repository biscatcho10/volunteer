@extends('dashboard::layouts.default')

@section('title')
    @lang('reports::reports.plural')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('reports::reports.plural'))
        @slot('breadcrumbs', ['dashboard.reports.index'])

        @include('reports::reports.partials.filter')

        @component('dashboard::layouts.components.table-box')
            @slot('title', trans('reports::reports.actions.list'))
            @slot('tools')
                @include('reports::reports.partials.actions.create')
            @endslot

            <thead>
                <tr>
                    <th>@lang('reports::reports.attributes.name')</th>
                    <th>@lang('reports::reports.attributes.description')</th>
                    <th style="width: 160px">...</th>
                </tr>
            </thead>
            <tbody>
                @forelse($reports as $report)
                    <tr>
                        <td class="d-none d-md-table-cell">
                            {{ $report->name }}
                        </td>
                        <td class="d-none d-md-table-cell">
                            {{ Str::limit($report->description, 70) }}
                        </td>

                        <td style="width: 160px">
                            @include('reports::reports.partials.actions.show')
                            @include('reports::reports.partials.actions.edit')
                            @include('reports::reports.partials.actions.delete')
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100" class="text-center">@lang('reports::reports.empty')</td>
                    </tr>
                @endforelse

                @if ($reports->hasPages())
                    @slot('footer')
                        {{ $reports->links() }}
                    @endslot
                @endif
            @endcomponent
        @endcomponent
    @endsection
