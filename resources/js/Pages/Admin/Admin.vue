<script setup>
    import Frontend from '@/Layouts/FrontEndLayout.vue';
    import { ref, computed } from 'vue';
    import {  usePage } from '@inertiajs/vue3';
import Sidebar from './Sidebar.vue';
</script>
<template>
    <Head title="Аппаратная косметология"/>
    <Frontend>
        <section>
		<div class="md:pt-20 pt-7.5 md:pb-13.5 pb-5 relative">
			<!-- Product -->
			<div class="container">
				<div class="grid grid-cols-12 gap-x-7.5">
					<div class="lg:col-span-3 md:col-span-4 sm:col-span-6 col-span-12">
						<aside class="sticky top-[100px] block">
                            <Sidebar/>

						</aside>
					</div>
                    <div class="lg:col-span-9 md:col-span-8 sm:col-span-6 col-span-12 ">

                            <slot name="aparat_content"></slot>

                       

                    </div>

				</div>
			</div>
			<!-- Product END -->
		</div>
	</section>

    </Frontend>
</template>
