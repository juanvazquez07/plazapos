<script setup>
    import BaseLayout from '@/Layouts/Layout.vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';

    const props = defineProps({
        products : Array
    })
</script>

<template>
    <BaseLayout>
        <div class="flex m-2 p-2">
            <Link class="px-4 py-2 bg-indigo-500 hover:bg-indigo text-white rounded" href="/products/">Back</Link>
        </div>
        <div class="grid grid-cols-2 gap-4 p-6 place-items-center container mx-auto">
            <div class="grid-rows-1">
                <a :href="props.products.image"><img :src="props.products.image" class=" object-cover w-96 h-80 rounded"></a>
            </div>
            <div class="grid-rows-1">
                <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">{{props.products.name}}</h1>
                <p>{{props.products.description}}</p>
                <h1  class="my-2 text-[#950101] text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">${{props.products.price}}</h1>
                <Link class="bg-[#3D0000] px-4 py-2 my-6 hover:bg-indigo text-white rounded" href="/products/">Comprar</Link>
            </div>
        </div>
    </BaseLayout>
</template>