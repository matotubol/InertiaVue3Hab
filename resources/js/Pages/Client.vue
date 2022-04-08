<script>
import { Inertia } from "@inertiajs/inertia";
export default {
    layout: Layout,
    props: {
        query: String,
    },
    methods: {
        clickBack() {
            Inertia.get(this.route("index.me"), { preserveState: true });
            {
                true;
            }
        },
    },
};
</script>
<template>
    <button @click="clickBack">Search</button>
    <input type="text" />
</template>
