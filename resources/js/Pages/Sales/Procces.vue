<script setup>
    import BaseLayout from '@/Layouts/Layout.vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import { ref } from 'vue'
</script>
<template>
    <BaseLayout>
        <div class="relative mr-6 my-2 font-light bg-white dark:bg-gray-900 text-white p-10">
            <div class="flex">
                <div class="relative mt-6 flex-auto">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                            <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                    <input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" placeholder="Search"/>
                </div>
                <div class="flex-initial w-64 text-black">
                    <h1>Hola</h1>
                </div>
            </div>
            
        </div>
    </BaseLayout>
</template>