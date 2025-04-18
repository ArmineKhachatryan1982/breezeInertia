
<script setup>
   import { Head, useForm,usePage, router  } from '@inertiajs/vue3';
   import { onMounted,ref, watch , computed} from 'vue';

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

    form.post(route('category_file'));

};


</script>
<style>
.preview-container {
  display: flex;
  flex-wrap: wrap;
  gap: 50px;
  margin-top: 10px;

}
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
.delete-icon {
  position: absolute;
  top: -10px;
  right: -30px;

  color: white;
  border-radius: 50%;
  padding: 5px;
  cursor: pointer;
  font-size: 16px;
}
</style>


<template>

  <form  @submit.prevent="submitForm"  class="max-w-sm mx-auto">
    <select v-model = "form.category_id"
    class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
    >
        <option v-for="category in categories" :key="category.id" :value="category.id">
            {{ category.name }}
        </option>



    </select>
    <input type="text"
           v-model="form.title"
           class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
            >
     <input type="text"
            v-model="form.description"
            class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
             >
      <input type = "file" multiple
            @change="handleFileUpload"

      />
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
      <button  class="bg-blue-500 text-white font-bold py-2 px-4 rounded">send</button>

  </form>

</template>
