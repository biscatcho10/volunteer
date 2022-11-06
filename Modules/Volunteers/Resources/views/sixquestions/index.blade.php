@extends('dashboard::layouts.default')

@section('title')
    @lang('volunteers::sixquestions.plural')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('volunteers::sixquestions.plural'))
        @slot('breadcrumbs', ['dashboard.sixquestions.index'])

        @include('volunteers::sixquestions.partials.filter')

        @component('dashboard::layouts.components.table-box')
            @slot('title', trans('volunteers::sixquestions.actions.list'))
            @slot('tools')
                @include('volunteers::sixquestions.partials.actions.create')
            @endslot

            <thead>
                <tr>
                    <th>@lang('volunteers::sixquestions.attributes.name')</th>
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
                            @include('volunteers::sixquestions.partials.actions.show')
                            @include('volunteers::sixquestions.partials.actions.edit')
                            @include('volunteers::sixquestions.partials.actions.delete')
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100" class="text-center">@lang('volunteers::sixquestions.empty')</td>
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
