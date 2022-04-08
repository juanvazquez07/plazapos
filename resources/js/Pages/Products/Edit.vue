
<script setup>
    import BaseLayout from '@/Layouts/Layout.vue';
    import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
    import {Inertia} from '@inertiajs/inertia';

    const props = defineProps({
        product:Array,
        categories : Array,
        brands : Array
    });
    const form = useForm({
      name: props.product[0].name,
      code: props.product[0].code,
      description: props.product[0].description,
      cost: props.product[0].cost,
      price: props.product[0].price,
      quantity: props.product[0].quantity,
      category_id: props.product[0].category_id,
      brand_id: props.product[0].brand_id
    })

    function updateProduct() {
      Inertia.post(`/products/${props.product[0].id}`, {
        _method: 'put',
        code: form.code,
        name: form.name,
        description: form.description,
        price: form.price,
        cost: form.cost,
        cantidad: form.quantity
      })
    }

</script>
<template>
    <Head title="Create" />

    <BaseLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create
            </h2>
        </template>
        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex m-2 p-2">
                    <Link class="px-4 py-2 bg-indigo-500 hover:bg-indigo text-white rounded" href="/products/">Back</Link>
                </div>
                <div class="">
                    <div class="grid px-40 mt-3">
                        <form @submit.prevent="updateProduct" class="bg-white shadow-md m-2 p-5 rounded">
                            <div class="grid grid-cols-3 my-2">
                                <div class="sm:col-span-2 mr-1">
                                    <label for="title" class="block text-sm font-medium text-gray-700"> Nombre del producto </label>
                                    <div class="mt-1">
                                        <input v-model='form.name' type="text" id="title" wire:model.lazy="title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                </div>
                                <div class="ml-1">
                                    <label for="title" class="block text-sm font-medium text-gray-700"> Cantidad </label>
                                    <div class="mt-1">
                                        <input v-model='form.quantity' min="1" step="any" type="number" id="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 my-2">
                                <div class="mr-1">
                                    <label for="title" class="block text-sm font-medium text-gray-700"> Selecciona la categoria </label>
                                    <select v-model='form.category_id' id="title" name="cars" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option v-for="category in categories" :key = "category.name" :value="category.id">{{category.name}}</option>
                                    </select>
                                </div>
                                <div class="ml-1">
                                    <label for="title" class="block text-sm font-medium text-gray-700"> Selecciona la marca </label>
                                    <select v-model='form.brand_id' id="title" name="cars" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option v-for="brand in brands" :key = "brand.id" :value="brand.id">{{brand.name}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 my-2">
                                <div class="mr-1">
                                    <label for="title" class="block text-sm font-medium text-gray-700"> Code </label>
                                    <div class="mt-1">
                                        <input v-model='form.code' type="number" id="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                </div>
                            </div>
                            <div class="sm:col-span-6 my-2">
                                <label for="title" class="block text-sm font-medium text-gray-700"> Description </label>
                                <div class="mt-1">
                                    <input v-model='form.description' type="text" id="title" wire:model.lazy="title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                            </div>
                            <div class="grid grid-cols-2 my-2">
                                <div class="mr-1">
                                    <label for="title" class="block text-sm font-medium text-gray-700"> Cost </label>
                                    <div class="mt-1">
                                        <input v-model='form.cost' type="number" min="1" step="any" id="title" wire:model.lazy="title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                </div>
                                <div class="ml-1">
                                    <label for="title" class="block text-sm font-medium text-gray-700"> Price </label>
                                    <div class="mt-1">
                                        <input v-model='form.price' type="number" min="1" step="any" id="title" wire:model.lazy="title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                </div>
                            </div>
                            
                            <!--<div class="sm:col-span-6">
                                <label for="title" class="block text-sm font-medium text-gray-700"> Image </label>
                                <div class="mt-1">
                                    <input type="file" id="image" @input="form.image = $event.target.files[0]" wire:model="newImage" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                            </div>-->
                            <div class="m-2 p-2">
                                <button type="submit" class="px-4 py-2 bg-green-400 hover:bg-green-600 rounded-lg text-white">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </BaseLayout>
</template>