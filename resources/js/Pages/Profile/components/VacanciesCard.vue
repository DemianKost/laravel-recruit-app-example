<template>
    <div class="md:w-2/3 w-full bg-white rounded-md py-8 px-8 shadow-sm mb-10">
        <div class="flex justify-between items-end mb-3">
            <h2 class="text-3xl font-bold">Latest vacancies</h2>
        </div>
        <hr>
        <div class="profile__about mt-3">
            
            <VacancyCard
                v-for="vacancy in vacancies"
                :key="vacancy.id"
                :vacancy="vacancy"
            />

        </div>
    </div>
</template>

<script setup>
    import VacancyCard from '../../Vacancy/components/VacancyCard.vue';

    let props = defineProps({
        profile: Object,
        vacancies: Array
    })
</script>