<script setup>
    import BaseLayout from '@/Layouts/Layout.vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    //import route from 'vendor/tightenco/ziggy/src/js';
    import { ref } from 'vue'

     function prueba() {
      Inertia.get('/busca')
    }
</script>

<script>
import {Inertia} from '@inertiajs/inertia';
    
export default {
    
    data() {
        return {
            keyword: null,
            Products: []
        };
    },
    watch: {
        keyword(after, before) {
            //console.log("capturando");
            this.getResults();
        }
    },
    methods: {
        getResults() {
            console.log(this.keyword);
            /*Inertia.get('/getproducts', {
                keyword: this.keyword
            })*/
            //route('sales.prueba');
            /*axios.get('/getproducts', { params: { keyword: this.keyword } })
            .then(function (response) {
                
                var keys = Object.keys(response);
                keys.forEach(function(key){
                    this.prods.push(response[key]);
                });
                //this.Products.push(response);
                console.log(this.prods);
            })
            .catch(error => {});*/
            return axios.get('/getproducts', { params: { keyword: this.keyword } })
                .then(res => this.Products = res.data)
                .catch(error => {});
            //console.log(this.Products[0])
        }
    }
   
}
</script>

<template>
    <BaseLayout>
        <div class="relative mr-6 my-2 font-light bg-white dark:bg-gray-900 text-white p-8">
            <Link :href="route('sales.prueba')">Create User</Link>
            <button @click="" class="text-red-600">prueba</button>
            <div class="flex">
                <div class="relative flex-auto pr-2 w-7/12">
                    <div class="mr-10 text-black">
                        <input type="text" v-model="keyword" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" placeholder="Buscar o escanear codigo"/>
                        <ul class="flex grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8" v-if="this.Products.length > 0">
                            <li  v-for="product in this.Products" :key="product.id">
                                <div class="group relative">
                                    <a href="">
                                        <div><img :src="'storage/'+product.image" class=" object-cover w-32 h-28 rounded"></div>
                                        <div>
                                            <div>
                                                <h3 class="text-sm text-gray-700">
                                                <a href="#">
                                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                                    {{product.name}}
                                                </a>
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500">Black</p>
                                            </div>
                                            <p class="text-sm font-medium text-gray-900">$35</p>
                                        </div>
                                    </a>
                                </div>  
                            </li>
                        </ul>
                        <!--<div class="group relative">
        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>-->
                    </div>
                    
                    <!--<img src="/Images/scanner.png" width="50" height="60">-->
                </div>
                <div class="w-5/12 container mx-auto shadow-md flex-auto text-black divide-y-[3px] p-2">
                    <div>
                        <h1 class="text-center">Carrito</h1>
                    </div>
                    <div class="px-5 py-4 mt-5 overflow-y-auto h-64">
                        <div class="flex flex-row justify-between items-center mb-4">
                            <div class="flex flex-row items-center w-2/5">
                                <img src="https://source.unsplash.com/4u_nRgiLW3M/600x600" class="w-10 h-10 object-cover rounded-md" alt="">
                                <span class="ml-4 font-semibold text-sm">Stuffed flank steak</span>
                            </div>
                            <div class="flex gap-x-2">
                                    <div class="flex space-x-3  whitespace-nowrap text-right text-sm font-medium">
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg></Link>
                                        <div class="border border-gray-300 px-2 py-1 rounded-md"><h1 class="">4</h1></div>
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg></Link>
                                    </div>
                            </div>
                            <h2 class="text-center">$490.00</h2>
                            <Link method="delete" href="" aria-label="dark mode button" class=" transition-colors duration-300 ease-in-out focus:outline-none text-gray-600 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg style="color:#F03063;" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></Link>
                        </div>  
                        <div class="flex flex-row justify-between items-center mb-4">
                            <div class="flex flex-row items-center w-2/5">
                                <img src="https://source.unsplash.com/4u_nRgiLW3M/600x600" class="w-10 h-10 object-cover rounded-md" alt="">
                                <span class="ml-4 font-semibold text-sm">Stuffed flank steak</span>
                            </div>
                            <div class="flex gap-x-2">
                                    <div class="flex space-x-3  whitespace-nowrap text-right text-sm font-medium">
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg></Link>
                                        <div class="border border-gray-300 px-2 py-1 rounded-md"><h1 class="">4</h1></div>
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg></Link>
                                    </div>
                            </div>
                            <h2 class="text-center">$490.00</h2>
                            <Link method="delete" href="" aria-label="dark mode button" class=" transition-colors duration-300 ease-in-out focus:outline-none text-gray-600 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg style="color:#F03063;" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></Link>
                        </div>           
                        <div class="flex flex-row justify-between items-center mb-4">
                            <div class="flex flex-row items-center w-2/5">
                            <img src="https://source.unsplash.com/sc5sTPMrVfk/600x600" class="w-10 h-10 object-cover rounded-md" alt="">
                            <span class="ml-4 font-semibold text-sm">Grilled Corn</span>
                            </div>
                            <div class="flex gap-x-2">
                                    <div class="flex space-x-3  whitespace-nowrap text-right text-sm font-medium">
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg></Link>
                                        <div class="border border-gray-300 px-2 py-1 rounded-md"><h1 class="">4</h1></div>
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg></Link>
                                    </div>
                            </div>
                            <h2 class="text-center">$490.00</h2>
                            <Link method="delete" href="" aria-label="dark mode button" class=" transition-colors duration-300 ease-in-out focus:outline-none text-gray-600 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg style="color:#F03063;" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></Link>
                        </div>
                        <div class="flex flex-row justify-between items-center mb-4">
                            <div class="flex flex-row items-center w-2/5">
                            <img src="https://source.unsplash.com/MNtag_eXMKw/600x600" class="w-10 h-10 object-cover rounded-md" alt="">
                            <span class="ml-4 font-semibold text-sm">Grilled Corn</span>
                            </div>
                            <div class="flex gap-x-2">
                                    <div class="flex space-x-3  whitespace-nowrap text-right text-sm font-medium">
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg></Link>
                                        <div class="border border-gray-300 px-2 py-1 rounded-md"><h1 class="">4</h1></div>
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg></Link>
                                    </div>
                            </div>
                            <h2 class="text-center">$490.00</h2>
                            <Link method="delete" href="" aria-label="dark mode button" class=" transition-colors duration-300 ease-in-out focus:outline-none text-gray-600 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg style="color:#F03063;" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></Link>
                        </div>
                        <div class="flex flex-row justify-between items-center mb-4">
                            <div class="flex flex-row items-center w-2/5">
                            <img src="https://source.unsplash.com/MNtag_eXMKw/600x600" class="w-10 h-10 object-cover rounded-md" alt="">
                            <span class="ml-4 font-semibold text-sm">Grilled Corn</span>
                            </div>
                            <div class="flex gap-x-2">
                                    <div class="flex space-x-3  whitespace-nowrap text-right text-sm font-medium">
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg></Link>
                                        <div class="border border-gray-300 px-2 py-1 rounded-md"><h1 class="">4</h1></div>
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg></Link>
                                    </div>
                            </div>
                            <h2 class="text-center">$490.00</h2>
                            <Link method="delete" href="" aria-label="dark mode button" class=" transition-colors duration-300 ease-in-out focus:outline-none text-gray-600 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg style="color:#F03063;" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></Link>
                        </div> 
                        <div class="flex flex-row justify-between items-center mb-4">
                            <div class="flex flex-row items-center w-2/5">
                            <img src="https://source.unsplash.com/MNtag_eXMKw/600x600" class="w-10 h-10 object-cover rounded-md" alt="">
                            <span class="ml-4 font-semibold text-sm">Ranch Burger</span>
                            </div>
                            <div class="flex gap-x-2">
                                    <div class="flex space-x-3  whitespace-nowrap text-right text-sm font-medium">
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg></Link>
                                        <div class="border border-gray-300 px-2 py-1 rounded-md"><h1 class="">4</h1></div>
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg></Link>
                                    </div>
                            </div>
                            <h2 class="text-center">$490.00</h2>
                            <Link method="delete" href="" aria-label="dark mode button" class=" transition-colors duration-300 ease-in-out focus:outline-none text-gray-600 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg style="color:#F03063;" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></Link>
                        </div> 
                        <div class="flex flex-row justify-between items-center mb-4">
                            <div class="flex flex-row items-center w-2/5">
                            <img src="https://source.unsplash.com/4u_nRgiLW3M/600x600" class="w-10 h-10 object-cover rounded-md" alt="">
                            <span class="ml-4 font-semibold text-sm">Ranch Burger</span>
                            </div>
                            <div class="flex gap-x-2">
                                    <div class="flex space-x-3  whitespace-nowrap text-right text-sm font-medium">
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg></Link>
                                        <div class="border border-gray-300 px-2 py-1 rounded-md"><h1 class="">4</h1></div>
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg></Link>
                                    </div>
                            </div>
                            <h2 class="text-center">$490.00</h2>
                            <Link method="delete" href="" aria-label="dark mode button" class=" transition-colors duration-300 ease-in-out focus:outline-none text-gray-600 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg style="color:#F03063;" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></Link>
                        </div>            
                    </div>
                    <div class="px-5 mt-5">
                        <div class="py-4 rounded-md ">
                        <div class=" px-4 flex justify-between ">
                            <span class="font-semibold text-sm">Subtotal</span>
                            <span class="font-bold">$35.25</span>
                        </div>
                        <div class=" px-4 flex justify-between ">
                            <span class="font-semibold text-sm">Discount</span>
                            <span class="font-bold">- $5.00</span>
                        </div>
                        <div class=" px-4 flex justify-between ">
                            <span class="font-semibold text-sm">Sales Tax</span>
                            <span class="font-bold">$2.25</span>
                        </div>
                        <div class="border-t-2 mt-3 py-2 px-4 flex items-center justify-between">
                            <span class="font-semibold text-2xl">Total</span>
                            <span class="font-bold text-2xl">$37.50</span>
                        </div>
                        </div>
                        <div class="px-5 mt-5">
                            <Link>
                                <div class="px-4 py-4 rounded-md shadow-lg text-center bg-yellow-500 text-white font-semibold">
                                    Realizar venta
                                </div>
                            </Link>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </BaseLayout>
</template>