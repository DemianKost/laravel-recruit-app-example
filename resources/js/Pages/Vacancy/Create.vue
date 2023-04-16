<template>
    <Header />
    <div class="container mx-auto flex justify-center">
        <div class="md:w-2/3 w-full bg-white rounded-md py-8 px-8 shadow-sm mb-10">

            <h2 class="text-3xl font-bold capitalize mb-3">create a new vacancy</h2>
            <hr>

            <form @submit.prevent="form.post('/vacancies');" class="mt-5">
                <div class="mb-4">
                    <input v-model="form.title" type="text" class="w-full border border-zinc-300 rounded-xl px-4 py-2" placeholder="Title" />
                    <div v-if="errors.title" class="text-red-500 text-xs mt-1">{{ errors.title }}</div>
                </div>
                <div class="mb-4">
                    <textarea v-model="form.description" class="w-full border border-zinc-300 rounded-xl px-4 py-2 resize-none" rows="5" placeholder="Write your description here"></textarea>
                    <div v-if="errors.description" class="text-red-500 text-xs mt-1">{{ errors.description }}</div>
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-green-400 text-white px-4 py-2 rounded-full">Create vacancy</button>
                </div>
            </form>

        </div>
    </div>
</template>

<script setup>
    import { useForm } from '@inertiajs/vue3';

    let props = defineProps({
        errors: Array
    })

    const form = useForm({
        title: '',
        description: ''
    })
</script>