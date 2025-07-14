<script setup>

    import Frontend from '@/Layouts/FrontEndLayout.vue';
    import { ref, computed , watchEffect} from 'vue';
    import { Link } from '@inertiajs/vue3';

    import { Head } from '@inertiajs/vue3';
    //
</script>
<template>
 <Head title="404 — Страница не найдена"/>
  <Frontend>
    <section>
		<div class="md:pt-20 pt-7.5 md:pb-13.5 pd-5 relative">
            <section>

                <div class="relative md:pt-[120px] pt-8 md:pb-[90px] pb-4.75  content-inner-3 error-page" style="background-image:url(assets/images/background/bg6.jpg); background-size:cover;">
                    <div class="container">
                        <div class="grid grid-cols-12">
                            <div class="md:col-span-6 col-span-12 mb-7.5 self-center text-center ">
                                <h2 class="lg:text-[200px]/[180px] text-[120px]/[120px] font-nunito font-extrabold text-[#00becf]">404</h2>
                                <h3 class="lg:text-[90px]/[70px] text-[60px]/[40px] tracking-[10px] lg:tracking-[20px] mb-5 font-extrabold text-black font-nunito">OOPS!</h3>
                                <h4 class="md:text-[45px]/[45px] text-[32px]/[26px] md:tracking-[2px] text-[#B0B0B0] mb-7.5 font-bold font-nunito">Page Not Found</h4>
                               
                                <Link :href="route('home')" class="site-button bg-primary">Вернуться на главную страницу</Link>

                            </div>
                        </div>
                    </div>
                </div>
	        </section>
		</div>
	</section>

  </Frontend>

</template>
