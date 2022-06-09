<script setup>
    import BaseLayout from '@/Layouts/Layout.vue';
    import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
    import {Inertia} from '@inertiajs/inertia';

    const props = defineProps({
        category : Array
    });

    const form = useForm({
      name: props.category.name,
    })

    function updateCategory() {
      Inertia.post(`/categories/${props.category.id}`, {
        _method: 'put',
        name: form.name,
      })
    }

</script>
<template>
    <Head title="Edit" />

    <BaseLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit
            </h2>
        </template>
        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex m-2 p-2">
                    <Link class="px-4 py-2 bg-indigo-500 hover:bg-indigo text-white rounded" href="/categories/">Back</Link>
                </div>
                <div class="">
                    <div class="grid px-40 mt-3">
                        <form @submit.prevent="updateCategory" class="bg-white shadow-md m-2 p-5 rounded">
                            <div class="grid grid-cols-3 my-2">
                                <div class="sm:col-span-2 mr-1">
                                    <label for="title" class="block text-sm font-medium text-gray-700"> Nombre de la categoria </label>
                                    <div class="mt-1">
                                        <input v-model='form.name' type="text" id="title" wire:model.lazy="title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                </div>
                                
                            </div>
                            <div class="m-2 p-2">
                                <button type="submit" class="px-4 py-2 bg-green-400 hover:bg-green-600 rounded-lg text-white">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </BaseLayout>
</template>