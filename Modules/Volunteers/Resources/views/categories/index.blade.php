@extends('dashboard::layouts.default')

@section('title')
    @lang('volunteers::categories.plural')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('volunteers::categories.plural'))
        @slot('breadcrumbs', ['dashboard.categories.index'])

        @include('volunteers::categories.partials.filter')

        @component('dashboard::layouts.components.table-box')
            @slot('title', trans('volunteers::categories.actions.list'))
            @slot('tools')
                @include('volunteers::categories.partials.actions.create')
            @endslot

            <thead>
                <tr>
                    <th>@lang('volunteers::categories.attributes.name')</th>
                    <th style="width: 160px">...</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td class="d-none d-md-table-cell">
                            {{ $category->name }}
                        </td>
                        <td style="width: 160px">
                            @include('volunteers::categories.partials.actions.show')
                            @include('volunteers::categories.partials.actions.edit')
                            @include('volunteers::categories.partials.actions.delete')
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100" class="text-center">@lang('volunteers::categories.empty')</td>
                    </tr>
                @endforelse

                @if ($categories->hasPages())
                    @slot('footer')
                        {{ $categories->links() }}
                    @endslot
                @endif
            @endcomponent
        @endcomponent
    @endsection
