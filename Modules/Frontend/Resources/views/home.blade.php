<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ site_name() }} | {{ __('Home Page') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ app_favicon() }}">

    <!-- SEO data  -->
    @include('frontend::includes.seo', ['page' => 'home'])
    <!-- /SEO data  -->

    {{-- @notifyCss --}}
    <!-- styles -->
    @include('frontend::includes.styles', ['page' => 'home'])
    <!-- end styles -->

</head>

<body dirPage='{{ $ar }}'>
    @include('notify::components.notify')
    <!-- header -->
    @include('frontend::includes.header')
    <!-- / header -->

    <!-- hero slider -->
    <section id="swiperTopPage" class="slider_top_page hero-slider hero-style">
        <div class="sliderTopPage owl-carousel slider-width-col6">
            @forelse ($sliders as $slider)
                <!-- Item -->
                <div class="slider-item" data-aos="fade">
                    <div class="perantImg">
                        <img src="{{ $slider->getFirstMediaUrl('sliders') }}" alt="Card image cap">
                    </div>
                    <div class="content_text">
                        <div class="container">
                            <div class="row">
                                <div class="slide-title">
                                    <h2 slider-text='{{ $slider->title }}'></h2>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Item -->
            @empty
            @endforelse
        </div>

        <div class="app_card_top ">
            <div class="container">
                <div class="bigCardTopHero row">


                    @foreach ($main_services as $service)
                        <div class="col-md-2">
                            <a href="{{ route('sub.services', $service->id) }}">
                                <div class="singl_card">
                                    <div class="icon_">
                                        <img src="{{ $service->getFirstMediaUrl('icons') }}" alt="">
                                    </div>
                                    <span>{{ $service->name }}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- / hero slider -->

    <!-- hero container sec -->
    <div class="hero_container">
        <div class="container">
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt=""
                class="left_img img_sec_video">
            <div class="row frist_row">
                <!-- sec video  -->
                <section id="myVideo" class="col">

                    <div class="content_myVideo d-flex w-100" data-aos="fade">
                        <!-- video card -->
                        <div class="video pl-0">
                            <!-- img video -->
                            @if ($settings->getFirstMediaUrl('videoImages') != 'https://www.videoimages.io//shiny/64.png')
                                <img src="{{ $settings->getFirstMediaUrl('videoImages') }}" alt="">
                            @else
                                <img src="{{ asset('frontend/assets/images/img_video.jpg') }}" alt="">
                            @endif
                            <!-- border video -->
                            <div class="app_border">
                                <div class="border_video"></div>
                            </div>
                            <!-- icon play video -->
                            <div class="p_video popup-btn" typeOF='video' source="{{ $settings->video_url ?? '' }}"
                                id="play_video"><img src="{{ asset('frontend/assets/images/play_video.png') }}"
                                    alt=""></div>
                        </div>
                        <!-- / video card -->

                        <!-- conent text -->
                        <div class="col-6 col-lg-9">
                            <div class="conent_text">
                                <h3>{{ $settings->video_title ?? 'is an Egyptian non-governmental organisation' }}</h3>
                                <p>{{ $settings->video_description ?? 'The Association for the Protection of the Environment (A.P.E.) is an Egyptian non-governmental organisation established in 1984 and registered with the Ministry of Social Affairs under license number 3255.' }}
                                </p>
                            </div>
                        </div>
                        <!-- / conent text -->
                    </div>

                </section>
                <!-- / sec video  -->

                <!-- sec slider -->
                <section id="slider_card" class="">
                    <!-- text section -->
                    <div class="d-flex text_sec justify-content-between align-items-center">
                        <h3 class="col-xl-5">
                            {{ Settings::get('services_sec_title_' . $lang) ?? 'Donate to charity causes around the world.' }}
                        </h3>
                        <p class="col-6">
                            {{ Settings::get('services_sec_description_' . $lang) ?? 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Have you done google research which works all the time.' }}
                        </p>
                    </div>
                    <!-- / text section -->

                    <!-- slider card -->
                    <div class="slider-items owl-carousel slider-width-col6">

                        @forelse ($services as $service)
                            <!-- Item -->
                            <div class="slider-item" data-aos="fade">
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top owl-lazy"
                                            data-src="{{ $service->getFirstMediaUrl('images') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $service->name }}</h5>
                                            <p class="card-text">
                                                {{ Str::limit($service->description, 150, '...') }}
                                            </p>
                                            <a href="{{ route('sub.services', $service->id) }}"
                                                class="btn">{{ __('Read More...') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Item -->
                        @empty
                        @endforelse

                    </div>
                    <!-- / slider card -->
                </section>
                <!-- / sec slider -->
            </div>
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt=""
                class="right_img img_sec_video">
        </div>

    </div>
    <!-- / hero container sec -->

    <!-- video popup  -->
    <div class="video-popup">
        <div class="popup-bg"></div>
        <div class="popup-content">
            <iframe class="youtube-video" src="" class="videoo" allowfullscreen frameborder="0"></iframe>
        </div>
    </div>
    <!-- video popup  -->

    <!-- sec break -->
    <section id="break" class="text_effect textType">
        <div class="backgrouend_sec"></div>
        <div class="container h-100">
            <div class="row justify-content-center">
                <div class="break_content d-flex justify-content-center flex-column">
                    <a href="{{ route('about') }}">
                        <svg version="1.1" id="OBJECTS" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 111 119" style="enable-background:new 0 0 111 119;" xml:space="preserve">
                            <style type="text/css">
                                .br1st0 {
                                    fill: url(#br1SVGID_1_);
                                }

                                .br1st1 {
                                    fill: url(#br1SVGID_2_);
                                }

                                .br1st2 {
                                    fill: url(#br1SVGID_3_);
                                }

                                .br1st3 {
                                    fill: url(#br1SVGID_4_);
                                }

                                .br1st4 {
                                    fill: url(#br1SVGID_5_);
                                }
                            </style>
                            <g>
                                <linearGradient id="br1SVGID_1_" gradientUnits="userSpaceOnUse" x1="55.8579"
                                    y1="7.1251" x2="55.8579" y2="108.3909">
                                    <stop offset="0" style="stop-color:#FFC100" />
                                    <stop offset="1" style="stop-color:#FF5722" />
                                </linearGradient>
                                <path class="br1st0"
                                    d="M94.9,38.3h-78c-5.9,0-10.5,5.3-9.5,11.2l0,0C9,59.4,18.8,65.7,28.5,63.1L40.1,60c6.3-1.7,12,4.1,10.3,10.3
                                        l-0.6,2.2C46.6,84.4,55.6,96,67.8,96h20.6c4.7,0,8.7-3.4,9.5-8l6.4-38.5C105.3,43.6,100.8,38.3,94.9,38.3z" />
                                <linearGradient id="br1SVGID_2_" gradientUnits="userSpaceOnUse" x1="28.0374"
                                    y1="7.1252" x2="28.0374" y2="108.391">
                                    <stop offset="0" style="stop-color:#FFC100" />
                                    <stop offset="1" style="stop-color:#FF5722" />
                                </linearGradient>
                                <path class="br1st1"
                                    d="M36.6,68.8l-19.2,5.1c-3.7,1-4.2,6-0.7,7.7l6.9,3.4c0.8,0.4,1.5,1.1,1.9,1.9l3.4,6.9c1.7,3.4,6.7,2.9,7.7-0.7
                                        l5.1-19.2C42.4,70.8,39.6,68,36.6,68.8z" />
                                <g>
                                    <linearGradient id="br1SVGID_3_" gradientUnits="userSpaceOnUse" x1="55.8579"
                                        y1="7.1251" x2="55.8579" y2="108.3909">
                                        <stop offset="0" style="stop-color:#FFC100" />
                                        <stop offset="1" style="stop-color:#FF5722" />
                                    </linearGradient>
                                    <path class="br1st2"
                                        d="M73.5,33.7c-2,0-3.7-1.6-3.7-3.7v-0.1c0-7.7-6.3-13.9-13.9-13.9s-13.9,6.3-13.9,13.9v0.1c0,2-1.6,3.7-3.7,3.7
                                            c-2,0-3.7-1.6-3.7-3.7v-0.1c0-11.7,9.5-21.3,21.3-21.3s21.3,9.5,21.3,21.3v0.1C77.1,32.1,75.5,33.7,73.5,33.7z" />
                                </g>
                                <g>
                                    <linearGradient id="br1SVGID_4_" gradientUnits="userSpaceOnUse" x1="71.1549"
                                        y1="7.1254" x2="71.1549" y2="108.3911">
                                        <stop offset="0" style="stop-color:#FFC100" />
                                        <stop offset="1" style="stop-color:#FF5722" />
                                    </linearGradient>
                                    <circle class="br1st3" cx="71.2" cy="108.3" r="5.1" />
                                    <linearGradient id="br1SVGID_5_" gradientUnits="userSpaceOnUse" x1="44.0332"
                                        y1="7.1254" x2="44.0332" y2="108.3911">
                                        <stop offset="0" style="stop-color:#FFC100" />
                                        <stop offset="1" style="stop-color:#FF5722" />
                                    </linearGradient>
                                    <circle class="br1st4" cx="44" cy="108.3" r="5.1" />
                                </g>
                            </g>
                        </svg>
                        <span>{{ Settings::get('prod_sec_title_' . $lang) ?? 'know more about organization Products' }}</span></a>
                    <div class="break_text">
                        <div class="app_text">
                            <span class="lines_text"></span>
                            <p>{{ Settings::get('prod_sec_text_' . $lang) ?? 'What services can an association provide to the community?' }}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / sec break -->

    <!-- sec OUR Partners slider brand logo  -->
    <section id="logo_brand" class="b_logo">
        <div class="container">
            <div class="row pl-3">
                <!-- title sec  -->
                <div class="sec_title">
                    <div class="title">
                        <h4>
                            {{ Settings::get('partners_sec_title_' . $lang) ?? 'OUR Partners' }}
                        </h4>
                        <p>
                            {{ Settings::get('partners_sec_description_' . $lang) ?? 'Popular tech companies who are seeking talents in our Landing page' }}
                        </p>
                    </div>
                </div>
                <!-- / title sec  -->

                <!-- slider  -->
                <div class="logo_slider w-100">
                    <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items-items owl-carousel slider-width-col6" data-aos="fade">

                            @foreach ($partners as $partner)
                                <div class="slider-item">
                                    <div class="col">
                                        <a href="{{ $partner->link }}"><img
                                                src="{{ $partner->getFirstMediaUrl('images') }}" alt="Image"></a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- / slider  -->
            </div>
        </div>
    </section>
    <!-- / sec OUR Partners slider brand logo  -->

    <!-- sec volunteering  -->
    <section id="volunteering" class="text_effect parallax textType">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade">
                    <svg class="" version="1.1" id="" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 1865.9 1168.7" style="enable-background:new 0 0 1865.9 1168.7;"
                        xml:space="preserve">
                        <style type="text/css">
                            .volunteeringst0 {
                                fill: #FFBF4A;
                            }

                            .volunteeringst1 {
                                fill: #9CBE12;
                            }

                            .volunteeringst2 {
                                fill: #FD6446;
                            }

                            .volunteeringst3 {
                                fill: #9977FF;
                            }

                            .volunteeringst4 {
                                fill: #FF5264;
                            }
                        </style>
                        <g>
                            <path class="volunteeringst0 parallax-layer" data-parallax-deep="200"
                                d="M302.3,650.5c-2.4-15-12.8,0.6-19-1.8c-13.2-5.1-28.3-74.5-44-142.4c-10.4-44.8-16.8-50.4-31.2-48.1
                                c-14.6,2.3-15.3,16.5-8.5,53.6c12.3,66.9,27.2,160.9,20.2,162c-8.8,1.4-30.6-66.4-47.5-114.8c-8.9-25.5-16.1-41-33.1-36.4
                                c-17,4.6-8.7,30.7,0.7,65.5c16.5,60.5,41.7,131.9,21.6,135.1c-30.7,4.8-61.4-27.2-88.9-9.5c-19.7,12.7,66.7,58.3,111.8,100.6
                                c13.6,12.7,35.1,42.7,43.5,79.6c1.4,6,2.6,11.7,3.6,17.3c6.4,34,35,59.5,69.5,62.2h0c21.5,1.7,41.4-5.6,56.3-18.7
                                C336.7,865.6,318.3,751.5,302.3,650.5z" />
                            <path class="volunteeringst1 parallax-layer" data-parallax-deep="300"
                                d="M1799.7,675.5c-21.5-24.4-60.1-1.8-88.2-14.6c-18.4-8.4,25.9-70.4,58.7-124.2c18.9-30.9,34.1-53.9,19.1-62.8
                                c-15.1-9-26.3,4-42.1,26.2c-29.8,42-69.8,101.4-77.8,97.7c-6.4-2.9,34.3-89.4,64.9-150.4c17-33.8,20.3-47.7,6.9-53.8
                                c-13.1-6-20.9-2.3-43.5,37.9c-34.2,61.1-76.5,127.8-82.3,125.2c-6-2.8,15.1-55,38.1-107.3c17.6-39.9,22.8-57.1,9.1-63.5
                                c-15.7-7.4-24.3,6.2-45.2,47.8c-25.2,50.3-55.6,113.1-60.6,112.1c-5.1-1-2.4-26.4,12.4-69.5c13.1-38.4,18.2-54.1,3.4-58.3
                                c-15.7-4.5-21.3,16.6-40.6,62.5c-5.2,12.4-13,32.7-21,55.9c-0.7,2.1-0.3,4.3,1.1,6c0.2,0.3,0.5,0.6,0.7,0.9
                                c9.6,12.7,9.1,30.5,5.3,58.7c-0.5,3.9,3.5,6.7,7,5c4-1.9,8.3-2.8,13-2.8c3.3,0,6.7,0.5,10.2,1.5c8.9,2.7,23.8,10.7,23.2,35.1
                                c-0.2,10.7-3.3,24-7.4,42.4c-1.3,5.8-2.8,12.5-4.4,19.6c-6.3,29-26.5,104.1-47.1,154.7c-7.3,18.1-14,34-19.9,48
                                c-9.8,23.3-17.8,42.6-24.6,61.5c-2.3,6.4,2.1,13.2,8.8,13.9c0.4,0,0.9,0.1,1.3,0.1h0c35.5,0,66.4-23.8,75.8-58
                                c11.5-42.2,26.6-81.2,45.7-115.6c18.4-33.2,47.5-56.3,64.2-65C1719.2,713.7,1815,692.9,1799.7,675.5z" />
                            <path class="volunteeringst2 parallax-layer" data-parallax-deep="400"
                                d="M1158.1,704.8c40.4,9.8,80-18.9,83.1-60.4c2.6-35.3,5.5-70.2,7-75.9c7.1-27,24.6-31,34.5-31c0.4,0,0.8,0,1.2,0
                                c16.7,0.6,49.9,1.1,65.8-40.2c9.8-25.6,27.6-62.6,42.6-95.9c14.8-32.9,27.1-57.4,11-64.6c-16.1-7.2-25.6,7-38.4,30.8
                                c-24.3,45.1-56.4,108.7-64.9,105.9c-6.7-2.2,22.7-92.7,45.4-156.9c12.6-35.5,14.1-49.7,0-54.3c-13.8-4.5-21,0-38.3,42.6
                                c-26.2,64.6-59.8,135.7-65.8,133.7c-6.3-2.1,8-56.4,24.3-111c12.4-41.7,15.4-59.3,1-64.2c-16.5-5.6-23.3,8.9-38.8,52.7
                                c-18.7,52.9-40.9,118.7-46,118.3c-5.2-0.4-5.7-25.9,3.5-70.5c8.2-39.6,11.2-55.8-4-58.4c-16.1-2.7-19,18.9-32.4,66.7
                                c-8.4,30-24.9,104.3-30.1,155.2c-3.1,30.6-7.7,70.8-11.7,103.8C1103.1,665.2,1124.9,696.8,1158.1,704.8L1158.1,704.8z" />
                            <path class="volunteeringst0 parallax-layer" data-parallax-deep="600"
                                d="M1512.6,644.8c-14.8-4.4-19.6,11.4-31,50.3c-12.7,43.8-25.2,66.3-30,64.4c-4.7-1.8,6.4-70.2,14.6-125.6
                                c6.8-45.7,7.5-61.7-9.8-63.9c-15.1-1.9-20.7,15.1-29.2,57.7c-11.1,55.8-23.9,110.5-30.5,109.6c-6.3-0.9-2.8-79,4.2-148
                                c4.6-45.5,0.3-52.7-14.1-54.7c-14.7-2.1-19.9,11.2-25.5,48.4c-9.9,67-26.2,160.6-33.2,159.7c-8.8-1.2-7.6-71.9-8.1-122.8
                                c-0.2-26.8-2.1-43.6-19.8-44.2c-17.7-0.6-18.3,26.6-20.5,62.4c-3.9,62.2-3,137.4-23.2,134.5c-30.8-4.3-49.8-43.8-81.7-35
                                c-22.9,6.3,44.7,74.7,74,128.1c8.8,16.1,19.6,50.8,15.7,88.3c-0.3,3-0.7,6.1-1,9.1c-5.4,43.7,26.9,83,70.8,86.5h0
                                c35.5,2.8,68.3-19,79.6-52.8c0.4-1.2,0.8-2.4,1.2-3.6c11.7-35.5,27.1-68.6,49.2-123.1c19.3-47.6,39.5-121,46.1-151.5
                                C1520.7,669.9,1528.3,649.4,1512.6,644.8z" />
                            <path class="volunteeringst0  parallax-layer" data-parallax-deep="400"
                                d="M954.9,643.3c36.3-0.3,66.6-28,70-64.2c3.3-35.4,5.5-65.2,6.9-87.7c2.3-37.2,8.8-72.9,16.3-131
                                c6.5-50.7,7.3-126.7,6-157.8c-2.2-49.5-0.1-71.2-16.4-72.2c-15.4-0.9-16.1,15.6-17.2,56c-1.2,45.5-7.5,70.2-12.7,69.5
                                c-5-0.7-11.7-69.8-17.9-125.4c-5.1-46-8.4-61.7-25.8-59.9c-15.1,1.6-16.2,19.4-13.6,62.8c3.4,56.8,5,112.9-1.6,113.5
                                c-6.3,0.6-22.8-76.1-33.7-144.8c-7.1-45.3-13.2-51.3-27.6-50c-14.7,1.4-16.5,15.5-12.3,52.9c7.5,67.5,15.6,162.2,8.5,162.9
                                c-8.8,0.8-25.7-68.2-39.1-117.5c-7.1-26-13.2-42-30.4-38.5c-17.3,3.5-10.9,30.1-4,65.4c12.1,61.4,32.1,134.2,11.8,136.1
                                c-31,2.8-59.4-31.1-88.1-15.3c-20.6,11.4,62.4,62.4,104.3,107.6c12.6,13.6,31.9,44.9,37.7,82.2c4.3,28.3,6.7,57,7.4,86.1
                                C884.3,612.6,916.1,643.6,954.9,643.3L954.9,643.3z" />
                            <path class="volunteeringst1  parallax-layer" data-parallax-deep="200"
                                d="M1197.4,916.2c-31.5-10.5-52.2,27.8-83.2,30.5c-20.3,1.7-16.1-73.3-17.4-135.6c-0.7-35.9-0.1-63.1-17.8-63.4
                                c-17.7-0.4-20.3,16.3-21.7,43.1c-2.6,50.7-4.5,121.4-13.3,122.2c-7,0.6-19.3-93.8-26.3-161.3c-3.9-37.4-8.6-51-23.3-49.7
                                c-14.5,1.2-19.1,8.2-16.5,53.9c4,69.3,4.1,147.5-2.2,148c-6.6,0.6-17-54.8-25.7-111.1c-2.8-18.3-5.4-31.9-8.5-41.4
                                c-6-18.7-34.6-13.7-33.5,13.5c0.4,8.5,1.3,19.1,2.6,32c5.8,55.7,14,124.6,9.2,126.2c-4.9,1.6-16.4-21.5-27.2-65.9
                                c-9.6-39.5-13.8-55.5-28.8-51.9c-15.8,3.8-9.2,24.7-0.7,73.7c5.3,30.7,22.2,105.2,39.5,153.8c2.1,5.9,4.1,11.6,6.1,17
                                c14.5,40.1,51,68,93.5,71.4l0,0c47,3.7,90.9-23.5,108.9-67.1c2.3-5.5,4.6-10.2,6.8-13.8C1149.5,988.4,1220,923.8,1197.4,916.2z" />
                            <path class="volunteeringst3  parallax-layer" data-parallax-deep="600"
                                d="M511.7,570.2c1.5-69.1,14.4-62.5,29.5-107.7c6.6-19.7,17.4-53.4,19.9-74.6c4.2-35.6,8.4-62.5-9.1-65
                                c-17.5-2.5-22.4,13.7-27.4,40.1c-9.5,49.9-20.9,119.7-29.8,119.4c-7.1-0.3-6.4-95.2-4.2-163c1.2-37.6-1.6-51.6-16.4-52.1
                                c-14.5-0.5-20.1,5.8-23.7,51.4c-5.4,69.1-15.9,146.6-22.3,146.4c-6.7-0.2-9.5-56.3-10.5-113.2c-0.8-43.4-3.3-61.1-18.5-61.9
                                c-17.5-0.9-19.6,15-21.1,61.1c-1.8,55.9-3.1,125.2-8,126.1c-5.1,1-13.3-23.3-18.1-68.6c-4.2-40.3-6.2-56.7-21.5-55
                                c-16.2,1.8-12.4,23.3-10.7,72.9c1.1,31.1,7.8,106.9,18.3,157.2c12,57.6,21.3,92.8,26.5,129.8c7.4,53,21.9,145,46.2,254.5
                                c7,31.6,33.6,55.4,65.8,58c29.4,2.3,54.8-12.6,68.4-35.1C540.7,947.5,509.2,686.8,511.7,570.2z" />
                            <path class="volunteeringst4  parallax-layer" data-parallax-deep="400"
                                d="M871.8,691.3c-28.7-16.3-57.1,17.3-88,14c-20.3-2.2-0.3-74.8,11.7-135.9c6.9-35.2,13.2-61.7-4.1-65.4
                                c-17.3-3.7-23.4,12.1-30.4,38c-13.3,49.1-30.1,117.9-39,117c-7-0.8,0.9-95.4,8.3-162.7c4.1-37.3,2.3-51.5-12.4-53.1
                                c-14.5-1.6-20.5,4.4-27.6,49.6c-10.8,68.5-27.2,145-33.5,144.3c-6.6-0.7-5.1-56.8-1.7-113.6c2.6-43.3,1.4-61.2-13.7-63
                                c-17.4-2.1-20.7,13.5-25.7,59.5c-6.1,55.6-12.7,124.5-17.7,125.2c-5.2,0.7-11.5-24.2-12.7-69.7c-1.1-40.5-1.8-56.9-17.2-56.3
                                c-16.3,0.7-14.2,22.4-16.3,71.9c-1.3,31.1-0.4,107.1,6.2,157.9c7.5,58.2,14.1,94,16.4,131.2c2,31.6,5.4,77.1,11.1,132.1
                                c3.6,34.1,31,60.9,65.2,63.6h0c43.7,3.4,80.2-33,76.5-76.7c-3.5-42-2.9-82.3,2.9-120.1c5.7-37.3,25-68.3,37.6-81.7
                                C809.5,752.8,892.3,703,871.8,691.3z" />
                        </g>
                    </svg>
                </div>
                <div class="col-md-6" data-aos="fade">
                    <h2>{{ Settings::get('volunteers_sec_title_' . $lang) ?? 'Your volunteering experience at APE is waiting for you' }}
                    </h2>
                    <div class="G_join">
                        <a href="{{ route('volunteers') }}">{{ __('join') }}</a>
                        <div class="break_text">
                            <div class="app_text">
                                <span class="lines_text"></span>
                                <p>
                                    {{ Settings::get('volunteers_sec_text_' . $lang) ?? 'What services can an association provide to the community?' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / sec volunteering  -->

    <!-- sec break two -->
    <section id="break_two">
        <!-- content  -->
        <div class="container">
            <div class="row ">
                <!-- text sec -->
                <div class="col-md-6 text_about left d-flex justify-content-center flex-column flex-wrap">
                    <h4 data-aos="fade">
                        {{ Settings::get('about_sec_title_' . $lang) ?? 'Charity for the people <br> you care about.' }}
                    </h4>
                    <p data-aos="fade">
                        @if (Settings::get('about_sec_description_' . $lang))
                            {{ Settings::get('about_sec_description_' . $lang) }}
                        @else
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        @endif
                    </p>
                </div>
                <!-- / text sec -->
                <!-- img sec -->
                <div class="app_img_break_two" data-aos="fade">
                    <div class="img_break_two">
                        <div class="app_icon">
                            <img src="{{ asset('frontend/assets/images/icon_break_two.png') }}" alt="">
                            <p>
                                {{ Settings::get('about_sec_subtitle_' . $lang) ?? 'We’re here to support you every step of the way.' }}
                            </p>
                        </div>
                        <img class="big_img" src="{{ asset('frontend/assets/images/img_break_two_home.jpg') }}"
                            alt="">
                    </div>
                </div>
                <!-- / img sec -->
            </div>
        </div>
        <!-- / content  -->
        </div>
    </section>
    <!-- / sec break two -->

    <!-- latest news   -->
    <section id="latest_news">
        <div class="container">
            <div class="row">
                <!-- title sec -->
                <div class="sec_title col">
                    <div class="title">
                        <h4>
                            {{ Settings::get('news_sec_title_' . $lang) ?? 'Latest News' }}
                        </h4>
                    </div>
                </div>
                <!-- / title sec -->
            </div>

            <!-- slider card -->
            <div class="row">
                <div class="slider-items-latest_ owl-carousel slider-width-col6">
                    @foreach ($news as $item)
                        <div class="slider-item">
                            <div class="col">
                                <div class="card" style="width: 18rem;" data-aos="fade">
                                    <div class="app_img">
                                        <img class="card-img-top owl-lazy"
                                            data-src='{{ $item->getFirstMediaUrl('images') }}' alt="Card image cap">
                                        <div class="img_icon">
                                            <span>{{ $item->day }} <br> {{ $item->month }} <br>
                                                <div>{{ $item->year }}</div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->title }}</h5>
                                        <p class="card-text">
                                            {!! strip_tags( Str::limit($item->content, 50, '...') ) !!}

                                        </p>
                                    </div>
                                    <div class="footer_card">
                                        <a href="{{ route('show.news.content', $item->id) }}" class="btn"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- / slider card -->

        </div>
    </section>
    <!-- / latest news   -->

    <!-- contact  -->
    <section id="contact">
        <div class="container">
            <div class="row justify-content-between">
                <!-- form contact  -->
                <div class="col-lg-7 col-xl-6 ">
                    <form action="{{ route('subscribe.post') }}" method="post">
                        @csrf
                        <div class="backgrouend_contact">
                            <div class="textAndIcon ">
                                <svg version="1.1" id="OBJECTS" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 149.5 83.7" style="enable-background:new 0 0 149.5 83.7;"
                                    xml:space="preserve">
                                    <style type="text/css">
                                        .contactst0 {
                                            clip-path: url(#contactSVGID_2_);
                                        }

                                        .contactst1 {
                                            fill: #F7F7F7;
                                        }
                                    </style>
                                    <g>
                                        <g>
                                            <g>
                                                <defs>
                                                    <path id="contactSVGID_1_"
                                                        d="M141.9,13.6C136,5,125.1,0.7,114.6,1c-10.4,0.2-20.4,4.4-29.4,9.8c-1.6,0.9-3,2-4.2,3.1
                                                        c-1.2-1.1-2.6-2.2-4.2-3.2C67.9,5.3,57.9,1,47.5,0.7S26.1,4.5,20.1,13.1c-5,7.3-5.9,17-3.4,25.5s8.1,15.8,14.9,21.5
                                                        S46.3,70,54.4,73.6c2.9,1.3,5.9,2.6,8.9,3.8c5.6,2.2,11.4,4,17.4,5c6-1,11.8-2.7,17.4-4.9c3-1.1,6-2.4,8.9-3.7
                                                        c8.1-3.6,16-7.7,22.9-13.4c6.8-5.6,12.5-12.9,15.1-21.4C147.6,30.7,146.9,21,141.9,13.6z" />
                                                </defs>
                                                <clipPath id="contactSVGID_2_">
                                                    <use xlink:href="#contactSVGID_1_" style="overflow:visible;" />
                                                </clipPath>
                                                <g class="contactst0">
                                                    <g>
                                                        <path class="contactst1"
                                                            d="M71.8,61.1c-2.3-4.7-5.2-8.5-6.9-13.2c-1.4,2.2-2.9,4.4-3.8,6.8c-2.6,6.5-1.5,13.8-1.4,20.8
                                                            c1.5,0.6,3.1,1.3,4.6,1.9c3.2,1.2,6.4,2.3,9.6,3.2C75,74,74.7,67.1,71.8,61.1z" />
                                                        <path class="contactst1"
                                                            d="M102.1,55c-0.9-2.3-2.3-4.4-3.6-6.5c-1.7,4.4-4.5,8.1-6.8,12.7c-3,6-3.3,12.9-2.2,19.5
                                                            c3.2-0.9,6.4-1.9,9.5-3.1c1.5-0.5,2.9-1.1,4.4-1.7C103.6,68.8,104.7,61.5,102.1,55z" />
                                                    </g>
                                                    <path class="contactst1"
                                                        d="M142.8,13.6C136.9,5,126,0.7,115.5,1c-10.4,0.2-20.4,4.4-29.4,9.8c-1.6,0.9-3,2-4.2,3.1
                                                        c-1.2-1.1-2.6-2.2-4.2-3.2C68.8,5.3,58.8,1,48.4,0.7S27,4.5,21,13.1c-5,7.3-5.9,17-3.4,25.5s8.1,15.8,14.9,21.5
                                                        c2.1,1.8,4.3,3.4,6.7,4.9c0-1.1-0.1-2.1-0.4-3.2c-0.4-1.2-1.2-2.3-2-3.4c-2.4-3.4-4.9-6.8-7.3-10.2c-3.8-5.3-7.7-11-8-17.5
                                                        c-0.1-1.7,0.6-3.8,2.3-3.8c0.8,0,1.4,0.5,2,1c3,2.6,5.8,7.2,8.5,10.1s5.4,5,9,6.5c3.7,1.5,8.1,0.6,11.5-1.6
                                                        c5.4-3.5,6.1-11.3,10.7-15.7c0.7-0.6,1.5-1.2,2.4-1.4c0.9-0.2,2,0.2,2.4,1c0.3,0.5,0.3,1,0.3,1.5c0,0.3,0.8,5.3,0.5,7.5
                                                        c-0.3,2.5-0.3,5,0.1,7.5c0.3,1.9,0.7,3.7,1.7,5.3c1.3,2.1,3.6,3.8,6.2,4.4c0.8,0.2,1.7,0.3,2.5,0.3s1.7-0.1,2.5-0.3
                                                        c2.6-0.6,4.9-2.3,6.2-4.4c1-1.6,1.5-3.5,1.8-5.3c0.4-2.5,0.4-5,0.2-7.5c-0.2-2,0.2-6.9,0.2-7.4s0-1.1,0.3-1.5
                                                        c0.5-0.8,1.5-1.1,2.4-1c0.9,0.2,1.7,0.8,2.4,1.4c4.6,4.5,5.3,12.2,10.6,15.8c3.3,2.2,7.8,3.1,11.4,1.7c3.7-1.4,6.3-3.5,9.1-6.4
                                                        c2.7-2.9,5.6-7.5,8.6-10.1c0.6-0.5,1.2-1,2-1c1.7,0,2.3,2.2,2.3,3.8c-0.3,6.5-4.3,12.1-8.1,17.4c-2.5,3.4-4.9,6.8-7.4,10.1
                                                        c-0.8,1.1-1.6,2.1-2,3.4c-0.4,1-0.5,2.1-0.5,3.2c2.4-1.5,4.8-3.2,7-5c6.8-5.6,12.5-12.9,15.1-21.4
                                                        C148.5,30.7,147.8,21,142.8,13.6z M47.5,38.2c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2S52,38.2,47.5,38.2z
                                                        M81.8,49.2c-4.2,0-7.5-3.4-7.5-7.6s3.4-7.5,7.6-7.5s7.5,3.4,7.5,7.6C89.4,45.8,86,49.2,81.8,49.2z M117.2,38.4
                                                        c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2C125.5,34.8,121.8,38.5,117.2,38.4z" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <path class="contactst1"
                                        d="M26.4,68.8c0.4,0.5,0.9,0.9,1.3,1.3c1.3,1.1,2.8,1.8,4.4,2c0.8,0.1,1.6,0,2.1-0.6c0.6-0.7,0.5-1.9,0-2.7
                                        c-0.8-1.4-2.1-2.3-3.3-3.2c-1.5-1.2-2.9-2.4-4.3-3.8c-0.4-0.4-0.8-0.8-1.3-0.7c-1.4,0.2-1.4,2.8-1.2,3.8
                                        C24.5,66.3,25.4,67.7,26.4,68.8z" />
                                    <path class="contactst1"
                                        d="M15,19.3c0.4-1.4,0.2-3,0.5-4.5c0.4-2,1.8-3.6,3.4-4.9c1.1-1,2.4-2.2,2.1-3.6c-0.3-1.3-1.8-1.9-3.1-2
                                        C15.1,4,12.3,5,10.1,6.6s-4,3.8-5.5,6.2c-1.1,1.7-2,3.5-2.3,5.5s0,4.1,1.2,5.7C7.1,28.6,13.9,23.6,15,19.3z" />
                                    <path class="contactst1"
                                        d="M144.6,51c1,0.3,1.9,1.2,2.3,2.2c0.3,0.7,0.5,1.4,0.3,2.1c-0.2,0.8-0.7,1.4-1.4,1.8c-1.9,1-5,0.3-5.3-2.1
                                        C140.3,52.7,142.2,50.2,144.6,51z" />
                                    <path class="contactst1"
                                        d="M142.3,60.5c-0.6-0.5-1.4-0.7-2.1-0.8c-1.5-0.1-3,0.4-4.3,1.2c-2.1,1.3-3.8,3.4-4.5,5.8
                                        c-0.2,0.5-0.3,1.1-0.2,1.7c0.6,3.4,6.9,3.4,9.1,1.8C142.4,68.5,144.7,62.7,142.3,60.5z" />
                                </svg>
                                <p>
                                    {{ Settings::get('subscribe_form_title_' . $lang) ?? 'We’re here to support you every step of the way.' }}
                                </p>
                            </div>
                        </div>
                        <div class="app_all_input">
                            <div class="form-grope">
                                <label for="name">{{ __('leave your name here') }}</label>
                                <input type="text" name="name" id="name"
                                    placeholder="{{ __('your name') }}">
                            </div>
                            <div class="form-grope">
                                <label for="email">{{ __('leave your email here') }}</label>
                                <input type="email" name="email" id="email"
                                    placeholder="{{ __('your email') }}">
                            </div>
                            <div class="form-grope">
                                <label for="phone">{{ __('leave your phone number here  “optional”') }}</label>
                                <input type="tel" name="phone" id="phone"
                                    placeholder="{{ __('your phone number') }}">
                            </div>
                            <button type="submit">{{ __('Subscribe') }}</button>
                        </div>
                    </form>
                </div>
                <!-- / form contact  -->

                <!-- text sec -->
                <div
                    class="col-lg-5 col-xl-6 pl-lg-5 text_contact left d-flex justify-content-center flex-column flex-wrap">
                    <h4 data-aos="fade" data-aos-duration="500">
                        {{ Settings::get('subscribe_sec_title_' . $lang) ?? 'keep you updated with our news' }}
                    </h4>
                    <p data-aos="fade" data-aos-duration="1000">
                        @if (Settings::get('subscribe_sec_description_' . $lang))
                            {{ Settings::get('subscribe_sec_description_' . $lang) }}
                        @else
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            <br><br> when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book.
                        @endif
                    </p>
                </div>
                <!-- / text sec -->
            </div>
        </div>

    </section>
    <!-- / contact -->

    <!-- footer  -->
    @include('frontend::includes.footer')
    <!-- / footer  -->

    @notifyJs
    <!-- script  -->
    @include('frontend::includes.scripts', ['page' => 'home'])
    <!-- / script  -->

</body>

</html>
