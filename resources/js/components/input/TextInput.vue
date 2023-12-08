<template>
    <input
        v-model="computedModelValue"
        type="text"
        :id="name"
        :name="name"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        :placeholder="placeholder"
        :required="required"
    >
</template>
<script setup>
import {computed} from "vue";

const props = defineProps({
    name: {
        type: String,
        required: true,
    },
    modelValue: {
        type: [String, null],
        required: true,
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

const emits = defineEmits("update:modelValue");

const computedModelValue = computed({
    get() {
        return props.modelValue;
    },
    set(value) {
        if (value === '') {
            value = null;
        }

        emits('update:modelValue', value);
    }
})
</script>
