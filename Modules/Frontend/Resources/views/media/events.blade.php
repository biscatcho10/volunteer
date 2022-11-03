<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ site_name() }} | {{ __('Events') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ app_favicon() }}">

    <!-- styles -->
    @include('frontend::includes.styles', ['page' => 'sub-services'])
    <!-- end styles -->


</head>

<body dirPage='{{ $ar }}'>
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
                <!-- media_card -->
                <section id="media_card" class="">
                    <div class="row">
                        <!-- clouds img -->
                        <div class="clouds left"></div>
                        <div class="clouds right"></div>
                        <!-- clouds img -->
                        <div class="clouds left"></div>
                        <div class="clouds right"></div>

                        @forelse ($events as $event)
                            <!-- start all card -->
                            <div class="col-md-6 col-xl-4">
                                <a href="{{ route('event.show', $event->id) }}" class="my_Card" data-aos="fade">
                                    <!-- top card  -->
                                    <div class="top_card">
                                        <img src="{{ $event->getFirstMediaUrl('events') }}" alt="">
                                    </div>
                                    <!-- btn card  -->
                                    <div class="app_text" dir-right="true"
                                        source='./assets/pdf/_media_publication_document_SFSD-Combating-Unemployment-Together-Brochure-AR-1.pdf'>
                                        <h3 class="title_card">{{ $event->name }}</h3>
                                        <p>
                                            {{ Str::limit($event->description, 150, '...') }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @empty
                        @endforelse

                    </div>
                    <div class="Pagination">
                        {{ $events->links() }}
                    </div>
                </section>
                <!-- / media_card -->

            </div>
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt=""
                class="right_img img_sec_video">
        </div>
    </div>
    <!-- hero container section  -->

    <!-- footer  -->
    @include('frontend::includes.footer')
    <!-- / footer  -->

    <!-- scripts -->
    @include('frontend::includes.scripts', ['page' => 'sub-services'])
    <!-- / scripts -->

</body>

</html>
