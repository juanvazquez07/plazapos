<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <section class="bg-white dark:bg-gray-900">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 md:gap-x-10 xl-grid-cols-4 gap-y-10 gap-x-6 ">
                <a href="">
                    <div style="background-color:#79e3aa;" class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">
                        <div class="p-6">
                            <h1>Nueva venta</h1>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div style="background-color:#79e3aa;" class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">
                        <div class="p-6">
                            <h1>Nueva venta</h1>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div style="background-color:#79e3aa;" class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">
                        <div class="p-6">
                            <h1>Nueva venta</h1>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div style="background-color:#79e3aa;" class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">
                        <div class="p-6">
                            <h1>Nueva venta</h1>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div style="background-color:#79e3aa;" class="container mx-auto shadow-lg rounded-lg max-w-md hover:shadow-2xl transition duration-300">
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
