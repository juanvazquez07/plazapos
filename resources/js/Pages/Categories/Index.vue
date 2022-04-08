<script>
import ConfirmDelete from "@/Components/ConfirmDelete";
export default {
  name: "App",
 
  components: { ConfirmDelete },
  data() {
    return {
      id:"",
      isConfirmDeleteModalVisible: false,
    };
  },
  methods: {
    showConfirmDeleteModal(ID) {
        this.id = ID;
        //alert(this.id);
        this.isConfirmDeleteModalVisible = true;
    },
    closeConfirmDeleteModal() {
      this.isConfirmDeleteModalVisible = false;
    },
    deleteCustomers() {
      console.log("goodbye");
    },
  },
};
</script>
<script setup>
import BaseLayout from '@/Layouts/Layout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue'

  
const show = ref(true)

const props = defineProps({
    categories : Array,
    succes : String,
    error : String
})

</script>

<template>
    <BaseLayout>
        <confirm-delete
        v-show="isConfirmDeleteModalVisible"
        modalHeadline="Eliminar categoria"
        deleteMessage="¿Estas seguro?"
        :brandId = "id"
        @deleteRecordEvent="deleteCustomers"
        @close="closeConfirmDeleteModal"
        ></confirm-delete>
        <div  v-if="$page.props.flash.error" id="alert-2" class="mx-4 flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
            <svg class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                 {{$page.props.flash.error}} 
            </div>
            <button  onclick="this.parentElement.remove();" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        
        <div v-if="$page.props.flash.succes" id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
            <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                {{$page.props.flash.succes}} 
            </div>

            <button data-dismiss="alert" onclick="this.parentElement.remove();" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2">
                    <Link class="px-4 py-2 bg-indigo-500 hover:bg-indigo text-white rounded" href="/categories/create">Create</Link>
                </div>
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="relative px-6 py-3">Acciones</th>
                                        <span class="sr-only">Edit</span>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr v-for="category in categories" :key = "category.id" >
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{category.id}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{category.name}}
                                        </td>
                                        <td class="flex space-x-4 px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <Link :href="`/brands/${category.id}/edit`" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><!----> <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></Link>
                                            <button @click="showConfirmDeleteModal(category.id);" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                                            <!--<Link @click="showConfirmDeleteModal()" method="delete" :href="`/brands/${brand.id}`" aria-label="dark mode button" class="transition-colors duration-300 ease-in-out focus:outline-none p-1 text-gray-600 bg-gray-200 rounded-md hover:text-gray-700 hover:bg-gray-400 focus:outline-none"> <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></Link>-->
                                        </td>
                                    </tr>

                                    <!-- More people... -->
                                </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div>
                    <button @click="show = !show">
                        Mostrar/Ocultar
                    </button>
                    <transition name="slide-fade">
                        <p v-if="show">hola</p>
                    </transition>
                </div>-->
            </div>
        </div>
    </BaseLayout>
</template>