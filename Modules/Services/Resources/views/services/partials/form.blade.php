@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@bsMultilangualFormTabs
    {{ BsForm::text('name')->required()->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3']) }}
    {{ BsForm::textarea('description')->rows('3') }}
@endBsMultilangualFormTabs

{{-- @isset($service)
    <div class="row">
        <div class="col-6">
            {{ BsForm::image('image')->collection('images')->files($service->getMediaResource('images'))->notes(trans('services::services.messages.images_note')) }}

        </div>
        <div class="col-6">
            {{ BsForm::image('icon')->collection('icons')->files($service->getMediaResource('icons'))->notes(trans('services::services.messages.images_note'))->attribute(trans('services::services.attributes.icon')) }}

        </div>
    </div>
@else
    <div class="row">
        <div class="col-6">
            {{ BsForm::image('image')->collection('images')->notes(trans('services::services.messages.images_note')) }}

        </div>
        <div class="col-6">
            {{ BsForm::image('icon')->collection('icons')->notes(trans('services::services.messages.images_note'))->attribute(trans('services::services.attributes.icon')) }}

        </div>
    </div>
@endisset --}}


<div class="row">
    <div class="col-6">
        <label>{{ __('services::services.attributes.image') }}</label>
        @isset($service)
            @include('dashboard::layouts.apps.file1', [
                'file' => $service->getImage(),
                'name' => 'image',
            ])
        @else
            @include('dashboard::layouts.apps.file1', ['name' => 'image'])
        @endisset
    </div>

    <div class="col-6">
        <label>{{ __('services::services.attributes.icon') }}</label>
        @isset($service)
            @include('dashboard::layouts.apps.file1', [
                'file' => $service->getIcon(),
                'name' => 'icon',
            ])
        @else
            @include('dashboard::layouts.apps.file1', ['name' => 'icon'])
        @endisset
    </div>
</div>

@include('dashboard::seo.inputs')
