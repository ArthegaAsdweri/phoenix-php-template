<template>
    <v-app-bar-nav-icon @click="toggle"></v-app-bar-nav-icon>
</template>

<script>
export default {
    name: "phBurgerIcon",
    methods: {
        toggle() {
            this.$emit("toggle")
        }
    }
}
</script>

<style scoped>
.v-app-bar__nav-icon {
    color:var(--ci-orange) !important;
}
</style>