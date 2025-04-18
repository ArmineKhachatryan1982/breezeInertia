<script setup>



const props = defineProps({
    categories: Array
});

const emit = defineEmits(['category-selected']);
// мы передаем объект category родительскому компоненту
const selectCategory = (category) => {
    emit('category-selected', category);
};
</script>
<template>
    <div class="lg:col-span-3 md:col-span-4 col-span-12">
							<div class="sticky-top sticky top-29">
								<ul class="service-list mb-7.5">
                                    <li v-for="category in categories"  :key="category.id" class="mb-[3px] active"

                                     >
                                        <!-- <Link :href="route('service-details',category.id)" class="py-3.75 px-5 bg-[#fef5fe] block w-full text-[#4f0035] border-l-[3px] border-primary">{{category.name}}</Link> -->
                                        <!-- <button @click="selectCategory(category)"
                                                class="py-3.75 px-5 bg-[#fef5fe] block w-full text-[#4f0035] border-l-[3px] border-primary"
                                                 >
                                                {{ category.name }}
                                            </button> -->
                                             <a @click.prevent="selectCategory(category)" href="#" class="py-3.75 px-5 bg-[#fef5fe] block w-full text-[#4f0035] border-l-[3px] border-primary">
                                                   {{ category.name }}
                                            </a>
                                            </li>

									<!-- <li class="mb-[3px] active"><a href="services-details.html" class="py-3.75 px-5 bg-[#fef5fe] block w-full text-[#4f0035] border-l-[3px] border-primary">Haircut &amp; Styling</a></li>
									<li class="mb-[3px]"><a href="services-details.html" class="py-3.75 px-5 bg-[#fef5fe] block w-full text-[#4f0035]">Makeup</a></li>
									<li class="mb-[3px]"><a href="services-details.html" class="py-3.75 px-5 bg-[#fef5fe] block w-full text-[#4f0035]">Manicure &amp; Pedicure  </a></li>
									<li class="mb-[3px]"><a href="services-details.html" class="py-3.75 px-5 bg-[#fef5fe] block w-full text-[#4f0035]">Skin Care</a></li>
									<li class="mb-[3px]"><a href="services-details.html" class="py-3.75 px-5 bg-[#fef5fe] block w-full text-[#4f0035]">Body Treatment</a></li>
									<li class="mb-[3px]"><a href="services-details.html" class="py-3.75 px-5 bg-[#fef5fe] block w-full text-[#4f0035]">Massage</a></li> -->
								</ul>
								<!-- <div class="p-7.5 bg-[#fef5fe] mb-7.5">
									<h4 class="text-[28px]/[35px] mb-3.75 font-bold text-black font-nunito">Brochure</h4>
									<p class="leading-6 mb-6 ">Working from home meant we could vary snack and coffee breaks.</p>
									<a href="javascript:void(0);" class="site-button">Download PDF</a>
								</div> -->
							</div>
                            </div>
</template>
