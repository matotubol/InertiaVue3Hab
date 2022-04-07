<script>
import Layout from "@/Shared/Layout";
import JetCard from "@/components/Card";
import JetInput from "@/components/Input";
import JetLabel from "@/components/Label";
import JetButton from "@/components/Button";
import JetCardTitle from "@/components/CardTitle";
export default {
    components: {
        JetCard,
        JetInput,
        JetLabel,
        JetButton,
        JetCardTitle,
    },
    layout: Layout,

    props: {
        canResetPassword: Boolean,
        status: String,
    },
    data() {
        return {
            form: this.$inertia.form({
                mail: "",
                password: "",
                remember: false,
            }),
        };
    },
    methods: {
        submit() {
            this.form
                .transform((data) => ({
                    ...data,
                    remember: this.form.remember ? "on" : "",
                }))
                .post(this.route("login"), {
                    onFinish: () => this.form.reset("password"),
                });
        },
    },
};
</script>

<template>
    <section>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 mb-4 md:w-2/3">
                <jet-card class="p-6">
                    <jet-card-title>
                        <p class="font-bold text-xl">Login todd</p>
                        <i class="fas fa-user ml-auto"></i>
                    </jet-card-title>
                    <div
                        v-if="form.errors.password"
                        class="mb-4 font-medium text-sm text-red-600"
                    >
                        {{ form.errors.password }}
                    </div>
                    <div
                        v-if="form.errors.mail"
                        class="mb-4 font-medium text-sm text-red-600"
                    >
                        {{ form.errors.mail }}
                    </div>

                    <form @submit.prevent="submit">
                        <jet-label for="mail" value="Username or Email" />
                        <jet-input
                            id="mail"
                            v-model="form.mail"
                            :error="form.errors.mail"
                            class="block mt-1 w-full mb-1"
                            type="text"
                            required
                            autofocus
                        />

                        <jet-label for="password" value="Password" />
                        <jet-input
                            id="password"
                            v-model="form.password"
                            :error="form.errors.password"
                            class="block mt-1 w-full mb-4"
                            type="password"
                            required
                        />

                        <Link
                            class="block underline text-sm text-gray-600 hover:text-gray-900 mb-4"
                            href="/register"
                            >Don't have an account?</Link
                        >
                        <jet-button>Login</jet-button>
                    </form>
                </jet-card>
            </div>
        </div>
    </section>
</template>
