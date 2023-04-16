<template>
    <Header />
    <div class="container mx-auto flex justify-center">
        <div class="md:w-2/3 w-full bg-white rounded-md py-8 px-8 shadow-sm mb-10">
            
            <div class="md:flex items-center justify-between mb-10">
                <h3 class="text-3xl font-semibold mb-0">{{ vacancy.title }}</h3>
                <span class="text-xl font-semibold">$500-800</span>
            </div>

            <div class="flex">
                <h2 class="text-md mr-2">Programming language:</h2>
                <div class="flex flex-wrap mb-2">
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">PHP</div>
                </div>
            </div>
            <div class="flex">
                <h2 class="text-md mr-2">Work type:</h2>
                <div class="flex flex-wrap mb-2">
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Full-time</div>
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Office</div>
                </div>
            </div>
            <div class="flex">
                <h2 class="text-md mr-2">Dev level:</h2>
                <div class="flex flex-wrap mb-2">
                    <div class="px-2 py-1 text-sm text-blue-500 border border-blue-500 rounded-sm mr-2 mb-2">Junior</div>
                </div>
            </div>

            <p class="text-justify text-zinc-500">{{ vacancy.description }}</p>

        </div>
    </div>
</template>

<script setup>
    let props = defineProps({
        vacancy: Object
    });
</script>