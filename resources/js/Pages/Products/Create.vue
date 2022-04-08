<script setup>
    import BaseLayout from '@/Layouts/Layout.vue';
    import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

    const props = defineProps({
        categories : Array,
        brands : Array
    })

    const form = useForm({
      code: null,
      name: null,
      description: null,
      price: null,
      cost: null,
      stock: null,
      brand_id: null,
      category_id: null,
      image: null
    })

    function storeProduct() {
      form.post('/products')
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
        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex p-2">
                    <Link class="px-4 py-2 bg-indigo-500 hover:bg-indigo text-white rounded" href="/products/">Back</Link>
                </div>
                <div class="">
                    <div class="grid px-40 mt-2">
                        <form @submit.prevent="storeProduct" class="bg-white shadow-md m-2 p-5 rounded">
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
                                        <input v-model='form.stock' min="1" step="any" type="number" id="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
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
                                    <label for="title" class="block text-sm font-medium text-gray-700"> Codido </label>
                                    <div class="mt-1">
                                        <input v-model='form.code' type="number" id="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                </div>
                            </div>
                            <div class="sm:col-span-6 my-2">
                                <label for="title" class="block text-sm font-medium text-gray-700"> Descripcion </label>
                                <div class="mt-1">
                                    <input v-model='form.description' type="text" id="title" wire:model.lazy="title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                            </div>
                            <div class="grid grid-cols-2 my-2">
                                <div class="mr-1">
                                    <label for="price" class="block text-sm font-medium text-gray-700">Precio de compra</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500 sm:text-sm"> $ </span>
                                        </div>
                                        <input v-model='form.cost' type="text" name="price" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0.00">
                                    </div>
                                </div>
                                <div class="ml-1">
                                    <label for="price" class="block text-sm font-medium text-gray-700">Precio de venta</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500 sm:text-sm"> $ </span>
                                        </div>
                                        <input v-model='form.price' type="text" name="price" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0.00">
                                    </div>
                                </div>
                                <!--<div class="ml-1">
                                    <label for="title" class="block text-sm font-medium text-gray-700"> Precio de venta </label>
                                    <div class="mt-1">
                                        <input v-model='form.price' type="number" min="1" step="any" id="title" wire:model.lazy="title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                </div>-->
                            </div>
                            <div class="sm:col-span-6">
                                <label for="title" class="block text-sm font-medium text-gray-700"> Image </label>
                                <div class="mt-1">
                                    <input type="file" id="image" @input="form.image = $event.target.files[0]" wire:model="newImage" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                            </div>
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
