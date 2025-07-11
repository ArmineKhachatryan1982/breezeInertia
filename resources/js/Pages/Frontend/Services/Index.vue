<script setup>

    import Frontend from '@/Layouts/FrontEndLayout.vue';
    import { ref, computed , watchEffect} from 'vue';
    import { router, usePage } from '@inertiajs/vue3';

    import { Head } from '@inertiajs/vue3';
    import Sidebar from './Sidebar.vue';
    import ServiceDetailsSection from './ServiceDetailsSection.vue';


    const { categories, category_id } = usePage().props;
    const selectedCategory = ref(null);


    // Устанавливаем нужную категорию по `category_id`, если есть
        watchEffect(() => {
            if (category_id && categories.length) {
                selectedCategory.value = categories.find(c => c.id === parseInt(category_id)) ?? categories[0];
            } else {
                selectedCategory.value = categories.length ? categories[0] : null;
            }
        });
    console.log( categories,'from  service index')
    console.log('Её сервисы:', selectedCategory.value?.service_details ?? []);


    const handleCategorySelect = (category) => {

        router.get('/services', { category_id: category.id });

    };


</script>
<template>
 <!-- <Head title="Аппаратная косметология"/> -->
 <Head>
    <title>Аппаратная косметология – Услуги в Москве</title>
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
		<div class="content-block">
			<div class="md:py-20 py-7.5 relative">
				<div class="container">
					<div class="grid grid-cols-12 gap-x-7.5">
                       <!--category-selected գալիս է komponentic sidebar.vue-ic,և այստեղ կարիք չկա հայտարարելու իկ արդեն կոմպոնենտում emit-ի միջոցով ենք ասում, որ կոմպոնենտից դուրս է գալու category-selected իրադարձությունը category օբյեկտը    -->
                       <Sidebar
                          :categories="categories"
                          :selected-category="selectedCategory"
                          @category-selected="handleCategorySelect" />
                       <!-- service_details mi paluchaem  -->
                       <ServiceDetailsSection
                             :service-details="selectedCategory?.service_details ?? []"
                        />


					</div>
				</div>
			</div>
		</div>
	</section>
  </Frontend>

</template>
