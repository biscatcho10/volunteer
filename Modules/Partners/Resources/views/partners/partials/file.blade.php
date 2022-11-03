
@isset($partner)
    <input type="file" name="image" class="dropify"  data-default-file="{{ $partner->getImage() }}" />
@else
    <input type="file" name="image" class="dropify" data-height="200" multiple/>
@endisset

@push('js')
    <script>
        $('.dropify').dropify();
    </script>
@endpush


{{-- @isset($partner)
    {{ BsForm::image('image')->collection('images')->files($partner->getMediaResource('images'))->notes(trans('partners::partners.attributes.image')) }}
@else
    {{ BsForm::image('image')->collection('images')->notes(trans('partners::partners.attributes.image')) }}
@endisset --}}
