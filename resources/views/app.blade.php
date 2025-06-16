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

	<meta name="keywords" content="Аппаратная косметология, микроиголчатый рф лифтинг, удаление растяжек, IPL фотоомоложение, удаление пигментации, лечение акне, удаление татуажа бровей, удаление новообразований, SMAS-лифтинг,уход за кожей, омоложение, лифтинг, чистка лица, RF-лифтинг, микротоки, кавитация, мезотерапия, биоревитализация, лазерная эпиляция, профессиональная косметология, косметологические процедуры, уход за лицом, косметология в Москве, клиника красоты, эстетическая медицина">
	<meta name="description" content="Аппаратная косметология — это современный метод ухода за кожей и коррекции эстетических недостатков с помощью специализированных приборов. Данный подход позволяет достичь выраженных результатов в омоложении, улучшении текстуры кожи, устранении пигментации и других косметических проблем....">

	 <!-- ✅ Open Graph теги -->
        <meta property="og:title" content="Аппаратная косметология" />
        <meta property="og:description" content="Услуги аппаратной косметологии в Москве" />
        <meta property="og:image" content="https://aparatnayacosmetalogia.ru/images/preview.jpg" />
        <meta property="og:url" content="https://aparatnayacosmetalogia.ru" />
        <meta property="og:type" content="website" />

	

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon Icons -->
	<link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

	<!-- Icons -->
	<link rel="stylesheet" href="{{ asset('assets/icons/flaticon/flaticon.css') }} ">
	<link rel="stylesheet" href="{{ asset('assets/icons/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/icons/themify-icons/themify-icons.min.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

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
        <link rel="stylesheet" href="{{ asset('assets/icons/fontawesome/css/all.min.css') }}">


        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <style>
    .DZ-bt-buy-now,
    .DZ-bt-support-now {
        display: none !important;
    }
</style>
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
        <!-- Call Icon Button -->



        <div  style="position: fixed; bottom: 50px; right: 20px; z-index: 9999;">
            <a href="https://wa.me/79253759998" target="_blank"
            class="site-button-secondry w-[60px] h-[60px] rounded-full flex items-center justify-center text-white shadow-lg transition hover:bg-[#0096b4]">
                <i class="fa-solid fa-phone text-xl"></i>
            </a>
        </div>
        <script>
//     function hideButtons() {
//     const buyBtn = document.querySelector('.DZ-bt-buy-now');
//     const supportBtn = document.querySelector('.DZ-bt-support-now');

//     if (buyBtn) buyBtn.style.display = 'none';
//     if (supportBtn) supportBtn.style.display = 'none';

//     // Повторно проверяем, пока не появятся
//     if (!buyBtn || !supportBtn) {
//         setTimeout(hideButtons, 100);
//     }
// }

// // Запускаем скрытие при загрузке
// hideButtons();
</script>

    </body>
</html>
