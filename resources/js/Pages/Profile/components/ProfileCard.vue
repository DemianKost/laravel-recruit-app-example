<template>
    <div class="md:w-2/3 w-full bg-white rounded-md py-8 px-8 shadow-sm mb-5">

        <div class="flex justify-between items-end mb-3">
            <h2 class="text-3xl font-bold">Your profile</h2>
            <p v-if="editable" @click="isEditing = ! isEditing" class="text-blue-400 cursor-pointer">Edit</p>
        </div>
        <hr>

        <div class="profile__avatar flex justify-center items-center mt-5 mb-3">
            <div class="w-20 h-20 bg-green-500 rounded-full flex items-center justify-center text-4xl mr-5">
                🍄
            </div>
            <div>
                <h2 class="text-2xl font-mono" v-if="! isEditing">{{ props.user.name }}</h2>
                <form v-else-if="isEditing && editable">
                    <input v-model="form.name" class="w-full border border-zinc-300 rounded-xl px-4 py-2" type="text" required />
                </form>
            </div>
        </div>
        <div class="profile__info">
            <p class="text-zinc-500 font-mono text-center">HR in Big Brain Inc.</p>
        </div>

        <div class="flex justify-center mt-3" v-if="isEditing && editable">
            <button @click="saveUser()" type="submit" class="bg-green-400 text-white px-4 py-2 text-center rounded-full">Save</button>
        </div>

    </div>
</template>

<script setup>
    import { ref } from 'vue';
    import { useForm } from '@inertiajs/vue3';

    let isEditing = ref(false);

    let props = defineProps({
        user: Object,
        editable: Boolean
    })

    let form = useForm({
        name: props.user.name
    })

    function saveUser() {
        form.post('/profile/user/update');
        isEditing = false;
    }
</script>