<script setup>
defineProps({
    type: {
        type: String,
        default: "submit",
    },
    loading: {
        type: Boolean,
        default: false,
    },
});
defineEmits(["click"]);
</script>

<template>
    <button
        :type="type"
        class="inline-flex items-center px-4 py-5 border-transparent font-bold text-xs border-b-4 hover:border-b-4 hover:border-blue-500 text-white uppercase tracking-widest hover:text-sky-400 focus:shadow-outline-gray transition ease-in-out duration-150"
        @click="$emit('click')"
    >
        <i v-if="loading" class="fas fa-circle-notch fa-spin" />
        <slot v-else />
    </button>
</template>
