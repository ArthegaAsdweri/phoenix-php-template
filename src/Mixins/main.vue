<template>
</template>

<script>
export default {
    name: "mainMixin",
    data() {
        return {
            navigationVisible: false
        }
    },
    methods: {
        toggleNavigation() {
            this.navigationVisible = !this.navigationVisible;
        }
    }
};
</script>

<style scoped>
</style>