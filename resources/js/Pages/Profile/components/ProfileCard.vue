<template>
    <div class="md:w-2/3 w-full bg-white rounded-md py-8 px-8 shadow-sm mb-5">

        <div class="flex justify-between items-end mb-3">
            <h2 class="text-3xl font-bold">Your profile</h2>
            <Link href="/profile/edit" class="text-blue-400">Edit</Link>
        </div>
        <hr>

        <div class="profile__avatar flex justify-center items-center mt-5 mb-3">
            <div class="w-20 h-20 bg-green-500 rounded-full flex items-center justify-center text-4xl mr-5">
                🍄
            </div>
            <div>
                <h2 class="text-2xl font-mono">{{ props.user.name }}</h2>
            </div>
        </div>
        <div class="profile__info">
            <p class="text-zinc-500 font-mono text-center">HR in Big Brain Inc.</p>
        </div>

    </div>
</template>

<script setup>
    let props = defineProps({
        user: Object
    })
</script>