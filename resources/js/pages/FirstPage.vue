<template>
    <Hero>
        <div class="h-full flex justify-center items-center flex-col">
            <h1 class="font-bold text-4xl text-white"> Absolute, creative, and robust design </h1>
            <button class="border-2 text-2xl py-2 px-5 mt-8 text-white"> Hello world </button>
        </div>
    </Hero>
    <div class="flex flex-col justify-center items-center my-8">
        <h1 class="mb-8 text-3xl font-bold"> Hello world </h1>
        <p> This is the first text written in Vue & Inertia (on this project). </p>
        <p class="mb-4"> The following text is written from the controller.. </p>
        <p> Text in question: <span class="font-italic"> {{ message }} </span> </p>
    </div>
</template>

<script setup>
import {onBeforeMount} from "vue";
import Hero from "@components/Hero.vue";

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
