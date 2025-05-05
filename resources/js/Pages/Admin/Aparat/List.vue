

<script setup>
    import { Head, useForm, usePage, router, Link  } from '@inertiajs/vue3';
    import Admin from '../Admin.vue';
    const {data}= usePage().props;
    console.log(data)

</script>
<template>
    <Admin>
        <template #aparat_content>
            <div class="lg:max-w-[700px] md:mb-7.5">
                                    <div class="p-7.5 border border-[#dfdfdf] seth lg:h-[435.648px]">
                                        <div class="text-right m-2">
                                            <Link :href="route('admin.aparat.create')" class="site-button bg-primary text-white rounded-full h-13.5">Создать</Link>
                                        </div>

                                        <div class="flex tab-content nav" >
                                          <div class="overflow-x-auto"  v-if="data.length>0">

                                            <table class="table-auto border-collapse border border-gray-400 w-full">
                                                <thead>
                                                <tr>
                                                    <th class="border border-gray-400 px-4 py-2">Номер</th>
                                                    <th class="border border-gray-400 px-4 py-2">Название</th>
                                                    <th class="border border-gray-400 px-4 py-2">Описание</th>
                                                    <th class="border border-gray-400 px-4 py-2">Изображение</th>
                                                    <th class="border border-gray-400 px-4 py-2">Действие</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr v-for="(item, index) in data" :key="index">
                                                    <td class="border border-gray-400 px-4 py-2">{{++index}}</td>
                                                    <td class="border border-gray-400 px-4 py-2">{{ item.title }}</td>
                                                    <td class="border border-gray-400 px-4 py-2">{{ item.description }}</td>
                                                    <td class="border border-gray-400 px-4 py-2">
                                                    <img :src="'/storage/' + item.image" alt="image" class="w-20 h-20 object-cover" />
                                                    </td>
                                                     <td class="border border-gray-400 px-4 py-2">
                                                        <Link :href="route('admin.aparat.edit',item.id)" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-600 hover:text-blue-500 cursor-pointer">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 3.487a2.25 2.25 0 1 1 3.182 3.182L8.317 18.397a4.5 4.5 0 0 1-1.89 1.128l-4.06 1.277a.375.375 0 0 1-.475-.474l1.277-4.06a4.5 4.5 0 0 1 1.128-1.89L16.862 3.487z" />
                                                            </svg>

                                                        </Link>

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

