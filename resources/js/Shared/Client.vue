<script>
export default {
    // Using the shorthand

    computed: {
        user() {
            return this.$page.props.auth.user;
        },
        methods: {
            clickBack() {
                this.$inertia.get(this.$route("index.me"));
            },
        },
    },
};
</script>

<template>
    <main>
        <iframe
            style="
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                width: 100%;
                height: 50%;
                border: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            "
            :src="
                'http://localhost:8000/nitro/index.html?sso=' + user.auth_ticket
            "
            frameborder="0"
        ></iframe>
    </main>
    <Link :href="route('index.me')" class="mr-2"> Back </Link>
</template>
