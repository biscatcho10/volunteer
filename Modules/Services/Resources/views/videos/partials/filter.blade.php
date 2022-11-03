{{ BsForm::resource('services::videos')->get(url()->current()) }}
@component('dashboard::layouts.components.accordion')
    @slot('title', trans('services::videos.actions.filter'))

    <div class="row">
        <div class="col-md-3">
            {{ BsForm::select('type')->options([
                    'url' => __('URL'),
                    'upload' => __('Upload'),
                ])->label(__('services::videos.attributes.type'))->placeholder(__('Select the type')) }}
        </div>
        <div class="col-md-3">
            {{ BsForm::number('perPage')->value(request('perPage', 15))->min(1)->label(trans('services::videos.perPage')) }}
        </div>
    </div>

    @slot('footer')
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fas fa fa-fw fa-filter"></i>
            @lang('services::videos.actions.filter')
        </button>
    @endslot
@endcomponent
{{ BsForm::close() }}
