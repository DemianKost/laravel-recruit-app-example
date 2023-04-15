<template>
    <Header />
    <div class="container mx-auto flex justify-center">
        <div class="md:w-2/3 w-full bg-white rounded-md py-8 px-8 md:flex justify-center space-x-4 shadow-sm mb-10">
            
            <form @submit.prevent="form.post('/register')" class="w-1/3">
                <h2 class="text-2xl text-center font-bold mb-4">Register</h2>
                <div class="mb-6">
                    <input v-model="form.name" type="text" class="w-full border border-zinc-300 rounded-full px-4 py-2" placeholder="Name" />
                    <div v-if="errors.name" class="text-red-500 text-xs mt-1">{{ errors.name }}</div>
                </div>
                <div class="mb-6">
                    <input v-model="form.company" type="text" class="w-full border border-zinc-300 rounded-full px-4 py-2" placeholder="Company" />
                    <div v-if="errors.company" class="text-red-500 text-xs mt-1">{{ errors.company }}</div>
                </div>
                <div class="mb-6">
                    <input v-model="form.email" type="email" class="w-full border border-zinc-300 rounded-full px-4 py-2" placeholder="E-mail" />
                    <div v-if="errors.email" class="text-red-500 text-xs mt-1">{{ errors.email }}</div>
                </div>
                <div class="mb-6">
                    <input v-model="form.password" type="password" class="w-full border border-zinc-300 rounded-full px-4 py-2" placeholder="Password" />
                    <div v-if="errors.password" class="text-red-500 text-xs mt-1">{{ errors.password }}</div>
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 w-full py-2 text-white rounded-full">Sign Up</button>
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
    name: '',
    company: '',
    email: '',
    password: ''
});
</script>