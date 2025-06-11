<script setup>
   import { Head, useForm,usePage, router  } from '@inertiajs/vue3';
   import { onMounted,ref, watch , computed} from 'vue';
   import Admin from '../Admin.vue';

   const {categories}= usePage().props;

   const previewUrls = ref([]);

   const form = useForm({

    category_id: '',
    title: '',
    description: '',
    file: []

   })
const handleFileUpload = (event) => {
        const files = event.target.files;

    if (files.length) {

        for (let file of files) {
            let fileName = file.name;
            let filePreview = { url: URL.createObjectURL(file), name: fileName };
                form.file.push(file);
                // form.file = [...form.file, file];
                previewUrls.value.push(filePreview ); // Generate preview
                console.log()
        }


    }

};

const isImage = (file) => {
    // alert(1111)
    console.log(file,'2222')
  const imageFormats = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg'];
  const fileExtension = file.name.split('.').pop().toLowerCase();

  return imageFormats.includes(fileExtension);
};
console.log(form.file,'515')



const submitForm = () => {

    form.post(route('admin.service_details.store'), {
        onSuccess: () => {
            //es elchi ashxatum
            if (usePage().props.flash?.success) {
                    alert(usePage().props.flash.success);
           }

            form.reset(); // очищает все поля формы

        },
    });

};


</script>
<template>
    <Admin>
        <template #aparat_content>
            <div class="lg:max-w-[500px] md:mb-7.5">
                                    <div class="p-7.5 border border-[#dfdfdf] ">
                                        <div class="flex tab-content nav">
                                            <form
                                               @submit.prevent="submitForm"
                                               class="w-full" x-show="tab == 'login'" x-transition:enter="transition-all duration-700 easy-in-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                                <h4 class="font-bold font-nunito text-black text-[25px]/[35px]"></h4>
                                                <!-- <p class="mb-4">If you have an account with us, please log in.</p> -->

                                                 <select v-model = "form.category_id"
                                                      class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                 >
                                                    <option v-for="category in categories" :key="category.id" :value="category.id">
                                                        {{ category.name }}
                                                    </option>
                                                </select>
                                                <div class="mb-4">
                                                    <label class="font-bold mb-2.5 inline-block">Заголовок *</label>
                                                    <input
                                                      type="text"
                                                      v-model="form.title"
                                                      required=""
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white" placeholder="Заголовок" >
                                                </div>
                                                <div class="mb-4">
                                                    <label class="font-bold mb-2.5 inline-block">Описание *</label>
                                                    <input
                                                      type="text"
                                                      v-model="form.description"
                                                      required=""
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white" placeholder="Описание" >
                                                </div>

                                                <div class="mb-6.25">
                                                    <label class="font-bold mb-2.5 inline-block">Загрузить файл*</label>
                                                    <input
                                                       type="file"
                                                       @change="handleFileUpload"
                                                       required="" class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white " >
                                                </div>
                                                <div v-if="previewUrls.length"  class="preview-container">

                                                    <div v-for="(file, index) in previewUrls" :key="index" class="preview-container" style="border:1px solid red">
                                                        <div class="d-flex justify-content-start col-sm-9 flex-wrap" v-if="isImage(file)">
                                                            <img :src="file.url" class="preview-img">
                                                            <i class="bx bx-trash delete-icon bg-green-500" @click.prevent="removeNewFile(index)"></i>
                                                        </div>
                                                        <div v-else-if="isOther(file)">
                                                                <a :href="file.url" target="_blank" class="flex">

                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                        <path fill="currentColor" d="M6 2h7l5 5v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm7 1.5V8h4.5L13 3.5z"/>
                                                                    </svg>
                                                                        {{ file.name }}
                                                                        <i class="bx bx-trash delete-icon bg-green-500" @click.prevent="removeNewFile(index)"></i>
                                                                </a>
                                                        </div>
                                                        <div v-else-if="isPdf(file)">
                                                            <a :href="file.path" target="_blank" class="flex">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path fill="currentColor" d="M6 2h7l5 5v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm7 1.5V8h4.5L13 3.5z"/>
                                                                </svg>
                                                                {{ file.name }}
                                                            </a>
                                                            <i class="bx bx-trash delete-icon bg-green-500" @click.prevent="removeNewFile(index)"></i>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-left">
                                                    <button class="site-button text-sm py-3.5 px-7.5 uppercase rounded-none">Сохранить</button>
                                                    <!-- <a @click.prevent="tab = 'forgot-password'" href="#forgot-password" class="ml-1.25 text-left text-primary hover:text-[#666] duration-500 "><i class="fa-solid fa-unlock"></i> Forgot Password</a> -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
            </div>
        </template>
    </Admin>
</template>
