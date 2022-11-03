<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ site_name() }} | {{ __('Show Service') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ app_favicon() }}">

    <!-- styles -->
    @include('frontend::includes.styles', ['page' => 'show-service'])
    <!-- end styles -->


</head>

<body dirPage='{{ $ar }}'>

    <!-- header -->
    @include('frontend::includes.header')
    <!-- / header -->

    <!-- hero container section  -->
    <div class="hero_container">
        <div class="container">
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt=""
                class="left_img img_sec_video">
            <div class="row frist_row">
                <!-- start big card  -->
                <section id="singl_services">
                    <div class="row line_backgrouend">
                        <!-- clouds img -->
                        <!-- <div class="clouds left"></div>
                        <div class="clouds right"></div> -->

                        <!-- start grid card  -->
                        <div class="grid_card">
                            <div class="singl_card">
                                <img src="" alt="">
                            </div>
                            @forelse ($service->images as $img)
                                <!-- singl  -->
                                <div class="singl_card">
                                    <img src="{{ $img['url'] }}" alt="">
                                </div>
                            @empty
                            @endforelse
                        </div>
                        {{-- <div class="grid_card grid_card_other">
                            @forelse ($service->images as $img)
                                <!-- singl  -->
                                <div class="singl_card">
                                    <img src="{{ $img['url'] }}" alt="">
                                </div>
                            @empty
                            @endforelse
                        </div> --}}
                        <!-- start grid card  -->
                        <div class="text_sec">
                            <!-- title -->
                            <div class="title_">
                                <h3>
                                    {{ $service->name }}
                                </h3>
                                <div class="icon_">
                                    <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 564 485" style="enable-background:new 0 0 564 485;"
                                        xml:space="preserve">
                                        <style type="text/css">
                                            .st06 {
                                                fill: #9A78FF;
                                            }

                                            .st16 {
                                                fill: #0E5625;
                                            }

                                            .st26 {
                                                fill: #9CBF12;
                                            }

                                            .st36 {
                                                fill: #F2B410;
                                            }
                                        </style>
                                        <g>
                                            <g>
                                                <path class="st06"
                                                    d="M152.9,278.7C39.2,213.1,90.2,96.9,171.6,160.8C207.6,189,264,268.2,283.3,309c12-55.7,45.4-145.8,84.5-187.6
                                                    c-34.3,14.8-66.3,49.9-84.5,83.6C250.8,144.3,188,84.8,128.5,71.4c-36.4-8-66.4-4-88,9.8C-12.4,124.2,46.9,254.4,152.9,278.7
                                                    L152.9,278.7z" />
                                                <path class="st16"
                                                    d="M283.3,167.8c87.9-132.8,191.5-64.6,161.8-6.5c59.4-21.8,85.8-110.8,17.2-149.9c-55.2-21-123.5-8.7-179,57.4
                                                    c-81.9-97.5-191.6-77.7-246-7.6C107.3,27.8,204.8,49.1,283.3,167.8L283.3,167.8z" />
                                                <path class="st26"
                                                    d="M462.3,11.4c52.3,42.6,33.2,116.8-17.2,149.9c-20.8,13.8-47,20.4-75.7,15c-18.9-3.5-36.9,1.4-21.5,22.9
                                                    c7.2,10.1,23.2,17.6,35.3,22.2c10.3,3.8,28.2,6.8,10.4,22.3c-24.9,21.5-51.9,39.2-81.2,54.8c-21.5,11.3-11.3,37.2,15.7,25.5
                                                    c31.2-13.6,60.4-31.5,86.6-53.1c-36.2,32.3-76.8,57.1-120.4,78.2c-24.9,12-11.2,36.9,11.6,26.4c44.4-20.4,86.1-46,124.4-76.4
                                                    c-31.8,28.9-66.7,54.4-104,75.7c-29.1,16.9-13.7,42.4,13,28.9c42.9-21.9,81.4-52.3,117-84.7c-27.1,31.7-58.1,59.7-92.4,83.4
                                                    c-24.6,16.9-4.1,42,17.5,26.7c74.7-53,137.1-124.4,168.2-203.9C587.3,128,536.9,39.4,462.3,11.4L462.3,11.4z" />
                                                <path class="st06"
                                                    d="M304.6,407c2.3-12.7-4-19.6-17.1-23.2c-68.1-18.3-104.8-33.1-110.4-44.4C139.2,347,292,404.5,304.6,407
                                                    L304.6,407z" />
                                                <path class="st06"
                                                    d="M304.6,407c-82.7-31.7-126.4-53.4-131.2-64.7c-27.5,8.5,125,97.5,149.8,103.3c13.8-8,13.1-26.4-10.1-35.3
                                                    C310.2,409.2,307.3,408.1,304.6,407L304.6,407z" />
                                                <path class="st06"
                                                    d="M313.2,436.5C240,385.7,183.9,369,171.5,345.3c-6.6,4.9-1.2,14.6,8.3,23c24,21.7,119.6,91.3,121.1,105.3
                                                    c25.6,12,38.4-8.9,22.3-28.1C320.6,442.4,317.3,439.4,313.2,436.5L313.2,436.5z" />
                                                <path class="st36"
                                                    d="M209.8,292.4c-20.4-2.3-39.4-7.1-56.9-13.8C51.1,239.4,1.5,133.8,40.4,81.2C2.7,105.1-9,158.1,17.1,225
                                                    c41.1,105.4,137.1,196.5,244.5,249.5c38.7,19.1,59.7-10.6,20.9-34.3c-35.1-21.4-68.2-46-98.7-73.6c-18.5-16.5-18-27.9,10-31.6
                                                    c8.6-1.1,17.1-2.5,25.7-4C249.7,325.7,247.3,296.5,209.8,292.4L209.8,292.4z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <!-- text -->
                            <div class="description_service">
                                {!! $service->getDesc() !!}
                            </div>
                        </div>
                    </div>
                </section>
                <!-- / big card  -->

                <!-- start mini card  -->
                {{-- <section id="crad_mini">
                    <div class="row line_backgrouend">
                        <!-- clouds img -->
                        <!-- <div class="clouds left"></div>
                        <div class="clouds right"></div> -->

                        <!-- grid card mini  -->
                        <div class="grid_card_mini">
                            @forelse ($service->images as $img)
                                <!-- singl  -->
                                <div class="singl_card">
                                    <img src="{{ $img['url'] }}" alt="">
                                </div>
                            @empty
                            @endforelse

                        </div>
                        <!-- grid card mini  -->

                    </div>
                </section> --}}
                <!-- start mini card  -->
            </div>
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt=""
                class="right_img img_sec_video">
        </div>
    </div>
    <!-- hero container section  -->

    <!-- section Subscribe  -->
    @include('frontend::includes.subscribe')
    <!-- / section Subscribe  -->

    <!-- footer  -->
    @include('frontend::includes.footer')
    <!-- / footer  -->

    <!-- scripts  -->
    @include('frontend::includes.scripts', ['page' => 'show-service'])
    <!-- / scripts  -->

</body>

</html>
