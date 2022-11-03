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

{{-- <div class="my-3">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="direction" value="1" @isset($report) {{ $report->direction == 1 ? 'checked' : '' }} @endisset id="direction1">
        <label class="form-check-label" for="direction1">
            {{ __('RTL') }}
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="direction" value="0" @isset($report) {{ $report->direction == 0 ? 'checked' : '' }} @endisset id="direction2">
        <label class="form-check-label" for="direction2">
            {{ __('LTR') }}
        </label>
    </div>
</div> --}}

<div class="row">
        @isset($report)
            <div class="col-6">
                {{-- {{ BsForm::media('file')->accept('application/pdf')->collection('files')->files($report->getMediaResource('files'))->notes(trans('reports::reports.messages.files_note')) }} --}}
                <label>{{ __('reports::reports.attributes.ar_file') }}</label>
                <input type="file" name="ar_file" class="dropify" data-default-file="{{ $report->getArFile() }}"
                    data-allowed-file-extensions="pdf" />

            </div>
            <div class="col-6">
                <label>{{ __('reports::reports.attributes.en_file') }}</label>
                <input type="file" name="en_file" class="dropify" data-default-file="{{ $report->getEnFile() }}"
                    data-allowed-file-extensions="pdf" />
            </div>
        @else
            <div class="col-6">
                {{-- {{ BsForm::media('file')->accept('application/pdf')->collection('files')->notes(trans('reports::reports.messages.files_note')) }} --}}
                <label>{{ __('reports::reports.attributes.ar_file') }}</label>
                <input type="file" name="ar_file" class="dropify" data-allowed-file-extensions="pdf" />
            </div>
            <div class="col-6">
                {{-- {{ BsForm::media('file')->accept('application/pdf')->collection('files')->notes(trans('reports::reports.messages.files_note')) }} --}}
                <label>{{ __('reports::reports.attributes.en_file') }}</label>
                <input type="file" name="en_file" class="dropify" data-allowed-file-extensions="pdf" />
            </div>
        @endisset
</div>

<div class="row">
    <div class="col-12">
        <label>{{ __('reports::reports.attributes.image') }}</label>
        @isset($report)
            @include('dashboard::layouts.apps.file1', [
                'file' => $report->getImage(),
                'name' => 'image',
            ])
        @else
            @include('dashboard::layouts.apps.file1', ['name' => 'image'])
        @endisset
    </div>
</div>
