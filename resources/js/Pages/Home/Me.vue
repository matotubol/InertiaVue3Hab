<template>
    <section>
        <jet-card class="p-6 mb-12">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 md:w-1/2">
                    <jet-card
                        class="flex items-center h-32 p-6 mb-4 overflow-hidden bg-gray-600 bg-cover bg-bottom bg-no-repeat"
                        style="background-image: url('/images/user-bg.png')"
                    >
                        <img
                            src="/habbo-imaging/avatarimage?direction=2&head_direction=2"
                            class="self-start flex-shrink-0 -mt-10 h-48 w-auto drop-shadow mr-4"
                        />
                        <div
                            class="hidden relative flex-1 text-white py-2 px-4 md:block"
                        >
                            <div
                                class="absolute left-0 top-0 w-full h-full bg-gray-00 opacity-50 rounded-lg"
                            />
                            <p class="relative text-3xl mb-1">
                                {{ user.username }}
                            </p>
                            <p class="relative">no motto</p>
                        </div>
                    </jet-card>
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full px-4 md:w-1/2">
                            <jet-card
                                class="flex mb-4 h-24 bg-yellow-300 md:mb-0"
                            >
                                <div
                                    class="flex justify-center items-center w-24 h-24 bg-yellow-400 rounded-l-lg flex-shrink-0"
                                >
                                    <img
                                        src="/images/credits.png"
                                        alt="Credits"
                                        class="w-8 drop-shadow"
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center flex-1 p-6 overflow-hidden truncate"
                                >
                                    <p class="text-xl">435345</p>
                                </div>
                            </jet-card>
                        </div>
                        <div class="w-full px-4 md:w-1/2">
                            <jet-card
                                class="flex mb-4 h-24 bg-purple-300 md:mb-0"
                            >
                                <div
                                    class="flex justify-center items-center w-24 h-24 bg-purple-400 rounded-l-lg flex-shrink-0"
                                >
                                    <img
                                        src="/images/duckets.png"
                                        alt="Duckets"
                                        class="w-8 drop-shadow"
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center flex-1 p-6 overflow-hidden truncate"
                                >
                                    <p class="text-xl">3455</p>
                                </div>
                            </jet-card>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2">
                    <Link href="/game">
                        <jet-card
                            class="flex justify-center items-center cursor-pointer h-32 p-6 mb-4 bg-blue-500 bg-cover bg-bottom bg-no-repeat"
                            style="
                                background-image: url('/images/client-bg.png');
                            "
                        >
                            <p class="text-2xl text-white md:text-4xl">
                                Enter gg
                            </p>
                        </jet-card>
                    </Link>
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full px-4 md:w-1/2">
                            <jet-card
                                class="flex mb-4 h-24 bg-blue-300 md:mb-0"
                            >
                                <div
                                    class="flex justify-center items-center w-24 h-24 bg-blue-400 rounded-l-lg flex-shrink-0"
                                >
                                    <img
                                        src="/images/diamonds.png"
                                        alt="Diamonds"
                                        class="w-8 drop-shadow"
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center flex-1 p-6 overflow-hidden truncate"
                                >
                                    <p class="text-xl">4545</p>
                                </div>
                            </jet-card>
                        </div>
                        <div class="w-full px-4 md:w-1/2">
                            <jet-card class="flex h-24 bg-gray-500">
                                <div
                                    class="flex justify-center items-center w-24 h-24 bg-gray-600 rounded-l-lg flex-shrink-0"
                                >
                                    <img
                                        src="/images/vip.png"
                                        alt="VIP"
                                        class="w-8 drop-shadow"
                                    />
                                </div>
                                <div
                                    class="flex justify-center items-center flex-1 p-6 overflow-hidden truncate"
                                >
                                    <p class="text-xl">gg</p>
                                </div>
                            </jet-card>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 mt-4">
                    <p class="font-bold mb-2 text-sm">
                        Referral Link - Earn 100 diamonds per referral
                    </p>
                    <jet-card
                        class="relative px-4 py-2 cursor-pointer rounded-lg transition ease-in-out duration-150"
                    >
                        <p class="text-sm">gg</p>
                    </jet-card>
                </div>
            </div>
        </jet-card>
    </section>
</template>

<script>
import Layout from "@/Shared/Layout";
import JetCard from "@/components/Card";
import JetCardTitle from "@/components/CardTitle";
import JetButton from "@/components/Button";
import { computed } from "vue";
import { usePage } from "@inertiajs/inertia-vue3";

export default {
    components: {
        JetCard,
        JetCardTitle,
        JetButton,
    },
    layout: Layout,
    props: {
        me: Object,
        socials: Array,
        shortname: String,
        articles: Object,
    },
    setup() {
        const user = computed(() => usePage().props.value.auth.user);
        return { user };
    },
};
</script>
