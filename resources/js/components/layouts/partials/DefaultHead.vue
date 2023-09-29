<template>
    <InertiaHead :title="($page.props.title ? `${$page.props.title} - ` : '') + $page.props.app_name">
        <slot />
    </InertiaHead>
</template>

<script setup>
import { Head as InertiaHead } from '@inertiajs/vue3'
</script>
