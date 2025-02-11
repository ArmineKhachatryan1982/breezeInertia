
<script setup>
import { Head } from '@inertiajs/vue3';
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
    defineProps({
        title: String
    });
</script>
<template>
    <Head title="Booking page"/>
    <FrontendLayout/>

    <!-- This is {{title}} page -->
    <!-- inner page banner -->
	<section>
		<div class="md:h-[300px] h-[150px] bg-cover bg-center table w-full text-left after:content-[''] after:absolute after:bg-primary after:opacity-80 after:left-0 after:top-0 after:size-full relative" style="background-image:url(/assets/images/banner/bnr1.jpg);">
			<div class="container relative z-[1] h-full table">
				<div class="table-cell align-middle text-center">
					<h1 class="text-white font-nunito font-extrabold md:mb-3.75 mb-1.25 md:text-[48px]/[58px] text-2xl/[24px] ">Booking</h1>
					<!-- Breadcrumb row start -->
					<div>
						<ul class="text-[15px] font-montserrat">
							<li class="mr-[3px] text-white inline-block md:text-lg text-[15px] font-medium">
								<a href="index.html" class="after:content-['\f105'] after:ml-[7px] after:font-[fontawesome] after:text-sm">Home</a></li>
							<li class="mr-[3px] text-white inline-block md:text-lg text-[15px] font-medium">Booking</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
				</div>
			</div>
		</div>
	</section>
    <!-- contact area start -->
	<section>
		<div class="content-block">
			<!-- About Us -->
			<div class="relative md:py-20 py-7.5">
				<div class="container">
					<div id="smartwizard">
						<ul class="sm:flex">
							<li class="flex-auto"><a class=" text-black text-lg block py-4 px-5" href="#time"><span><strong>1</strong><i class="fa-solid fa-check"></i></span> Time</a></li>
							<li class="flex-auto"><a class=" text-black text-lg block py-4 px-5" href="#service"><span><strong>2</strong><i class="fa-solid fa-check"></i></span> Service</a></li>
							<li class="flex-auto"><a class=" text-black text-lg block py-4 px-5" href="#details"><span><strong>3</strong><i class="fa-solid fa-check"></i></span> Details</a></li>
							<li class="flex-auto"><a class=" text-black text-lg block py-4 px-5" href="#payment"><span><strong>4</strong><i class="fa-solid fa-check"></i></span> Payment</a></li>
							<li class="flex-auto"><a class=" text-black text-lg block py-4 px-5" href="#done"><span><strong>5</strong><i class="fa-solid fa-check"></i></span> Done</a></li>
						</ul>

						<div>
							<div id="time" class="wizard-box Booking">
								<h6 class="mb-7.5 text-black mb-7.5 text-lg font-bold font-nunito">Please select service:</h6>
								<form class="row">
									<div class="lg:w-4/12 sm:w-6/12 w-full mb-6.25">
										<label class="mb-2.5 inline-block text-[#6f6f6f] font-bold">Category</label>
										<select class="nice-select w-full !float-none !h-13.5 !text-base !text-[#707070] bg-white pr-6.25 pl-4 py-2 wide">
											<option>Select category</option>
											<option>Cosmetic Dentistry</option>
											<option>Invisalign</option>
											<option>Orthodontics</option>
											<option>Dentures</option>
										</select>
									</div>
									<div class="lg:w-4/12 sm:w-6/12 w-full mb-6.25">
										<label class="mb-2.5 inline-block text-[#6f6f6f] font-bold">Service</label>
										<select class="nice-select w-full !float-none !h-13.5 !text-base !text-[#707070] bg-white pr-6.25 pl-4 py-2 wide">
											<option>Select service</option>
											<option>Crown and Bridge</option>
											<option>Teeth Whitening</option>
											<option>Veneers</option>
											<option>Invisalign (invisable braces)</option>
											<option>Orthodontics (braces)</option>
											<option>Wisdom tooth Removal</option>
											<option>Root Canal Treatment</option>
											<option>Dentures</option>
										</select>
									</div>
									<div class="lg:w-4/12 sm:w-6/12 w-full mb-6.25">
										<label class="mb-2.5 inline-block text-[#6f6f6f] font-bold">Employee</label>
										<select class="nice-select w-full !float-none !h-13.5 !text-base !text-[#707070] bg-white pr-6.25 pl-4 py-2 wide">
											<option>Any</option>
											<option>Nick Knight</option>
											<option>Jane Howard</option>
											<option>Ashley Stamp</option>
											<option>Bradley Tannen</option>
											<option>Wayne Turner</option>
											<option>Emily Taylor</option>
											<option>Hugh Canberg</option>
											<option>Jim Gonzalez</option>
											<option>Nancy Stinson</option>
											<option>Marry Murphy</option>
										</select>
									</div>
									<div class="lg:w-4/12 sm:w-6/12 w-full mb-6.25">
										<label class="mb-2.5 inline-block text-[#6f6f6f] font-bold">I'm available on or after</label>
										<input name="dzOther[date]" class="flatpickr !border form-control outline-none w-full" placeholder="Select Date" id="datetimepicker"
										type="date">
									</div>
									<div class="lg:w-2/12 sm:w-6/12 w-full mb-6.25">
										<label class="mb-2.5 inline-block text-[#6f6f6f] font-bold">Start from</label>
										<select class="nice-select !float-none !h-13.5 !text-base !text-[#707070] bg-white pr-6.25 pl-4 py-2 wide">
											<option>8:00 am</option>
											<option>9:00 am</option>
											<option>10:00 am</option>
											<option>11:00 am</option>
											<option>12:00 pm</option>
											<option>1:00 pm</option>
											<option>2:00 pm</option>
											<option>3:00 pm</option>
											<option>4:00 pm</option>
											<option>5:00 pm</option>
											<option>6:00 pm</option>
										</select>
									</div>
									<div class="lg:w-2/12 sm:w-6/12 w-full mb-6.25">
										<label class="mb-2.5 inline-block text-[#6f6f6f] font-bold">Finish by</label>
										<select class="nice-select !float-none !h-13.5 !text-base !text-[#707070] bg-white pr-6.25 pl-4 py-2 wide">
											<option>8:00 am</option>
											<option>9:00 am</option>
											<option>10:00 am</option>
											<option>11:00 am</option>
											<option>12:00 pm</option>
											<option>1:00 pm</option>
											<option>2:00 pm</option>
											<option>3:00 pm</option>
											<option>4:00 pm</option>
											<option>5:00 pm</option>
											<option>6:00 pm</option>
										</select>
									</div>
								</form>
							</div>
							<div id="service">
								<h6 class="mb-1.25 text-black text-lg font-bold font-nunito">Booking Time</h6>
								<p class="mb-7.5">Below you can find list of available time slots for Crown and Bridge by Nick Knight. Click on a time slot to proceed with booking.</p>
								<div class="book-time row">
									<div class="btn-group flex flex-col mb-2.5 lg:w-1/6 md:w-1/3 w-2/4" data-toggle="buttons">

										<input id="sep-14" class="custom-input" type="checkbox">
										<label for="sep-14" class="custom-label  btn active  active-time text-black mb-2.5 border-none focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)]">Fri Sep 14
										</label>

										<input id="9:00" class="custom-input"  type="checkbox">
										<label for="9:00" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">9:00 am</label>

										<input id="10:00" class="custom-input" type="checkbox">
										<label for="10:00" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">10:00 am</label>

										<input id="11:00" class="custom-input" type="checkbox">
										<label for="11:00" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">11:00 am</label>

										<input id="12:00" class="custom-input" type="checkbox">
										<label for="12:00" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">12:00 am</label>

										<input id="Fri-sep-16" class="custom-input" type="checkbox">
										<label for="Fri-sep-16" class="custom-label  btn active  active-time text-black mb-2.5 border-none focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)]">Fri Sep 16</label>

										<input id="2:00" class="custom-input" type="checkbox" checked>
										<label for="2:00" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">2:00 am</label>

										<input id="3:00" class="custom-input" type="checkbox">
										<label for="3:00" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">3:00 am</label>

										<input id="4:00" class="custom-input" type="checkbox">
										<label for="4:00" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">4:00 am</label>

									</div>
									<div class="btn-group flex flex-col mb-2.5 lg:w-1/6 md:w-1/3 w-2/4" data-toggle="buttons">

										<input id="9:00am" class="custom-input" type="checkbox">
										<label for="9:00am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">9:00 am</label>

										<input id="10:00am" class="custom-input" type="checkbox" checked>
										<label for="10:00am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">10:00 am</label>

										<input id="11:00am" class="custom-input" type="checkbox" >
										<label for="11:00am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">11:00 am</label>

										<input id="12:00am" class="custom-input" type="checkbox" >
										<label for="12:00am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">12:00 am</label>

										<input id="sep-17" class="custom-input" type="checkbox" checked>
										<label for="sep-17" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">Fri Sep 17</label>

										<input id="2" class="custom-input" type="checkbox" >
										<label for="2" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">2:00 am</label>

										<input id="2:00am" class="custom-input" type="checkbox" >
										<label for="2:00am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">2:00 am</label>

										<input id="3:00am" class="custom-input" type="checkbox" >
										<label for="3:00am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">3:00 am</label>

										<input id="4:00am" class="custom-input" type="checkbox" >
										<label for="4:00am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">4:00 am</label>

									</div>
									<div class="btn-group flex flex-col mb-2.5 lg:w-1/6 md:w-1/3 w-2/4" data-toggle="buttons">

										<input id="9:00-am" class="custom-input" type="checkbox" >
										<label for="9:00-am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none"> 9:00 am</label>

										<input id="10:00-am" class="custom-input" type="checkbox" >
										<label for="10:00-am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none"> 10:00 am</label>

										<input id="Fri-sep-14" class="custom-input" type="checkbox" >
										<label for="Fri-sep-14" class="custom-label  btn active  active-time text-black mb-2.5 border-none focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)]"> Fri Sep 14</label>

										<input id="11:00-am" class="custom-input" type="checkbox" >
										<label for="11:00-am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none"> 11:00 am</label>

										<input id="12:00-am" class="custom-input" type="checkbox" checked>
										<label for="12:00-am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none"> 12:00 am</label>

										<input id="2:00-am" class="custom-input" type="checkbox" >
										<label for="2:00-am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">2:00 am</label>

										<input id="3:00-am" class="custom-input" type="checkbox" >
										<label for="3:00-am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none"> 3:00 am</label>

										<input id="4:00-am" class="custom-input" type="checkbox" >
										<label for="4:00-am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none"> 4:00 am	</label>

										<input id="sep-16" class="custom-input" type="checkbox" >
										<label for="sep-16" class="custom-label  btn active  active-time text-black mb-2.5 border-none focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)]"> Fri Sep 16
										</label>
									</div>
									<div class="btn-group flex flex-col mb-2.5 lg:w-1/6 md:w-1/3 w-2/4" data-toggle="buttons">

										<input id="9-00" class="custom-input" type="checkbox" >
										<label for="9-00" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">9:00 am</label>

										<input id="10-00" class="custom-input" type="checkbox" >
										<label for="10-00" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">10:00 am</label>

										<input id="day-14" class="custom-input" type="checkbox" >
										<label for="day-14" class="custom-label  btn active  active-time text-black mb-2.5 border-none focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)]">Fri Sep 14
										</label>

										<input id="11-00" class="custom-input" type="checkbox" >
										<label for="11-00" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">11:00 am</label>

										<input id="12-00am" class="custom-input" type="checkbox" >
										<label for="12-00am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">12:00 am</label>

										<input id="2-00" class="custom-input" type="checkbox" >
										<label for="2-00" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">2:00 am</label>

										<input id="3-00" class="custom-input" type="checkbox" >
										<label for="3-00" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">3:00 am</label>

										<input id="day-16" class="custom-input" type="checkbox" >
										<label for="day-16" class="custom-label  btn active  active-time text-black mb-2.5 border-none focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)]"> Fri Sep 16
										</label>

										<input id="4-00" class="custom-input" type="checkbox" >
										<label for="4-00" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">4:00 am	</label>

									</div>
									<div class="btn-group flex flex-col mb-2.5 lg:w-1/6 md:w-1/3 w-2/4" data-toggle="buttons">

										<input id="9" class="custom-input" type="checkbox" checked>
										<label for="9" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">9:00 am</label>

										<input id="10" class="custom-input" type="checkbox">
										<label for="10" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">10:00 am</label>

										<input id="14" class="custom-input" type="checkbox" >
										<label for="14" class="custom-label  btn active  active-time text-black mb-2.5 border-none focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)]">Fri Sep 14</label>

										<input id="11" class="custom-input" type="checkbox" >
										<label for="11" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none"> 11:00 am</label>

										<input id="12" class="custom-input" type="checkbox" >
										<label for="12" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">12:00 am</label>

										<input id="2am" class="custom-input" type="checkbox" >
										<label for="2am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">2:00 am</label>

										<input id="3" class="custom-input" type="checkbox" checked>
										<label for="3" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">3:00 am</label>

										<input id="day16" class="custom-input" type="checkbox" >
										<label for="day16" class="custom-label  btn active  active-time text-black mb-2.5 border-none focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)]">Fri Sep 16</label>

										<input id="4" class="custom-input" type="checkbox" >
										<label for="4" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">4:00 am</label>

									</div>
									<div class="btn-group flex flex-col mb-2.5 lg:w-1/6 md:w-1/3 w-2/4" data-toggle="buttons">

										<input id="9-am" class="custom-input" type="checkbox" >
										<label for="9-am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">9:00 am</label>

										<input id="10-am" class="custom-input" type="checkbox" >
										<label for="10-am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">10:00 am</label>

										<input id="Fri-14" class="custom-input" type="checkbox" >
										<label for="Fri-14" class="custom-label  btn active  active-time text-black mb-2.5 border-none focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)]">Fri Sep 14</label>

										<input id="11-am" class="custom-input" type="checkbox" >
										<label for="11-am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">11:00 am</label>

										<input id="12-am" class="custom-input" type="checkbox" >
										<label for="12-am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">12:00 am</label>

										<input id="2-am" class="custom-input" type="checkbox" >
										<label for="2-am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">2:00 am</label>

										<input id="3-am" class="custom-input" type="checkbox" >
										<label for="3-am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">3:00 am</label>

										<input id="Fri-16" class="custom-input" type="checkbox" >
										<label for="Fri-16" class="custom-label  btn active  active-time text-black mb-2.5 border-none focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)]">Fri Sep 16</label>

										<input id="4-am" class="custom-input" type="checkbox" >
										<label for="4-am" class="focus:shadow-[0_0_0_.2rem_rgba(0,123,255,.25)] custom-label btn text-black mb-2.5 border-none">4:00 am</label>

									</div>
								</div>
							</div>
							<div id="details" class="">
								<h6 class="mb-1.25 text-black text-lg font-bold font-nunito">Details</h6>
								<p>You selected to book Crown and Bridge by Nick Knight at <b class="text-black">3:00</b> pm on <b class="text-black">September 19, 2018.</b> Price for the service is <b class="text-black">$350.00</b>.</p> <p class="mb-7.5">Please provide your details in the form below to proceed with booking.</p>
								<form class="grid grid-cols-12">
									<div class="md:col-span-4 col-span-12 mb-6.25 mx-3.75">
										<label class="mb-2.5 block text-[#6f6f6f]">Name</label>
										<input class="form-control !border w-full outline-none" placeholder="Your Name" type="text">
									</div>
									<div class="md:col-span-4 col-span-12 mb-6.25 mx-3.75">
										<label class="mb-2.5 block text-[#6f6f6f]">Phone</label>
										<input class="form-control !border w-full outline-none" placeholder="Phone No." type="text">
									</div>
									<div class="md:col-span-4 col-span-12 mb-6.25 mx-3.75">
										<label class="mb-2.5 block  text-[#6f6f6f]">Email</label>
										<input class="form-control !border w-full outline-none" placeholder="support@email.com" type="email">
									</div>
								</form>
							</div>
							<div id="payment">
								<h6 class="mb-1.25 text-black text-lg font-bold font-nunito">Please tell us how you would like to pay:</h6>
								<form action="/action_page.php">
									<div class="custom-control custom-radio">
										<input id="seating1" type="checkbox" class="opacity-0 absolute z-[2] cursor-pointer custom-control-input-circle peer">
										<label for="seating1" class="custom-control-label-circle relative block pl-5">I will pay locally</label>
									</div>
									<div class="custom-control custom-radio">
										<input id="seating2" type="checkbox" class="opacity-0 absolute z-[2] cursor-pointer custom-control-input-circle peer">
										<label for="seating2" class="custom-control-label-circle relative block pl-5">I will pay now with PayPal</label>
									</div>
								</form>
							</div>
							<div id="done" class="">
								<div class="successful-box text-center">
									<div class="successful-check"><i class="ti-check"></i></div>
									<h2 class="text-black">Successful</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- contact area END -->
</template>
