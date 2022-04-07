<script>
import JetHeader from "@/components/Header";
import JetFooter from "@/components/Footer";

export default {
    components: {
        JetHeader,
        JetFooter,
    },
};
</script>
<template>
    <main>
        <div class="flex flex-col h-screen justify-between overflow-hidden">
            <jet-header />
            <main class="mb-12 overflow-y-scroll">
                <section class="container mx-auto px-4 md:px-0">
                    <slot />
                </section>
            </main>
            <jet-footer />
        </div>
    </main>
</template>
