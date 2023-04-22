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
                <div class="mb-4 flex space-x-4">
                    <label>
                        <span class="font-medium">Salary from: </span>
                        <input v-model="form.salary_from" type="number" class="w-full border border-zinc-300 rounded-xl px-4 py-2 mt-2" placeholder="Salary from" />
                    </label>
                    <label>
                        <span class="font-medium">Salary to: </span>
                        <input v-model="form.salary_to" type="number" class="w-full border border-zinc-300 rounded-xl px-4 py-2 mt-2" placeholder="Salary To" />
                    </label>
                </div>
                <div class="mb-4">
                    <label class="font-medium">Programming languages/Frameworks: </label>
                    <select v-model="form.programmingLanguages" class="mt-2 w-full border border-zinc-300 rounded-xl px-4 py-2 resize-none" multiple>
                        <option>PHP</option>
                        <option>C</option>
                        <option>C++</option>
                        <option>C#</option>
                        <option>TypeScript</option>
                        <option>HTML/CSS</option>
                        <option>Vue</option>
                        <option>React</option>
                        <option>JavaScript</option>
                        <option>Rust</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="font-medium">Work type: </label>
                    <select v-model="form.workTypes" class="mt-2 w-full border border-zinc-300 rounded-xl px-4 py-2 resize-none" multiple>
                        <option>Part-time</option>
                        <option>Full-time</option>
                        <option>Remote</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="font-medium">Developer level: </label>
                    <select v-model="form.devLevels" class="mt-2 w-full border border-zinc-300 rounded-xl px-4 py-2 resize-none" multiple>
                        <option>Trainee</option>
                        <option>Junior</option>
                        <option>Middle</option>
                        <option>Senior</option>
                        <option>Team Lead</option>
                    </select>
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
        description: '',
        salary_from: 0,
        salary_to: 600,
        programmingLanguages: [],
        workTypes: [],
        devLevels: []
    })
</script>