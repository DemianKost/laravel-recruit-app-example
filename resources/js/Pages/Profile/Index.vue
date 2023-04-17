<template>
    <Header />
    <div class="container mx-auto flex flex-col items-center">
        <!-- Main profile info -->
        <ProfileCard :user="props.user" />

        <!-- About profile -->
        <AboutCard :profile="props.profile" />
    </div>
</template>

<script setup>
    import ProfileCard from './components/ProfileCard.vue';
    import AboutCard from './components/AboutCard.vue';

    let props = defineProps({
        user: Object,
        profile: Object
    });
</script>