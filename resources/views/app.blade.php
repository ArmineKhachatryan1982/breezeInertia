<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {{-- template script start --}}
        <!-- META -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="format-detection" content="telephone=no">

	<meta name="keywords" content="beauty, spa, salon, tailwind css, beauty spa template, salon website, spa design, responsive design, wellness center, beauty salon template, HTML template, CSS template, tailwind theme, beauty services, modern design, user-friendly, website template, UI/UX, minimal design, clean design, spa and wellness, skincare, hair salon, massage therapy, beauty treatments">
	<meta name="description" content="Discover a modern and responsive Beauty Spa Salon template designed with Tailwind CSS. Perfect for wellness centers, beauty salons, and spa services. Features clean design, user-friendly navigation, and customizable elements for an elegant online presence.">

	<meta property="og:title" content="BeautyZone : Beauty Spa Salon Tailwind CSS Template | DexignZone">
	<meta property="og:description" content="Discover a modern and responsive Beauty Spa Salon template designed with Tailwind CSS. Perfect for wellness centers, beauty salons, and spa services. Features clean design, user-friendly navigation, and customizable elements for an elegant online presence.">
	<meta property="og:image" content="https://beautyzone.dexignzone.com/tailwind/social-image.png">

	<!-- TWITTER META -->
	<meta name="twitter:title" content="BeautyZone : Beauty Spa Salon Tailwind CSS Template | DexignZone">
	<meta name="twitter:description" content="Discover a modern and responsive Beauty Spa Salon template designed with Tailwind CSS. Perfect for wellness centers, beauty salons, and spa services. Features clean design, user-friendly navigation, and customizable elements for an elegant online presence.">
	<meta name="twitter:image" content="https://beautyzone.dexignzone.com/tailwind/social-image.png">
	<meta name="twitter:card" content="summary_large_image">

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon Icons -->
	<link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

	<!-- Icons -->
	<link rel="stylesheet" href="{{ asset('assets/icons/flaticon/flaticon.css') }} ">
	<link rel="stylesheet" href="{{ asset('assets/icons/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/icons/themify-icons/themify-icons.min.css') }}">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styleSwitcher.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/owl-carousel/owl.carousel.css') }}">
    {{--  booking style --}}

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/flatpickr-master/css/flatpicker.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/nice-select/nice-select.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/smart_wizard/smart_wizard.css') }}">


	<!-- lightgallery -->
	<link rel="stylesheet" href="{{ asset('assets/vendor/lightgallery/dist/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/lightgallery/dist/css/lg-thumbnail.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/lightgallery/dist/css/lg-zoom.css')}}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lobster&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
        {{-- template script end --}}

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
        {{-- template script start --}}
            <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/wow/wow.js') }}"></script>
            <script src="{{ asset('assets/vendor/swiper/swiper-bundle.js') }}"></script>
            <script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
            <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.js') }}"></script>
            <script src="{{ asset('assets/vendor/masonry/masonry.filter.js') }}"></script>
            <script src="{{ asset('assets/vendor/masonry/masonry-3.1.4.js') }}"></script>
            <script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.js') }}"></script>
            <!-- LIGHT GALLERY -->
            <script src="{{ asset('assets/vendor/lightgallery/dist/lightgallery.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.js') }}"></script>
            {{-- <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script> --}}
            <script src="{{ asset('assets/js/dz.ajax.js') }}"></script>
            <script src="{{ asset('assets/js/dz.carousel.js') }}"></script>
            <script src="{{ asset('assets/js/custom.min.js') }}"></script>
        {{-- template script end --}}

        {{-- booking js --}}

            <script src="{{ asset('assets/vendor/flatpickr-master/js/flatpickr.js') }}"></script>
            <script src="{{ asset('assets/vendor/nice-select/jquery.nice-select.js') }}"></script>
            <script src="{{ asset('assets/vendor/smart_wizard/jquery.smartWizard.js') }}"></script>

    </body>
</html>
