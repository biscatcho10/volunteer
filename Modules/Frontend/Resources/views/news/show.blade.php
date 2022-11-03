<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ site_name() }} | {{ __('Show News') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ app_favicon() }}">

    <!-- styles -->
    @include('frontend::includes.styles', ['page' => 'news'])
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
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt="" class="left_img img_sec_video">
           <div class="row frist_row">
                <!-- foundation  -->
                <section id="news_" class="mysec">
                    <div class="row justify-content-between ">
                        <!-- img section  -->
                        <div class="col-lg-8 mt-5">
                            <div class="perantImg" data-aos="fade">
                                <img src="{{ $news->getFirstMediaUrl('images') }}" alt="">
                            </div>
                        </div>
                        <!-- / img section  -->
                        <!-- title section -->
                        <div class="col-lg-4 mt-5">
                            <div class="left_section">
                                <h2 data-aos="fade" class="title mb-2">
                                    {{ $news->title }}
                                </h2>
                                <span>{{ $news->day ." ". $news->month . "  ". $news->year }}</span>
                            </div>
                        </div>
                        <!-- / title section -->
                        <!-- content text -->
                        <div class="col-lg-12 mt-5">
                            <p data-aos="fade">
                                {!! $news->getContent() !!}
                            </p>
                        </div>
                        <!-- / content text -->
                    </div>
                </section>
                <!-- / news  -->
            </div>
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt="" class="right_img img_sec_video">
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
    @include('frontend::includes.scripts', ['page' => 'news'])
    <!-- / scripts  -->


</body>
</html>
