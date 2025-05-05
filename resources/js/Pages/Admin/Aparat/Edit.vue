<script setup>
    import {  useForm, usePage } from '@inertiajs/vue3';
    import { onMounted,ref, watch , computed } from 'vue';
    import Admin from '../Admin.vue';

    const previewUrls = ref([]);
    const { aparat,files } = usePage().props;
    if(files.length>0){
        console.log(5456)

        previewUrls.value = files[0]


    }
    console.log(previewUrls)




    const form = useForm({
                    title: aparat.title,
                    description: aparat.description,
                    file: []

                })

const handleFileUpload = (event) => {
        const file = event.target.files;

    // if (file) {
    //     console.log(file)

    //     let fileName = file.name;
    //     let filePreview = { url: URL.createObjectURL(file), name: fileName };
    //         form.file.push(file);
    //         // form.file = [...form.file, file];
    //         previewUrls.value.push(filePreview ); // Generate preview
    //         console.log()



    // }
//     if (files.length) {
//        for (let file of files) {
//             let fileName = file.name;
//             let filePreview = { url: URL.createObjectURL(file), name: fileName };
//                 form.file.push(file);
//                 previewUrls.value.push(filePreview ); // Generate preview


//         }
//   }

};

const submitForm = () => {

    form.post(route('admin.aparat.update',{ id:aparat.id }),{
        onSuccess: () => {
            //es elchi ashxatum
            if (usePage().props.flash?.success) {
                    alert(usePage().props.flash.success);
           }

             window.location.reload();
        },
    });

};
const isImage = (file) => {
//     // alert(1111)
    console.log(file,'2222')
    // console.log(file.name,'2223')
  const imageFormats = ['jpg', 'jpeg', 'png','PNG', 'gif', 'bmp', 'svg'];
//   const fileExtension = file.name.split('.').pop().toLowerCase();

//   return imageFormats.includes(fileExtension);
return true;
};



</script>
<style>
.preview-item {
  position: relative;
  display: block;
  border:1px solid red;
}
.preview-img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 5px;

}
.delete-icon {
  position: absolute;
  top: 0;
  right: 50px;

  color: white;
  border-radius: 50%;
  padding: 5px;
  cursor: pointer;
  font-size: 16px;
}
</style>
<template>
    <Admin>
        <template #aparat_content>
            <div class="lg:max-w-[500px] md:mb-7.5">
                                    <div class="p-7.5 border border-[#dfdfdf] seth lg:h-[435.648px]">
                                        <div class="flex tab-content nav" x-data="{ tab: 'login' }">
                                            <form
                                               @submit.prevent="submitForm"
                                               class="w-full" x-show="tab == 'login'" x-transition:enter="transition-all duration-700 easy-in-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                                <h4 class="font-bold font-nunito text-black text-[25px]/[35px]"></h4>
                                                <!-- <p class="mb-4">If you have an account with us, please log in.</p> -->
                                                <div class="mb-4">
                                                    <label class="font-bold mb-2.5 inline-block">Title *</label>
                                                    <input
                                                      type="text"
                                                      v-model="form.title"
                                                      required=""
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white" placeholder="Title" >
                                                </div>
                                                <div class="mb-4">
                                                    <label class="font-bold mb-2.5 inline-block">Description </label>
                                                    <textarea
                                                      v-model="form.description"
                                                      required=""
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white" placeholder="Your Email Id" >
                                                    </textarea>
                                                </div>
                                                <div class="mb-6.25">
                                                    <label class="font-bold mb-2.5 inline-block">Upload file*</label>
                                                    <input
                                                       type="file"
                                                       @change="handleFileUpload"
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white " >
                                                </div>
                                                 <div v-if="files && files.length" >
                                                        <div v-for="(file, index) in files" :key="file.id" class="preview-item" :data-id="file.id" >
                                                            <div class="files d-flex align-items-start mt-2" v-if="isImage(file)">

                                                                <img :src="file.path"   class="preview-img"  />
                                                                <i class="bx bx-trash delete-icon bg-green-500" data-db @click.prevent="removeNewFile(file.id, $event)"></i>

                                                            </div>
                                                            </div>
                                                             </div>
                                                             <!-- prew -->
                                                              <div v-if="previewUrls.length">

                                                        <div v-for="(file, index) in previewUrls" :key="index" class="preview-item"  >
                                                            <div class="files d-flex align-items-start mt-2" v-if="isImage(file)" >
                                                                <img :src="file.url" class="preview-img">
                                                                <i class="bx bx-trash delete-icon bg-green-500" @click="removeNewFile(index, $event)"></i>

                                                            </div>
                                                            </div>
                                                            </div>




                                                 <!-- <div    class="files d-flex align-items-start mt-2"  >
                                                                <img :src="'/storage/' + form.image" class="preview-img">
                                                                <i class="bx bx-trash delete-icon bg-green-500" @click="removeNewFile(index, $event)"></i>

                                                            </div> -->


                                                <div class="text-left">
                                                    <button class="site-button text-sm py-3.5 px-7.5 uppercase rounded-none">Сохранить</button>
                                                    <!-- <a @click.prevent="tab = 'forgot-password'" href="#forgot-password" class="ml-1.25 text-left text-primary hover:text-[#666] duration-500 "><i class="fa-solid fa-unlock"></i> Forgot Password</a> -->
                                                </div>
                                            </form>

                                            <!-- <form class="w-full" x-show="tab == 'forgot-password'" x-transition:enter="transition-all duration-700 easy-in-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" style="display: none;">

                                                <h4 class="font-bold text-[25px]/[35px] text-black font-nunito">FORGET PASSWORD ?</h4>
                                                <p class="mb-4 leading-8">We will send you an email to reset your password. </p>
                                                <div class="mb-6.25">
                                                    <label class="font-bold mb-2.5 inline-block">E-MAIL *</label>
                                                    <input name="dzName" required="" class="border border-[#dfdfdf] text-base h-13.5 px-5 leading-5 outline-none block w-full  text-[#495057] font-normal focus:bg-white " placeholder="Your Email Id" type="email">
                                                </div>
                                                <div class="text-left">
                                                    <a class="site-button border border-[#666] text-[#666] bg-transparent hover:bg-[#333] rounded-none hover:text-[#fff] py-3.5 px-7.5" @click.prevent="tab = 'login'" href="javascript:void(0)">Back</a>
                                                    <button class="float-right site-button rounded-none py-3.5 px-7.5">Submit</button>
                                                </div>
                                            </form> -->

                                        </div>
                                    </div>
            </div>
        </template>
    </Admin>
</template>
