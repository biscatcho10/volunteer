<meta name="title" content="{{ Settings::get($page . '_seo_title') }}">
<meta name="description" content="{{ Settings::get($page . '_seo_keywords') }}">
<meta name="keywords" content="{{ Settings::get($page . '_seo_description') }}">

<!-- seo data  -->
{!! Settings::get('facebook_pixel') !!}
{!! Settings::get('google_analects') !!}


{{-- {!! Settings::get('google_id_head') !!}
{!! Settings::get('google_id_footer') !!}
{!! Settings::get('track_code') !!}
{!! Settings::get('btn_track_code') !!}
{!! Settings::get('btn_google_id_footer') !!}
{!! Settings::get('transfer_line') !!} --}}
