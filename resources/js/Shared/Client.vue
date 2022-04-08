<script>
export default {
    data: function () {
        return {
            ShowClient: false,
        };
    },
};
</script>
<template>
    <iframe
        v-show="ShowClient"
        style="
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: none;
            margin: 0;
            padding: 0;
            z-index: 1;
        "
        :src="'http://localhost:8000/nitro/index.html?sso='"
        frameborder="0"
    ></iframe>
</template>
