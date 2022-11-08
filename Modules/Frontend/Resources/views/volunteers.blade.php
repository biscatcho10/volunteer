<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ site_name() }} | {{ __('Volunteers') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ app_favicon() }}">

    <!-- SEO data  -->
    @include('frontend::includes.seo', ['page' => 'volunteers'])
    <!-- /SEO data  -->

    {{-- @notifyCss --}}
    <!-- styles -->
    @include('frontend::includes.styles', ['page' => 'volunteers'])
    <!-- end styles -->

</head>

<body dirPage='{{ $ar }}'>
    @include('notify::components.notify')

    <!-- header -->
    @include('frontend::includes.header')
    <!-- / header -->

    <!-- hero container section  -->
    <div class="hero_container">
        <div class="container">
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt=""
                class="left_img img_sec_video">
            <div class="row frist_row">
                <!-- sec volunteer  -->
                <section id="volunteer">
                    <div class="my_text_left">
                        <h2>
                            {{ Settings::get('volun_title_' . $lang) ?? 'Your volunteering experience start here' }}
                        </h2>
                        <span>
                            {{ Settings::get('volun_form_title_' . $lang) ?? 'Personal Account' }}
                        </span>
                    </div>
                    <!-- start form  -->
                    <form action="{{ route('volunteers.store') }}" method="POST" class="mt-3">
                        @csrf
                        <!-- all input top -->
                        <div class="app_all_input ">
                            <div class="form-grope">
                                <label for="name">{{ __('Your name') }}</label>
                                <input type="text" name="name" id="name" placeholder="{{ __('your name') }}">
                            </div>
                            <div class="form-grope">
                                <label for="educational_qualification">{{ __('Your Educational') }}</label>
                                <input type="text" name="educational_qualification" id="educational_qualification"
                                    placeholder="{{ __('your educational') }}">
                            </div>
                            <div class="form-grope">
                                <label for="dob">{{ __('Your Birthday') }}</label>
                                <input type="date" name="dob" id="dob"
                                    placeholder="{{ __('your birthday') }}" requiredes="true">
                            </div>
                            <div class="form-grope">
                                <label for="job">{{ __('Current job') }}</label>
                                <input type="text" name="job" id="job" placeholder="{{ __('your job') }}">
                            </div>
                            <div class="form-grope">
                                <label for="nationality">{{ __('Your Nationality') }}</label>
                                <input type="text" name="nationality" id="nationality"
                                    placeholder="{{ __('your nationality') }}">
                            </div>
                            <div class="form-grope">
                                <label for="address">{{ __('Your Address') }}</label>
                                <input type="text" name="address" id="address"
                                    placeholder="{{ __('your address') }}">
                            </div>
                            <div class="form-grope">
                                <label for="phone">{{ __('Your CellPhone') }}</label>
                                <input type="tel" name="phone" id="phone"
                                    placeholder="{{ __('your cellPhone') }}">
                            </div>
                            <div class="form-grope">
                                <label for="email">{{ __('Your E-Mail') }}</label>
                                <input type="email" name="email" id="email"
                                    placeholder="{{ __('your e-mail') }}" emailRequired="true">
                            </div>
                        </div>
                        <!-- / all input top -->

                        <!-- start all input questions -->
                        <div id="questions">
                            <!-- singl question text -->
                            {{-- <div class="singl_question singl_question_text">
                                <h5>
                                    @if (Settings::get('volun_q1_' . $lang))
                                        {{ Settings::get('volun_q1_' . $lang) }}
                                    @else
                                        Mention your top skills, interests and hobbies you can utilize through
                                        volunteering
                                    @endif
                                </h5>
                                <div class="input_">
                                    <label for="">1.</label>
                                    <input type="text" name="skills[]" class="show_input" requiredes="true">
                                </div>
                                <div class="input_">
                                    <label for="">2.</label>
                                    <input type="text" name="skills[]">
                                </div>
                                <div class="input_">
                                    <label for="">3.</label>
                                    <input type="text" name="skills[]">
                                </div>
                                <div class="input_">
                                    <label for="">4.</label>
                                    <input type="text" name="skills[]">
                                </div>
                            </div> --}}
                            <!-- singl question text -->
                            {{-- <div class="singl_question singl_question_text">
                                <h5>
                                    @if (Settings::get('volun_q2_' . $lang))
                                        {{ Settings::get('volun_q2_' . $lang) }}
                                    @else
                                        Mention your past experiences in volunteer work, including
                                        (type of volunteering / name of volunteering place / volunteer period)
                                    @endif
                                </h5>
                                <div class="input_">
                                    <label for="">1.</label>
                                    <input type="text" name="experiences[]" class="show_input">
                                </div>
                                <div class="input_">
                                    <label for="">2.</label>
                                    <input type="text" name="experiences[]">
                                </div>
                                <div class="input_">
                                    <label for="">3.</label>
                                    <input type="text" name="experiences[]">
                                </div>
                                <div class="input_">
                                    <label for="">4.</label>
                                    <input type="text" name="experiences[]">
                                </div>
                            </div> --}}
                            <!-- singl question checkbox -->
                            <div class="singl_question question_checkbox" requiredQuestion>
                                <h5>
                                    @if (Settings::get('volun_q1_' . $lang))
                                        {{ Settings::get('volun_q1_' . $lang) }}
                                    @else
                                        Question 1
                                    @endif
                                </h5>

                                @forelse ($fields as $key => $item)
                                    @if ($key != 1)
                                        <!-- singl checkbox -->
                                        <div class="singl_checkbox d-flex align-items-center">
                                            <label class="checkbox bounce mb-0 mr-2">
                                                <input type="checkbox" name="field_id[]" value="{{ $key }}">
                                                <svg viewBox="0 0 21 21">
                                                    <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                                </svg>
                                            </label>
                                            <span>{{ $item }}</span>
                                        </div>
                                    @endif
                                @empty
                                @endforelse

                                <!-- singl checkbox -->
                                <div class="singl_checkbox flex-wrap d-flex align-items-center Other_checkbox">
                                    <label class="checkbox bounce mb-0 mr-2">
                                        <input type="checkbox" class="input_Other_checkbox" name="field_id"
                                            value="1">
                                        <svg viewBox="0 0 21 21">
                                            <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                        </svg>
                                    </label>
                                    <span>{{ __("Other ('mention')") }}</span>
                                    <input class="w-100 inp_Other ml-4 mr-4 mt-2" type="text" name="other_sector"
                                        disabled>
                                </div>

                            </div>
                            <!-- singl question checkbox -->
                            <div class="singl_question question_checkbox one_column" requiredQuestion>
                                <h5>
                                    @if (Settings::get('volun_q2_' . $lang))
                                        {{ Settings::get('volun_q2_' . $lang) }}
                                    @else
                                        Question 2
                                    @endif
                                </h5>

                                @foreach ($categories as $key => $category)
                                    @if ($key != 1)
                                        <!-- singl checkbox -->
                                        <div class="singl_checkbox d-flex align-items-center">
                                            <label class="checkbox bounce mb-0 mr-2">
                                                <input type="checkbox" name="volunteer_category[]"
                                                    value="{{ $key }}">
                                                <svg viewBox="0 0 21 21">
                                                    <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                                </svg>
                                            </label>
                                            <span>{{ $category }}</span>
                                        </div>
                                    @endif
                                @endforeach

                                <!-- singl checkbox -->
                                <div class="singl_checkbox flex-wrap d-flex align-items-center Other_checkbox">
                                    <label class="checkbox bounce mb-0 mr-2">
                                        <input type="checkbox" class="input_Other_checkbox" name="volunteer_category"
                                            value="1">
                                        <svg viewBox="0 0 21 21">
                                            <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                        </svg>
                                    </label>
                                    <span>{{ __('More explanation (if any)') }}</span>
                                    <input class="w-100 inp_Other ml-4 mr-4 mt-2" type="text" name="category_exp"
                                        disabled requiredes="true">
                                </div>
                            </div>
                            <!-- singl question text -->
                            {{-- <div class="singl_question singl_question_text">
                                <h5>
                                    @if (Settings::get('volun_q5_' . $lang))
                                        {{ Settings::get('volun_q5_' . $lang) }}
                                    @else
                                        Your preferred volunteer time (mention time, days and period you can volunteer
                                        in)
                                    @endif
                                </h5>
                                <div class="input_">
                                    <input type="text" class="show_input" name="favorite_time[]">
                                </div>
                                <div class="input_">
                                    <input type="text" name="favorite_time[]">
                                </div>
                            </div> --}}
                            <!-- singl question text -->
                            {{-- <div class="singl_question singl_question_text">
                                <h5>
                                    @if (Settings::get('volun_q6_' . $lang))
                                        {{ Settings::get('volun_q6_' . $lang) }}
                                    @else
                                        Do you have a car to reach the association headquarters?
                                    @endif
                                </h5>
                                <div class="input_">
                                    <input type="text" class="show_input" name="has_car">
                                </div>
                                <div class="input_">
                                    <input type="text" name="has_car">
                                </div>
                            </div> --}}
                            <!-- singl question checkbox -->
                            <div class="singl_question question_checkbox">
                                <h5>
                                    @if (Settings::get('volun_q3_' . $lang))
                                        {{ Settings::get('volun_q3_' . $lang) }}
                                    @else
                                        Question 3
                                    @endif
                                </h5>

                                @forelse ($reasons as $key => $reason)
                                    <!-- singl checkbox -->
                                    <div class="singl_checkbox d-flex align-items-center">
                                        <label class="checkbox bounce mb-0 mr-2">
                                            <input type="checkbox" name="how_know_id[]" value="{{ $key }}">
                                            <svg viewBox="0 0 21 21">
                                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                            </svg>
                                        </label>
                                        <span>{{ $reason }}</span>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                            <!-- singl question text -->
                            {{-- <div class="singl_question singl_question_text">
                                <h5>
                                    @if (Settings::get('volun_q8_' . $lang))
                                        {{ Settings::get('volun_q8_' . $lang) }}
                                    @else
                                        What are your motives (reasons) you want to volunteer for
                                    @endif
                                </h5>
                                <div class="input_">
                                    <input type="text" class="show_input" name="motives[]">
                                </div>
                                <div class="input_">
                                    <input type="text" name="motives[]">
                                </div>
                            </div> --}}


                            <!-- singl question checkbox -->
                            <div class="singl_question question_checkbox one_column" requiredQuestion>
                                <h5>
                                    @if (Settings::get('volun_q4_' . $lang))
                                        {{ Settings::get('volun_q4_' . $lang) }}
                                    @else
                                        Question 4
                                    @endif
                                </h5>

                                @foreach ($questionFour as $key => $question)
                                    @if ($key != 1)
                                        <!-- singl checkbox -->
                                        <div class="singl_checkbox d-flex align-items-center">
                                            <label class="checkbox bounce mb-0 mr-2">
                                                <input type="checkbox" name="question_four[]"
                                                    value="{{ $key }}">
                                                <svg viewBox="0 0 21 21">
                                                    <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                                </svg>
                                            </label>
                                            <span>{{ $question }}</span>
                                        </div>
                                    @endif
                                @endforeach

                                <!-- singl checkbox -->
                                <div class="singl_checkbox flex-wrap d-flex align-items-center Other_checkbox">
                                    <label class="checkbox bounce mb-0 mr-2">
                                        <input type="checkbox" class="input_Other_checkbox" name="question_four"
                                            value="1">
                                        <svg viewBox="0 0 21 21">
                                            <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                        </svg>
                                    </label>
                                    <span>{{ __('More explanation (if any)') }}</span>
                                    <input class="w-100 inp_Other ml-4 mr-4 mt-2" type="text" name="question4_exp"
                                        disabled requiredes="true">
                                </div>
                            </div>


                            <!-- singl question checkbox -->
                            <div class="singl_question question_checkbox one_column" requiredQuestion>
                                <h5>
                                    @if (Settings::get('volun_q5_' . $lang))
                                        {{ Settings::get('volun_q5_' . $lang) }}
                                    @else
                                        Question 5
                                    @endif
                                </h5>

                                @foreach ($questionFive as $key => $question)
                                    @if ($key != 1)
                                        <!-- singl checkbox -->
                                        <div class="singl_checkbox d-flex align-items-center">
                                            <label class="checkbox bounce mb-0 mr-2">
                                                <input type="checkbox" name="question_five[]"
                                                    value="{{ $key }}">
                                                <svg viewBox="0 0 21 21">
                                                    <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                                </svg>
                                            </label>
                                            <span>{{ $question }}</span>
                                        </div>
                                    @endif
                                @endforeach

                                <!-- singl checkbox -->
                                <div class="singl_checkbox flex-wrap d-flex align-items-center Other_checkbox">
                                    <label class="checkbox bounce mb-0 mr-2">
                                        <input type="checkbox" class="input_Other_checkbox" name="question_five"
                                            value="1">
                                        <svg viewBox="0 0 21 21">
                                            <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                        </svg>
                                    </label>
                                    <span>{{ __('More explanation (if any)') }}</span>
                                    <input class="w-100 inp_Other ml-4 mr-4 mt-2" type="text" name="question5_exp"
                                        disabled requiredes="true">
                                </div>
                            </div>




                            <!-- singl question checkbox -->
                            <div class="singl_question question_checkbox one_column" requiredQuestion>
                                <h5>
                                    @if (Settings::get('volun_q6_' . $lang))
                                        {{ Settings::get('volun_q6_' . $lang) }}
                                    @else
                                        Question 6
                                    @endif
                                </h5>

                                @foreach ($questionSix as $key => $question)
                                    @if ($key != 1)
                                        <!-- singl checkbox -->
                                        <div class="singl_checkbox d-flex align-items-center">
                                            <label class="checkbox bounce mb-0 mr-2">
                                                <input type="checkbox" name="question_six[]"
                                                    value="{{ $key }}">
                                                <svg viewBox="0 0 21 21">
                                                    <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                                </svg>
                                            </label>
                                            <span>{{ $question }}</span>
                                        </div>
                                    @endif
                                @endforeach

                                <!-- singl checkbox -->
                                <div class="singl_checkbox flex-wrap d-flex align-items-center Other_checkbox">
                                    <label class="checkbox bounce mb-0 mr-2">
                                        <input type="checkbox" class="input_Other_checkbox" name="question_six"
                                            value="1">
                                        <svg viewBox="0 0 21 21">
                                            <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                                        </svg>
                                    </label>
                                    <span>{{ __('More explanation (if any)') }}</span>
                                    <input class="w-100 inp_Other ml-4 mr-4 mt-2" type="text" name="question6_exp"
                                        disabled requiredes="true">
                                </div>
                            </div>

                        </div>
                        <!-- / all input questions -->

                        <button type="submit">
                            {{ __('SEND') }}
                        </button>

                    </form>
                </section>
                <!-- / section volunteer  -->
            </div>
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt=""
                class="right_img img_sec_video">
        </div>
    </div>
    <!-- / hero container section  -->

    <!-- footer  -->
    @include('frontend::includes.footer')
    <!-- / footer  -->


    <!-- scripts  -->
    @include('frontend::includes.scripts', ['page' => 'volunteers'])
    <!-- / scripts  -->
    @notifyJs

</body>

</html>
