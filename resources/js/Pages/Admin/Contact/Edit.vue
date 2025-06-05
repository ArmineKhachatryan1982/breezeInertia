<script setup>
    import {  useForm, usePage } from '@inertiajs/vue3';
    import { onMounted,ref, watch , computed } from 'vue';
    import Admin from '../Admin.vue';

    const appUrl = import.meta.env.VITE_APP_URL;

    const previewUrls = ref([]);
    const { contact,files } = usePage().props;
    if(files.length>0){
        // console.log(files, 5456)

       previewUrls.value = files.map(file => ({
            url: file.path, // путь к изображению, например "/storage/abc.jpg"
            name: file.name || 'DB file', // имя файла (если есть)
            id: file.id // можно сохранить ID для удаления по БД
        }));


    }
    const form = useForm({
                    address: contact.address,
                    phone_number: contact.phone_number,
                    map: contact.map,
                    file: []

                })
const handleFileUpload = (event) => {
    const file = event.target.files[0];

    if (file) {
         previewUrls.value = [];
        form.file = [];
        const reader = new FileReader();

        reader.onload = e => {
            const filePreview = {
                url: e.target.result,
                name: file.name
            };
            previewUrls.value.push(filePreview);  // ✅ Добавляем в массив превью
            console.log(previewUrls)
        };

        reader.readAsDataURL(file);
        form.file.push(file); // сохраняем файл для отправки
    }
};

const submitForm = () => {

    form.post(route('admin.contact.update',{ id:contact.id }),{
        onSuccess: () => {
            if (usePage().props.flash?.success) {
                    alert(usePage().props.flash.success);
           }


        },
    });

};
const isImage = (file) => {
//     // alert(1111)
    console.log(file,'2222')
    // console.log(file.name,'2223')
//   const imageFormats = ['jpg', 'jpeg', 'png','PNG', 'gif', 'bmp', 'svg'];
//   const fileExtension = file.name.split('.').pop().toLowerCase();

//   return imageFormats.includes(fileExtension);
return true;
};



</script>
<style>
.preview-item {
  position: relative;
  display: block;

}
.preview-img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 5px;

}

</style>
<template>
    <Admin>
        <template #aparat_content>
            <div class="lg:max-w-[500px] md:mb-7.5">
                                    <div class="p-7.5 border border-[#dfdfdf] seth ">
                                        <div class="flex tab-content nav">
                                            <form
                                               @submit.prevent="submitForm"
                                               class="w-full" x-show="tab == 'login'" x-transition:enter="transition-all duration-700 easy-in-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                                <h4 class="font-bold font-nunito text-black text-[25px]/[35px]"></h4>
                                                <!-- <p class="mb-4">If you have an account with us, please log in.</p> -->
                                                <div class="mb-4">
                                                    <label class="font-bold mb-2.5 inline-block">Адрес *</label>
                                                    <input
                                                      type="text"
                                                      v-model="form.address"
                                                      required=""
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white" placeholder="Адрес" >
                                                </div>
                                                <div class="mb-4">
                                                    <label class="font-bold mb-2.5 inline-block">Номер телефона </label>
                                                    <input
                                                      type="text"
                                                      v-model="form.phone_number"
                                                      required=""
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white" placeholder="Номер телефона" >
                                                </div>
                                                <div class="mb-4">
                                                    <label class="font-bold mb-2.5 inline-block">Адрес карты </label>
                                                    <textarea
                                                      v-model="form.map"
                                                      required=""
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white" placeholder="Адрес карты" >
                                                    </textarea>
                                                </div>
                                                <div class="mt-4 w-[300px] h-[200px] overflow-hidden border">
                                                <div v-html="form.map"></div>
                                                </div>
                                                <div class="mb-6.25">
                                                    <label class="font-bold mb-2.5 inline-block">Загрузить файл*</label>
                                                    <input
                                                       type="file"
                                                       @change="handleFileUpload"
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white " >
                                                </div>

                                               <div v-if="previewUrls.length>0">
                                                <div v-for="(file, index) in previewUrls" :key="index" class="preview-item"  >
                                                            <div class="files d-flex align-items-start mt-2" v-if="isImage(file)" >
                                                                <!-- <img :src="file.url" class="preview-img"> -->
                                                                <video width="200" height="200" controls>
                                                                    <source :src="file.video_url" type="video/mp4">
                                                                        Ваш браузер не поддерживает воспроизведение видео.
                                                                </video>
                                                            </div>
                                                            </div>

                                               </div>
                                                <div class="text-left mt-2">
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
