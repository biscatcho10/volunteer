@extends('dashboard::layouts.default')

@section('title')
    @lang('Volunteer Questions')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('Volunteer Questions'))
        @slot('breadcrumbs', ['dashboard.settings.update'])

        {{ BsForm::resource('settings::settings')->put(route('dashboard.settings.update'), ['files' => true]) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('Volunteer Questions'))

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        {{ BsForm::text('volun_title_en')->value(Settings::get('volun_title_en'))->label(__('Volunteers Page Title (en)')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::text('volun_title_ar')->value(Settings::get('volun_title_ar'))->label(__('Volunteers Page Title (ar)')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        {{ BsForm::text('volun_form_title_en')->value(Settings::get('volun_form_title_en'))->label(__('Volunteers Page Form Title (en)')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::text('volun_form_title_ar')->value(Settings::get('volun_form_title_ar'))->label(__('Volunteers Page Form Title (ar)')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q1_en')->value(Settings::get('volun_q1_en'))->rows(3)->label(__('Volunteer Question 1 (en)')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q1_ar')->value(Settings::get('volun_q1_ar'))->rows(3)->label(__('Volunteer Question 1 (ar)')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q2_en')->value(Settings::get('volun_q2_en'))->rows(3)->label(__('Volunteer Question 2 (en)')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q2_ar')->value(Settings::get('volun_q2_ar'))->rows(3)->label(__('Volunteer Question 2 (ar)')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q3_en')->value(Settings::get('volun_q3_en'))->rows(3)->label(__('Volunteer Question 3 (en)')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q3_ar')->value(Settings::get('volun_q3_ar'))->rows(3)->label(__('Volunteer Question 3 (ar)')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q4_en')->value(Settings::get('volun_q4_en'))->rows(3)->label(__('Volunteer Question 4 (en)')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q4_ar')->value(Settings::get('volun_q4_ar'))->rows(3)->label(__('Volunteer Question 4 (ar)')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q5_en')->value(Settings::get('volun_q5_en'))->rows(3)->label(__('Volunteer Question 5 (en)')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q5_ar')->value(Settings::get('volun_q5_ar'))->rows(3)->label(__('Volunteer Question 5 (ar)')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q6_en')->value(Settings::get('volun_q6_en'))->rows(3)->label(__('Volunteer Question 6 (en)')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q6_ar')->value(Settings::get('volun_q6_ar'))->rows(3)->label(__('Volunteer Question 6 (ar)')) }}
                    </div>
                </div>

                {{-- <div class="row">
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q7_en')->value(Settings::get('volun_q7_en'))->rows(3)->label(__('Volunteer Question 7 (en)')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q7_ar')->value(Settings::get('volun_q7_ar'))->rows(3)->label(__('Volunteer Question 7 (ar)')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q8_en')->value(Settings::get('volun_q8_en'))->rows(3)->label(__('Volunteer Question 8 (en)')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::textarea('volun_q8_ar')->value(Settings::get('volun_q8_ar'))->rows(3)->label(__('Volunteer Question 8 (ar)')) }}
                    </div>
                </div> --}}

            </div>

            {{ BsForm::submit()->label(trans('settings::settings.actions.save'))->attribute('class', 'btn btn-danger mb-2') }}
        @endcomponent
        {{ BsForm::close() }}
    @endcomponent
@endsection
