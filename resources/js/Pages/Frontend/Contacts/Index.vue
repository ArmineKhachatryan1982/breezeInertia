<script setup>

    import Frontend from '@/Layouts/FrontEndLayout.vue';
    import { ref, computed , watchEffect} from 'vue';
    import {  usePage } from '@inertiajs/vue3';

    import { Head } from '@inertiajs/vue3';
    const props = usePage().props;

     console.log(props.data?.[0]?.video_url)




</script>
<template>
 <!-- <Head title="Контакты"/> -->
 <Head>
    <title>Контакты – Услуги в Москве</title>
    <meta name="keywords" content="Аппаратная косметология, aparatnaya cosmetologia,cosmetologia,rf lifting,fotoamalajivanie,udalenie pigmentaci,tatuaj,lifting,pigmentacja, микроиголчатый рф лифтинг, удаление растяжек, IPL фотоомоложение, удаление пигментации, лечение акне, удаление татуажа бровей, удаление новообразований, SMAS-лифтинг,уход за кожей, омоложение, лифтинг, чистка лица, RF-лифтинг, микротоки, кавитация, мезотерапия, биоревитализация, лазерная эпиляция, профессиональная косметология, косметологические процедуры, уход за лицом, косметология в Москве, клиника красоты, эстетическая медицина">
	<meta name="description" content="Аппаратная косметология — это современный метод ухода за кожей и коррекции эстетических недостатков с помощью специализированных приборов. Данный подход позволяет достичь выраженных результатов в омоложении, улучшении текстуры кожи, устранении пигментации и других косметических проблем....">

	 <!-- ✅ Open Graph теги -->
        <meta property="og:title" content="Аппаратная косметология" />
        <meta property="og:description" content="Услуги аппаратной косметологии в Москве" />
        <meta property="og:image" content="https://aparatnayacosmetalogia.ru/images/preview.jpg" />
        <meta property="og:url" content="https://aparatnayacosmetalogia.ru" />
        <meta property="og:type" content="website" />
 </Head>


  <Frontend>
    <section>
		<div class="md:pt-20 pt-7.5 md:pb-13.5 pd-5 relative">
			<div class="container">
				<div class="grid grid-cols-12 gap-x-7.5" v-for="(contact, index) in props.data" :key="contact.id">
					<!-- right part start -->
					<div class="xl:col-span-4 lg:col-span-6 col-span-12 lg:flex">
						<div class="p-7.5 border border-[#dee2e6] mb-7.5 contact-area self-stretch">
							<!-- <h4 class="mb-2.5 text-[28px]/[35px] font-bold text-black font-nunito">Quick Contact</h4>
							<p class="mb-6">If you have any questions simply use the following contact details.</p> -->
							<ul class="">
								<li class="relative left mb-7.5">
									<div class="float-left mr-5 border border-[#eee] size-4.75 ml-auto table text-center rounded-[3px]">
										<span class="table-cell align-middle text-primary">
											<i class="text-xl ti-location-pin"></i>
										</span>
									</div>
									<div class="overflow-hidden">
										<h6 class="text-lg text-black font-bold uppercase font-nunito">Адрес:</h6>
										<p class="leading-6">{{contact.address}}</p>
									</div>
								</li>

								<li class="relative left ">
									<div class="float-left mr-5 border border-[#eee] size-4.75 ml-auto table text-center rounded-[3px]">
										<span class="table-cell align-middle text-primary">
											<i class="text-xl ti-mobile"></i>
										</span>
									</div>
									<div class="overflow-hidden">
										<h6 class="text-lg text-black font-bold uppercase font-nunito">ТЕЛЕФОН</h6>
										<p class="leading-6">{{contact.phone_number}}</p>
									</div>
								</li>
							</ul>

						</div>
					</div>
					<!-- right part END -->

					<!-- Left part start -->
					<div class="xl:col-span-4 lg:col-span-6 col-span-12 mb-7.5">
						<div class="p-7.5 border border-[#e1e6eb] clearfix">
							<h4 class="mb-2.5 text-[28px]/[35px] font-bold text-black font-nunito">Как добраться</h4>
							<div class="dzFormMsg"></div>
                            <video  width=300px height=300px controls>
                                <source :src="contact.video_url" type="video/mp4" title="Аппаратная косметология">
                            </video>
						</div>
					</div>
					<!-- Left part END -->
					<div class="xl:col-span-4 col-span-12 mb-7.5">
						<div v-html="contact.map"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

  </Frontend>

</template>
