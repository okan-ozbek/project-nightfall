<template>
    <li>
        <Link
            class="link-item-style"
            aria-current="page"
            :href="href"
        >
            <slot />
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
});
</script>

<style scoped>
    .link-item-style {
        @apply ml-4 hover:underline md:ml-6
    }
</style>
