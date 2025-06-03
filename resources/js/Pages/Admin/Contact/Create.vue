<script setup>
    import {  useForm, usePage } from '@inertiajs/vue3';
    import { onMounted,ref, watch , computed } from 'vue';
    import Admin from '../Admin.vue';

    const previewUrls = ref([]);



    const form = useForm({
                    address: '',
                    phone_number:'',
                    map:"",
                    file: []

                })

const handleFileUpload = (event) => {
        const file = event.target.files[0];

    if (file) {
        let fileName = file.name;
        let filePreview = { url: URL.createObjectURL(file), name: fileName };
            form.file.push(file);
            // form.file = [...form.file, file];
            previewUrls.value.push(filePreview ); // Generate preview
            console.log()



    }

};

const submitForm = () => {

    form.post(route('admin.contact.store'), {
        onSuccess: () => {
            //es elchi ashxatum
            if (usePage().props.flash?.success) {
                    alert(usePage().props.flash.success);
           }

            form.reset(); // очищает все поля формы

        },
    });

};
onMounted(() => {
  const success = usePage().props.flash?.success
  if (success) {
    alert(success)

  }
})

</script>
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
                                                    <label class="font-bold mb-2.5 inline-block">Адрес *</label>
                                                    <input
                                                      type="text"
                                                      v-model="form.address"
                                                      required=""
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white" placeholder="Адрес" >
                                                </div>
                                                <div class="mb-4">
                                                    <label class="font-bold mb-2.5 inline-block">Номер телефона *</label>
                                                    <input
                                                      type="text"
                                                      v-model="form.phone_number"
                                                      required=""
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white" placeholder="Номер телефона" >
                                                </div>
                                                <div class="mb-4">
                                                    <label class="font-bold mb-2.5 inline-block">Адрес карты</label>
                                                    <textarea
                                                      v-model="form.map"
                                                      required=""
                                                      class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white" placeholder="Адрес карты" >
                                                    </textarea>
                                                </div>
                                                <div class="mb-6.25">
                                                    <label class="font-bold mb-2.5 inline-block">Загрузить файл*</label>
                                                    <input
                                                       type="file"
                                                       @change="handleFileUpload"
                                                       required="" class="text-base h-13.5 px-5 leading-5 outline-none block w-full border border-[#dfdfdf] text-[#495057] font-normal focus:bg-white " >
                                                </div>
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
