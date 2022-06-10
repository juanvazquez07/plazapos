<script setup>
    import BaseLayout from '@/Layouts/Layout.vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import { ref } from 'vue'
</script>
<template>
    <BaseLayout>
        <div class="relative mr-6 my-2 font-light bg-white dark:bg-gray-900 text-white p-10">
            <div class="flex">
                <div class="relative flex-auto pr-2">
                    <div class="mr-36">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        <input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" placeholder="Buscar o escanear codigo"/>
                    </div>
                    
                    <!--<img src="/Images/scanner.png" width="50" height="60">-->
                </div>
                <div class="container mx-auto shadow-md flex-auto w-80 text-black divide-y-[3px] p-2">
                    <div>
                        <h1 class="text-center">Carrito</h1>
                    </div>
                    <div class="p-2">
                        <div class="flex px-6 py-4 justify-between">
                            <h1 class="text-center">Carrito</h1>
                            <div class="flex gap-x-3">
                                <div class=" flex">
                                    <div class="flex space-x-2  whitespace-nowrap text-right text-sm font-medium">
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg></Link>
                                        <div class="border border-gray-300 px-2 py-1 rounded-md"><h1 class="">4</h1></div>
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg></Link>
                                    </div>
                                </div>
                                <h2 class="text-center">$490.00</h2>
                                <Link method="delete" href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none text-gray-600 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="text-blue-600 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></Link>
                            </div>
                        </div>
                        <div class="flex px-6 py-4 justify-between">
                            <h1 class="text-center">Powerbank Adherible Atvio 2500 Mah </h1>
                            <div class="flex gap-x-3">
                                <div class=" flex">
                                    <div class="flex space-x-2  whitespace-nowrap text-right text-sm font-medium">
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg></Link>
                                        <div class="border border-gray-300 px-2 py-1 rounded-md"><h1 class="">4</h1></div>
                                        <Link href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg></Link>
                                    </div>
                                </div>
                                <h2 class="text-center">$490.00</h2>
                                <Link method="delete" href="" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none text-gray-600 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="text-blue-600 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </BaseLayout>
</template>