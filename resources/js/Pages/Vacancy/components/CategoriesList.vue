<template>
    <div class="flex">
        <h2 class="text-md mr-2">{{ title }}</h2>
        <div class="flex flex-wrap mb-2">
            <div v-for="category in categories" :key="category.id" class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">
                {{ category.name }}
            </div>
        </div>
    </div>
</template>

<script setup>
    let props = defineProps({
        title: String,
        categories: Array
    })
</script>