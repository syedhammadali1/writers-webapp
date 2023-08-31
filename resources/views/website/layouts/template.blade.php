<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">  
<meta name="viewport" content="width=device-width, initial-scale=1">
@if(Session::has('seo_was_set'))
{!! SEO::generate() !!}
@endif
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
<link href="{{ asset('css/theme.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
{!! settings('website_header_script') !!}
@include('website.google_analytics')
</head>
<body>
@include('website.layouts.header')
<div id="app">
    @yield('content')  
</div>
@include('cookieConsent::index')
@include('website.layouts.footer') 
<script src="{{ asset('js/theme.min.js') }}"></script>
{!! settings('website_footer_script') !!}
</body>
</html>