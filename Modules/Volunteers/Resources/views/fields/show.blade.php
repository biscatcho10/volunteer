@extends('dashboard::layouts.default')

@section('title')
    {{ $field->name }}
@endsection
@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $field->name)
        @slot('breadcrumbs', ['dashboard.fields.show', $field])

        <div class="row">
            <div class="col-md-12">
                @component('dashboard::layouts.components.box')
                    @slot('bodyClass', 'p-0')

                    <table class="table table-middle">
                        <tbody>
                            <tr>
                                <th width="200">@lang('volunteers::fields.attributes.name')</th>
                                <td>{{ $field->name }}</td>
                            </tr>
                        </tbody>
                    </table>

                    @slot('footer')
                        @include('volunteers::fields.partials.actions.edit')
                        @include('volunteers::fields.partials.actions.delete')
                    @endslot
                @endcomponent
            </div>
        </div>

    @endcomponent
@endsection
