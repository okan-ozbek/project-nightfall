<template>
    <li>
        <Link
            :class="{
                'active-link': active,
                'default-link': !active
            }"
            aria-current="page"
            :href="href"
        >
            <slot> {{ text }} </slot>
        </Link>
    </li>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    text: {
        type: String,
        default: '',
    },
    active: {
        type: Boolean,
        default: false,
    },
});
</script>

<style scoped>
    .active-link {
        @apply block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500
    }

    .default-link {
        @apply block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700
    }
</style>
