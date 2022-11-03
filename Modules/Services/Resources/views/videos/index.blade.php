@component('dashboard::layouts.components.table-box')
        @slot('title', trans('services::videos.actions.list'))
        @slot('tools')
            @include('services::videos.partials.actions.create')
        @endslot

        <thead>
            <tr>
                <th>@lang('services::videos.attributes.type')</th>
                <th>@lang('services::videos.attributes.image')</th>
                <th style="width: 160px">...</th>
            </tr>
        </thead>
        <tbody>
            @forelse($videos as $video)
                <tr>
                    <td>
                        {{ $video->type }}
                    </td>
                    <td class="d-none d-md-table-cell">
                        <img src="{{ $video->getImage() }}" class="img-circle img-size-64 mr-2">
                    </td>

                    <td style="width: 160px">
                        @include('services::videos.partials.actions.show')
                        @include('services::videos.partials.actions.edit')
                        @include('services::videos.partials.actions.delete')
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100" class="text-center">@lang('services::videos.empty')</td>
                </tr>
            @endforelse

            @if ($videos->hasPages())
                @slot('footer')
                    {{ $videos->links() }}
                @endslot
            @endif
    @endcomponent
