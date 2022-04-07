<script>
import JetButton from "./Button";
export default {
    components: {
        JetButton,
    },
};
</script>
<template>
    <nav class="w-full hidden items-center md:flex">
        <Link :href="route('index.me')" class="mr-2">
            <JetButton
                ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    />
                </svg>
                Homepage
            </JetButton>
        </Link>
        <JetButton
            id="dropdownDefault"
            data-dropdown-toggle="dropdown"
            class="text-white focus:outline-none focus:ring-blue-300 font-medium text-center inline-flex items-center"
            type="button"
        >
            Community
            <svg
                class="ml-2 w-4 h-4"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 9l-7 7-7-7"
                ></path>
            </svg>
        </JetButton>
        <!-- Dropdown menu -->
        <div
            id="dropdown"
            class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
        >
            <ul
                class="text-sm text-gray-700 dark:text-gray-200"
                aria-labelledby="dropdownDefault"
            >
                <li>
                    <a
                        href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                        >Nieuws</a
                    >
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                        >Medewerkers</a
                    >
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                        >Winkel</a
                    >
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                        >Ruilwaardes</a
                    >
                </li>
            </ul>
        </div>
        <Link :href="route('auth.logout')" class="mr-2">
            <JetButton
                ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M14.121 15.536c-1.171 1.952-3.07 1.952-4.242 0-1.172-1.953-1.172-5.119 0-7.072 1.171-1.952 3.07-1.952 4.242 0M8 10.5h4m-4 3h4m9-1.5a9 9 0 11-18 0 9 9 0 0118 0z"
                    /></svg
                >Logout</JetButton
            >
        </Link>
        <Link v-if="$page.me" href="/settings/email" class="mr-2">
            <JetButton>Account Settings</JetButton>
        </Link>

        <JetButton class="ml-auto mr-2">
            <i class="fas fa-users mr-2"></i>
            <span>100 users online</span>
        </JetButton>
    </nav>
</template>
