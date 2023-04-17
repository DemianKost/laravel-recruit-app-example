<template>
    <div class="md:w-2/3 w-full bg-white rounded-md py-8 px-8 shadow-sm mb-10">
        <h2 class="text-3xl font-bold mb-3">About</h2>
        <hr>
        <div class="profile__about mt-3" v-if="props.profile.about">
            <p class="text-zinc-500">{{ props.profile.about }}</p>
        </div>
        <div class="profile__about mt-3" v-else>
            <p class="text-xl text-center text-zinc-500">There is no any information about you 🙌</p>
        </div>
    </div>
</template>

<script setup>
    let props = defineProps({
        profile: Object
    })
</script>