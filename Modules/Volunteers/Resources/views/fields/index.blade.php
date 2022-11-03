@extends('dashboard::layouts.default')

@section('title')
    @lang('volunteers::fields.plural')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('volunteers::fields.plural'))
        @slot('breadcrumbs', ['dashboard.fields.index'])

        @include('volunteers::fields.partials.filter')

        @component('dashboard::layouts.components.table-box')
            @slot('title', trans('volunteers::fields.actions.list'))
            @slot('tools')
                @include('volunteers::fields.partials.actions.create')
            @endslot

            <thead>
                <tr>
                    <th>@lang('volunteers::fields.attributes.name')</th>
                    <th style="width: 160px">...</th>
                </tr>
            </thead>
            <tbody>
                @forelse($fields as $field)
                    <tr>
                        <td class="d-none d-md-table-cell">
                            {{ $field->name }}
                        </td>
                        <td style="width: 160px">
                            @include('volunteers::fields.partials.actions.show')
                            @include('volunteers::fields.partials.actions.edit')
                            @include('volunteers::fields.partials.actions.delete')
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100" class="text-center">@lang('volunteers::fields.empty')</td>
                    </tr>
                @endforelse

                @if ($fields->hasPages())
                    @slot('footer')
                        {{ $fields->links() }}
                    @endslot
                @endif
            @endcomponent
        @endcomponent
    @endsection
