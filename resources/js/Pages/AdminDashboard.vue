<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>

    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in as an Admin!
                    </div>

                    <div class="p-3">
                        
                    </div>
                </div>
            </div>
        </div>

        <div x-data="{ open: false }" class="flex overflow-x-hidden h-screen">
            <aside class="flex-shrink-0 w-64 flex flex-col border-r transition-all duration-300" x-bind:class="{ '-ml-64': !open }">
                <div class="h-64 bg-gray-900"></div>
                <nav class="flex-1 flex flex-col bg-white">
                    <a href="#" class="p-2">Nav Link 1</a>
                    <a href="#" class="p-2">Nav Link 2</a>
                    <a href="#" class="p-2">Nav Link 3</a>
                </nav>
            </aside>
            <button class="p-1 mr-4" x-on:click="open = ! open">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            
        </div>


    </BreezeAuthenticatedLayout>
</template>
