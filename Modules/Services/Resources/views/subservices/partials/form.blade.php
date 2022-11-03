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
    {{ BsForm::textarea('description')->rows('3')->attribute('class', 'form-control textarea') }}
@endBsMultilangualFormTabs

{{-- @isset($subservice)
    <div class="form-group col-6">
        {{ BsForm::image('image')->unlimited(false)->collection('images')->files($subservice->getMediaResource('images'))->notes(trans('services::galleries.messages.images_note')) }}
    </div>
@else
    <div class="form-group col-6">
        {{ BsForm::image('image')->unlimited(false)->collection('images')->notes('Supported types: jpeg, png,jpg,gif,svg | max: 10 Mb') }}
    </div>
@endisset --}}


<label>{{ __('services::subservices.attributes.image') }}</label>
@isset($subservice)
    @include('dashboard::layouts.apps.multi', ['name' => 'images[]', 'images' => $subservice->images])
@else
    @include('dashboard::layouts.apps.multi', ['name' => 'images[]'])
@endisset


@include('dashboard::seo.inputs')
