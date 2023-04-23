<template>
    <Header />
    <div class="container mx-auto flex flex-col items-center">
        <!-- Main profile info -->
        <ProfileCard :user="user" :editable="true" />

        <!-- About profile -->
        <AboutCard :profile="profile" :editable="true" />

        <!-- User vacancies/resume -->
        <VacanciesCard v-if="user.role == 1" :profile="profile" :vacancies="data.info.data" />
        <ResumeCard v-else :profile="profile" />
    </div>
</template>

<script setup>
    import ProfileCard from './components/ProfileCard.vue';
    import AboutCard from './components/AboutCard.vue';
    import VacanciesCard from './components/VacanciesCard.vue';
    import ResumeCard from './components/ResumeCard.vue';

    let props = defineProps({
        user: Object,
        profile: Object,
        data: Array
    });
</script>