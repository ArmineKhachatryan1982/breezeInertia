

<script setup>
    import { Head, useForm, usePage, router, Link  } from '@inertiajs/vue3';
    import Admin from '../Admin.vue';
    const {data}= usePage().props;
    const appUrl = import.meta.env.VITE_APP_URL;

    console.log(data)

    const removeRecord =async (index,tb_name,event) => {
        if (!event) {
                console.log("Event is undefined");
                return;
           }
            try {
                // alert(`Index: ${index}, Table: ${tb_name}`);

                const response = await axios.delete(`/delete-item/${tb_name}/${index}`);

                  // Find the closest <tr> with data-id
                 const element = event.target.closest('tr');

                // Remove element from UI  from db
                if (element) {

                    const elementId = element.getAttribute("data-id"); // Get data-id attribute

                    if (parseInt(elementId) === index) { // Compare with file.id
                       element.remove(); // Remove from DOM
                    }
                }

            } catch (error) {
                console.error('Error deleting file:', error.response?.data || error.message);
            }

};


</script>
<style>
    iframe {
    width: 100% !important;
    height: 100% !important;
    }
</style>
<template>
    <Admin>
        <template #aparat_content>
            <div class="lg:max-w-[900px] md:mb-7.5">
                                    <div class="p-7.5 border border-[#dfdfdf] seth ">
                                        <div class="text-right m-2">
                                            <Link :href="route('admin.contact.create')" class="site-button bg-primary text-white rounded-full h-13.5">Создать</Link>
                                        </div>

                                        <div class="flex tab-content nav" >
                                          <div class="overflow-x-auto"  v-if="data.length>0">

                                            <table class="table-auto border-collapse border border-gray-400 w-full">
                                                <thead>
                                                <tr>
                                                    <th class="border border-gray-400 px-4 py-2">Номер</th>
                                                    <th class="border border-gray-400 px-4 py-2">Адрес</th>
                                                    <th class="border border-gray-400 px-4 py-2">Номер телефона</th>
                                                    <th class="border border-gray-400 px-4 py-2">Карта</th>
                                                    <th class="border border-gray-400 px-4 py-2">Видео</th>
                                                    <th class="border border-gray-400 px-4 py-2">Действие</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr v-for="(item, index) in data" :key="index" :data-id="item.id" >
                                                    <td class="border border-gray-400 px-4 py-2">{{++index}}</td>
                                                    <td class="border border-gray-400 px-4 py-2">{{ item.address }}</td>
                                                    <td class="border border-gray-400 px-4 py-2">{{ item.phone_number }}</td>
                                                    <!-- <td class="border border-gray-400 px-4 py-2" v-html="item.map" style="width: 100px; height: 50px; overflow: hidden;"></td> -->
                                                    <td class="border border-gray-400 px-4 py-2">
                                                        <div class="w-[200px] h-[150px] overflow-hidden">
                                                            <div v-html="item.map"></div>
                                                        </div>
                                                        </td>


                                                    <td class="border border-gray-400 px-4 py-2">
                                                        <video width="200" height="200" controls>
                                                            <source :src="appUrl + '/storage/' + item.video" type="video/mp4">
                                                            Ваш браузер не поддерживает воспроизведение видео.
                                                            </video>

                                                    </td>
                                                     <td class="border border-gray-400 px-4 py-2 ">
                                                        <div class="flex justify-between items-center space-x-4">
                                                            <Link :href="route('admin.contact.edit', item.id)">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600 hover:text-blue-500 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 3.487a2.25 2.25 0 1 1 3.182 3.182L8.317 18.397a4.5 4.5 0 0 1-1.89 1.128l-4.06 1.277a.375.375 0 0 1-.475-.474l1.277-4.06a4.5 4.5 0 0 1 1.128-1.89L16.862 3.487z" />
                                                            </svg>
                                                            </Link>
                                                            <i class="bx bx-trash delete-icon cursor-pointer text-red-500" @click.prevent="removeRecord(item.id, 'contacts', $event)"></i>
                                                        </div>
                                                     </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
            </div>
        </template>
    </Admin>
</template>

