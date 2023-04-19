<template>
    <div class="vacancy__card bg-slate-50 w-full rounded-md p-4 shadow-sm mb-4">
        <div class="vacancy__card-title flex items-center justify-between mb-2">
            <h3 class="text-xl"><Link :href="`/vacancies/${vacancy.id}`">{{ vacancy.title }}</Link></h3>
            <p class="text-md font-semibold">{{ `$`+vacancy.salary_from }} - {{ vacancy.salary_to }}</p>
        </div>
        <div class="vacancy__card-content mb-3">
            <p class="text-sm text-justify text-zinc-400 line-clamp-3">{{ vacancy.description }}</p>
        </div>
        <div v-if="vacancy.categories.programmingLanguages" class="vacancy__card-categories flex flex-wrap">
            <div v-for="category in vacancy.categories.programmingLanguages" :key="category.id" class="px-2 py-1 text-sm text-white bg-blue-500 rounded-sm mr-2 mb-2">{{ category.name }}</div>
        </div>
    </div>
</template>

<script setup>
let props = defineProps({
    vacancy: Object
});
</script>