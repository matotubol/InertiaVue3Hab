<script>
import JetHeader from "@/components/Header";
import JetFooter from "@/components/Footer";
import Client from "@/Shared/Client";

export default {
    components: {
        JetHeader,
        JetFooter,
    },
    layout: Client,
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
