
<script setup>

import Frontend from '@/Layouts/FrontEndLayout.vue';
// import Footer from '@/Components/Footer.vue';
import { router, Head,usePage, Link } from '@inertiajs/vue3';

 const props = usePage().props;
//  console.log(props.categories)
//  console.log(props.aparat)

 const selectCategory = (category) => {
    router.get('/services', { category_id: category.id });
};


</script>

<template>
    <Head title="Аппаратная косметология"/>
    <!-- <Navbar/> -->
    <Frontend>


    <!-- benner Start -->
	<section>

<div class="page-content bg-white">
<!-- Slider -->
    <div class="main-banner relative">
        <div class="swiper home-slider1 benner-swiper-button !h-[50vh] lg:!h-[86vh]">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-[url('/assets/images/main-slider/slide1.jpg')] bg-no-repeat bg-cover bg-[50%] relative max-lg:after:content-[''] max-lg:after:absolute max-lg:after:left-0 max-lg:after:bottom-0 max-lg:after:size-full max-lg:after:-z-1 max-lg:after:min-h-[400px] max-lg:after:!bg-white max-lg:after:opacity-60">
                    <div class="px-3.75 relative lg:w-[1200px] md:w-[720px] sm:w-[540px] w-full !h-60vh mx-auto max-md:text-center top-1/2 -translate-y-1/2">
                        <h2 class="text-primary md:text-[65px] sm:text-[50px] text-3xl leading-10 md:leading-[80px] sm:leading-[60px] font-extrabold font-nunito capitalize">
                            <span>Аппаратная </span><br>
                            <span class="md:pl-[110px] after:content-[''] after:absolute after:bg-primary after:w-20 after:rounded-[3px] after:h-1.25 after:font-extrabold after:left-[1%] after:top-[35%] md:after:block after:hidden">косметология</span>
                        </h2>
                        <p class="sm:text-lg max-sm:px-4.75 text-xs md:leading-[28px] leading-[15px] font-medium text-[#320016] font-nunito max-w-[700px] py-5">Аппаратная косметология — это современный метод ухода за кожей и коррекции эстетических недостатков с помощью специализированных приборов. Данный подход позволяет достичь выраженных результатов в омоложении, улучшении текстуры кожи, устранении пигментации и других косметических проблем....
                        </p>
                        <div class="buttons">
                            <!-- <a class="site-button sm:px-7.5 px-5 py-2.5 sm:py-3.75 mr-[18px] rotate-[3px] leading-[22px]" href="contact.html">Get A Qutoe</a>
                            <a class="site-button-secondry sm:px-7.5 px-5 py-2.5 sm:py-3.75 rotate-[3px] leading-[22px]" href="about-us.html">About us</a> -->
                            <a class="site-button-secondry sm:px-7.5 px-5 py-2.5 sm:py-3.75 rotate-[3px] leading-[22px]" href="https://wa.me/79253759998"><i class="fa-solid fa-phone mr-1.25"></i>Быстрый звонок</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-[url('assets/images/main-slider/slide2.jpg')] bg-no-repeat bg-cover bg-[50%]  relative max-lg:after:content-[''] max-lg:after:absolute max-lg:after:left-0 max-lg:after:bottom-0 max-lg:after:size-full max-lg:after:-z-1 max-lg:after:min-h-[400px] max-lg:after:!bg-white max-lg:after:opacity-60">
                     <div class="px-3.75 relative lg:w-[1200px] md:w-[720px] sm:w-[540px] w-full !h-60vh mx-auto max-md:text-center top-1/2 -translate-y-1/2">
                        <h1 class="text-primary md:text-[65px] sm:text-[50px] text-3xl leading-10 md:leading-[80px] sm:leading-[60px] font-extrabold font-nunito capitalize">
                            <span>Лазерные процедуры</span><br>
                            <!-- <span class="md:pl-[110px] after:content-[''] after:absolute after:bg-primary after:w-20 after:rounded-[3px] after:h-1.25 after:font-extrabold after:left-[1%] after:top-[35%] md:after:block after:hidden"> beauty Services</span> -->
                        </h1>
                        <p class="wow fadeIn  sm:text-lg max-sm:px-4.75 text-xs md:leading-[28px] leading-[15px] font-medium text-[#320016] font-nunito max-w-[700px] py-5" data-wow-delay="0.6s">Аппаратные методики позволяют добиться длительного эффекта без хирургического вмешательства и долгой реабилитации. Выбор процедуры зависит от индивидуальных особенностей кожи и желаемого результата...
                        </p>
                        <!-- <div class="buttons">
                            <a class="site-button sm:px-7.5 px-5 py-2.5 sm:py-3.75  mr-[18px] rotate-[3px] leading-[22px]" href="contact.html">Get A Qutoe</a>
                            <a class="site-button-secondry sm:px-7.5 px-5 py-2.5 sm:py-3.75 rotate-[3px] leading-[22px]" href="about-us.html">About us</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- <div class="swiper-button-next !text-white"></div>
            <div class="swiper-button-prev !text-white"></div> -->
        </div>
    </div>
</div>
</section>
<!-- benner end -->

<!-- Our Services-card start -->
<section>


    <div  class="lg:pt-29 lg:pb-[90px] py-8 relative bg-[#fef7fe] bg-[url('/assets/images/background/bg5.jpg')] bg-bottom bg-cover bg-no-repeat">

			<div class="container">
				<div class="grid grid-cols-12 gap-7.5" >
                    <div class="lg:col-span-3 md:col-span-6 col-span-12 md:mb-8 " v-for="category in props.categories" :key="category.id">
						<div class="px-3.75 pb-7.5 pt-5 bg-white text-center relative duration-500 hover:shadow-card hover:translate-y-[-18px]">


                           <div class="w-20 h-20 mb-5 mx-auto flex justify-center items-center">
                                <i class="flaticon-spa text-primary text-4.5xl"></i>
                                </div>
							<div class="overflow-hidden">

                                <h3 class="text-lg mb-2.5 font-bold text-[#232323] font-nunito h-[56px] overflow-hidden line-clamp-2">
                                      {{ category.name }}
                                </h3>
								<p class="mb-6 line-clamp-2">{{category.service_details?.description}}</p>
								<!-- <a ="services-details.html" class="site-button-secondry">Read More</a> -->
                                 <a @click.prevent="selectCategory(category)" class="site-button-secondry cursor-pointer">{{ category.name }}</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- Our Services-card end -->
    <!-- our team start -->
    <selection>
        <div class="lg:py-20 py-8  relative bg-[url('.assets/images/background/bg1.png'),url('.assets/images/background/bg2.png')] bg-[position:bottom,_top] bg-no-repeat after:content-[''] after:absolute after:bg-white after:opacity-70 after:top-0 after:left-0 after:size-full after:z-[0] bg-[length:100%]">
			<div class="container relative z-[1]">
				<div class="text-center md:mb-14">
					<h2 class="lg:text-4.5xl text-3xl font-extrabold mb-2.5 text-primary font-nunito">Наши специалисты</h2>
					<div class="overflow-hidden">
						<div class="relative inline-block before:content-[''] before:bg-[url('.assets/images/line.png')] before:absolute before:top-1/2 before:w-20 before:h-3.75 before:-translate-y-1/2 before:bg-[length:auto_100%] before:bg-no-repeat before:bg-center before:left-auto before:right-13.5
						after:content-[''] after:bg-[url('.assets/images/line1.png')] after:absolute after:top-1/2 after:w-20 after:h-3.75 after:-translate-y-1/2 after:bg-[length:auto_100%] after:bg-no-repeat after:bg-center after:right-auto after:left-13.5 after:right-13.5">
							<i class="flaticon-spa text-primary text-4.5xl"></i>
						</div>
					</div>
					<p class="mx-auto max-w-[700px] pt-2.5 text-[#494949] mb-5">-это квалифицированные профессионалы с многолетним опытом в сфере аппаратной косметологии. Мы используем только современные сертифицированные технологии и индивидуальный подход к каждому клиенту.</p>
				</div>
                <!--  -->

                <div class="relative grid sm:grid-cols-1 md:grid-cols-2 gap-4 max-w-[800px] mx-auto">
                <!-- Первый блок -->
                <div class="flex flex-col items-center bg-gray-100 p-3 rounded-lg shadow-md">
                    <img src="/assets/images/our-team/Arevik.jpg" alt="Profile 1" class="w-52 h-60 object-cover">
                    <span class="mt-2 text-gray-700 font-semibold">Аревик Хачатрян</span>
                    <span class="mt-2 text-gray-700 font-semibold">Косметолог</span>
                </div>

                <!-- Второй блок -->
                <div class="flex flex-col items-center bg-gray-100 p-3 rounded-lg shadow-md">
                    <img src="/assets/images/our-team/Sati2.jpg" alt="Profile 2" class="w-52 h-60 object-cover">
                    <span class="mt-2 text-gray-700 font-semibold">Сати Микаелян</span>
                    <span class="mt-2 text-gray-700 font-semibold">Косметолог-массажист</span>
                </div>
                </div>


			</div>
		</div>

    </selection>
    <!-- our team end -->

     <!-- Why Our Portfolio start -->
      <selection>
        <div class="lg:py-20 py-8  relative bg-[url('.assets/images/background/bg1.png'),url('.assets/images/background/bg2.png')] bg-[position:bottom,_top] bg-no-repeat after:content-[''] after:absolute after:bg-white after:opacity-70 after:top-0 after:left-0 after:size-full after:z-[0] bg-[length:100%]">
			<div class="container relative z-[1]">
				<div class="text-center md:mb-14">
					<h2 class="lg:text-4.5xl text-3xl font-extrabold mb-2.5 text-primary font-nunito">Современные аппараты для косметологических процедур</h2>
					<div class="overflow-hidden">
						<div class="relative inline-block before:content-[''] before:bg-[url('.assets/images/line.png')] before:absolute before:top-1/2 before:w-20 before:h-3.75 before:-translate-y-1/2 before:bg-[length:auto_100%] before:bg-no-repeat before:bg-center before:left-auto before:right-13.5
						after:content-[''] after:bg-[url('.assets/images/line1.png')] after:absolute after:top-1/2 after:w-20 after:h-3.75 after:-translate-y-1/2 after:bg-[length:auto_100%] after:bg-no-repeat after:bg-center after:right-auto after:left-13.5 after:right-13.5">
							<i class="flaticon-spa text-primary text-4.5xl"></i>
						</div>
					</div>
					<!-- <p class="mx-auto max-w-[700px] pt-2.5 text-[#494949] mb-5">-это квалифицированные профессионалы с многолетним опытом в сфере аппаратной косметологии. Мы используем только современные сертифицированные технологии и индивидуальный подход к каждому клиенту.</p> -->
				</div>
                <!--  -->

                <div class="relative grid sm:grid-cols-1 md:grid-cols-2 gap-4 max-w-[800px] mx-auto">
                <!-- Первый блок -->
                <!-- <div  class="flex flex-col items-center bg-gray-100 p-3 rounded-lg shadow-md">
                    <img src="/assets/images/our-team/Arevik.jpg" alt="Profile 1" class="w-52 h-60 object-cover">
                    <span class="mt-2 text-gray-700 font-semibold">Аревик Хачатрян</span>
                    <span class="mt-2 text-gray-700 font-semibold">Косметолог</span>
                </div> -->
                <div
                    v-for="(aparat, index) in props.aparat"
                    :key="aparat.id"
                    class="flex flex-col items-center bg-gray-100 p-3 rounded-lg shadow-md"
                    >
                    <img
                        :src="'/storage/' + aparat.image"
                        alt="Фото аппарата"
                        class="w-52 h-60 object-cover"
                    />
                    <span class="mt-2 text-gray-700 font-semibold">{{ aparat.title }}</span>
                    <span class="mt-2 text-gray-700 font-semibold">{{ aparat.description }}</span>
                    </div>



                </div>


			</div>
		</div>

    </selection>

	<!-- Why Our Portfolio End -->

    <!-- Our Pricing start  -->
    <section>
        <div class="md:pt-20 md:pb-13.5 pt-5 pb-7.5 relative bg-[#fef7fe] bg-[url('/assets/images/background/bg5.jpg')] bg-bottom bg-cover bg-no-repeat">
                <div class="container relative z-[1]">
                    <div class="text-center mb-14">
                        <h2 class="lg:text-4.5xl text-3xl font-extrabold mb-2.5 text-primary font-nunito">Наши цены</h2>
                        <div class="overflow-hidden">
                            <div class="relative inline-block before:content-[''] before:bg-[url('../images/line.png')] before:absolute before:top-1/2 before:w-20 before:h-3.75 before:-translate-y-1/2 before:bg-[length:auto_100%] before:bg-no-repeat before:bg-center before:left-auto before:right-13.5
                            after:content-[''] after:bg-[url('/assets/images/line1.png')] after:absolute after:top-1/2 after:w-20 after:h-3.75 after:-translate-y-1/2 after:bg-[length:auto_100%] after:bg-no-repeat after:bg-center after:right-auto after:left-13.5 after:right-13.5">
                                <i class="flaticon-spa text-primary text-4.5xl"></i>
                            </div>
                        </div>
                        <h3 class="mx-auto max-w-[700px] pt-2.5 text-3xl text-primary font-nunito mb-5">Фотоомоложение на аппарате М22</h3>
                    </div>
                    <div class="grid grid-cols-12">
                        <div class="lg:col-span-6 col-span-12 px-3.75">
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Лицо </h4>
                                    <p>60 – 100 Minute Session </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">10000 руб</h3>
                                </div>
                            </div>
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Шея</h4>
                                    <p>30 – 40 Minute Session  </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">8000 руб</h3>
                                </div>
                            </div>
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Декольте </h4>
                                    <p>60 – 100 Minute Session </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">8000 руб</h3>
                                </div>
                            </div>

                        </div>
                        <div class="lg:col-span-6 col-span-12 px-3.75">
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Лицо + шея</h4>
                                    <p>40 – 60 Minute Session</p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">15000 руб</h3>
                                </div>
                            </div>
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Лицо +шея+ декольте </h4>
                                    <p>50 – 60 Minute Session </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">20000 руб</h3>
                                </div>
                            </div>
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Кисти рук</h4>
                                    <p>20 – 30 Minute Session  </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">6000 руб</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="container relative z-[1]">
                    <div class="text-center mb-14">

                        <div class="overflow-hidden">
                            <div class="relative inline-block before:content-[''] before:bg-[url('../images/line.png')] before:absolute before:top-1/2 before:w-20 before:h-3.75 before:-translate-y-1/2 before:bg-[length:auto_100%] before:bg-no-repeat before:bg-center before:left-auto before:right-13.5
                            after:content-[''] after:bg-[url('/assets/images/line1.png')] after:absolute after:top-1/2 after:w-20 after:h-3.75 after:-translate-y-1/2 after:bg-[length:auto_100%] after:bg-no-repeat after:bg-center after:right-auto after:left-13.5 after:right-13.5">
                                <i class="flaticon-spa text-primary text-4.5xl"></i>
                            </div>
                        </div>
                        <h3 class="mx-auto max-w-[700px] pt-2.5 text-3xl text-primary font-nunito mb-5">Фотоомоложение на аппарате SKIN</h3>
                    </div>
                    <div class="grid grid-cols-12">
                        <div class="lg:col-span-6 col-span-12 px-3.75">
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Лицо </h4>
                                    <p>60 – 100 Minute Session </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">7000  руб</h3>
                                </div>
                            </div>
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Шея</h4>
                                    <p>30 – 40 Minute Session  </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">6000  руб</h3>
                                </div>
                            </div>
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Декольте </h4>
                                    <p>60 – 100 Minute Session </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">6000  руб</h3>
                                </div>
                            </div>

                        </div>
                        <div class="lg:col-span-6 col-span-12 px-3.75">
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Лицо + шея</h4>
                                    <p>40 – 60 Minute Session</p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">10000  руб</h3>
                                </div>
                            </div>
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Лицо +шея+ декольте </h4>
                                    <p>50 – 60 Minute Session </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">15000  руб</h3>
                                </div>
                            </div>
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Кисти рук</h4>
                                    <p>20 – 30 Minute Session  </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">4000  руб</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container relative z-[1]">
                    <div class="text-center mb-14">

                        <div class="overflow-hidden">
                            <div class="relative inline-block before:content-[''] before:bg-[url('../images/line.png')] before:absolute before:top-1/2 before:w-20 before:h-3.75 before:-translate-y-1/2 before:bg-[length:auto_100%] before:bg-no-repeat before:bg-center before:left-auto before:right-13.5
                            after:content-[''] after:bg-[url('/assets/images/line1.png')] after:absolute after:top-1/2 after:w-20 after:h-3.75 after:-translate-y-1/2 after:bg-[length:auto_100%] after:bg-no-repeat after:bg-center after:right-auto after:left-13.5 after:right-13.5">
                                <i class="flaticon-spa text-primary text-4.5xl"></i>
                            </div>
                        </div>
                        <h3 class="mx-auto max-w-[700px] pt-2.5 text-3xl text-primary font-nunito mb-5">Микроиголчатый рф лифтинг</h3>
                    </div>
                    <div class="grid grid-cols-12">
                        <div class="lg:col-span-6 col-span-12 px-3.75">
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Лицо </h4>
                                    <p>60 – 100 Minute Session </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">13000  руб</h3>
                                </div>
                            </div>
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Шея</h4>
                                    <p>30 – 40 Minute Session  </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">8000   руб</h3>
                                </div>
                            </div>
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Декольте </h4>
                                    <p>60 – 100 Minute Session </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">8000   руб</h3>
                                </div>
                            </div>

                        </div>
                        <div class="lg:col-span-6 col-span-12 px-3.75">
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Лицо + шея</h4>
                                    <p>40 – 60 Minute Session</p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">17000 руб</h3>
                                </div>
                            </div>
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Лицо +шея+ декольте </h4>
                                    <p>50 – 60 Minute Session </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">24000 руб</h3>
                                </div>
                            </div>
                            <div class="p-5 bg-white mb-7.5 shadow-[0_0_30px_0_rgba(0,0,0,.05)] duration-500 hover:scale-105 flex">
                                <div class="flex-1">
                                    <h4 class="text-primary mb-2.5 text-[20px] md:text-[28px] font-bold font-nunito">Смас лифтинг линия</h4>
                                    <p>20 – 30 Minute Session  </p>
                                </div>
                                <div class="self-center">
                                    <h3 class="text-secondary text-[25px] md:text-[35px] font-extrabold">30   руб</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Our Pricing End  -->
</Frontend>





</template>
