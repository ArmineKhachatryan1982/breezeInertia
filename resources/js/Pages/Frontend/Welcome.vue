
<script setup>

import Frontend from '@/Layouts/FrontEndLayout.vue';
import { Head } from '@inertiajs/vue3';



</script>

<template>
    <Head title="Home page"/>
    <!-- <Navbar/> -->
    <Frontend/>
    <!-- benner Start -->
	<section>

<div class="page-content bg-white">
<!-- Slider -->
    <div class="main-banner relative">
        <div class="swiper home-slider1 benner-swiper-button !h-[50vh] lg:!h-[86vh]">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-[url('/assets/images/main-slider/slide1.jpg')] bg-no-repeat bg-cover bg-[50%] relative max-lg:after:content-[''] max-lg:after:absolute max-lg:after:left-0 max-lg:after:bottom-0 max-lg:after:size-full max-lg:after:-z-1 max-lg:after:min-h-[400px] max-lg:after:!bg-white max-lg:after:opacity-60">
                    <div class="px-3.75 relative lg:w-[1200px] md:w-[720px] sm:w-[540px] w-full !h-60vh mx-auto max-md:text-center top-1/2 -translate-y-1/2">
                        <h1 class="text-primary md:text-[65px] sm:text-[50px] text-3xl leading-10 md:leading-[80px] sm:leading-[60px] font-extrabold font-nunito capitalize">
                            <span>experience the best</span><br>
                            <span class="md:pl-[110px] after:content-[''] after:absolute after:bg-primary after:w-20 after:rounded-[3px] after:h-1.25 after:font-extrabold after:left-[1%] after:top-[35%] md:after:block after:hidden"> beauty Services</span>
                        </h1>
                        <p class="sm:text-lg max-sm:px-4.75 text-xs md:leading-[28px] leading-[15px] font-medium text-[#320016] font-nunito max-w-[700px] py-5">We offer a full range of hairdressing services for men and women, eyebrow and eyelash care, the services of make-up artists and stylists. Entrust your beauty to professionals who really care about...
                        </p>
                        <div class="buttons">
                            <a class="site-button sm:px-7.5 px-5 py-2.5 sm:py-3.75 mr-[18px] rotate-[3px] leading-[22px]" href="contact.html">Get A Qutoe</a>
                            <a class="site-button-secondry sm:px-7.5 px-5 py-2.5 sm:py-3.75 rotate-[3px] leading-[22px]" href="about-us.html">About us</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-[url('assets/images/main-slider/slide2.jpg')] bg-no-repeat bg-cover bg-[50%]  relative max-lg:after:content-[''] max-lg:after:absolute max-lg:after:left-0 max-lg:after:bottom-0 max-lg:after:size-full max-lg:after:-z-1 max-lg:after:min-h-[400px] max-lg:after:!bg-white max-lg:after:opacity-60">
                     <div class="px-3.75 relative lg:w-[1200px] md:w-[720px] sm:w-[540px] w-full !h-60vh mx-auto max-md:text-center top-1/2 -translate-y-1/2">
                        <h1 class="text-primary md:text-[65px] sm:text-[50px] text-3xl leading-10 md:leading-[80px] sm:leading-[60px] font-extrabold font-nunito capitalize">
                            <span>experience the best</span><br>
                            <span class="md:pl-[110px] after:content-[''] after:absolute after:bg-primary after:w-20 after:rounded-[3px] after:h-1.25 after:font-extrabold after:left-[1%] after:top-[35%] md:after:block after:hidden"> beauty Services</span>
                        </h1>
                        <p class="wow fadeIn  sm:text-lg max-sm:px-4.75 text-xs md:leading-[28px] leading-[15px] font-medium text-[#320016] font-nunito max-w-[700px] py-5" data-wow-delay="0.6s">We offer a full range of hairdressing services for men and women, eyebrow and eyelash care, the services of make-up artists and stylists. Entrust your beauty to professionals who really care about...
                        </p>
                        <div class="buttons">
                            <a class="site-button sm:px-7.5 px-5 py-2.5 sm:py-3.75  mr-[18px] rotate-[3px] leading-[22px]" href="contact.html">Get A Qutoe</a>
                            <a class="site-button-secondry sm:px-7.5 px-5 py-2.5 sm:py-3.75 rotate-[3px] leading-[22px]" href="about-us.html">About us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next !text-white"></div>
            <div class="swiper-button-prev !text-white"></div>
        </div>
    </div>
</div>
</section>
<!-- benner end -->

<!-- Our Services-card start -->
<section>


    <div  class="lg:pt-29 lg:pb-[90px] py-8 relative bg-[#fef7fe] bg-[url('/assets/images/background/bg5.jpg')] bg-bottom bg-cover bg-no-repeat">

			<div class="container">
				<div class="grid grid-cols-12 gap-7.5">
					<div class="lg:col-span-3 md:col-span-6 col-span-12 md:mb-8 ">
						<div class="px-3.75 pb-7.5 pt-5 bg-white text-center relative duration-500 hover:shadow-card hover:translate-y-[-18px]">
							<div class="w-20 mb-2.5 inline-block text-center p-2">
								<span class="icon-cell text-primary">
									<i class="text-6xl align-middle flaticon-woman"></i>
								</span>
							</div>
							<div class="overflow-hidden">
								<h3 class="text-lg mb-2.5 font-bold text-[#232323] font-nunito">We are Professional</h3>
								<p class="mb-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a href="services-details.html" class="site-button-secondry">Read More</a>
							</div>
						</div>
					</div>
					<div class="lg:col-span-3 md:col-span-6 col-span-12 md:mb-8 ">
						<div class="px-3.75 pb-7.5 pt-5 bg-white text-center relative duration-500 hover:shadow-card hover:translate-y-[-18px]">
							<div class="w-20 mb-2.5 inline-block text-center p-2">
								<span class="icon-cell text-primary">
									<i class="text-6xl align-middle flaticon-mortar"></i>
								</span>
							</div>
							<div class="overflow-hidden">
								<h3 class="text-lg mb-2.5 font-bold text-[#232323] font-nunito">Lux Cosmetic</h3>
								<p class="mb-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a href="services-details.html" class="site-button-secondry">Read More</a>
							</div>
						</div>
					</div>
					<div class="lg:col-span-3 md:col-span-6 col-span-12 md:mb-8">
						<div class="px-3.75 pb-7.5 pt-5 bg-white text-center relative duration-500 hover:shadow-card hover:translate-y-[-18px]">
							<div class="w-20 mb-2.5 inline-block text-center p-2">
								<span class="icon-cell text-primary">
									<i class="text-6xl align-middle flaticon-candle"></i>
								</span>
							</div>
							<div class="overflow-hidden">
								<h3 class="text-lg mb-2.5 font-bold text-[#232323] font-nunito">Medical Education</h3>
								<p class="mb-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a href="services-details.html" class="site-button-secondry">Read More</a>
							</div>
						</div>
					</div>
					<div class="lg:col-span-3 md:col-span-6 col-span-12 md:mb-8">
						<div class="px-3.75 pb-7.5 pt-5 bg-white text-center relative duration-500 hover:shadow-card hover:translate-y-[-18px]">
							<div class="w-20 mb-2.5 inline-block text-center p-2">
								<span class="icon-cell text-primary">
									<i class="text-6xl align-middle flaticon-sauna-1"></i>
								</span>
							</div>
							<div class="overflow-hidden">
								<h3 class="text-lg mb-2.5 font-bold text-[#232323] font-nunito max-xl:whitespace-nowrap">The Newest Equipment</h3>
								<p class="mb-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a href="services-details.html" class="site-button-secondry">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Our Services-card end -->

     <!-- Why Our Portfolio start -->
	<section>
		<div class="lg:py-20 py-8 bg-cover bg-[100%]  relative bg-[url('/assets/images/background/bg6.jpg')]">
			<div class="container">
				<div class="text-center mb-5">
					<h2 class="lg:text-4.5xl text-3xl font-extrabold mb-2.5 text-primary font-nunito">Our Portfolio</h2>
					<div class="overflow-hidden">
						<div class="relative inline-block before:content-[''] before:bg-[url('/assets/images/line.png')] before:absolute before:top-1/2 before:w-20 before:h-3.75 before:-translate-y-1/2 before:bg-[length:auto_100%] before:bg-no-repeat before:bg-center before:left-auto before:right-13.5
						after:content-[''] after:bg-[url('/assets/images/line1.png')] after:absolute after:top-1/2 after:w-20 after:h-3.75 after:-translate-y-1/2 after:bg-[length:auto_100%] after:bg-no-repeat after:bg-center after:right-auto after:left-13.5 after:right-13.5">
							<i class="flaticon-spa text-primary text-4.5xl"></i>
						</div>
					</div>
					<p class="mx-auto max-w-[700px] pt-2.5 text-[#494949]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
				</div>
				<div class="grid grid-cols-12">
					<div class="col-span-12">
						<div class="style1 mb-8">
							<ul class="filters flex justify-center max-sm:flex-wrap" data-toggle="buttons">
								<li data-filter=""  class="btn border-none active px-4 !py-0">
									<a href="javascript:void(0);"  class="is-checked  after:content-[''] after:bg-[#00000057] after:h-full after:opacity-20 after:absolute after:right-[-18px] after:top-0 after:w-0.5 after:skew-x-[-20deg] relative text-black font-medium">
										<span>All</span>
									</a>
								</li>
								<li data-filter="image-1" class="btn border-none px-4 !py-0">
									<a href="javascript:void(0);" class="after:content-[''] after:bg-[#00000057] after:h-full after:opacity-20 after:absolute after:right-[-18px] after:top-0 after:w-0.5 after:skew-x-[-20deg] relative text-black font-medium">
										<span>Haircuts</span>
									</a>
								</li>
								<li data-filter="image-2" class="btn border-none px-4 !py-0">
									<a href="javascript:void(0);" class="after:content-[''] after:bg-[#00000057] after:h-full after:opacity-20 after:absolute after:right-[-18px] after:top-0 after:w-0.5 after:skew-x-[-20deg] relative text-black font-medium">
										<span>Coloring</span>
									</a>
								</li>
								<li data-filter="image-3" class="btn border-none px-4 !py-0">
									<a href="javascript:void(0);" class="after:content-[''] after:bg-[#00000057] after:h-full after:opacity-20 after:absolute after:right-[-18px] after:top-0 after:w-0.5 after:skew-x-[-20deg] relative text-black font-medium">
										<span>Highlights</span>
									</a>
								</li>
								<li data-filter="image-4" class="btn border-none px-4 !py-0">
									<a href="javascript:void(0);" class="relative text-black font-medium">
										<span>Highlights</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="before:content-[''] before:table" id="lightgallery">
					<ul id="masonry" class="relative h-[600px] flex portfolio-box gallery-grid-4 gallery">
						<li class="image-1 image-4 card-container px-3.75 w-full md:w-1/4">
							<div class="group">
								<div class="z-[0] relative overflow-hidden before:content-[''] before:absolute before:left-0 before:top-0 before:size-0 before:z-[1] before:duration-500 before:opacity-50 duration-500 group-hover:duration-500 before:bg-[linear-gradient(45deg,_#ff5ea5_5%,_#00becf_100%)] group-hover:before:size-full after:content-[''] after:absolute after:right-0  after:bottom-0 after:size-0 after:z-[1] after:opacity-50 after:duration-500 after:bg-[linear-gradient(45deg,_#ff5ea5_5%,_#00becf_100%)] group-hover:after:size-full zoom">
									<img class="group-hover:scale-125 duration-500 w-full md:w-[300px] xl:h-[261px]" src="assets/images/gallery/middle/image-1.jpg" alt="/">
									<div class="absolute left-0 bottom-0 size-full text-center z-10 invisible group-hover:visible group-hover:duration-500">
										<div class="absolute top-1/2 left-1/2 w-full h-auto p-0 px-2.5 list-none transform -translate-x-1/2 -translate-y-1/2">
											<span data-exthumbimage="assets/images/gallery/middle/thumb/pic1.jpg" data-src="assets/images/gallery/image-1.jpg" class=" inline-block text-center group-hover:duration-500 p-0 bg-white text-base size-10 leading-10 rounded-full text-primary lg-item cursor-pointer" title="Serenity Spa"><i class="text-base font-medium ti-fullscreen"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="group py-7.5">
								<div class="z-[0] relative overflow-hidden before:content-[''] before:absolute before:left-0 before:top-0 before:size-0 before:z-[1] before:duration-500 before:opacity-50  duration-500 group-hover:duration-500 before:bg-[linear-gradient(45deg,_#ff5ea5_5%,_#00becf_100%)] group-hover:before:size-full after:content-[''] after:absolute after:right-0  after:bottom-0 after:size-0 after:z-[1] after:opacity-50 after:duration-500 after:bg-[linear-gradient(45deg,_#ff5ea5_5%,_#00becf_100%)] group-hover:after:size-full zoom">
									<img class="group-hover:scale-125 duration-500 w-full md:w-[300px] xl:h-[261px]" src="assets/images/gallery/middle/image-2.jpg" alt="/">
									<div class="absolute left-0 bottom-0 size-full text-center z-10 invisible group-hover:visible group-hover:duration-500">
										<div class="absolute top-1/2 left-1/2 w-full h-auto p-0 px-2.5 list-none transform -translate-x-1/2 -translate-y-1/2">
											<span data-exthumbimage="assets/images/gallery/middle/thumb/pic2.jpg" data-src="assets/images/gallery/image-2.jpg" class=" inline-block text-center group-hover:duration-500 p-0 bg-white text-base size-10 leading-10 rounded-full text-primary lg-item cursor-pointer" title="Tranquil Touch"><i class="text-base font-medium ti-fullscreen"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="image-2 card-container px-3.75 w-full md:w-2/4">
							<div class="mb-8 group">
								<div class="z-[0] relative overflow-hidden before:content-[''] before:absolute before:left-0 before:top-0 before:size-0 before:z-[1] before:duration-500 before:opacity-50  duration-500 group-hover:duration-500 before:bg-[linear-gradient(45deg,_#ff5ea5_5%,_#00becf_100%)] group-hover:before:size-full after:content-[''] after:absolute after:right-0  after:bottom-0 after:size-0 after:z-[1] after:opacity-50 after:duration-500 after:bg-[linear-gradient(45deg,_#ff5ea5_5%,_#00becf_100%)] group-hover:after:size-full zoom">
									<img class="w-full group-hover:scale-125 duration-500" src="assets/images/gallery/image-3.jpg" alt="/">
									<div class="absolute left-0 bottom-0 size-full text-center z-10 invisible group-hover:visible group-hover:duration-500">
										<div class="absolute top-1/2 left-1/2 w-full h-auto p-0 px-2.5 list-none transform -translate-x-1/2 -translate-y-1/2">
											<span data-exthumbimage="assets/images/gallery/middle/thumb/pic3.jpg" data-src="assets/images/gallery/image-3.jpg" class=" inline-block text-center group-hover:duration-500 p-0 bg-white text-base size-10 leading-10 rounded-full text-primary lg-item cursor-pointer" title="Hot stone massage"><i class="text-base font-medium ti-fullscreen"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="image-3 image-4 card-container px-3.75 w-full md:w-1/4">
							<div class="group">
								<div class="z-[0] relative overflow-hidden before:content-[''] before:absolute before:left-0 before:top-0 before:size-0 before:z-[1] before:duration-500 before:opacity-50  duration-500 group-hover:duration-500 before:bg-[linear-gradient(45deg,_#ff5ea5_5%,_#00becf_100%)] group-hover:before:size-full after:content-[''] after:absolute after:right-0  after:bottom-0 after:size-0 after:z-[1] after:opacity-50 after:duration-500 after:bg-[linear-gradient(45deg,_#ff5ea5_5%,_#00becf_100%)] group-hover:after:size-full zoom">
									<img class="group-hover:scale-125 duration-500 w-full md:w-[300px] xl:h-[261px]" src="assets/images/gallery/middle/image-4.jpg" alt="/">
									<div class="absolute left-0 bottom-0 size-full text-center z-10 invisible group-hover:visible group-hover:duration-500">
										<div class="absolute top-1/2 left-1/2 w-full h-auto p-0 px-2.5 list-none transform -translate-x-1/2 -translate-y-1/2">
											<span data-exthumbimage="assets/images/gallery/middle/thumb/pic3.jpg" data-src="assets/images/gallery/image-3.jpg" class=" inline-block text-center group-hover:duration-500 p-0 bg-white text-base size-10 leading-10 rounded-full text-primary lg-item cursor-pointer" title="Back massage"><i class="text-base font-medium ti-fullscreen"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="group py-7.5">
								<div class="z-[0] relative overflow-hidden before:content-[''] before:absolute before:left-0 before:top-0 before:size-0 before:z-[1] before:duration-500 before:opacity-50  duration-500 group-hover:duration-500 before:bg-[linear-gradient(45deg,_#ff5ea5_5%,_#00becf_100%)] group-hover:before:size-full after:content-[''] after:absolute after:right-0  after:bottom-0 after:size-0 after:z-[1] after:opacity-50 after:duration-500 after:bg-[linear-gradient(45deg,_#ff5ea5_5%,_#00becf_100%)] group-hover:after:size-full zoom">
									<img class="group-hover:scale-125 duration-500 w-full md:w-[300px] xl:h-[261px]" src="assets/images/gallery/middle/image-5.jpg" alt="/">
									<div class="absolute left-0 bottom-0 size-full text-center z-10 invisible group-hover:visible group-hover:duration-500">
										<div class="absolute top-1/2 left-1/2 w-full h-auto p-0 px-2.5 list-none transform -translate-x-1/2 -translate-y-1/2">
											<span data-exthumbimage="assets/images/gallery/middle/thumb/pic5.jpg" data-src="assets/images/gallery/image-5.jpg" class=" inline-block text-center group-hover:duration-500 p-0 bg-white text-base size-10 leading-10 rounded-full text-primary lg-item cursor-pointer" title="Blissful Bodyworks"><i class="text-base font-medium ti-fullscreen"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Why Our Portfolio End -->




</template>
