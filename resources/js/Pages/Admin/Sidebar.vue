<script setup>
  import { usePage, Link } from '@inertiajs/vue3';

</script>
<template>
    	<div class="mb-7.5">
								<div id="accordion1" x-data="{selected:1}">
									<div class="mb-[-1px]">
										<div class="relative">
											<h5 class="text-2xl font-bold text-black font-nunito">
												<a class="dropdown-item after:content-['\e61a'] after:text-sm after:font-['themify'] after:absolute after:top-1/2 after:-translate-y-1/2 after:right-0 after:text-black border-b-2 border-[#ddd] block text-base font-bold py-2.5 capitalize text-primary active" href="javascript:void(0);" :class="{'text-primary active': selected === 1,'': selected !=1}" aria-expanded="true">
													Product categories
												</a>
											</h5>
										</div>
										<div id="categories" x-show="selected == 1" x-collapse="" style="height: auto;">
											<div class="my-3.75">
												<div class="mb-7.5">
													 <ul>
														<li class="capitalize border-b border-[#6666661c] relative p-2.5 pl-3.75 leading-5 after:content-['\f105'] after:absolute after:left-0 after:top-2.5 after:block after:font-[FontAwesome] after:text-[11px]"><a href="javascript:void(0);">Bags</a></li>
														<li class="capitalize border-b border-[#6666661c] relative p-2.5 pl-3.75 leading-5 after:content-['\f105'] after:absolute after:left-0 after:top-2.5 after:block after:font-[FontAwesome] after:text-[11px]"><a href="javascript:void(0);">Jeans</a></li>
														<li class="capitalize border-b border-[#6666661c] relative p-2.5 pl-3.75 leading-5 after:content-['\f105'] after:absolute after:left-0 after:top-2.5 after:block after:font-[FontAwesome] after:text-[11px]"><a href="javascript:void(0);">Shoes</a></li>
														<li class="capitalize border-b border-[#6666661c] relative p-2.5 pl-3.75 leading-5 after:content-['\f105'] after:absolute after:left-0 after:top-2.5 after:block after:font-[FontAwesome] after:text-[11px]"><a href="javascript:void(0);">Sweaters</a></li>
														<li class="capitalize border-b border-[#6666661c] relative p-2.5 pl-3.75 leading-5 after:content-['\f105'] after:absolute after:left-0 after:top-2.5 after:block after:font-[FontAwesome] after:text-[11px]"><a href="javascript:void(0);">Tops</a></li>
														<li class="capitalize border-b border-[#6666661c] relative p-2.5 pl-3.75 leading-5 after:content-['\f105'] after:absolute after:left-0 after:top-2.5 after:block after:font-[FontAwesome] after:text-[11px]"><a href="javascript:void(0);">
                                                         
														Women</a></li>
                                                        <Link :href="route('aparat.create')">Aparat create</Link>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
</template>
