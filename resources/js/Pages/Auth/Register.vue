<template>
    <section>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 mb-4 md:w-2/3">
                <jet-card class="p-6">
                    <jet-card-title>
                        <p class="font-bold text-xl">Register to habnight</p>
                        <i class="fas fa-user ml-auto"></i>
                    </jet-card-title>
                    <div
                        v-if="form.errors.username"
                        class="mb-4 font-medium text-sm text-red-600"
                    >
                        {{ form.errors.username }}
                    </div>
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
                        <div class="flex items-center justify-between -mx-4">
                            <fieldset class="w-full md:w-1/2 px-4 mb-4">
                                <jet-label for="username" value="Username" />
                                <jet-input
                                    id="username"
                                    v-model="form.username"
                                    class="block mt-1 w-full mb-1"
                                    type="text"
                                    required
                                    autofocus
                                    autocomplete="username"
                                />
                            </fieldset>
                            <fieldset class="w-full md:w-1/2 px-4 mb-4">
                                <jet-label for="mail" value="Email" />
                                <jet-input
                                    id="mail"
                                    v-model="form.mail"
                                    class="block mt-1 w-full mb-1"
                                    type="email"
                                    required
                                />
                            </fieldset>
                        </div>
                        <div class="flex items-center justify-between -mx-4">
                            <fieldset class="w-full md:w-1/2 px-4 mb-4">
                                <jet-label for="password" value="Password" />
                                <jet-input
                                    id="password"
                                    v-model="form.password"
                                    class="block mt-1 w-full mb-1"
                                    type="password"
                                    required
                                    autocomplete="new-password"
                                />
                            </fieldset>
                            <fieldset class="w-full md:w-1/2 px-4 mb-4">
                                <jet-label
                                    for="password_confirmation"
                                    value="Confirm Password"
                                />
                                <jet-input
                                    id="password_confirmation"
                                    v-model="form.password_confirmation"
                                    class="block mt-1 w-full mb-1"
                                    type="password"
                                    required
                                    autocomplete="new-password"
                                />
                            </fieldset>
                        </div>
                        <Link
                            class="block underline text-sm text-gray-600 hover:text-gray-900 mb-4"
                            href="/login"
                            >Already registered?</Link
                        >
                        <jet-button>Register</jet-button>
                    </form>
                </jet-card>
            </div>
        </div>
    </section>
</template>

<script>
import Layout from "@/Shared/Layout";
import JetCard from "@/components/Card";
import JetInput from "@/components/Input";
import JetLabel from "@/components/Label";
import JetButton from "@/components/Button";
import JetCardTitle from "@/components/CardTitle";
import JetInputError from "@/components/InputError";
export default {
    components: {
        JetCard,
        JetInput,
        JetLabel,
        JetButton,
        JetCardTitle,
        JetInputError,
    },
    layout: Layout,
    data() {
        return {
            form: this.$inertia.form({
                username: "",
                mail: "",
                password: "",
                password_confirmation: "",
            }),
        };
    },
    methods: {
        submit() {
            this.form.post(this.route("register"), {
                onFinish: () =>
                    this.form.reset("password", "password_confirmation"),
            });
        },
    },
};
</script>
