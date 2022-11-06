@extends('dashboard::layouts.default')

@section('title')
    @lang('volunteers::fivequestions.plural')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('volunteers::fivequestions.plural'))
        @slot('breadcrumbs', ['dashboard.fivequestions.index'])

        @include('volunteers::fivequestions.partials.filter')

        @component('dashboard::layouts.components.table-box')
            @slot('title', trans('volunteers::fivequestions.actions.list'))
            @slot('tools')
                @include('volunteers::fivequestions.partials.actions.create')
            @endslot

            <thead>
                <tr>
                    <th>@lang('volunteers::fivequestions.attributes.name')</th>
                    <th style="width: 160px">...</th>
                </tr>
            </thead>
            <tbody>
                @forelse($questions as $question)
                    <tr>
                        <td class="d-none d-md-table-cell">
                            {{ $question->name }}
                        </td>
                        <td style="width: 160px">
                            @include('volunteers::fivequestions.partials.actions.show')
                            @include('volunteers::fivequestions.partials.actions.edit')
                            @include('volunteers::fivequestions.partials.actions.delete')
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100" class="text-center">@lang('volunteers::fivequestions.empty')</td>
                    </tr>
                @endforelse

                @if ($questions->hasPages())
                    @slot('footer')
                        {{ $questions->links() }}
                    @endslot
                @endif
            @endcomponent
        @endcomponent
    @endsection
