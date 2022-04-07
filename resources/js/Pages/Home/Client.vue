<script>
import Base from "@/Shared/Layout";
import Client from "@/Shared/Client";

export default {
    components: {
        Base,
    },
    layout: Client,
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
