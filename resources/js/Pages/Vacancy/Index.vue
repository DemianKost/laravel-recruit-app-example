<template>
    <Header />
    <div class="container mx-auto flex justify-center">
        <div class="md:w-2/3 w-full bg-white rounded-md py-8 px-8 md:flex space-x-4 shadow-sm mb-10">
            
            <!-- Content -->
            <div class="md:w-2/3 w-full">
                <h3 class="text-2xl font-semibold mb-6">Latest vacancies</h3>

                <VacancyCard
                    v-for="(vacancy, key) in vacancies.data"
                    :key="key"
                    :vacancy="vacancy"
                />

            </div>

            <!-- Sidebar -->
            <div class="md:w-1/3 w-full">
                <h3 class="text-2xl font-semibold mb-6">Filter</h3>

                <h2 class="text-md mb-2">Programming language:</h2>
                <div class="flex flex-wrap mb-4">
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">PHP</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">C#</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Ruby</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">C/C++</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Java</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">JavaScript</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Python</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Solidity</div>
                </div>

                <h2 class="text-md mb-2">Dev level:</h2>
                <div class="flex flex-wrap mb-4">
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Trainee</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Junior</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Middle</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Senior</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Team lead</div>
                </div>

                <h2 class="text-md mb-2">Work type:</h2>
                <div class="flex flex-wrap mb-4">
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Project job</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Part-time</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Full-time</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Relocate</div>
                </div>
            </div>

        </div>
    </div>
</template>

<script setup>
import VacancyCard from './components/VacancyCard.vue';

let props = defineProps({
    vacancies: Array
});
</script>