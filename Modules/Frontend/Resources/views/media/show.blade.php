<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ site_name() }} | {{ __('Show Media') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ app_favicon() }}">

    <!-- styles -->
    @include('frontend::includes.styles', ['page' => 'media-show'])
    <!-- end styles -->


</head>

<body dirPage='{{ $ar ? 0 : 1 }}'>

    <!-- header -->
    @include('frontend::includes.header')
    <!-- / header -->

    <!-- of hero -->
    <section class="img_sigl_page">
    </section>
    <!-- / of hero -->

    <!-- hero container section  -->
    <div class="hero_container">
        <div class="container">
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt=""
                class="left_img img_sec_video">
            <div class="row frist_row">
                <!-- start big card  -->
                <section id="mediaGallery">
                    <div class="row line_backgrouend">
                        <!-- clouds img -->
                        <!-- <div class="clouds left"></div>
                        <div class="clouds right"></div> -->
                        <!-- start grid card  -->
                        <div class="text_sec">
                            <!-- title  -->
                            <div class="title_">
                                <h3>
                                    {{ $event->name }}
                                </h3>
                            </div>
                            <!-- text  -->
                            <p>
                                {{ $event->description }}
                            </p>
                        </div>


                        <!-- start grid gallery  -->
                        <div class="grid_container">
                            @forelse ($event->data as $item)
                                @if ($item['type'] == 'image')
                                    <div class="popup-btn" typeOF='img' source='{{ $item['preview'] }}'>
                                        <img src="{{ $item['url'] }}" alt="picsum">
                                    </div>
                                @else
                                    <div class="popup-btn" typeOF='video' source='{{ $item['url'] }}'>
                                        <img src="{{ $item['preview'] }}" alt="picsum">
                                    </div>
                                @endif
                            @empty
                            @endforelse
                        </div>

                    </div>
                </section>
                <!-- / big card  -->

            </div>
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt=""
                class="right_img img_sec_video">
        </div>
    </div>
    <!-- hero container section  -->
    <!-- video popup  -->
    <div class="video-popup">
        <div class="popup-bg"></div>
        <div class="popup-content">
            <iframe class="youtube-video" src="" width="100%" class="videoo" allowfullscreen
                frameborder="0"></iframe>
            <img src="" id="myImgs" alt="">
        </div>
    </div>
    <!-- / section video  -->
    <!-- section Subscribe  -->
    @include('frontend::includes.subscribe')
    <!-- / section Subscribe  -->

    <!-- footer  -->
    @include('frontend::includes.footer')
    <!-- / footer  -->

    <!-- scripts  -->
    @include('frontend::includes.scripts', ['page' => 'show-media'])
    <!-- / scripts  -->


</body>

</html>
