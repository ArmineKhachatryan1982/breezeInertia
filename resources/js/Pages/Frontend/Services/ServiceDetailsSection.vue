<script setup>

  import { defineProps } from 'vue';
  const baseUrl = import.meta.env.VITE_APP_URL || 'http://127.0.0.1:8000';


  const props = defineProps({
  serviceDetails: {
    type: Object,
    required: true
  }
});
  console.log(props,'444')

</script>
<style>
.grid > div {
    display: flex;
    flex-direction: column;
    height: 100%; /* Растягивает блоки на всю высоту */
}

.grid > div .relative {
    flex-grow: 1; /* Заполняет доступное пространство */
    display: flex;
    flex-direction: column;
}

.grid > div img {
    width: 100%; /* Растягивает изображения по ширине */
    height: 200px; /* Фиксированная высота */
    object-fit: cover; /* Обрезает изображение, чтобы оно заполнило блок */
}
</style>


<template>

<div class="lg:col-span-9 md:col-span-8 col-span-12" v-if="serviceDetails">
    <div >
        <h2 class="mb-2.5 text-4.5xl/[48px] text-black font-nunito font-semibold max-md:mt-5">
            {{ serviceDetails.title }}
        </h2>
        <p class="leading-6 mb-6">{{ serviceDetails.description }}</p>

        <!-- Сетка с 3 колонками на больших экранах -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4  ">
            <div v-for="(file, index) in serviceDetails.files" :key="file.id" class="p-4">
                <div :class="[index % 2 === 0 ? 'bg-[#f7f9fb]' : 'bg-white', 'relative text-center p-7.5 shadow-md flex justify-center items-center']">
                    <div class="w-20 mb-5 flex justify-center items-center ">
                        <i class="flaticon-spa text-primary text-4.5xl"></i>
                    </div>
                    <div class="overflow-hidden">
                        <h5 class="text-lg text-black mb-2.5 font-bold font-nunito">
                           Клиент до и после
                        </h5>
                        <!-- <p class="mb-6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh..</p> -->
                    </div>

                    <!-- <img :src="`${baseUrl}/storage/${file.path}`" alt="File Image"> -->
                     <img :src="file.file_path" alt="File Image" title="Аппаратная косметология">
                </div>
            </div>
        </div>
    </div>
</div>
<p v-else>Нет сервисов для этой категории</p>

</template>
