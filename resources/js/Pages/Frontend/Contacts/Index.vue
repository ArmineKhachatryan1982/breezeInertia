<script setup>

    import Frontend from '@/Layouts/FrontEndLayout.vue';
    import { ref, computed , watchEffect} from 'vue';
    import {  usePage } from '@inertiajs/vue3';

    import { Head } from '@inertiajs/vue3';
    import Sidebar from './Sidebar.vue';
    import ServiceDetailsSection from './ServiceDetailsSection.vue';


</script>
<template>
 <Head title="Контакты"/>
  <Frontend>
        <section>
		<div class="content-block">
			<div class="md:py-20 py-7.5 relative">
				<div class="container">
					<div class="grid grid-cols-12 gap-x-7.5">
                        <section>
		<div class="md:pt-20 pt-7.5 md:pb-13.5 pd-5 relative">
			<div class="container">
				<div class="grid grid-cols-12 gap-x-7.5">
					<!-- right part start -->
					<div class="xl:col-span-4 lg:col-span-6 col-span-12 lg:flex">
						<div class="p-7.5 border border-[#dee2e6] mb-7.5 contact-area self-stretch">
							<h4 class="mb-2.5 text-[28px]/[35px] font-bold text-black font-nunito">Quick Contact</h4>
							<p class="mb-6">If you have any questions simply use the following contact details.</p>
							<ul class="">
								<li class="relative left mb-7.5">
									<div class="float-left mr-5 border border-[#eee] size-4.75 ml-auto table text-center rounded-[3px]">
										<span class="table-cell align-middle text-primary">
											<i class="text-xl ti-location-pin"></i>
										</span>
									</div>
									<div class="overflow-hidden">
										<h6 class="text-lg text-black font-bold uppercase font-nunito">Address:</h6>
										<p class="leading-6">123 West Street, Melbourne Victoria 3000 Australia</p>
									</div>
								</li>
								<li class="relative left mb-7.5">
									<div class="float-left mr-5 border border-[#eee] size-4.75 ml-auto table text-center rounded-[3px]">
										<span class="table-cell align-middle text-primary">
											<i class="text-xl ti-email"></i>
										</span>
									</div>
									<div class="overflow-hidden">
										<h6 class="text-lg text-black font-bold uppercase font-nunito">Email:</h6>
										<p class="leading-6">info@example.com</p>
									</div>
								</li>
								<li class="relative left ">
									<div class="float-left mr-5 border border-[#eee] size-4.75 ml-auto table text-center rounded-[3px]">
										<span class="table-cell align-middle text-primary">
											<i class="text-xl ti-mobile"></i>
										</span>
									</div>
									<div class="overflow-hidden">
										<h6 class="text-lg text-black font-bold uppercase font-nunito">PHONE</h6>
										<p class="leading-6">+91 987 654 3210</p>
									</div>
								</li>
							</ul>
							<div class="mt-5">
								<ul class="inline-block border-t border-[#eee] pt-5 text-left w-full">
									<li class="inline-block">
										<a target="_blank" href="https://www.facebook.com/" class="text-white size-[35px] !leading-[34px] align-middle text-center bg-primary  fa-brands fa-facebook-f"></a></li>
									<li class="inline-block">
										<a target="_blank" href="https://x.com/" class="text-white size-[35px] !leading-[34px] align-middle text-center bg-primary  fa-brands fa-x-twitter"></a></li>
									<li class="inline-block">
										<a target="_blank" href="https://www.linkedin.com/" class="text-white size-[35px] !leading-[34px] align-middle text-center bg-primary  fa-brands fa-linkedin-in"></a></li>
									<li class="inline-block">
										<a target="_blank" href="https://www.instagram.com/" class="text-white size-[35px] !leading-[34px] align-middle text-center bg-primary fa-brands fa-instagram"></a></li>
									<li class="inline-block">
										<a target="_blank" href="https://www.google.com/" class="text-white size-[35px] !leading-[34px] align-middle text-center bg-primary duration-500 fa-brands fa-google-plus-g"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- right part END -->

					<!-- Left part start -->
					<div class="xl:col-span-4 lg:col-span-6 col-span-12 mb-7.5">
						<div class="p-7.5 border border-[#e1e6eb] clearfix">
							<h4 class="mb-2.5 text-[28px]/[35px] font-bold text-black font-nunito">Send Message Us</h4>
							<div class="dzFormMsg"></div>
							<form method="post" class="clearfix clear-both" action="assets/script/contact_smtp.php">
							<input type="hidden" value="Contact" name="dzToDo h-13.5">
								<div class="grid grid-cols-12">
									<div class="col-span-12">
										<div class="mb-6.25">
											<div class="w-full relative flex flex-wrap items-stretch">
												<input name="dzName" type="text" required="" class="px-5 py-2.5 table-cell relative flex-auto w-[1%] h-13.5 leading-5 text-base text-[#495057] bg-white border border-[#e1e6eb] outline-none hover:border-[silver] duration-500" placeholder="Your Name">
											</div>
										</div>
									</div>
									<div class="col-span-12">
										<div class="mb-6.25">
											<div class="w-full relative flex flex-wrap items-stretch">
												<input name="dzEmail" type="email" class="px-5 py-2.5 table-cell relative flex-auto w-[1%] h-13.5 leading-5 text-base text-[#495057] bg-white border border-[#e1e6eb] outline-none hover:border-[silver] duration-500" required="" placeholder="Your Email Id">
											</div>
										</div>
									</div>
									 <div class="col-span-12">
										<div class="mb-6.25">
											<div class="w-full relative flex flex-wrap items-stretch">
												<textarea name="dzMessage" rows="4" class="px-5 py-2.5 table-cell relative flex-auto w-[1%] h-auto leading-5 text-base text-[#495057] bg-white border border-[#e1e6eb] outline-none hover:border-[silver] duration-500" required="" placeholder="Your Message..."></textarea>
											</div>
										</div>
									</div>
									<div class="col-span-12">
										<div class="sm:mb-6.25 mb-2.5">
											<div class="relative flex flex-wrap items-stretch w-full">
												<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-dpb7lk29z45" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN&amp;co=aHR0cHM6Ly9iZWF1dHl6b25lLmRleGlnbnpvbmUuY29tOjQ0Mw..&amp;hl=en&amp;v=X-oVtzDcTGjZVms4LEgykmCV&amp;size=normal&amp;cb=srg6dc1n7pjx"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
												<input class="form-control d-none" style="display:none;" data-recaptcha="true" required="" data-error="Please complete the Captcha">
											</div>
										</div>
									</div>
									<div class="col-span-12">
										<button name="submit" type="submit" value="Submit" class="site-button rounded-none h-13.5 w-full"> <span>Submit</span> </button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- Left part END -->
					<div class="xl:col-span-4 col-span-12 mb-7.5">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" class="align-self-stretch " style="border:0; width:100%; height:100%;" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>


					</div>
				</div>
			</div>
		</div>
	</section>
  </Frontend>

</template>
