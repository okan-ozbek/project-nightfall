<template>

</template>

<script setup>
import {onBeforeMount} from "vue";
import route from "ziggy-js/src/js/index.js";


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
