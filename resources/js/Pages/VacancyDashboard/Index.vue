<template>
    <Header />
    <div class="container mx-auto flex justify-center">
        <div class="md:w-2/3 w-full bg-white rounded-md py-8 px-8 shadow-sm mb-10">

            
            <h2 class="text-3xl font-bold mb-3">Your vacancies</h2>
            <hr class="mb-3">

            <VacancyCard
                    v-for="(vacancy, key) in vacancies"
                    :key="key"
                    :vacancy="vacancy"
            />
            
        </div>
    </div>
</template>

<script setup>
    import VacancyCard from './components/VacancyCard.vue';

    let props = defineProps({
        vacancies: Array
    })
</script>