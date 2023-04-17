<template>
    <div class="vacancy__card bg-slate-50 w-full rounded-md p-4 shadow-sm mb-4">
        <div class="vacancy__card-title flex items-center justify-between mb-2">
            <h3 class="text-xl"><Link :href="`/vacancies/${vacancy.id}`">{{ vacancy.title }}</Link></h3>
            <p class="text-md font-semibold">$500-800</p>
        </div>
        <div class="vacancy__card-content mb-3">
            <p class="text-sm text-justify text-zinc-400 line-clamp-3">{{ vacancy.description }}</p>
        </div>
        <div class="vacancy__card-categories flex flex-wrap">
            <div class="px-2 py-1 text-sm text-white bg-blue-500 rounded-sm mr-2 mb-2">PHP</div>
            <div class="px-2 py-1 text-sm text-white bg-blue-500 rounded-sm mr-2 mb-2">Junior</div>
            <div class="px-2 py-1 text-sm text-white bg-blue-500 rounded-sm mr-2 mb-2">Web development</div>
            <div class="px-2 py-1 text-sm text-white bg-blue-500 rounded-sm mr-2 mb-2">Laravel</div>
        </div>
    </div>
</template>

<script setup>
let props = defineProps({
    vacancy: Object
});
</script>