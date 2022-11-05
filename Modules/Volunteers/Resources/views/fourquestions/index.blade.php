@extends('dashboard::layouts.default')

@section('title')
    @lang('volunteers::fourquestions.plural')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('volunteers::fourquestions.plural'))
        @slot('breadcrumbs', ['dashboard.fourquestions.index'])

        @include('volunteers::fourquestions.partials.filter')

        @component('dashboard::layouts.components.table-box')
            @slot('title', trans('volunteers::fourquestions.actions.list'))
            @slot('tools')
                @include('volunteers::fourquestions.partials.actions.create')
            @endslot

            <thead>
                <tr>
                    <th>@lang('volunteers::fourquestions.attributes.name')</th>
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
                            @include('volunteers::fourquestions.partials.actions.show')
                            @include('volunteers::fourquestions.partials.actions.edit')
                            @include('volunteers::fourquestions.partials.actions.delete')
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100" class="text-center">@lang('volunteers::fourquestions.empty')</td>
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
