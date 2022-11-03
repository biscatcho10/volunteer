@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ BsForm::text('name')->attribute(['data-parsley-maxlength' => '191','data-parsley-minlength' => '3']) }}

{{-- @isset($method)
    {{ BsForm::image('image')->collection('images')->files($method->getMediaResource('images'))->notes(trans('donations::methods.messages.images_note')) }}
@else
    {{ BsForm::image('image')->collection('images')->notes(trans('donations::methods.messages.images_note')) }}
@endisset

@include('dashboard::seo.inputs') --}}


<label>{{ __('donations::methods.attributes.image') }}</label>
@isset($method)
    @include('dashboard::layouts.apps.file', [
        'file' => $method->getFirstMediaUrl('images'),
        'name' => 'image'
    ])
@else
    @include('dashboard::layouts.apps.file', ['name' => 'image'])
@endisset
