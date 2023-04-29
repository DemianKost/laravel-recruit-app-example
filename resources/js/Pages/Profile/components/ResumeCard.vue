<template>
    <div class="md:w-2/3 w-full bg-white rounded-md py-8 px-8 shadow-sm mb-10">
        <div class="flex justify-between items-end mb-3">
            <h2 class="text-3xl font-bold">Resume</h2>
            <p v-if="editable" @click="isEditing = ! isEditing" class="text-blue-400 cursor-pointer">Edit</p>
        </div>
        <hr>
        <div class="profile__about mt-3">

            <form @submit.prevent="updateResume()" v-if="isEditing">
                <div class="mb-4">
                    <h3 class="text-lg font-semibold mb-1">Position: </h3>
                    <input v-model="form.position" type="text" class="w-full border border-zinc-300 rounded-xl px-4 py-2" placeholder="Write your position here" />
                </div>
                <div class="mb-2">
                    <h3 class="text-lg font-semibold mb-1">Description: </h3>
                    <textarea v-model="form.description" type="text" class="w-full border border-zinc-300 rounded-xl px-4 py-2" rows="4"></textarea>
                </div>
                <button type="submit" class="bg-green-400 text-white px-4 py-2 text-center rounded-full">Save</button>
            </form>
            <div v-else class="profile__resume">
                <div class="mb-4">
                    <h3 class="text-lg font-semibold">Position: </h3>
                    <p class="font-mono">{{ resume.position }}</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-lg font-semibold">Description: </h3>
                    <p class="font-mono">{{ resume.description }}</p>
                </div>
            </div>

        </div>
    </div>
</template>

<script setup>
    import { ref } from 'vue'
    import { useForm } from '@inertiajs/vue3'

    let isEditing = ref(false)

    let props = defineProps({
        profile: Object,
        resume: Object,
        editable: Boolean
    })

    let form = useForm({
        position: props.resume.position,
        description: props.resume.description
    })

    function updateResume() {
        form.put('/resume/update');

        isEditing = ! isEditing;
    }
</script>