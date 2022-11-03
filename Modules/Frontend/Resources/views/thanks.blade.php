<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ site_name() }} | {{ __('Thanks') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ app_favicon() }}">

    <!-- styles -->
    @include('frontend::includes.styles', ['page' => 'thanks'])
    <!-- end styles -->

</head>
<body dirPage='{{ $ar }}'>

    <!-- header -->
    @include('frontend::includes.header')
    <!-- / header -->

    <!-- sec hero -->
    <section class="img_sigl_page" >
    </section>
    <!-- / sec hero -->

    <!-- hero container section  -->
    <div class="hero_container">
        <div class="container">
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt="" class="left_img img_sec_video">
           <div class="row frist_row">
                <!-- sec donations  -->
                <section id="donations" class="donations_thanks">
                    <form action="">
                        <div class="row_grid">

                            <!-- clouds img -->
                            <div class="clouds left"></div>
                            <div class="clouds right"></div>

                            <!-- left section  -->
                            <div class="content_left">
                                <div class="top_cont">
                                    <h2 class="title">
                                        <svg version="1.1" id="OBJECTS" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 102 89" style="enable-background:new 0 0 102 89;" xml:space="preserve">
                                            <style type="text/css">
                                                .drdst0{fill-rule:evenodd;clip-rule:evenodd;fill:#A2BC3F;}
                                                .drdst1{fill-rule:evenodd;clip-rule:evenodd;fill:#27542B;}
                                            </style>
                                            <path class="drdst0" d="M6.2,14.2C14.6,0.2,34.5-2.3,45.7,9.9c1.1,1.2,2,2.1,2.8,2.8c-3.7,3.9-7.9,3.2-14.7,1.9
                                                c14.6,6.9,17-2.1,26.3-8.4c11.5-7.8,27.9-4.4,35.3,8c0.9,1.6,1.7,3.2,2.2,5c-8.1-6-17.5-6.8-24.9-6.5c10.2,1.4,17.8,2.4,25.9,11.7
                                                c0.2,2.5,0.2,5.2-0.1,7.9c-1.8-5.7-6.1-10.7-13.2-13.8c-13.7-5.9-33.5-2.9-41.7,4.7c-1.7,1.5-1.9,2.3-1.5,3c0.5,1,2.1,0,3.6-1.1
                                                c2.7-1.9,5.5-3,8.2-2.8c2.2,0.1,2.2,0.6,0,1.1c-5.5,1.2-8.2,3.7-11.3,7.9c-1.1,1.4-0.9,2.2-0.5,2.5c0.5,0.5,1.5,0.2,2.8-1
                                                c2.8-2.8,6-5,10.3-5.6c1.9-0.3,2.7-0.2,0.5,0.8c-5.1,2.4-7.8,4.7-11.2,9.6c-2,2.9,0.2,4.6,2.4,2.2c4.1-4.6,6-6.9,11.3-8.3
                                                c2.1-0.6,1.6,0,0.3,0.9c-2.9,1.9-4.8,3.8-6.9,6.5c-0.7,0.9-2.4,3.4-0.9,4.2c1.1,0.7,2.9-1.6,3.6-2.4c2.7-3.2,5.4-5,9.4-5.6
                                                c2.6-0.4,4.3-0.2,2.5,2.8c-0.5,0.8-0.9,1.6-1.2,2.4c-1.4,3.7,0.7,5.9,3.7,1.5c0.6-0.9,1.2-1.7,1.8-2.4c11.4-14.4,24.7-9,24.4,3.5
                                                C94.1,59.7,70,87.1,51.9,87c-7.3,0-15-4.2-22.3-10.4c8.1,2.1,14.9,0.6,23.2-1.7c-8.7,1.2-14.9,2.4-26.2-1c-1.2-1.1-2.4-2.3-3.6-3.6
                                                c13.4,5.8,30.6,3.7,39.3-5.9c1.6-1.7,1.7-2.5,1.3-3.2c-0.6-1-2.1,0.2-3.6,1.4c-2.6,2.2-5.4,3.6-8.2,3.6c-2.3,0-2.3-0.4-0.1-1.1
                                                c5.5-1.7,8.2-4.5,11.1-9.1c1-1.6,0.7-2.3,0.3-2.7c-0.6-0.5-1.6-0.1-2.8,1.3c-2.7,3.1-5.8,5.7-10.2,6.6c-2,0.4-2.8,0.5-0.5-0.8
                                                c5-2.9,7.6-5.5,10.8-10.9c1.8-3.1-0.6-4.8-2.7-2c-3.8,5.1-5.6,7.7-11,9.6c-2.2,0.8-1.7,0.1-0.4-0.9c2.8-2.2,4.6-4.4,6.6-7.3
                                                c0.7-1,2.2-3.7,0.6-4.5c-1.2-0.6-2.8,1.9-3.5,2.8c-2.5,3.5-5.2,5.6-9.2,6.6c-2.7,0.6-4.4,0.5-2.8-2.7c0.4-0.9,0.8-1.8,1.1-2.6
                                                c1.1-3.9-1.2-6.1-3.9-1.2c-0.5,0.9-1.1,1.8-1.6,2.7c-5.1,7.7-12.8,8.9-17.3,8.2C3.4,56.1-1.8,27.7,6.2,14.2z"/>
                                            <path class="drdst1" d="M6.2,14.2C11.5,5.3,21.6,1,31,2.3C-4.9,1.8,1.1,53,27.3,56c-4,2.4-8.2,2.7-11.1,2.2C3.4,56.1-1.8,27.7,6.2,14.2
                                                z"/>
                                            <path class="drdst1" d="M78.2,32.4c8.8-4.5,16.6,0.9,16.3,10.5C94.1,59.7,70,87.1,51.9,87c-6.2,0-12.7-3.1-19.1-7.8
                                                C66.2,103.4,106,30.1,78.2,32.4z"/>
                                        </svg>
                                        Donations
                                    </h2>
                                    <h2 class="title thanks_title">
                                        thank you
                                    </h2>
                                    <p>
                                        Mr. ..........
                                        Thank you for agreeing to be a sponsor of this year's XYZ Benefit to be held on date at location where event will be held. Securing sponsors for this important fundraiser is especially important this year, as we face the daunting challenges of this economic crisis. Your support of $   is a great vote of confidence in our mission.
                                        As a sponsor, you will receive thanks and recognition in the event program and will also be entitled to two tickets for the event. We look forward to seeing you there!
                                        <br><br><br>
                                        Please accept our most sincere thanks for your support.
                                        Best regards,
                                    </p>
                                    <div class="Signature">
                                        <h5>
                                            ape team
                                        </h5>
                                        <span>Thank You</span>
                                    </div>
                                </div>
                            </div>
                            <!-- / left section  -->

                        </div>
                    </form>
                </section>
                <!-- / sec donations  -->
            </div>
            <img src="{{ asset('frontend/assets/svg/backgrouend_hero.svg') }}" alt="" class="right_img img_sec_video">
        </div>
    </div>
    <!-- hero container section  -->

    <!-- footer  -->
    @include('frontend::includes.footer')
    <!-- / footer  -->

    <!-- scripts  -->
    @include('frontend::includes.scripts', ['page' => 'thanks'])
    <!-- / scripts  -->

</body>
</html>
