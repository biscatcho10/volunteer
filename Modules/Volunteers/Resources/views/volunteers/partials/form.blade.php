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
    <div class="col-6">
        {{ BsForm::text('name')->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3'])->label(trans('volunteers::volunteers.attributes.name')) }}
    </div>
    <div class="col-6">
        {{ BsForm::email('email')->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3'])->label(trans('volunteers::volunteers.attributes.email')) }}
    </div>

    <div class="col-6">
        {{ BsForm::text('phone')->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3'])->label(trans('volunteers::volunteers.attributes.phone')) }}
    </div>

    <div class="col-6">
        {{ BsForm::text('nationality')->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3'])->label(trans('volunteers::volunteers.attributes.nationality')) }}
    </div>

    <div class="col-12">
        {{ BsForm::text('address')->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3'])->label(trans('volunteers::volunteers.attributes.address')) }}
    </div>
</div>

<div class="row">
    <div class="col-6">
        {{ BsForm::date('dob')->label(trans('volunteers::volunteers.attributes.dob')) }}
    </div>

    <div class="col-6">
        {{ BsForm::text('educational_qualification')->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3'])->label(trans('volunteers::volunteers.attributes.educational_qualification')) }}
    </div>

    <div class="col-6">
        {{ BsForm::text('job')->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3'])->label(trans('volunteers::volunteers.attributes.job')) }}
    </div>

    <div class="col-6">
        {{-- <select2 name="how_know_id" id="how_know"  label="{{ __('volunteers::volunteers.attributes.how_know_id') }}"
            remote-url="{{ route('reasons.select') }}"
            @isset($volunteer) value="{{ $volunteer->how_know_id ?? old('how_know_id') }}" @endisset
            :required="true">
        </select2> --}}

        <label>{{ __('volunteers::volunteers.attributes.how_know_id') }}</label>

        <select name="how_know_id[]" class="form-control selectpicker" data-live-search="true" data-actions-box="true"
            multiple>
            @foreach ($reasons as $id => $name)
                <option value="{{ $id }}"
                    {{ isset($volunteer) && in_array($id, $volunteer->reasons->pluck('id')->toArray()) ? 'selected' : '' }}>
                    {{ $name }}
                </option>
            @endforeach
        </select>

    </div>

    <div class="col-12">
        {{-- <select2 name="field_id" id="field" label="{{ __('volunteers::volunteers.attributes.field_id') }}"
            remote-url="{{ route('fields.select') }}"
            @isset($volunteer) value="{{ $volunteer->field_id ?? old('field_id') }}" @endisset
            :required="true">
        </select2> --}}
        {{--
        {{ BsForm::select('field_id')
        ->attribute('class', 'custom-select')
        ->placeholder(__('volunteers::volunteers.select_field'))
        ->options($fields)->attribute('id', 'field')->label(__('volunteers::volunteers.attributes.field_id')) }} --}}


        <label>{{ __('volunteers::volunteers.attributes.field_id') }}</label>

        <select name="field_id[]" id="field" class="form-control selectpicker" data-live-search="true"
            data-actions-box="true" multiple>
            @foreach ($fields as $id => $name)
                <option value="{{ $id }}"
                    {{ isset($volunteer) && in_array($id, $volunteer->fields->pluck('id')->toArray()) ? 'selected' : '' }}>
                    {{ $name }}
                </option>
            @endforeach
        </select>

    </div>

    <div class="col-12 other_sector"
        @isset($volunteer)
        @if ($volunteer->field_id == 1)
            style="display: block;"
        @else
            style="display: none;"
        @endif
    @else
        style="display: none"
    @endisset>
        {{ BsForm::text('other_sector')->attribute('class', 'form-control')->attribute(['data-parsley-minlength' => '3'])->label(__('volunteers::volunteers.attributes.other_sector')) }}
    </div>
</div>

<hr>

{{ BsForm::textarea('skills')->rows(3)->attribute('class', 'form-control textarea')->attribute(['data-parsley-minlength' => '3'])->label(__('volunteers::volunteers.attributes.skills')) }}

{{ BsForm::textarea('experiences')->rows(3)->attribute('class', 'form-control textarea')->attribute(['data-parsley-minlength' => '3'])->label(__('volunteers::volunteers.attributes.experiences')) }}

{{ BsForm::textarea('motives')->rows(3)->attribute('class', 'form-control textarea')->attribute(['data-parsley-minlength' => '3'])->label(__('volunteers::volunteers.attributes.motives')) }}

{{ BsForm::textarea('favorite_time')->rows(3)->attribute('class', 'form-control textarea')->attribute(['data-parsley-minlength' => '3'])->label(__('volunteers::volunteers.attributes.favorite_time')) }}

<div class="row">
    <div class="col-6">
        {{ BsForm::checkbox('has_car')->label(__('volunteers::volunteers.attributes.has_car'))->value(1)->checked(isset($volunteer) ? $volunteer->has_car : old('has_car')) }}
    </div>
</div>

<div class="row">
    {{-- <div class="col-12">
        {{ BsForm::select('volunteer_category')
        ->attribute('class', 'custom-select')
        ->placeholder(__('volunteers::volunteers.select_volunteer_category'))
        ->options($categories)->attribute('id', 'v_category')->label(__('volunteers::volunteers.attributes.volunteer_category')) }}
    </div> --}}

    <div class="col-12">
        <label>{{ __('volunteers::volunteers.attributes.volunteer_category') }}</label>

        <select name="volunteer_category[]" id="v_category" class="form-control selectpicker" data-live-search="true"
            data-actions-box="true" multiple>
            @foreach ($categories as $id => $name)
                <option value="{{ $id }}"
                    {{ isset($volunteer) && in_array($id, $volunteer->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                    {{ $name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-12 category_exp"
        @isset($volunteer)
            @if (in_array(1, $volunteer->categories->pluck('id')->toArray()))
                style="display: block;"
            @else
                style="display: none;"
            @endif
        @else
            style="display: none"
        @endisset>
        {{ BsForm::textarea('category_exp')->rows(3)->attribute('class', 'form-control')->attribute(['data-parsley-minlength' => '3'])->label(__('volunteers::volunteers.attributes.category_exp')) }}
    </div>



    <div class="col-12">
        <label>{{ __('Question Four') }}</label>

        <select name="question_four[]" id="q4_select" class="form-control selectpicker" data-live-search="true"
            data-actions-box="true" multiple>
            @foreach ($questionFour as $id => $name)
                <option value="{{ $id }}"
                    {{ isset($volunteer) && in_array($id, $volunteer->question_four->pluck('id')->toArray()) ? 'selected' : '' }}>
                    {{ $name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-12 question_four_exp"
        @isset($volunteer)
            @if (in_array(1, $volunteer->question_four->pluck('id')->toArray()))
                style="display: block;"
            @else
                style="display: none;"
            @endif
        @else
            style="display: none"
        @endisset>
        {{ BsForm::textarea('question4_exp')->rows(3)->attribute('class', 'form-control')->attribute(['data-parsley-minlength' => '3'])->label(__('volunteers::volunteers.attributes.category_exp'))->note(__('Question four explanation')) }}
    </div>



    <div class="col-12">
        <label>{{ __('Question Five') }}</label>

        <select name="question_five[]" id="q5_select" class="form-control selectpicker" data-live-search="true"
            data-actions-box="true" multiple>
            @foreach ($questionFive as $id => $name)
                <option value="{{ $id }}"
                    {{ isset($volunteer) && in_array($id, $volunteer->question_five->pluck('id')->toArray()) ? 'selected' : '' }}>
                    {{ $name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-12 question_five_exp"
        @isset($volunteer)
            @if (in_array(1, $volunteer->question_five->pluck('id')->toArray()))
                style="display: block;"
            @else
                style="display: none;"
            @endif
        @else
            style="display: none"
        @endisset>
        {{ BsForm::textarea('question5_exp')->rows(3)->attribute('class', 'form-control')->attribute(['data-parsley-minlength' => '3'])->label(__('volunteers::volunteers.attributes.category_exp'))->note(__('Question five explanation'))  }}
    </div>



    <div class="col-12">
        <label>{{ __('Question Six') }}</label>

        <select name="question_six[]" id="q6_select" class="form-control selectpicker" data-live-search="true"
            data-actions-box="true" multiple>
            @foreach ($questionSix as $id => $name)
                <option value="{{ $id }}"
                    {{ isset($volunteer) && in_array($id, $volunteer->question_six->pluck('id')->toArray()) ? 'selected' : '' }}>
                    {{ $name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-12 question_six_exp"
        @isset($volunteer)
            @if (in_array(1, $volunteer->question_six->pluck('id')->toArray()))
                style="display: block;"
            @else
                style="display: none;"
            @endif
        @else
            style="display: none"
        @endisset>
        {{ BsForm::textarea('question6_exp')->rows(3)->attribute('class', 'form-control')->attribute(['data-parsley-minlength' => '3'])->label(__('volunteers::volunteers.attributes.category_exp'))->note(__('Question six explanation'))  }}
    </div>


</div>


@push('js')
    <script>
        $(document).ready(function() {
            $('#v_category').on('change', function() {
                if ($(this).val() == 1) {
                    $('.category_exp').show();
                } else {
                    $('.category_exp').hide();
                }
            });

            $('#q4_select').on('change', function() {
                if ($(this).val() == 1) {
                    $('.question_four_exp').show();
                } else {
                    $('.question_four_exp').hide();
                }
            });

            $('#q5_select').on('change', function() {
                if ($(this).val() == 1) {
                    $('.question_five_exp').show();
                } else {
                    $('.question_five_exp').hide();
                }
            });

            $('#q6_select').on('change', function() {
                if ($(this).val() == 1) {
                    $('.question_six_exp').show();
                } else {
                    $('.question_six_exp').hide();
                }
            });

            $('#field').on('change', function() {
                console.log($(this).val());
                if ($(this).val() == 1) {
                    $('.other_sector').show();
                } else {
                    $('.other_sector').hide();
                }
            });
        });
    </script>
@endpush
