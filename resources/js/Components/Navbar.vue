
<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'
// նավբառում կլիկ չէր աշխատում  առանձին  եմ դրել ակտիվ կլասս
const isActive = ref(false)

const toggleMenu = () => {
//   alert() // 1. alert при клике
  isActive.value = !isActive.value // 2. переключаем состояние
}

</script>

<template>
    <!-- Preloader Start -->
	<!-- <div id="loading-area"></div> -->
	<!-- Preloader End -->

	<!-- header start -->
	<header class="relative z-10 block">
		<div class=" bg-primary border-b text-white md:block hidden py-[11px]">
			<div class="container">
				<div class="flex flex-wrap justify-between">
					<div class="float-left">
						<ul class="flex gap-1.5">
							<!-- <li class="mr-3.75 inline-block"><i class="fa-solid fa-phone mr-1.25"></i> <a href="tel:0012346789">001 1234 6789</a></li> -->
							<li class="mr-3.75 inline-block"><i class="fa-solid fa-location-dot mr-1.25"></i> г. Москва, ул. Ленинская Слобода, д.19, БЦ "Омега Плаза", 1 этаж
                                м. Автозаводская</li>
                            <li class="mr-3.75 inline-block"><i class="fa-solid fa-location-dot mr-1.25"></i>
                            г. Москва, ул. Архитектора Власова, 18м. Новые Черёмушки
                            </li>
                            <li class="mr-3.75 inline-block"><i class="fa-solid fa-location-dot mr-1.25"></i>
                                г. Москва, 2-ая Парковая ул., 11
                                м. Измайловская
                            </li>
						</ul>
					</div>
					<div class="topbar-social float-right">
						<ul class="flex">
							<!-- <li class="inline-block">
								<a target="_blank" href="https://www.facebook.com/" class="hover:text-[#3b5998]  duration-500 px-1.5 inline-block">
									<i class="fa-brands fa-facebook-f ml-2.5"></i>
								</a>
							</li>
							<li class="inline-block">
								<a target="_blank" href="https://www.google.com/" class="hover:text-[#de4e43]  duration-500 px-1.5 inline-block">
									<i class="fa-brands fa-google-plus-g ml-2.5"></i>
								</a>
							</li>
							<li class="inline-block">
								<a target="_blank" href="https://x.com/" class="hover:text-black  duration-500 px-1.5 inline-block">
									<i class="fa-brands fa-x-twitter ml-2.5"></i>
								</a>
							</li>
							<li class="inline-block">
								<a target="_blank" href="https://www.instagram.com/" class="hover:text-[#de4e43]  duration-500 px-1.5 inline-block">
									<i class="fa-brands fa-instagram ml-2.5"></i>
								</a>
							</li>
							<li class="inline-block">
								<a target="_blank" href="https://www.linkedin.com/" class="hover:text-[#3b5998]  duration-500 px-1.5 inline-block">
								<i class="fa-brands fa-linkedin-in ml-2.5"></i>
								</a>
							</li>
							<li class="inline-block">
								<a target="_blank" href="https://www.youtube.com/" class="hover:text-[#de4e43] duration-500 px-1.5 inline-block">
									<i class="fa-brands fa-youtube ml-2.5"></i>
								</a>
							</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
		<div class="sticky-header">
			<div class="main-bar clearfix">
				<div class="container clearfix">
					<!-- website logo -->
					<div class="max-lg:w-[110px] lg:w-[190px] absolute lg:left-1/2 lg:text-center h-20 table float-left align-middle z-10 duration-500 lg:-translate-x-1/2">
						<a href="index.html" class="table-cell lg:align-middle ">

							<img class="w-[140px] z-[2] object-contain relative inline-block" src="../../../public/assets/images/logo-black.png" alt="/">
                        </a>
					</div>
					<!-- nav toggle button -->
				   <button class="navbar-toggler relative lg:hidden w-5 h-4.5 relative rotate-0 duration-500 ease-in-out cursor-pointer md:mt-6.25 mt-4.5 md:mb-4.5 mb-3.5 md:ml-3.75 ml-2.5 float-right" type="button"
                            @click="toggleMenu"
                            :class="{ active: isActive }"
                   >
							<span class="block absolute h-0.5 w-full rounded-[1px] opacity-100 left-0 rotate-0 bg-[#666] duration-200 ease-in-out top-0"></span>
							<span class="block absolute h-0.5 w-full rounded-[1px] opacity-100 left-0 rotate-0 bg-[#666] duration-200 ease-in-out top-[7px]"></span>
							<span class="block absolute h-0.5 w-full rounded-[1px] opacity-100 left-0 rotate-0 bg-[#666] duration-200 ease-in-out top-3.5"></span>
					</button>
					<!-- main nav -->
					<div class="Navigationbar lg:flex relative lg:justify-between max-lg:justify-end  max-lg:fixed max-lg:h-full max-lg:top-0 max-lg:left-[-300px] max-lg:bg-white max-lg:z-10 max-lg:w-72 max-lg:overflow-y-scroll max-lg:duration-700"
                    :class="{ active: isActive }"
                    >
						<div class="max-lg:block lg:hidden border-b border-[rgb(213_204_204)] max-lg:py-5 max-lg:px-3.75">
							<a href="index.html" class="flex justify-center">
								<img class="w-[140px] z-[2] object-contain relative" src="../../../public/assets/images/logo-black.png" alt="/">
							</a>
						</div>
						<ul class="lg:flex lg:justify-between lg:w-[35%]">
							<li class="collapse-btn1 max-lg:border-b max-lg:border-[rgb(213_204_204)] uppercase relative group">
                                <Link :href="route('home')" class="text-[15px] lg:py-7.5 lg:px-3 font-semibold text-black  inline-block max-lg:py-2.5 max-lg:px-3.75 lg:group-hover:text-primary duration-500 max-lg:flex max-lg:justify-between max-lg:items-center">Главная</Link>

							</li>
                            <li class="collapse-btn1 max-lg:border-b max-lg:border-[rgb(213_204_204)] uppercase relative group">
                                <Link :href="route('services')" class="text-[15px] lg:py-7.5 lg:px-3 font-semibold text-black  inline-block max-lg:py-2.5 max-lg:px-3.75 lg:group-hover:text-primary duration-500 max-lg:flex max-lg:justify-between max-lg:items-center">Наши услуги</Link>

							</li>

							<!-- <li class="collapse-btn1 max-lg:border-b max-lg:border-[rgb(213_204_204)] uppercase relative group">
							   <a href="javascript:void(0);" class="text-[15px] lg:py-7.5 lg:px-3 font-semibold text-black  inline-block max-lg:py-2.5 max-lg:px-3.75 lg:group-hover:text-primary duration-500 max-lg:flex max-lg:justify-between max-lg:items-center">Наши услуги<i class="ml-1.25 mt-[-3px] align-middle fa fa-chevron-down !text-[9px]"></i></a>
								<ul class="dropdown-item hidden lg:block bg-white border-t border-primary lg:left-0 lg:opacity-0 lg:py-2.5 lg:absolute lg:invisible lg:w-[220px] z-10  lg:shadow-[0_0_40px_rgba(0,_0,_0,_.2)] lg:group-hover:visible max-lg:bg-[#f6f6f6] lg:group-hover:opacity-100 lg:group-hover:mt-0 duration-500 text-left">
									<li class="relative">
                                        <Link :href = "route('services')" class="text-[#505050] block text-sm py-2 px-5 capitalize duration-150 font-montserrat font-medium ease-linear hover:bg-[#F2F2F2] hover:text-primary" >Услуги</Link>
                                        </li>


								</ul>
							</li> -->

                            <li class="collapse-btn1 max-lg:border-b max-lg:border-[rgb(213_204_204)] uppercase relative group">
                                <Link :href="route('contact')" class="text-[15px] lg:py-7.5 lg:px-3 font-semibold text-black  inline-block max-lg:py-2.5 max-lg:px-3.75 lg:group-hover:text-primary duration-500 max-lg:flex max-lg:justify-between max-lg:items-center">Контакты</Link>

							</li>
						</ul>
						<ul class="lg:flex lg:justify-between lg:w-[35%]">
							<!-- <li class="collapse-btn1 max-lg:border-b max-lg:border-[rgb(213_204_204)] uppercase relative group">
								<a href="javascript:void(0);" class="max-lg:py-2.5 max-lg:px-3.75 rounded-none text-black text-3.75 lg:py-7.5 lg:px-3 cursor-pointer font-semibold inline-block lg:group-hover:text-primary duration-500 max-lg:flex max-lg:justify-between max-lg:items-center">Blog<i class="ml-[4px] mt-[-3px] align-middle fa fa-chevron-down !text-[9px]"></i></a>
								<ul class="dropdown-item hidden bg-white lg:block lg:left-0 lg:opacity-0 lg:py-2.5 lg:absolute lg:invisible lg:w-[220px] z-10 border-t border-primary lg:shadow-[0_0_40px_rgba(0,_0,_0,_.2)] lg:group-hover:visible max-lg:bg-[#f6f6f6] lg:group-hover:opacity-100 lg:group-hover:mt-0 duration-500 text-left">
									<li class="relative"><a href="blog-classic.html"  class="text-[#505050] block text-sm py-2 px-5 capitalize duration-150 font-montserrat font-medium ease-linear hover:bg-[#F2F2F2] hover:text-primary">Classic</a></li>
									<li class="relative"><a href="blog-classic-sidebar.html" class="text-[#505050] block text-sm py-2 px-5 capitalize duration-150 font-montserrat font-medium ease-linear hover:bg-[#F2F2F2] hover:text-primary">Classic Sidebar</a></li>
									<li class="relative"><a href="blog-detailed-grid.html" class="text-[#505050] block text-sm py-2 px-5 capitalize duration-150 font-montserrat font-medium ease-linear hover:bg-[#F2F2F2] hover:text-primary">Detailed Grid</a></li>
									<li class="relative"><a href="blog-detailed-grid-sidebar.html" class="text-[#505050] block text-sm py-2 px-5 capitalize duration-150 font-montserrat font-medium ease-linear hover:bg-[#F2F2F2] hover:text-primary">Detailed Grid Sidebar</a></li>
									<li class="relative"><a href="blog-left-img.html" class="text-[#505050] block text-sm py-2 px-5 capitalize duration-150 font-montserrat font-medium ease-linear hover:bg-[#F2F2F2] hover:text-primary">Left Image Sidebar</a></li>
									<li class="relative"><a href="blog-details.html" class="text-[#505050] block text-sm py-2 px-5 capitalize duration-150 font-montserrat font-medium ease-linear hover:bg-[#F2F2F2] hover:text-primary">Blog Details</a></li>
								</ul>
							</li> -->
							<!-- <li class="collapse-btn1 max-lg:border-b max-lg:border-[rgb(213_204_204)] uppercase relative group">
								<a href="javascript:void(0);" class="max-lg:py-2.5 max-lg:px-3.75 rounded-none text-black text-3.75 lg:py-7.5 lg:px-3 cursor-pointer font-semibold inline-block lg:group-hover:text-primary duration-500 max-lg:flex max-lg:justify-between max-lg:items-center">Our Portfolio<i class="ml-[4px] mt-[-3px] align-middle fa fa-chevron-down !text-[9px]"></i></a>
								<ul class="dropdown-item hidden bg-white lg:block lg:left-0 lg:opacity-0 lg:py-2.5 lg:absolute lg:invisible lg:w-[220px] z-10 border-t border-primary lg:shadow-[0_0_40px_rgba(0,_0,_0,_.2)] lg:group-hover:visible max-lg:bg-[#f6f6f6] lg:group-hover:opacity-100 lg:group-hover:mt-0 duration-500 text-left">
									<li class="relative"><a href="portfolio-grid-2.html" class="text-[#505050] block text-sm py-2 px-5 capitalize duration-150 font-montserrat font-medium ease-linear hover:bg-[#F2F2F2] hover:text-primary">Portfolio Grid 2 </a></li>
									<li class="relative"><a href="portfolio-grid-3.html" class="text-[#505050] block text-sm py-2 px-5 capitalize duration-150 font-montserrat font-medium ease-linear hover:bg-[#F2F2F2] hover:text-primary">Portfolio Grid 3 </a></li>
									<li class="relative"><a href="portfolio-grid-4.html" class="text-[#505050] block text-sm py-2 px-5 capitalize duration-150 font-montserrat font-medium ease-linear hover:bg-[#F2F2F2] hover:text-primary">Portfolio Grid 4 </a></li>
								</ul>
							</li> -->
							<!-- <li class="collapse-btn1 max-lg:border-b max-lg:border-[rgb(213_204_204)] uppercase relative group">
								<Link :href="route('booking')">Booking</Link>
							</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- main header END -->
	</header>

	<!-- header end -->

	<!-- Content Start -->


</template>
