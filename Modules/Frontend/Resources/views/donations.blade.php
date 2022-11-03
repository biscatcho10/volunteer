<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ site_name() }} | {{ __("Donations") }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ app_favicon() }}">

    <!-- SEO data  -->
    @include('frontend::includes.seo', ['page' => 'donations'])
    <!-- /SEO data  -->

    {{-- @notifyCss --}}
    <!-- styles -->
    @include('frontend::includes.styles', ['page' => 'donations'])
    <!-- end styles -->

</head>
<body dirPage='{{ $ar }}'>
    @include('notify::components.notify')
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
                <section id="donations">
                    <form action="">
                        <div class="row_grid">
                            <!-- clouds img -->
                            <div class="clouds left"></div>
                            <div class="clouds right"></div>

                            <!-- left section  -->

                            <div class="content_left">

                                <!-- content top  -->

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
                                        {{ __("Donations") }}
                                    </h2>
                                    <p>
                                        @if (Settings::get('donation_page_description_'.$lang))
                                            {{ Settings::get('donation_page_description_'.$lang) }}
                                        @else
                                        Your donation to the Family Gift Fund helps provide gifts and support to struggling children and families. You’ll help them meet urgent needs and let them know how much you care about their their well-being.
                                        <br><br>
                                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been, remaining essentially unchanged.
                                        @endif
                                    </p>
                                </div>

                                <!-- conent center  -->

                                <div class="center_cont">
                                    <label for="opt1" myText=".OnlineDonation" class="radio myRadio">
                                        <input type="radio" checked name="rdo" id="opt1" class="hidden"/>
                                        <label class="text" >{{ __("Online Donation") }}
                                            <span class="label"></span>
                                        </label>
                                    </label>

                                    <label for="opt2" myText=".offlineDonation" class="radio myRadio">
                                        <input type="radio" name="rdo" id="opt2" class="hidden"/>
                                        <label class="text" >{{ __("offline Donation") }}
                                            <span class="label"></span>
                                        </label>
                                    </label>

                                    <div class="my_input">
                                        <div class="form-grope">
                                            <label for="username">{{ __("Your Name") }}</label>
                                            <input type="text" name="username" id="username" placeholder="{{ __('your name') }}">
                                        </div>
                                        <div class="form-grope egp">
                                            <label for="number">{{ __("Donation Amount") }}</label>
                                            <input type="number" name="donationAmount" id="donationAmount" placeholder="100">
                                        </div>
                                    </div>
                                </div>

                                <!-- content bottom  -->

                                <div class="bottom_cont">
                                    <h3>{{ __("Donation methods") }}</h3>
                                    <div class="logo_ d-flex">
                                        @foreach ($methods as $item)
                                            <img src="{{ $item->getFirstMediaUrl('images') }}" alt="">
                                        @endforeach
                                    </div>
                                    <p>
                                        @if (Settings::get('donation_method_description_'.$lang))
                                            {{ Settings::get('donation_method_description_'.$lang) }}
                                        @else
                                        . Your donation to the Family Gift Fund helps provide helps and support to ape services, is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been, remaining essentially unchanged.
                                        @endif
                                    </p>
                                </div>
                            </div>

                            <!-- right section  -->

                            <div class="content_right">
                                <!-- backgrouend form  -->
                                <div class="backgrouend_svg">

                                    <!-- svg top  -->

                                    <svg version="1.1" class=" top_s my_Svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 342 146.8" style="enable-background:new 0 0 342 146.8;" xml:space="preserve">
                                    <style type="text/css">
                                        .ssast0{opacity:0.3;fill:url(#SVGID_1_);enable-background:new    ;}
                                        .ssast1{opacity:0.45;fill:url(#SVGID_2_);enable-background:new    ;}
                                        .ssast2{opacity:0.4;}
                                        .ssast3{fill:#FFFFFF;}
                                        .ssast4{opacity:0.6;}
                                        .ssast5{fill:none;stroke:#FFFFFF;stroke-width:0.49;stroke-miterlimit:10;}
                                        .ssast6{opacity:0.6;fill:#FFFFFF;enable-background:new    ;}
                                        .ssast7{opacity:0.6;fill:none;stroke:#FFFFFF;stroke-width:0.49;stroke-miterlimit:10;enable-background:new    ;}
                                    </style>
                                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="164.6633" y1="89.119" x2="176.3585" y2="-44.5578" gradientTransform="matrix(1 0 0 -1 0 118)">
                                        <stop  offset="0" style="stop-color:#2390FF"/>
                                        <stop  offset="0.9146" style="stop-color:#2390FF;stop-opacity:0"/>
                                    </linearGradient>
                                    <path class="ssast0" d="M-29.9,72.3C-15.7,58.6,7.5,49.8,29.2,54c14.9,2.9,28.3,9.7,41.9,15.4c13.7,5.8,28.7,10.7,43.9,9.3
                                        c33.4-3.1,54.4-34.3,87.4-39.2c35.2-5.2,71.8,21.3,104.6,9.6c23.7-8.5,35.4-34.4,60.9-38v134.7H-29.9V72.3z"/>
                                    <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="171.65" y1="-49.863" x2="171.65" y2="63.2334" gradientTransform="matrix(1 0 0 -1 0 118)">
                                        <stop  offset="8.544150e-02" style="stop-color:#2390FF;stop-opacity:0"/>
                                        <stop  offset="1" style="stop-color:#2390FF"/>
                                    </linearGradient>
                                    <path class="ssast1" d="M1.1,82.3c18.3,3,28.5-0.1,43.7-8.3c10.2-5.5,18.9-13.4,31-15.8c14.9-2.9,30.3,3.4,41.7,11.1
                                        C129,77,138.8,86.4,152.2,92c28,11.5,63.8,2.9,89.1-11.8c10.9-6.4,20.8-13.8,32.7-19.1s26.7-8.2,39.6-4.6c10.6,3,18.5,9.9,28.6,13.8
                                        V168H1.1V82.3z"/>
                                    <g class="ssast2">
                                        <circle class="ssast3" cx="237.3" cy="29.6" r="2.3"/>
                                        <circle class="ssast3" cx="86.7" cy="90.1" r="1.2"/>
                                        <circle class="ssast3" cx="280.3" cy="26.9" r="2.5"/>
                                        <circle class="ssast3" cx="97.8" cy="71.8" r="2.8"/>
                                        <circle class="ssast3" cx="273.5" cy="47.1" r="1.4"/>
                                        <circle class="ssast3" cx="302.9" cy="-45.7" r="0.8"/>
                                        <circle class="ssast3" cx="125.5" cy="49.1" r="0.8"/>
                                        <circle class="ssast3" cx="50.6" cy="34.7" r="1.7"/>
                                        <circle class="ssast3" cx="282.4" cy="-23.1" r="0.8"/>
                                    </g>
                                    <g class="ssast4">
                                        <g>
                                            <line class="ssast5" x1="-20" y1="129.4" x2="107.9" y2="1.5"/>
                                            <g>

                                                    <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -97.2431 23.8119)" class="ssast3" cx="-19.9" cy="129.3" rx="2.9" ry="2.9"/>
                                            </g>
                                            <g>
                                                <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 30.4559 76.7006)" class="ssast3" cx="107.8" cy="1.6" rx="2.9" ry="2.9"/>
                                            </g>
                                        </g>
                                    </g>
                                    <g class="ssast4">
                                        <g>
                                            <line class="ssast5" x1="248" y1="126.6" x2="351.9" y2="22.7"/>
                                            <g>

                                                    <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -16.7582 212.4758)" class="ssast3" cx="248.1" cy="126.5" rx="2.9" ry="2.9"/>
                                            </g>
                                            <g>

                                                    <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 86.9405 255.4498)" class="ssast3" cx="351.8" cy="22.8" rx="2.9" ry="2.9"/>
                                            </g>
                                        </g>
                                    </g>
                                    <g class="ssast4">
                                        <g>
                                            <line class="ssast5" x1="265.6" y1="141" x2="369.5" y2="37"/>
                                            <g>

                                                    <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -21.7734 229.1487)" class="ssast3" cx="265.7" cy="140.9" rx="2.9" ry="2.9"/>
                                            </g>
                                            <g>

                                                    <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 81.957 272.0474)" class="ssast3" cx="369.4" cy="37.1" rx="2.9" ry="2.9"/>
                                            </g>
                                        </g>
                                    </g>
                                    <g class="ssast4">
                                        <g>
                                            <line class="ssast5" x1="2" y1="142.4" x2="94.7" y2="49.7"/>
                                            <g>

                                                    <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -100.0035 43.1398)" class="ssast3" cx="2.1" cy="142.3" rx="2.9" ry="2.9"/>
                                            </g>
                                            <g>
                                                <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -7.5056 81.459)" class="ssast3" cx="94.6" cy="49.8" rx="2.9" ry="2.9"/>
                                            </g>
                                        </g>
                                    </g>
                                    <g>
                                        <circle class="ssast6" cx="253.5" cy="47.7" r="6.9"/>
                                        <circle class="ssast7" cx="253.5" cy="47.7" r="13.6"/>
                                    </g>
                                    <path class="ssast3" d="M186.5-56.1h-18.3c-0.9,0-1.7-0.8-1.7-1.7l0,0c0-0.9,0.8-1.7,1.7-1.7h18.3c0.9,0,1.7,0.8,1.7,1.7l0,0
                                        C188.3-56.9,187.5-56.1,186.5-56.1z"/>
                                    </svg>

                                    <!-- svg bottom  -->

                                    <svg version="1.1" class="bottom_s my_Svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 342 132.1" style="enable-background:new 0 0 342 132.1;" xml:space="preserve">
                                    <style type="text/css">
                                        .dssst0{opacity:0.4;}
                                        .ddsst1{fill:#FFFFFF;}
                                        .ddsst2{opacity:0.6;}
                                        .ddsst3{fill:none;stroke:#FFFFFF;stroke-width:0.49;stroke-miterlimit:10;}
                                        .ddsst4{opacity:0.6;fill:#FFFFFF;enable-background:new    ;}
                                        .ddsst5{opacity:0.6;fill:none;stroke:#FFFFFF;stroke-width:0.49;stroke-miterlimit:10;enable-background:new    ;}
                                        .ddsst6{opacity:0.45;fill:url(#SVGID_1_);enable-background:new    ;}
                                        .ddsst7{opacity:0.3;fill:url(#SVGID_2_);enable-background:new    ;}
                                        .ddsst8{fill:#FFFFFF;stroke:#FFFFFF;stroke-width:0.49;stroke-miterlimit:10;}
                                    </style>
                                    <g class="dssst0">
                                        <circle class="ddsst1" cx="237.3" cy="-21" r="2.3"/>
                                        <circle class="ddsst1" cx="86.7" cy="39.5" r="1.2"/>
                                        <circle class="ddsst1" cx="280.3" cy="-23.8" r="2.5"/>
                                        <circle class="ddsst1" cx="97.8" cy="21.1" r="2.8"/>
                                        <circle class="ddsst1" cx="273.5" cy="-3.5" r="1.4"/>
                                        <circle class="ddsst1" cx="302.9" cy="-96.4" r="0.8"/>
                                        <circle class="ddsst1" cx="125.5" cy="-1.5" r="0.8"/>
                                        <circle class="ddsst1" cx="50.6" cy="-16" r="1.7"/>
                                        <circle class="ddsst1" cx="282.4" cy="-73.8" r="0.8"/>
                                    </g>
                                    <g class="ddsst2">
                                        <g>
                                            <line class="ddsst3" x1="-20" y1="78.7" x2="107.9" y2="-49.2"/>
                                            <g>
                                                <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -61.4014 8.954)" class="ddsst1" cx="-19.9" cy="78.6" rx="2.9" ry="2.9"/>
                                            </g>
                                            <g>

                                                    <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 66.2975 61.8427)" class="ddsst1" cx="107.8" cy="-49.1" rx="2.9" ry="2.9"/>
                                            </g>
                                        </g>
                                    </g>
                                    <g class="ddsst2">
                                        <g>
                                            <line class="ddsst3" x1="248" y1="75.9" x2="351.9" y2="-28"/>
                                            <g>

                                                    <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 19.0834 197.6179)" class="ddsst1" cx="248.1" cy="75.8" rx="2.9" ry="2.9"/>
                                            </g>
                                            <g>

                                                    <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 122.7823 240.5918)" class="ddsst1" cx="351.8" cy="-27.9" rx="2.9" ry="2.9"/>
                                            </g>
                                        </g>
                                    </g>
                                    <g class="ddsst2">
                                        <g>
                                            <line class="ddsst3" x1="265.6" y1="90.3" x2="369.5" y2="-13.7"/>
                                            <g>

                                                    <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 14.0683 214.2907)" class="ddsst1" cx="265.7" cy="90.2" rx="2.9" ry="2.9"/>
                                            </g>
                                            <g>

                                                    <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 117.7982 257.1892)" class="ddsst1" cx="369.4" cy="-13.6" rx="2.9" ry="2.9"/>
                                            </g>
                                        </g>
                                    </g>
                                    <g class="ddsst2">
                                        <g>
                                            <line class="ddsst3" x1="2" y1="91.8" x2="94.7" y2="-1"/>
                                            <g>
                                                <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -64.1623 28.2816)" class="ddsst1" cx="2.1" cy="91.6" rx="2.9" ry="2.9"/>
                                            </g>
                                            <g>
                                                <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 28.3361 66.6011)" class="ddsst1" cx="94.6" cy="-0.9" rx="2.9" ry="2.9"/>
                                            </g>
                                        </g>
                                    </g>
                                    <g>
                                        <circle class="ddsst4" cx="253.5" cy="-2.9" r="6.9"/>
                                        <circle class="ddsst5" cx="253.5" cy="-2.9" r="13.6"/>
                                    </g>
                                    <path class="ddsst1" d="M187.4,165.3H169c-0.9,0-1.7-0.8-1.7-1.7l0,0c0-0.9,0.8-1.7,1.7-1.7h18.3c0.9,0,1.7,0.8,1.7,1.7l0,0
                                        C189.1,164.6,188.3,165.3,187.4,165.3z"/>
                                    <g>

                                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="9488.4121" y1="7076.3564" x2="9488.4121" y2="7221.6519" gradientTransform="matrix(-1 0 0 1 9660.8623 -7109.1562)">
                                            <stop  offset="8.544150e-02" style="stop-color:#2390FF;stop-opacity:0"/>
                                            <stop  offset="1" style="stop-color:#2390FF"/>
                                        </linearGradient>
                                        <path class="ddsst6" d="M343,58c-18.3-6-28.5,0.2-43.7,16.5c-10.2,11-18.9,26.6-31,31.3c-14.9,5.8-30.3-6.7-41.7-22
                                            c-11.5-15.3-21.2-34-34.7-45c-28-22.9-63.8-5.7-89.1,23.5c-11,12.6-20.8,27.4-32.7,37.9s-26.7,16.3-39.6,9.1
                                            C19.8,103.4,12,89.6,1.9,82V-32.8H343V58z"/>

                                            <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="214.85" y1="7109.6558" x2="214.85" y2="7195.3232" gradientTransform="matrix(1 0 0 1 0 -7109.1562)">
                                            <stop  offset="0" style="stop-color:#2390FF"/>
                                            <stop  offset="0.9146" style="stop-color:#2390FF;stop-opacity:0"/>
                                        </linearGradient>
                                        <path class="ddsst7" d="M21.5,43.9c20.8-4.6,32.3,0.1,49.6,12.8c11.6,8.5,21.4,20.6,35.2,24.3c16.9,4.5,34.3-5.2,47.3-17
                                            s24-26.3,39.3-34.9c31.7-17.8,72.4-4.4,101,18.2c12.4,9.8,23.6,21.3,37,29.4c13.5,8.1,30.2,12.7,44.9,7.1
                                            c12.1-4.6,20.9-15.3,32.4-21.2v-62H21.5V43.9z"/>
                                        <circle class="ddsst1" cx="72.1" cy="82.7" r="2.3"/>
                                        <circle class="ddsst1" cx="75.8" cy="67.3" r="1.4"/>
                                        <circle class="ddsst1" cx="45.7" cy="75.6" r="0.8"/>
                                        <g class="ddsst2">
                                            <g>
                                                <line class="ddsst3" x1="279.7" y1="138.2" x2="383.6" y2="34.2"/>
                                                <g>

                                                        <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -15.6894 238.3088)" class="ddsst1" cx="279.8" cy="138.1" rx="2.9" ry="2.9"/>
                                                </g>
                                                <g>

                                                        <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 88.0394 281.2099)" class="ddsst1" cx="383.5" cy="34.3" rx="2.9" ry="2.9"/>
                                                </g>
                                            </g>
                                        </g>
                                        <g class="ddsst2">
                                            <g>
                                                <line class="ddsst3" x1="102.6" y1="129" x2="262.4" y2="-30.8"/>
                                                <g>

                                                        <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -61.0646 110.3894)" class="ddsst1" cx="102.7" cy="128.9" rx="2.9" ry="2.9"/>
                                                </g>
                                                <g>

                                                        <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 98.5341 176.4863)" class="ddsst1" cx="262.3" cy="-30.7" rx="2.9" ry="2.9"/>
                                                </g>
                                            </g>
                                        </g>
                                        <g class="ddsst2">
                                            <g>
                                                <line class="ddsst3" x1="174.4" y1="77.3" x2="334.2" y2="-82.5"/>
                                                <g>

                                                        <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.4839 146.0352)" class="ddsst1" cx="174.5" cy="77.2" rx="2.9" ry="2.9"/>
                                                </g>
                                                <g>

                                                        <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 156.1145 212.1309)" class="ddsst1" cx="334.1" cy="-82.4" rx="2.9" ry="2.9"/>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <circle class="ddsst4" cx="55.5" cy="111.8" r="6.9"/>
                                            <circle class="ddsst5" cx="55.5" cy="111.8" r="13.6"/>
                                        </g>
                                        <ellipse transform="matrix(0.8804 -0.4742 0.4742 0.8804 17.1369 131.3428)" class="ddsst4" cx="269" cy="31.7" rx="9.8" ry="9.8"/>
                                        <circle class="ddsst5" cx="269" cy="31.7" r="14.8"/>
                                        <g>
                                            <g>
                                                <circle class="ddsst3" cx="50" cy="42" r="5.1"/>
                                                <circle class="ddsst3" cx="50" cy="42" r="3.2"/>
                                                <circle class="ddsst8" cx="50" cy="42" r="1.2"/>
                                            </g>
                                        </g>
                                    </g>
                                    </svg>

                                </div>
                                <!-- / backgrouend form  -->

                                <!-- text top and icon top  -->
                                <div class="backgrouend_contact" >
                                    <div class="textAndIcon ">
                                        <svg version="1.1" id="OBJECTS" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 99.2 87.9" style="enable-background:new 0 0 99.2 87.9;" xml:space="preserve">
                                        <style type="text/css">
                                            .csc{fill-rule:evenodd;clip-rule:evenodd;fill:#F4F5F7;}
                                            .cssst1{fill-rule:evenodd;clip-rule:evenodd;fill:#27542B;}
                                        </style>
                                        <path class="csc" d="M5.5,14.3C13.9,0.2,33.8-2.2,45,10c1.1,1.2,2,2.1,2.8,2.8c-3.7,3.9-7.9,3.2-14.7,1.9c14.6,6.9,17-2.1,26.3-8.4
                                            c11.5-7.8,27.9-4.4,35.3,8c0.9,1.6,1.7,3.2,2.2,5c-8.1-6-17.5-6.8-24.9-6.5c10.2,1.4,17.8,2.4,25.9,11.7c0.2,2.5,0.2,5.2-0.1,7.9
                                            c-1.8-5.7-6.1-10.7-13.2-13.8c-13.7-5.9-33.5-2.9-41.7,4.7c-1.7,1.5-1.9,2.3-1.5,3c0.5,1,2.1,0,3.6-1.1c2.7-1.9,5.5-3,8.2-2.8
                                            c2.2,0.1,2.2,0.6,0,1.1c-5.5,1.2-8.2,3.7-11.3,7.9c-1.1,1.4-0.9,2.2-0.5,2.5c0.5,0.5,1.5,0.2,2.8-1c2.8-2.8,6-5,10.3-5.6
                                            c1.9-0.3,2.7-0.2,0.5,0.8c-5.1,2.4-7.8,4.7-11.2,9.6c-2,2.9,0.2,4.6,2.4,2.2c4.1-4.6,6-6.9,11.3-8.3c2.1-0.6,1.6,0,0.3,0.9
                                            c-2.9,1.9-4.8,3.8-6.9,6.5c-0.7,0.9-2.4,3.4-0.9,4.2c1.1,0.7,2.9-1.6,3.6-2.4c2.7-3.2,5.4-5,9.4-5.6c2.6-0.4,4.3-0.2,2.5,2.8
                                            c-0.5,0.8-0.9,1.6-1.2,2.4c-1.4,3.7,0.7,5.9,3.7,1.5c0.6-0.9,1.2-1.7,1.8-2.4c11.4-14.4,24.7-9,24.4,3.5
                                            c-0.4,16.8-24.5,44.1-42.6,44c-7.3,0-15-4.2-22.3-10.4c8.1,2.1,14.9,0.6,23.2-1.7c-8.7,1.2-14.9,2.4-26.2-1
                                            c-1.2-1.1-2.4-2.3-3.6-3.6c13.4,5.8,30.6,3.7,39.3-5.9c1.6-1.7,1.7-2.5,1.3-3.2c-0.6-1-2.1,0.2-3.6,1.4c-2.6,2.2-5.4,3.6-8.2,3.6
                                            c-2.3,0-2.3-0.4-0.1-1.1c5.5-1.7,8.2-4.5,11.1-9.1c1-1.6,0.7-2.3,0.3-2.7c-0.6-0.5-1.6-0.1-2.8,1.3c-2.7,3.1-5.8,5.7-10.2,6.6
                                            c-2,0.4-2.8,0.5-0.5-0.8c5-2.9,7.6-5.5,10.8-10.9c1.8-3.1-0.6-4.8-2.7-2c-3.8,5.1-5.6,7.7-11,9.6c-2.2,0.8-1.7,0.1-0.4-0.9
                                            c2.8-2.2,4.6-4.4,6.6-7.3c0.7-1,2.2-3.7,0.6-4.5c-1.2-0.6-2.8,1.9-3.5,2.8C46.7,50.9,44.1,53,40,54c-2.7,0.6-4.4,0.5-2.8-2.7
                                            c0.4-0.9,0.8-1.8,1.1-2.6c1.1-3.9-1.2-6.1-3.9-1.2c-0.5,0.9-1.1,1.8-1.6,2.7c-5.1,7.7-12.8,8.9-17.3,8.2C2.7,56.2-2.5,27.7,5.5,14.3
                                            z"/>
                                        <path class="cssst1" d="M77.5,32.5C86.2,28,94,33.4,93.8,43c-0.4,16.8-24.5,44.1-42.6,44C45,87,38.5,84,32.1,79.3
                                            C65.5,103.4,105.3,30.2,77.5,32.5z"/>
                                        </svg>

                                        <!-- big text  -->

                                        <div class="my_text">
                                            <p>{{ __("Donations") }}</p>
                                            <p class="big_text">{{ __("Donations") }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- / text top and icon top  -->

                                <!-- all input  -->
                                <div class="app_all_input ">

                                    <!-- Online Donation -->

                                    <div class="myDonation OnlineDonation active">
                                        <div class="form-grope">
                                            <label for="card_num">{{ __("Card Number") }}</label>
                                            <input type="text" name="card_num" id="card_num" placeholder="{{ __("Card Number") }}">
                                        </div>
                                        <div class="form-grope">
                                            <label for="card_holder_num">{{ __("Card Holder Name") }}</label>
                                            <input type="text" name="card_holder_num" id="card_holder_num" placeholder="{{ __("Card Holder Name") }}">
                                        </div>
                                        <div class="app_grid">
                                            <div class="form-grope">
                                                <label for="exp_month">{{ __("EXP. Month") }}</label>
                                                <input type="text" name="exp_month" id="exp_month" placeholder="{{ __("EXP. Month") }}">
                                            </div>
                                            <div class="form-grope">
                                                <label for="exp_year">{{ __("EXP. Year") }}</label>
                                                <input type="text" name="exp_year" id="exp_year" placeholder="{{ __("EXP. Year") }}">
                                            </div>
                                        </div>
                                        <div class="form-grope">
                                            <label for="cvv">{{ __("CVV") }}</label>
                                            <input type="email" name="email" id="cvv" placeholder="{{ __("CVV") }}">
                                        </div>
                                    </div>

                                    <!-- Offline Donation -->

                                    <div class="myDonation offlineDonation">
                                        <div class="form-grope">
                                            <label for="email">{{ __("Your Email") }}</label>
                                            <input type="email" name="email" id="email" placeholder="{{ __("Your Email") }}">
                                        </div>
                                        <div class="form-grope">
                                            <label for="phoneNumber">{{ __("Phone Number") }}</label>
                                            <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="{{ __('Your Phone Number') }}">
                                        </div>
                                        <div class="form-grope">
                                            <label for="YourAddress">{{ __("Your Address") }}</label>
                                            <input type="text" name="address" id="YourAddress" placeholder="{{ __("Your Address") }}">
                                        </div>
                                        <div class="form-grope">
                                            <label for="NearestLandmark">{{ __("Nearest Landmark") }}</label>
                                            <input type="text" name="nearest" id="NearestLandmark" placeholder="{{ __("Nearest Landmark") }}">
                                        </div>
                                    </div>
                                    <button type="submit">{{ __("DONATE") }}</button>
                                </div>
                                <!-- / all input  -->
                            </div>
                        </div>
                    </form>
                </section>
                <!-- / section donations  -->
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
    @include('frontend::includes.scripts', ['page' => 'donations'])
    <!-- / scripts  -->

</body>
</html>
