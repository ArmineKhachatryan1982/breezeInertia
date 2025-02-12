
<template>
    <footer>
		<!-- footer top part -->
		<div class="md:pt-20 pt-4.75  pb-5 bg-white bg-[url('/assets/images/background/bg8.jpg')] bg-cover bg-top bg-no-repeat">
			<div class="container wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
				<div class="row justify-center">
					<div class="lg:w-7/12 sm:w-8/12 w-full text-center px-3.75 relative w-full">
						<div class="max-w-[200px] pb-7.5 !m-auto">
							<a href="index.html">
								<!-- <img src="./assets/images/logo.png" alt="/"> -->
							</a>
						</div>
						<div class="md:mb-4.75 mb-6.25">
							<h3 class="mb-2.5 capitalize md:text-2xl text-xl font-bold font-nunito text-black">Subscribe To Our Newsletter</h3>
							<p class="text-black capitalize mb-5 text-sm leading-6 tracking-tight">If you have any questions, you can contact with us so that we can give you a satisfying answer. Subscribe to our newsletter to get our latest products.</p>
							<div class="subscribe-form mb-5">
								<form class="dzSubscribe" action="assets/script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="w-full relative flex flex-wrap items-stretch">
										<input name="dzEmail" required="required" class="bg-transparent w-[1%] flex-auto outline-none py-2.5 px-5 mr-1.25 h-13.5 border-2 border-[#0000001a] rounded-3xl text-[15px] table-cell text-[#333] max-xl:mb-2.5 focus:bg-white" placeholder="Your Email Address" type="email">
										<span class="input-group-btn pl-2.5">
											<button name="submit" id="submit" type="submit" class="site-button  bg-primary text-white rounded-full h-13.5">Subscribe</button>
										</span>
									</div>
								</form>
							</div>
							<ul class="flex gap-2 flex justify-center">
								<li>
									<a target="_blank" href="https://www.facebook.com/" class="site-button bg-[#3B5998] hover:bg-[#3B5998] rounded-full size-4.75 leading-[39px] flex items-center justify-center">
									<i class="fa-brands fa-facebook-f"></i></a>
								</li>
								<li>
									<a target="_blank" href="https://www.google.com/" class="site-button bg-[#DE4E43] hover:bg-[#DE4E43] rounded-full size-4.75 leading-[39px] flex items-center justify-center">
									<i class="fa-brands fa-google-plus-g"></i></a>
								</li>
								<li>
									<a target="_blank" href="https://www.linkedin.com/" class="site-button bg-[#007BB6] hover:bg-[#007BB6] rounded-full size-4.75 leading-[39px] flex items-center justify-center">
									<i class="fa-brands fa-linkedin-in"></i></a>
								</li>
								<li>
									<a target="_blank" href="https://www.instagram.com/" class="site-button bg-[#8A5A4E] hover:bg-[#8A5A4E] rounded-full size-4.75 leading-[39px] flex items-center justify-center">
									<i class="fa-brands fa-instagram"></i></a>
								</li>
								<li>
									<a target="_blank" href="https://x.com/" class="site-button bg-black hover:bg-[#555] rounded-full size-4.75 leading-[39px] flex items-center justify-center"><i class="fa-brands fa-x-twitter"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer top part -->

		<!-- section footer bottom start -->
		<div class="py-6.25 bg-[#f9e8f9]">
			<div class="container">
				<div class="grid grid-cols-12">
					<div class="sm:col-span-6 col-span-12 text-center md:text-left">
						<span class="opacity-70 text-sm  text-black capitalize">Copyright ©</span>
						<span class="current-year text-sm">2025</span>
						<a href="https://dexignzone.com/" class="text-sm text-black opacity-70 font-semibold hover:text-primary hover:duration-500 duration-500" target="_blank">DexignZone</a>
					</div>
					<div class="sm:col-span-6 col-span-12 text-center md:text-right">
						<ul>
							<li class="inline-block pl-[3px] relative pr-3.75 after:content-['/'] after:absolute after:right-0">
								<a class="text-sm text-black opacity-70" href="contact.html">Help Desk</a>
							</li>
							<li class="inline-block px-[3px] relative">
								<a class="text-sm text-black opacity-70 hover:text-primary duration-500" href="contact.html">Privacy Policy</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- section footer bottom end -->
	</footer>
</template>
