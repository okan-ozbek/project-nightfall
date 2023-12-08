<template>
    <a
        v-if="src"
        :href="link"
        class="flex items-center space-x-3 rtl:space-x-reverse"
    >

        <img
            :src="src"
            class="h-8 mr-3"
            :alt="name"
        />
    </a>
    <h1
        class="text-xl font-bold dark:text-white"
        v-else
    >
        {{ name }}
    </h1>
</template>

<script setup>
const props = defineProps({
    src: {
        type: String,
        default: null,
    },
    link: {
        type: String,
        default: null,
    },
    name: {
        type: String,
        required: true,
    }
})
</script>
