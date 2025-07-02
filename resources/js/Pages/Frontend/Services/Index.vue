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
 <Head title="Аппаратная косметология"/>
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
