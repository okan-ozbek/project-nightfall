<template>
    <AuditTextInput
        name="username"
        label="Username"
        :required="true"
    />
</template>

<script setup>
import {onBeforeMount} from "vue";
import AuditTextInput from "../components/input/audit/AuditTextInput.vue";

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
