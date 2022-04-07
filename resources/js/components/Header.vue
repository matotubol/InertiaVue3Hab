<script>
import JetLogo from "./Logo";
import JetButton from "./Button";
import JetNavigation from "./Navigation";
import JetDropdown from "./Dropdown";
import JetDropdownLink from "./DropdownLink";

export default {
    components: {
        JetLogo,
        JetButton,
        JetNavigation,
        JetDropdown,
        JetDropdownLink,
    },
};
</script>

<template>
    <header class="bg-teal-900 shadow mb-2">
        <div class="container mx-auto px-4 md:px-0">
            <div class="flex py-10 items-center md:border-b md:border-teal-700">
                <jet-logo class="mr-10" />

                <div class="hidden flex-1 mr-4 md:block">
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('client.index')"
                    >
                        <jet-button
                            class="bg-teal-500 mr-4 hover:bg-teal-600 active:bg-teal-600"
                            >Enter Habnight</jet-button
                        >
                    </Link>
                </div>

                <div class="ml-auto">
                    <jet-dropdown align="right" class="w-32">
                        <template #trigger
                            ><span class="flex items-center justify-end">
                                <div v-if="$page.me" class="flex items-center">
                                    <div
                                        class="flex items-center justify-center w-12 h-12 border-2 border-white rounded-full float-right bg-gray-900 mr-4"
                                    >
                                        <img
                                            src="https://cdn.leet.ws/imaging/avatarimage?figure=hr-4181-48.hd-990000915-97556.ch-3780-73-1408.lg-720-110.sh-8373-73&gesture=sml"
                                            alt="avatar"
                                        />
                                    </div>
                                    <i
                                        class="fas fa-chevron-down text-sm text-white"
                                    />
                                </div>
                                <jet-button v-else>
                                    <i class="fas fa-bars text-xl" />
                                </jet-button>
                            </span>
                        </template>

                        <template #content>
                            <Link
                                href="/"
                                class="block px-5 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                >Homepage</Link
                            >
                            <Link
                                href="/news"
                                class="block px-5 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                >News</Link
                            >
                            <Link
                                href="/highscores"
                                class="block px-5 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                >Highscores</Link
                            >
                            <Link
                                href="/staff"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                >Staff</Link
                            >
                            <Link
                                href="/store"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 border-b hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                >Store</Link
                            >
                            <Link
                                v-if="$page.me"
                                href="/settings/email"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                >Account Settings</Link
                            >
                            <Link
                                href="/downloads"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                >Download Client</Link
                            >
                            <Link
                                v-if="!$page.me"
                                href="/login"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                >Login</Link
                            >
                            <Link
                                v-if="!$page.me"
                                href="/register"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                >Register</Link
                            >
                            <Link
                                v-if="$page.me"
                                href="/nitro"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                >Enter Beta</Link
                            >
                            <Link
                                v-if="$page.me"
                                href="/game"
                                class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                >Enter Client</Link
                            >
                            <Link
                                v-if="$page.me"
                                href="/logout"
                                class="block px-4 py-2 text-sm leading-5 text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:bg-red-600 transition duration-150 ease-in-out"
                                >Logout</Link
                            >
                        </template>
                    </jet-dropdown>
                </div>
            </div>
            <jet-navigation />
        </div>
    </header>
</template>
