<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ site_name() }} | {{ __('Media') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ app_favicon() }}">

    <!-- SEO data  -->
    @include('frontend::includes.seo', ['page' => 'media'])
    <!-- /SEO data  -->

    <!-- styles -->
    @include('frontend::includes.styles', ['page' => 'media'])
    <!-- end styles -->
    {{-- @notifyCss --}}


</head>
<body dirPage='{{ $ar }}'>
    @include('notify::components.notify')

    <!-- header -->
    @include('frontend::includes.header')
    <!-- / header -->

    <!-- of hero -->
    <section class="img_sigl_page" >
    </section>
    <!-- / of hero -->

    <!-- hero container section  -->
    <div class="hero_container">
        <div class="container">
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt="" class="left_img img_sec_video">
           <div class="row frist_row">
                <!-- card section  -->
                <section id="media" class="">
                    <!-- card -->
                    <div class="row">
                        <!-- clouds img -->
                        <div class="clouds left"></div>
                        <div class="clouds right"></div>
                        <!-- clouds img -->
                        <div class="clouds left"></div>
                        <div class="clouds right"></div>

                        <!-- start catalog  -->
                        <div class="catalog">
                            @forelse ($media as $item)
                                <!-- singl -->
                                <a href="{{ route('media.events', $item->id) }}" class="singl" >
                                    <!-- start img section  -->
                                    <div class="content_" style="background: url({{ $item->getFirstMediaUrl('albums') }}) center no-repeat;">
                                        <div class="icon">
                                            {{-- <img src="{{ asset('frontend/assets/images/media_one-01-Edit.png') }}" alt=""> --}}
                                        </div>
                                        <div class="text_title">
                                            <span>{{ $item->name }}</span>
                                        </div>
                                    </div>
                                    <!-- start text section  -->
                                    <div class="text_sec">
                                        <h3>{{ $item->name }}</h3>
                                        <p>{!! $item->description !!}</p>
                                    </div>
                                </a>
                            @empty

                            @endforelse
                        </div>

                    </div>
                    <!-- / card -->

                    <div class="Pagination">
                        {{ $media->links() }}
                    </div>
                </section>
                <!-- / card section  -->

                <!-- section Subscribe  -->
                @include('frontend::includes.subscribe1')
                <!-- / section Subscribe  -->

            </div>
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt="" class="right_img img_sec_video">
        </div>
    </div>
    <!-- hero container section  -->

    <!-- footer  -->
    @include('frontend::includes.footer')
    <!-- / footer  -->

    @notifyJs
    <!-- scripts  -->
    @include('frontend::includes.scripts', ['page' => 'media'])
    <!-- / scripts  -->


</body>
</html>
