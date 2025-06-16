<script setup>
    import {  useForm, usePage } from '@inertiajs/vue3';
    import { onMounted,ref, watch , computed } from 'vue';
    import Admin from '../Admin.vue';

    const { model,categories,files } = usePage().props;
    const FilesFromDB = ref([]);   // Файлы из базы
    const previewUrls = ref([]);   // Новые загруженные файлы
    const form = useForm({
                    category_id: model.category_id,
                    title: model.title,
                    description: model.description,
                    file: []

                })

if (files?.length > 0) {
    FilesFromDB.value = files.map(file => ({
        // filable -i mej ACCESSORI- mijocov stacel em fajly nkarelwuc  xndir chlini
        url: file.file_path,
        name: file.name || 'DB file',
        id: file.id
    }));
}
const handleFileUpload = (event) => {

  const files = Array.from(event.target.files); // превращаем FileList в массив
   files.forEach(file => {
        const reader = new FileReader();

        reader.onload = e => {
            const filePreview = {
                url: e.target.result,
                name: file.name
            };
            previewUrls.value.push(filePreview); // добавляем в превью
        };

        reader.readAsDataURL(file); // читаем файл

        form.file.push(file); // добавляем в form для отправки
    });
};


// =======================

const submitForm = () => {

    form.post(route('admin.service_details.update',{ id:model.id }),{
        onSuccess: () => {
            if (usePage().props.flash?.success) {
                    alert(usePage().props.flash.success);
           }


        },
    });

};
const isImage = (file) => {

  const imageFormats = ['jpg', 'jpeg', 'png','PNG', 'gif', 'bmp', 'svg'];
  const fileExtension = file.name.split('.').pop().toLowerCase();

  return imageFormats.includes(fileExtension);
// return true;
};

// Remove file from preview and form data
const removeNewFile =async (index,event) => {
    if (!event) {
    console.log("Event is undefined");
    return;
  }

    const hasDataDb = event.target.hasAttribute('data-db');
    if (hasDataDb) {

        const element = event.target.closest(".preview-item");



            try {
                const response = await axios.delete(`/delete-item/filables/${index}`);


                // Remove file from UI after successful deletion
                if (element) {

                    const elementId = element.getAttribute("data-id"); // Get data-id attribute

                    if (parseInt(elementId) === index) { // Compare with file.id
                       element.remove(); // Remove from DOM
                    }
                }

            } catch (error) {
                console.error('Error deleting file:', error.response?.data || error.message);
            }



    // Perform your logic here for when the attribute exists
  } else {

        form.file.splice(index, 1);
        previewUrls.value.splice(index, 1);
  }
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
 display: inline-block !important;

}
.delete-icon{


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
                                                    <select v-model="form.category_id"
                                                      class = "mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                     >
                                                        <option v-for="category in categories.data" :key="category.id" :value="category.id">
                                                            {{ category.name }}
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="font-bold mb-2.5 inline-block">Заголовок *</label>
                                                    <input
                                                      type="text"
                                                      v-model="form.title"
                                                      required=""
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white" placeholder="Адрес" >
                                                </div>
                                                <div class="mb-4">
                                                    <label class="font-bold mb-2.5 inline-block">Описание </label>
                                                    <textarea
                                                      type="text"
                                                      v-model="form.description"
                                                      required=""
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white" placeholder="Номер телефона" >
                                                      </textarea>
                                                </div>


                                                <div class="mb-6.25">
                                                    <label class="font-bold mb-2.5 inline-block">Загрузить файл*</label>
                                                    <input
                                                       type="file"
                                                       multiple
                                                       @change="handleFileUpload"
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white " >
                                                </div>

                                               <!-- <div v-if="previewUrls.length>0">
                                                    <div v-for="(file, index) in previewUrls" :key="index" class="preview-item"  >
                                                        <div class="files d-flex align-items-start mt-2" v-if="isImage(file)" >
                                                            <div class="files d-flex align-items-start mt-2" v-if="isImage(file)" >
                                                                <img :src="file.url" class="preview-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                               </div> -->

                                                <div v-if="FilesFromDB?.length > 0">
                                                    <div v-for="(file, index) in FilesFromDB" :key="index" class="preview-item"  :data-id="file.id" >

                                                            <div class="d-flex  mt-2 justify-content-between" v-if="isImage(file)"  >
                                                                <img :src="file.url" class="preview-img" style="max-width: 100px; height: auto;">
                                                                <i class="bx bx-trash delete-icon delete-prw cursor-pointer text-red-500" data-db @click.prevent="removeNewFile(file.id, $event)" style="position: absolute; top: 5px;"></i>
                                                            </div>

                                                    </div>
                                               </div>
                                               <div v-if="previewUrls?.length > 0">
                                                    <div v-for="(file, index) in previewUrls" :key="index" class="preview-item"  >

                                                            <div class="d-flex justify-content-between mt-2" v-if="isImage(file)"  >
                                                                <img :src="file.url" class="preview-img" style="max-width: 100px; height: auto;">
                                                                 <i class="bx bx-trash delete-icon delete-db cursor-pointer text-red-500"  @click.prevent="removeNewFile(file.id, $event)" style="position: absolute; top: 5px;"></i>
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
