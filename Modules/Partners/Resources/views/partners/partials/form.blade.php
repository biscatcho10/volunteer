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
    {{ BsForm::text('name')->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3']) }}
@endBsMultilangualFormTabs

{{ BsForm::text('link')->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3']) }}


<label>{{ __('partners::partners.attributes.image') }}</label>
@isset($partner)
    @include('dashboard::layouts.apps.file', [
        'file' => $partner->getImage(),
        'name' => 'image'
    ])
@else
    @include('dashboard::layouts.apps.file', ['name' => 'image'])
@endisset
