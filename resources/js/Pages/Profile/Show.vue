<template>
    <Header />
    <div class="container mx-auto flex flex-col items-center">
        <!-- Main profile info -->
        <ProfileCard :user="props.user" :editable="false" />

        <!-- About profile -->
        <AboutCard :profile="props.profile" :editable="false" />
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