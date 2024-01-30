<template>
    <div>
        <label
            v-if="label"
            :for="name"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        >
            {{ label }}
        </label>
        <TextInput
            v-model:model-value="value"
            :name="name"
            :class="{'rounded-b-none': toggleComment()}"
            :placeholder="placeholder"
            :required="required"
        />
        <CommentInput
            v-if="toggleComment()"
            :name="name"
            :placeholder="placeholder"
        />
    </div>
</template>
<script setup>
import {onBeforeMount, ref} from "vue";
import CommentInput from "./CommentInput.vue";
import TextInput from "../TextInput.vue";

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
const comment = ref(null);
const initialValue = ref(null);

onBeforeMount(() => {
    initialValue.value = value.value;
})

function toggleComment()
{
    return (comment.value !== null || initialValue.value !== value.value);
}

</script>
