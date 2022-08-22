<script setup></script>
<template>
    <aside class="flex-shrink-0 w-64 flex flex-col border-r transition-all duration-300" x-bind:class="{ '-ml-64': !open }">
        <div class="h-64 bg-gray-900"></div>
        <nav class="flex-1 flex flex-col bg-white">
            <a href="#" class="p-2">Nav Link 1</a>
            <a href="#" class="p-2">Nav Link 2</a>
            <a href="#" class="p-2">Nav Link 3</a>
        </nav>
    </aside>
</template>