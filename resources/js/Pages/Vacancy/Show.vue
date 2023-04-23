<template>
    <Header />
    <div class="container mx-auto flex justify-center">
        <div class="md:w-2/3 w-full bg-white rounded-md py-8 px-8 shadow-sm mb-10">
            
            <div class="author__card mb-6 flex justify-center">
                <Link :href="`/profile/${author.data.id}`" class="flex items-center">
                    <div class="h-20 w-20 bg-red-400 rounded-full text-2xl flex items-center justify-center mr-4">🍄</div>
                    <p class="text-xl font-mono">{{ author.data.name }}</p>
                </Link>
            </div>

            <div class="md:flex items-center justify-between mb-10">
                <h3 class="text-3xl font-semibold mb-0">{{ vacancy.data.title }}</h3>
                <span class="text-xl font-semibold">${{ vacancy.data.salary_from }} - {{ vacancy.data.salary_to }}</span>
            </div>

            <CategoriesList
                v-if="vacancy.data.categories.programmingLanguages.length > 0"
                title="Programming languages: "
                :categories="vacancy.data.categories.programmingLanguages"
            />
            <CategoriesList
                v-if="vacancy.data.categories.workType.length > 0"
                title="Work type: "
                :categories="vacancy.data.categories.workType"
            />
            <CategoriesList
                v-if="vacancy.data.categories.devLevels.length > 0"
                title="Developer level: "
                :categories="vacancy.data.categories.devLevels"
            />

            <p class="text-justify text-zinc-500">{{ vacancy.data.description }}</p>

        </div>
    </div>
</template>

<script setup>
    import CategoriesList from './components/CategoriesList.vue';

    let props = defineProps({
        vacancy: Object,
        author: Object
    });
</script>