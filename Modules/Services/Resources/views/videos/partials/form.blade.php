@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<div class="row">

    <div class="col-12">
        {{-- @isset($video)
            {{ BsForm::image('image')->collection('images')->files($video->getMediaResource('images'))->label(trans('settings::settings.attributes.vidImage')) }}
        @else
            {{ BsForm::image('image')->collection('images')->label(trans('settings::settings.attributes.vidImage')) }}
        @endisset --}}

        <label>{{ __('services::videos.attributes.image') }}</label>
        @isset($video)
            @include('dashboard::layouts.apps.file1', [
                'file' => $video->getImage(),
                'name' => 'image',
            ])
        @else
            @include('dashboard::layouts.apps.file1', ['name' => 'image'])
        @endisset
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">{{ __('settings::settings.attributes.video_type') }}</label>
            <select class="form-control video_type" name="type" id="video_type">
                <option>{{ __('Select one') }}</option>
                <option value="upload"
                    @isset($video) {{ $video->type === 'upload' ? 'selected' : '' }} @endisset>
                    {{ __('Upload') }}</option>
                <option value="url"
                    @isset($video) {{ $video->type === 'url' ? 'selected' : '' }} @endisset>
                    {{ __('Link') }}</option>
            </select>
        </div>
    </div>

    <div class="col-12">
        @isset($video)
            <div @if ($video->type == 'upload') style="display: none" @endif class="link-wrapper hide_div">
                {{ BsForm::text('url')->attribute('class', 'form-control')->label(__('settings::settings.attributes.video_link'))->attribute('id', 'url-link')->attribute('placeholder', 'www.example.com')->attribute('data-parsley-type', 'url')->attribute('data-parsley-type-message', __('input data must be url'))->attribute('data-parsley-trigger', 'keyup')->attribute('data-parsley-required-message', __('link is required'))->value($video->video_link)->note(__('link must be embed')) }}
            </div>

            <div @if ($video->type == 'url') style="display: none" @endif class="upload-wrapper hide_div">
                <div class="form-group">
                    <label for="category-image ml-5 mt-2">{{ __('settings::settings.attributes.video') }}</label>
                    {{-- <file-uploader :unlimited="false" collection="videos"
                        :media="{{ $video->getMediaResource('videos') }}" :tokens="{{ json_encode(old('media', [])) }}"
                        notes="Supported types: flv, mp4,wmv,avi | Max File Size:25MB"
                        accept="video/x-flv,video/mp4,video/x-ms-wmv,video/avi">
                    </file-uploader> --}}

                    @include('dashboard::layouts.apps.video', [
                        'file' => $video->getFirstMediaUrl('videos'),
                        'name' => 'video',
                    ])

                </div>
            </div>
        @else
            <div style="display: none" class="link-wrapper hide_div">
                {{ BsForm::text('url')->attribute('class', 'form-control')->label(__('settings::settings.attributes.video_link'))->attribute('id', 'url-link')->attribute('placeholder', 'https://www.example.com')->attribute('data-parsley-type', 'url')->attribute('data-parsley-type-message', __('input data must be url'))->attribute('data-parsley-trigger', 'keyup')->attribute('data-parsley-required-message', __('link is required'))->note(__('link must be embed')) }}
            </div>

            <div style="display: none" class="upload-wrapper hide_div">
                <div class="form-group">
                    <label for="category-image ml-5 mt-2">{{ __('settings::settings.attributes.video') }}</label>
                    {{-- <file-uploader :unlimited="false" collection="videos" :tokens="{{ json_encode(old('media', [])) }}"
                        accept="video/x-flv,video/mp4,video/x-ms-wmv,video/avi"></file-uploader> --}}

                    @include('dashboard::layouts.apps.video', ['name' => 'video'])


                </div>
            </div>
        @endisset
    </div>
</div>




@push('js')
    <script>
        $(".video_type").on('change', function() {
            if ($(this).val() === 'url') {
                $(".link-wrapper").show();
                $(".upload-wrapper").hide();
                $("#url-link").attr("data-parsley-required", true);
            } else if ($(this).val() === 'upload') {
                $(".link-wrapper").hide();
                $(".upload-wrapper").show();
                $("#url-link").attr("data-parsley-required", false);
            } else {
                $(".link-wrapper").hide();
                $(".upload-wrapper").hide();
                $("#url-link").attr("data-parsley-required", false);
            }
        });

        if ($('.video_type').val() == "url" || $('.video_type').val() == "upload") {
            let $selected = $('.video_type').val();
            $('.' + $selected + '-wrapper').show().siblings("div.hide_div").hide();
        }
    </script>
@endpush
