<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ site_name() }} | {{ __('About Us') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ app_favicon() }}">

    <!-- SEO data  -->
    @include('frontend::includes.seo', ['page' => 'about'])
    <!-- /SEO data  -->

    <!-- styles -->
    @include('frontend::includes.styles', ['page' => 'about'])
    <!-- end styles -->
    {{-- @notifyCss --}}


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
                <!-- location page  -->
                <div class="loction_page loction_page_top">
                    <!-- <h5>The foundation</h5> -->
                    <ul class="link_location">
                        <li><a href="#foundation">{{ __("The foundation") }}</a></li>
                        <li><a href="#Visssion">{{ __("Vision") }}</a></li>
                        <li><a href="#missionAndObjectives">{{ __("Our message") }}</a></li>
                        <li><a href="#Objectives_">{{ __("Goals") }}</a></li>
                        <li><a href="#APEAwards">{{ __("Awards") }}</a></li>
                        <li><a href="#videoAbout">{{ __("Video") }}</a></li>
                    </ul>
                </div>
                <!-- / location page  -->

                <!-- foundation  -->
                <section id="foundation" class="mysec">
                    <div class="row justify-content-between line_backgrouend">
                        <!-- content text -->
                        <div class="col-lg-5">
                            <div class="left_section">
                                <h2 data-aos="fade" class="title">
                                    {{ __("The foundation of the association") }}
                                </h2>
                                <p data-aos="fade">
                                    @isset($settings)
                                        {!! $settings->getFoundation1() !!}
                                    @endisset
                                </p>
                            </div>
                        </div>
                        <!-- / content text -->

                        <!-- img section  -->
                        <div class="col-lg-6">
                            <div class="perantImg" data-aos="fade">
                                <img src="{{ $settings->getFirstMediaUrl('images') }}" alt="">
                            </div>
                        </div>
                        <!-- / img section  -->
                    </div>
                </section>
                <!-- / foundation  -->

                <!-- sub info -->
                <section id="subinfo" class="">
                    <div class="row line_backgrouend">
                        <!-- clouds img -->
                        <div class="clouds left"></div>
                        <div class="clouds right"></div>
                        <!-- text section  -->
                        <div class="text_info">
                            <p data-aos="fade">
                                @isset($settings)
                                    {!! $settings->getFoundation2() !!}

                                @endisset
                            </p>
                        </div>
                        <!-- / text section  -->
                    </div>
                </section>
                <!-- / sub info -->

                <!-- sec mission and Objectives -->
                <section id="missionAndObjectives" class="">
                    <div class="line_backgrouend">
                        <!-- clouds img -->
                        <div class="clouds left"></div>
                        <div class="clouds right"></div>
                    </div>

                    <div class="myContent">
                        <!-- mission -->
                        <div class="mission">
                            <div class="row justify-content-between position_inherit">
                                <!-- icon  -->
                                <div class="col-md-8 position_inherit">
                                    <div class="contxt">
                                        <div id="Visssion" class="mysec">
                                            <h2 class="title">{{ __("Vission") }}</h2>
                                            <p>
                                                @isset($settings)
                                                {!! $settings->getOurVision() !!}
                                                @endisset
                                            </p>
                                        </div>
                                        <div class="mysec" id="mission_">
                                            <h2 class="title">{{ __("Our message") }}</h2>
                                            <p>
                                                @isset($settings)
                                                {!! $settings->getOurMessage() !!}
                                                @endisset
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- / icon -->
                                <div class="col-md-4">
                                    <div class="icon_mission">
                                        <svg version="1.1" id="OBJECTS" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 179.5 116.6" style="enable-background:new 0 0 179.5 116.6;"
                                            xml:space="preserve">
                                            <style type="text/css">
                                                .misst0 {
                                                    fill: #92C841;
                                                }

                                                .misst1 {
                                                    fill: #EF9D00;
                                                }

                                                .misst2 {
                                                    fill: #9177FF;
                                                }
                                            </style>
                                            <g>
                                                <g>
                                                    <ellipse
                                                        transform="matrix(0.9779 -0.209 0.209 0.9779 -2.5717 10.5055)"
                                                        class="misst0" cx="48.4" cy="17.4" rx="10.2"
                                                        ry="11.5" />
                                                    <path class="misst0"
                                                        d="M48.2,31.7c0,0,7.3,2.1,9.7,5.7c2.4,3.6,3.4,24.9,3,41.2c-0.4,16.6-1.8,31.1-4.4,35.1c-1.9,2.9-4,2.6-5.1-0.3
                                                            c-1.1-2.8-0.6-13.9-0.7-25.5c-0.1-9.6-0.4-14.8-2.4-13.9c-2,0.9-4.8,8.8-13.7,20c-7.7,9.8-12.4,15.4-15.9,12.9
                                                            c-3.6-2.4,3-10.5,8.5-18.8c5.3-7.8,6.4-13.7,8.1-22.2s1-26.2,0.6-28.7C35.4,34.8,39.1,28.7,48.2,31.7z" />
                                                    <path class="misst0"
                                                        d="M45.7,31.2c0,0-4.4-1.3-9.4,0.5c-5,1.8-6.3,10.5-17.6,12.9C7.6,47.1,4.6,44.1,2.2,45.9
                                                            c-2.4,1.8-1.8,5.4,6.7,6.8c8.5,1.4,16.8-0.4,25.1-6.5C42.2,40.1,45.7,31.2,45.7,31.2z" />
                                                    <path class="misst0"
                                                        d="M55.2,34.9c0,0,5.7,3.4,7.1,7.3c1.3,3.4,1.2,11.6,3.6,17.1c2.7,6.1,7.4,10.2,7.7,12.9c0.4,3-1.5,4.4-4.8,1.7
                                                            c-3.1-2.5-6.6-6.1-11.1-18.7C55.4,48.4,55.2,34.9,55.2,34.9z" />

                                                    <ellipse
                                                        transform="matrix(0.209 -0.9779 0.9779 0.209 84.2874 139.0478)"
                                                        class="misst1" cx="128.1" cy="17.4" rx="11.5"
                                                        ry="10.2" />
                                                    <ellipse
                                                        transform="matrix(0.209 -0.9779 0.9779 0.209 3.6119 138.056)"
                                                        class="misst2" cx="87.1" cy="66.8" rx="9.5"
                                                        ry="8.4" />
                                                    <path class="misst1"
                                                        d="M128.3,31.7c0,0-7.3,2.1-9.7,5.7c-2.4,3.6-3.4,24.9-3,41.2c0.4,16.6,1.8,31.1,4.4,35.1c1.9,2.9,4,2.6,5.1-0.3
                                                            c1.1-2.8,0.6-13.9,0.7-25.5c0.1-9.6,0.4-14.8,2.4-13.9c2,0.9,4.8,8.8,13.7,20c7.7,9.8,12.4,15.4,15.9,12.9
                                                            c3.6-2.4-3-10.5-8.5-18.8c-5.3-7.8-6.4-13.7-8.1-22.2s-1-26.2-0.6-28.7C141.1,34.8,137.4,28.7,128.3,31.7z" />
                                                    <path class="misst1"
                                                        d="M131,38.5c0,0-5.8-5.6-0.8-7.3c8.8-2.9,16.2-0.9,23.4-1.2c3.1-0.1,6.9-0.9,12.5-4.2c5.2-3.1,7-6.4,9.6-6.5
                                                            c3-0.1,4.5,2.3-1.3,8.8c-5.7,6.5-13.4,11.1-24.3,12.4c-3.3,0.4-8.8,0.7-11.5,0.4C133.1,40.5,131,38.5,131,38.5z" />
                                                    <path class="misst1"
                                                        d="M123.3,33.7c0,0-7.4,3.5-9.2,8.2c-1.4,3.4-1.8,11.5-4.4,16.9c-3,5.9-7.8,9.9-8.3,12.5c-0.5,3,1.3,4.4,4.7,1.9
                                                            c3.2-2.3,6.9-5.8,12-18.1C120.8,48.5,123.3,33.7,123.3,33.7z" />
                                                    <path class="misst2"
                                                        d="M101.9,79.4c2.3-3.2,3.6-6.7,3.1-9c-0.6-2.7-2.9-1.5-2.9-1.5c-2.1,1-3.2,5.9-8.1,9.7
                                                            c-3.8,2.9-9.7,3.1-13.7,0.5c-0.2-0.1-0.4-0.3-0.6-0.5c-4.9-3.8-6-8.7-8.1-9.7c0,0-2.4-1.2-2.9,1.5c-0.5,2.3,0.9,5.8,3.1,9
                                                            c3.8,5.5,8.2,8,8.2,8s-1,6.3-2,15.4c-1,8.5-0.5,12.4,1.3,13c2.1,0.6,3.6-2.4,4.4-5.6c0.8-3.6,0.7-12.5,3.9-12.1
                                                            c3.2,0.3,6.4,17.4,10.3,17.3c3.9-0.1,1.1-9.3-0.2-15c-1.1-4.7-2.8-11-3.3-13.2C95.4,86.3,98.8,83.8,101.9,79.4z" />
                                                    <path class="misst2"
                                                        d="M86.3,17c0.1-0.4,5.7-18,17.2-15.1c10.6,2.7,3.5,17.7-4.1,26.4c-7,8.2-12.2,13-13.4,12.5
                                                            c-1.3-0.6-20.5-16.4-20.5-27.7C65.5,0.7,74.5,0.9,77.4,3C83,7,86.3,17,86.3,17z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / mission -->

                        <!-- Objectives -->
                        <div class="Objectives mysec" data-aos="fade" id="Objectives_">
                            <div class="row justify-content-between">
                                <!-- icon  -->
                                <div class="col-md-3">
                                    <div class="icon_mission">
                                        <svg version="1.1" id="OBJECTS" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 115.8 122" style="enable-background:new 0 0 115.8 122;"
                                            xml:space="preserve">
                                            <style type="text/css">
                                                .objst0 {
                                                    fill: #92C841;
                                                }

                                                .objst1 {
                                                    fill: #9177FF;
                                                }

                                                .objst2 {
                                                    fill: #EF9D00;
                                                }
                                            </style>
                                            <g>
                                                <g>
                                                    <path class="objst0"
                                                        d="M104.6,32.7c-4.1-5.5-11.1-8.4-20.5-7.7c-20.2,1.5-33,35.2-33,35.2s-3.4-8-17-14.5c-8.2-3.9-18.4-2.2-24.2,5
                                                            c-1.6,2.8-3,5.8-2.8,8.3c0.5,5.9,7.1,9,15.8,10.2c8.6,1.2,17.3,0.5,20.7,4.3c3.5,3.8,2.3,11.5-7.5,13.6C28,88.9,21,88.7,14.1,86.8
                                                            c13,17.6,37.3,33.6,44.3,33.6c8,0,26.7-21,39.2-43.2c-3.6,0.9-7.5,1.2-13.4,0.3C71,75.8,68.6,68.3,70.7,63.9
                                                            c2.4-5.1,15.5-4.4,21.6-5.8c6.6-1.4,11.8-3.1,14-10.7C107.8,42.3,105.9,36.2,104.6,32.7z" />
                                                    <ellipse
                                                        transform="matrix(0.1325 -0.9912 0.9912 0.1325 70.0018 105.3359)"
                                                        class="objst1" cx="95.2" cy="12.7" rx="11"
                                                        ry="10.7" />
                                                    <ellipse
                                                        transform="matrix(0.9053 -0.4248 0.4248 0.9053 -11.9746 8.7759)"
                                                        class="objst2" cx="13.7" cy="31.2" rx="10.7"
                                                        ry="11" />

                                                    <ellipse
                                                        transform="matrix(3.158136e-02 -0.9995 0.9995 3.158136e-02 8.0689 85.6073)"
                                                        class="objst0" cx="48.2" cy="38.6" rx="8.2"
                                                        ry="8" />
                                                    <path class="objst1"
                                                        d="M105.3,33.7c0,0,3.7,5.2,3.1,12.6c-0.4,4.5-1.5,10.6-12,13.9c-7.7,2.5-20.2,0.8-22.1,5.5
                                                            c-2.1,5,4.8,8.9,15.1,9.5c10.3,0.6,21.4-4.8,24.4-13.7c3.5-10.3-0.7-18.9-3.3-22.2C108,35.8,105.3,33.7,105.3,33.7z" />
                                                    <path class="objst2"
                                                        d="M10.8,49.8c0,0-3.9,2.9-4.5,8.7C5.9,61.9,5.7,67.5,17.5,71c11.8,3.5,22.5-0.2,24.4,5.8
                                                            c1.3,4-4.6,8.1-18.2,8.4C10.2,85.5,2.3,77.7,1.5,70.9C-0.3,56,10.8,49.8,10.8,49.8z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <!-- text  -->
                                <div class="col-md-9">
                                    <div class="contxt">
                                        <h2 class="title">{{ __("Objectives") }}</h2>
                                        <p>
                                            @isset($settings)
                                            {!! $settings->getOurGoals() !!}
                                            @endisset
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- / Objectives -->
                    </div>

                </section>
            </div>
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt=""
                class="right_img img_sec_video">
        </div>
    </div>
    <!-- hero container section  -->

    <!-- nav bottom page -->
    <section id="loctionBottomNav">
        <div class="container">
            <div class="row">
                <div class="loction_page ">
                    <ul class="link_location">
                        <li><a href="#foundation">{{ __("The foundation") }}</a></li>
                        <li><a href="#Visssion">{{ __("Vision") }}</a></li>
                        <li><a href="#missionAndObjectives">{{ __("Our message") }}</a></li>
                        <li><a href="#Objectives_">{{ __("Goals") }}</a></li>
                        <li><a href="#APEAwards">{{ __("Awards") }}</a></li>
                        <li><a href="#videoAbout">{{ __("Video") }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / nav bottom page -->

    <!-- section AWARDS -->
    <section id="APEAwards" class="mysec tops">
        <div class="container">
            <!-- APE Awards text -->
            <div class="row justify-content-center" data-aos="fade">
                <div class="APEAwards text-center">
                    <h2 class="title">
                        {{ Settings::get('awards_title_'. $lang) }}
                    </h2>
                    <p data-aos="fade">
                        {{ Settings::get('awards_desc_'. $lang) }}
                    </p>
                </div>
            </div>
            <!-- / APE Awards text -->

            <!-- card Awards  -->
            <div class="perantCard">
                @forelse ($awards as $award)
                <a class="singl_card" data-aos="fade" @isset($award->url) href="{{ $award->url }}"  @endisset target="_blank">
                    <div class="icon">
                        <img src="{{ $award->getFirstMediaUrl('images') }}" alt="">
                    </div>
                    <p>
                        {{ $award->name }}
                    </p>
                    <h4> {{ $award->getYear() }}</h4>
                    <div class="my_line"></div>
                </a>
                @empty

                @endforelse
            </div>
            <!-- / card Awards  -->
        </div>
    </section>
    <!-- / section AWARDS -->

    <!-- section video  -->
    <section id="videoAbout" class="mysec tops">
        <div class="container">
            <!-- APE Awards text -->
            <div class="myTitle d-flex text-center flex-column align-items-center justify-content-center "
                data-aos="fade">
                <h2 class="title">
                    @isset($settings)
                    {{ $settings->video_title }}
                    @endisset
                </h2>
                <p>
                    @isset($settings)
                    {!! $settings->video_description !!}
                    @endisset
                </p>
            </div>
            <!-- / APE Awards text -->
            <div class="row position-relative" data-aos="fade">
                <div class="col">
                    <div class="img_video">
                        <div class="myimg">
                            @if ($settings->getFirstMediaUrl('videoImages') != "https://www.videoimages.io//shiny/64.png")
                                <img src="{{ $settings->getFirstMediaUrl('videoImages') }}" alt="">
                            @else
                                <img src="{{ asset('frontend/assets/images/about/video-about.jpg') }}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="content_myVideo">
                        <div class="p_video popup-btn" id="play_video" typeOF='video' source="{{ $settings->video_url ?? '' }}"><img
                                src="{{ asset('frontend/assets/images/play_video.png') }}" alt=""></div>
                        {{-- <div class="text_sec">
                            <p>{{ __("Your Dream Living Room") }}</p>
                            <h4>{{ __("Home Exclusive Furniture") }}</h4>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video popup  -->
    <div class="video-popup">
        <div class="popup-bg"></div>
        <div class="popup-content" >
            <iframe class="youtube-video" src="" class="videoo" allowfullscreen frameborder="0"></iframe>
        </div>
    </div>
    <!-- / section video  -->

    <!-- section Subscribe  -->
    @include("frontend::includes.subscribe")
    <!-- / section Subscribe  -->

    <!-- footer  -->
    @include("frontend::includes.footer")
    <!-- / footer  -->

    @notifyJs
    <!-- scripts  -->
    @include("frontend::includes.scripts", ['page' => 'about'])
    <!-- / scripts  -->

</body>

</html>
