<template>
    <Header />
    <div class="container mx-auto flex flex-col items-center">
        <!-- Main profile info -->
        <ProfileCard :user="props.user" :editable="false" />

        <!-- About profile -->
        <AboutCard :profile="props.profile" :editable="false" />

        <!-- User vacancies/resume -->
        <VacanciesCard v-if="user.role == 1" :profile="profile" />
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
        profile: Object
    });
</script>