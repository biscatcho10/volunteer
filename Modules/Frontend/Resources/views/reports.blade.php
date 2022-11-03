<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ site_name() }} | {{ __('Reports') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ app_favicon() }}">

    <!-- SEO data  -->
    @include('frontend::includes.seo', ['page' => 'reports'])
    <!-- /SEO data  -->

    {{-- @notifyCss --}}
    <!-- styles -->
    @include('frontend::includes.styles', ['page' => 'reports'])
    <!-- end styles -->

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

    <!-- hero container section  -->
    <div class="hero_container">
        <div class="container">
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt=""
                class="left_img img_sec_video">
            <div class="row frist_row">
                <!-- pdf card section  -->
                <section id="sectionPDF" class="">
                    <!-- text section -->
                    <div class="d-flex text_sec justify-content-between">
                        <h3 class="col-5">
                            {{ Settings::get('report_page_title_' . $lang) ?? 'our annual reports' }}
                        </h3>
                        <p class="col-6">
                            @if (Settings::get('report_page_desc_' . $lang))
                                {{ Settings::get('report_page_desc_' . $lang) }}
                            @else
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Have you done google research which works all the time.
                            @endif
                        </p>
                    </div>
                    <!-- / text section -->

                    <!-- pdf card -->
                    <div class="row">
                        <!-- clouds img -->
                        <div class="clouds left"></div>
                        <div class="clouds right"></div>
                        <!-- clouds img -->
                        <div class="clouds left"></div>
                        <div class="clouds right"></div>

                        @forelse ($reports as $report)
                            <!-- Item -->
                            <div class="col-sm-6 col-md-4 col-xl-3">
                                <div class="pdfCard" data-aos="fade">
                                    <!-- top card  -->
                                    <div class="top_card">
                                        <img src="{{ $report->getFirstMediaUrl('images') }}"
                                            alt="">
                                        <div class="text_card">
                                            <p>{{ $report->name }}</p>
                                        </div>
                                    </div>
                                    <!-- btn card  -->
                                    <div class="app_btn" dir-right="{{ $lang == 'ar' ? 'true' : 'false' }}"
                                        source='{{ $report->getFile($lang) }}'>
                                        <a download class="downloadBtn" data-report="{{ $report->id }}" href="{{ $report->getFile($lang) }}">{{ __('download') }}</a>
                                        <button class="MyPdf previewBtn" data-report="{{ $report->id }}">{{ __('preview') }}</button>
                                    </div>
                                </div>
                            </div>
                            <!-- / Item -->
                        @empty
                        @endforelse

                    </div>
                    <!-- / pdf card -->


                    <div class="Pagination">
                        {{ $reports->links() }}
                    </div>
                </section>
                <!-- / pdf card section  -->

                <!-- section Subscribe  -->
                @include('frontend::includes.subscribe1')
                <!-- / section Subscribe  -->

            </div>
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt=""
                class="right_img img_sec_video">
        </div>
    </div>
    <!-- hero container section  -->

    <!-- footer  -->
    @include('frontend::includes.footer')
    <!-- / footer  -->

    @notifyJs
    <!-- scripts  -->
    @include('frontend::includes.scripts', ['page' => 'reports'])
    <!-- / scripts  -->

</body>

</html>
