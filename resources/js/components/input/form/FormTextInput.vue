<template>
    <div>
        <label
            v-if="label"
            :for="name"
            class="block mb-2 text-sm font-medium text-gray-900"
        >
            {{ label }}
        </label>
        <TextInput
            v-model:model-value="value"
            :name="name"
            :placeholder="placeholder"
            :required="required"
        />
    </div>
</template>
<script setup>
import TextInput from "../TextInput.vue";
import {ref} from "vue";

const props = defineProps({
    name: {
        type: String,
        required: true,
    },
    label: {
        type: String,
        default: null,
    },
    placeholder: {
        type: String,
        default: '',
    },
    required: {
        type: Boolean,
        default: false,
    }
});

const value = ref(null);
</script>
