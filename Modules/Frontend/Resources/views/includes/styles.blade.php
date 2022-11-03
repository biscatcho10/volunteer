@php
$ar = app()->getLocale() == 'ar';
@endphp
@if ($page == 'home')
    <!-- helper class -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/HelperClass.css') }}">

    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">

    <!-- global home  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">

    <!-- style home  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- responsive home  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    @isset ($cover)
        <style>
            #break .backgrouend_sec {
                background: #000 url("{{ Settings::instance('cover')->getFirstMediaUrl('cover') }}");
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    @endisset


    @if ($ar)
        <!-- font arabic  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_ar.css') }}">
        <!-- style global arabic -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/global-arabic.css') }}">
        <!-- style arabic page home -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/home-arabic.css') }}">
        <!-- responsive home  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive-ar.css') }}">
    @else
        <!-- font english  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_en.css') }}">
    @endif
@elseif ($page == 'about')
    <!-- font english  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_en.css') }}">

    <!-- helper class -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/HelperClass.css') }}">

    <!-- style global All pages -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">

    <!-- style All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/singl-page.css') }}">

    <!-- style page about  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/about/style.css') }}">

    <!-- global responsive All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive-singl-page.css') }}">

    @if ($ar)
        <!-- font arabic  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_ar.css') }}">
        <!-- style global arabic -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/global-arabic.css') }}">
        <!-- style arabic page about  -->
        {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/about/about-arabic.css') }}"> --}}
    @endif
@elseif ($page == 'services')
    <!-- font english  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_en.css') }}">

    <!-- helper class -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/HelperClass.css') }}">

    <!-- style global All pages -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">

    <!-- style All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/singl-page.css') }}">

    <!-- style page services  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/services/style.css') }}">

    <!-- global responsive All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive-singl-page.css') }}">

    @if ($ar)
        <!-- font arabic  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_ar.css') }}">
        <!-- style global arabic -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/global-arabic.css') }}">
    @endif
@elseif ($page == 'show-service')
    <!-- font english  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_en.css') }}">

    <!-- helper class -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/HelperClass.css') }}">

    <!-- style global All pages -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">

    <!-- style All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/singl-page.css') }}">

    <!-- style page services  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/services/singl-services.css') }}">

    <!-- global responsive All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive-singl-page.css') }}">

    @if ($ar)
        <!-- font arabic  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_ar.css') }}">
        <!-- style global arabic -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/global-arabic.css') }}">
    @endif
@elseif ($page == 'sub-services')
    <!-- font english  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_en.css') }}">

    <!-- helper class -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/HelperClass.css') }}">

    <!-- style global All pages -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">

    <!-- style All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/singl-page.css') }}">

    <!-- style page media -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/media/media-singl.css') }}">

    <!-- global responsive All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive-singl-page.css') }}">

    @if ($ar)
        <!-- font arabic  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_ar.css') }}">
        <!-- style global arabic -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/global-arabic.css') }}">
    @endif
@elseif ($page == 'reports')
    <!-- font english  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_en.css') }}">

    <!-- helper class -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/HelperClass.css') }}">

    <!-- style global All pages -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">

    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css">

    <!-- link flipbook  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flipbook.style.css') }}">

    <!-- style All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/singl-page.css') }}">

    <!-- style page reports -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/reports/style.css') }}">

    <!-- global responsive All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive-singl-page.css') }}">

    @if ($ar)
        <!-- font arabic  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_ar.css') }}">
        <!-- style global arabic -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/global-arabic.css') }}">
    @endif
@elseif ($page == 'news')
    <!-- font english  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_en.css') }}">

    <!-- helper class -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/HelperClass.css') }}">

    <!-- style global All pages -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">

    <!-- style All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/singl-page.css') }}">

    <!-- style page news -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/news/style.css') }}">

    <!-- global responsive All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive-singl-page.css') }}">

    @if ($ar)
        <!-- font arabic  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_ar.css') }}">
        <!-- style global arabic -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/global-arabic.css') }}">
    @endif
@elseif ($page == 'volunteers')
    <!-- font english  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_en.css') }}">

    <!-- helper class -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/HelperClass.css') }}">

    <!-- style global All pages -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">

    <!-- style All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/singl-page.css') }}">

    <!-- style page volunteer -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/volunteer/style.css') }}">

    <!-- global responsive All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive-singl-page.css') }}">

    @if ($ar)
        <!-- font arabic  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_ar.css') }}">
        <!-- ============== style arabic ============== -->
        <!-- style global arabic -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/global-arabic.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/volunteer/style-ar.css') }}">
    @endif
@elseif ($page == 'donations')
    <!-- font english  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_en.css') }}">

    <!-- helper class -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/HelperClass.css') }}">

    <!-- style global All pages -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">

    <!-- style All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/singl-page.css') }}">

    <!-- style page donations -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/donations/style.css') }}">

    <!-- global responsive All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive-singl-page.css') }}">

    @if ($ar)
        <!-- font arabic  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_ar.css') }}">
        <!-- style global arabic -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/global-arabic.css') }}">
    @endif
@elseif ($page == 'contact')
    <!-- font english  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_en.css') }}">

    <!-- helper class -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/HelperClass.css') }}">

    <!-- style global All pages -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">

    <!-- style All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/singl-page.css') }}">

    <!-- style page contact -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/contact/style.css') }}">

    <!-- global responsive All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive-singl-page.css') }}">
    @if ($ar)
        <!-- font arabic  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_ar.css') }}">
        <!-- style global arabic -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/global-arabic.css') }}">
    @endif
@elseif ($page == 'thanks')
    <!-- font english  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_en.css') }}">

    <!-- helper class -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/HelperClass.css') }}">

    <!-- style global All pages -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">

    <!-- style All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/singl-page.css') }}">

    <!-- style page donations -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/donations/style.css') }}">

    <!-- global responsive All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive-singl-page.css') }}">
@elseif ($page == 'media')
    <!-- font english  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_en.css') }}">

    <!-- helper class -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/HelperClass.css') }}">

    <!-- style global All pages -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">

    <!-- style All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/singl-page.css') }}">

    <!-- style page media -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/media/style.css') }}">

    <!-- global responsive All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive-singl-page.css') }}">
    @if ($ar)
        <!-- font arabic  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_ar.css') }}">
        <!-- style global arabic -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/global-arabic.css') }}">
    @endif
@elseif ($page == 'media-show')
    <!-- font english  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_en.css') }}">

    <!-- helper class -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/HelperClass.css') }}">

    <!-- style global All pages -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">

    <!-- style All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/singl-page.css') }}">

    <!-- style page media gallery  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/media/media-gallery.css') }}">

    <!-- global responsive All pages except the home page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive-singl-page.css') }}">

    @if ($ar)
        <!-- font arabic  -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font_ar.css') }}">
        <!-- style global arabic -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/global-arabic.css') }}">
    @endif
@endif
