<template>
    <div class="md:w-2/3 w-full bg-white rounded-md py-8 px-8 shadow-sm mb-10">
        <div class="flex justify-between items-end mb-3">
            <h2 class="text-3xl font-bold">About</h2>
            <p v-if="editable" @click="isEditing = ! isEditing" class="text-blue-400 cursor-pointer">Edit</p>
        </div>
        <hr>
        <div class="profile__about mt-3">
            <p v-if="props.profile.about && ! isEditing" class="text-zinc-500">{{ props.profile.about }}</p>
            <form @submit.prevent="saveAbout()" v-else-if="isEditing">
                <textarea v-model="form.about" class="w-full border border-zinc-300 rounded-xl px-4 py-2" rows="4"></textarea>
                <button type="submit" class="bg-green-400 text-white px-4 py-2 text-center rounded-full">Save</button>
            </form>
            <p v-else class="text-xl text-center text-zinc-500">There is no any information about section 🙌</p>
        </div>
    </div>
</template>

<script setup>
    import { ref } from 'vue';
    import { useForm } from '@inertiajs/vue3';

    let isEditing = ref(false);

    let props = defineProps({
        profile: Object,
        editable: Boolean
    })

    let form = useForm({
        about: props.profile.about
    })

    function saveAbout() {
        form.put(`/profile/${props.profile.id}`);

        isEditing = false;
    }
</script>