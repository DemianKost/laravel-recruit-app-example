<template>
    <Header />
    <div class="container mx-auto flex justify-center">
        <div class="md:w-2/3 w-full bg-white rounded-md py-8 px-8 md:flex justify-center space-x-4 shadow-sm mb-10">
            
            <form @submit.prevent="form.post('/login')" class="w-1/3">
                <h2 class="text-2xl text-center font-bold mb-4">Login</h2>
                <div class="mb-6">
                    <input v-model="form.email" type="email" class="w-full border border-zinc-300 rounded-full px-4 py-2" placeholder="E-mail" required />
                </div>
                <div class="mb-6">
                    <input v-model="form.password" type="password" class="w-full border border-zinc-300 rounded-full px-4 py-2" placeholder="Password" required />
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 w-full py-2 text-white rounded-full">Sign In</button>
                </div>
            </form>

        </div>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';

let props = defineProps({
    success: String
})

const form = useForm({
    email: '',
    password: ''
})
</script>