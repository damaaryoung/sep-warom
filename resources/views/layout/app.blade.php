<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Title dan Meta --}}
    <title>@yield('title', 'Index - UpConstruction Bootstrap Template')</title>
    <meta name="description" content="@yield('meta_description', '')">
    <meta name="keywords" content="@yield('meta_keywords', '')">

    {{-- Favicons --}}
    <link rel="icon" href="{{ asset('template_sep/assets/img/warom-images/warom-logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('template_sep/assets/img/apple-touch-icon.png') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" 
        rel="stylesheet">

    {{-- Vendor CSS Files --}}
    <link rel="stylesheet" href="{{ asset('template_sep/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_sep/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template_sep/assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('template_sep/assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_sep/assets/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_sep/assets/vendor/swiper/swiper-bundle.min.css') }}">

    {{-- Main CSS File --}}
    <link rel="stylesheet" href="{{ asset('template_sep/assets/css/main.css') }}">
    <meta name="google-site-verification" content="fpXvezQCg9mNjVcq5TTzWl7ZAAYdSQhGxWl5nBUB6HI" />

    {{-- Info Template --}}
    <!-- 
        Template Name: UpConstruction
        Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
        Updated: Aug 07 2024 with Bootstrap v5.3.3
        Author: BootstrapMade.com
        License: https://bootstrapmade.com/license/
    -->
</head>

<body>
    <div class="wrapper">
        {{-- Header --}}
        @include('layout.header')

        {{-- Main Content --}}
        <main id="main">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('layout.footer')
        </div>
</body>