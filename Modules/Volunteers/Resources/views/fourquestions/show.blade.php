@extends('dashboard::layouts.default')

@section('title')
    {{ $question->name }}
@endsection
@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $question->name)
        @slot('breadcrumbs', ['dashboard.fourquestions.show', $question])

        <div class="row">
            <div class="col-md-12">
                @component('dashboard::layouts.components.box')
                    @slot('bodyClass', 'p-0')

                    <table class="table table-middle">
                        <tbody>
                            <tr>
                                <th width="200">@lang('volunteers::fourquestions.attributes.name')</th>
                                <td>{{ $question->name }}</td>
                            </tr>
                        </tbody>
                    </table>

                    @slot('footer')
                        @include('volunteers::fourquestions.partials.actions.edit')
                        @include('volunteers::fourquestions.partials.actions.delete')
                    @endslot
                @endcomponent
            </div>
        </div>

    @endcomponent
@endsection
