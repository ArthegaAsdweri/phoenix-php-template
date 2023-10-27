<template>
</template>

<script>
export default {
    name: "utilMixin",
    data() {
        return {
            isVisible: false
        }
    },
    methods: {
        visibilityChanged(isVisible, entry) {
            this.isVisible = isVisible
        }
    }
};
</script>

<style scoped>
</style>