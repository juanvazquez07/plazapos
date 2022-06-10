<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <section class="font-light bg-white dark:bg-gray-900 text-white p-10">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 md:gap-x-10 xl-grid-cols-4 gap-y-10 gap-x-6 ">
                <a :href="route('sales.procces')">
                    <div style="background-color:#895EF7;" class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">
                        <div class="p-6 flex">
                            <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                            <h1>Nueva venta</h1>
                        </div>
                    </div>
                </a>
                <a :href="route('sales.procces')">
                    <div style="background-color:#6A84ED;" class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">
                        <div class="p-6">
                        
                            <h1>Nueva venta</h1>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div style="background-color:#4DA2F8;" class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">
                        <div class="p-6">
                            <h1>Nueva venta</h1>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div style="background-color:#1FCBDC;" class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">
                        <div class="p-6">
                            <h1>Nueva venta</h1>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div style="background-color:#59C894;" class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">
                        <div class="p-6">
                            <h1>Nueva venta</h1>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        
        <div class="py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import Layout from '@/Layouts/Layout.vue'
import { Head } from '@inertiajs/inertia-vue3';

export default {
    layout:Layout,
}
</script>
