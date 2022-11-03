<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ site_name() }} | {{ __('Services') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ app_favicon() }}">

    <!-- SEO data  -->
    @include('frontend::includes.seo', ['page' => 'services'])
    <!-- /SEO data  -->

    <!-- styles -->
    @include('frontend::includes.styles', ['page' => 'services'])
    <!-- end styles -->
    {{-- @notifyCss --}}

</head>

<body dirPage='{{ $ar }}'>
    @include('notify::components.notify')

    <!-- header -->
    @include('frontend::includes.header')
    <!-- / header -->

    <!-- of hero -->
    <section class="img_sigl_page">
    </section>
    <!-- / of hero -->

    <!-- hero container sec -->
    <div class="hero_container">
        <div class="container">
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt=""
                class="left_img img_sec_video">
            <div class="row frist_row">
                <!-- card sec -->
                <section id="slider_card" class="">
                    <!-- text sec -->
                    <div class="d-flex text_sec justify-content-between align-items-center">
                        <h3 class="col-5">
                            {{ Settings::get('service_page_title_' . $lang) }}
                        </h3>
                        <p class="col-6">
                            {{ Settings::get('service_page_desc_' . $lang) }}
                        </p>
                    </div>
                    <!-- / text sec -->

                    <!-- card -->
                    <div class="row" data-aos="fade">
                        <!-- clouds img -->
                        <div class="clouds left"></div>
                        <div class="clouds right"></div>


                        @forelse ($services as $service)
                            <!-- Item -->
                            <div class="col-md-6 col-xl-4">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="{{ $service->getFirstMediaUrl('images') }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <div class="singl_icon">
                                            <div class="icon_">
                                                <img src="{{ $service->getFirstMediaUrl('icons') }}" alt="">
                                            </div>
                                            <span>{{ $service->name }}</span>
                                        </div>
                                        <p class="card-text">
                                            {{ Str::limit($service->description, 150, '...') }}
                                        </p>
                                        <a href="{{ route('sub.services', $service->id) }}"
                                            class="btn">{{ __('Read More...') }}</a>
                                    </div>
                                </div>
                            </div>
                            <!-- / Item -->
                        @empty
                        @endforelse

                    </div>
                    <!-- / card -->

                    <div class="Pagination">
                        {{ $services->links() }}
                    </div>
                </section>
                <!-- / card sec -->

                <!-- section Subscribe  -->
                @include('frontend::includes.subscribe1')
                <!-- / section Subscribe  -->

            </div>
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt=""
                class="right_img img_sec_video">
        </div>
    </div>
    <!-- hero container sec -->



    <!-- footer  -->
    @include('frontend::includes.footer')
    <!-- / footer  -->

    @notifyJs
    <!-- script  -->
    @include('frontend::includes.scripts', ['page' => 'services'])
    <!-- / script  -->

</body>

</html>
