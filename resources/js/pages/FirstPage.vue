<template>
    <div class="flex flex-col justify-center items-center">
        <h1 class="mb-8 text-3xl font-bold"> Hello world </h1>
        <p> This is the first text written in Vue & Inertia (on this project). </p>
        <p class="mb-4"> The following text is written from the controller.. </p>
        <p> Text in question: <span class="font-italic"> {{ message }} </span> </p>
    </div>
</template>

<script setup>
import {onBeforeMount} from "vue";

const props = defineProps({
    message: {
        type: String,
        default: null,
    }
});

onBeforeMount(() => {
    console.log(route().current());
})
</script>

<style scoped>
    .paragraph {
        @apply text-3xl font-bold underline;
    }
</style>
