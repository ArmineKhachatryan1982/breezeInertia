<script setup>
  import { usePage, Link } from '@inertiajs/vue3';

</script>
<template>
    <div class="lg:col-span-3 md:col-span-4 col-span-12">
    <div class="sticky-top sticky top-29">
        <ul class="service-list mb-7.5">


            <!-- <li class="mb-[3px]  active"><a href="services-details.html" class="py-3.75 px-5 bg-[#fef5fe] block w-full text-[#4f0035] border-l-[3px] border-primary">Haircut &amp; Styling</a></li> -->
            <li class="mb-[3px]" > <Link :href="route('admin.aparat.list')" class="py-3.75 px-5 bg-[#fef5fe] block w-full text-[#4f0035]" :class="{ 'border-l-[3px] border-primary': route().current('admin.aparat.list') }" >Список устройств</Link></li>
            <li class="mb-[3px]" > <Link :href="route('admin.contact.list')" class="py-3.75 px-5 bg-[#fef5fe] block w-full text-[#4f0035]" :class="{ 'border-l-[3px] border-primary': route().current('admin.contact.list') }" >Список контакты</Link></li>

        </ul>
        <!-- <div class="p-7.5 bg-[#fef5fe] mb-7.5">
            <h4 class="text-[28px]/[35px] mb-3.75 font-bold text-black font-nunito">Brochure</h4>
            <p class="leading-6 mb-6 ">Working from home meant we could vary snack and coffee breaks.</p>
            <a href="javascript:void(0);" class="site-button">Download PDF</a>
        </div> -->
    </div>
    </div>
</template>
