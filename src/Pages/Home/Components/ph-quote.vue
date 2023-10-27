<template>
    <v-container
        class="quote"
        v-bind:class="visibleClass"
        v-observe-visibility="visibilityChanged"
    >
        <div class="text-center">"{{ this.text }}"</div>
    </v-container>
</template>

<script>
export default {
    name: "phQuote",
    props: {
        text: {
            type: String,
            default: "",
            required: true
        }
    },
    data() {
        return {
            wasVisible: false
        }
    },
    methods: {},
    computed: {
        visibleClass() {
            return {
                'visible': this.wasVisible
            }
        }
    },
    watch: {
        isVisible(val) {
            if (val === true) {
                this.wasVisible = true;
            }
        }
    }
}
</script>

<style scoped>
.quote {
    padding: 20px 0 !important;
    position: relative;
    color: #fbf1ef;
    background: var(--ci-brown);
}

.quote > div {
    transition-property: opacity, top;
    transition-duration: 1000ms;
    opacity: 0;
    position: relative;
    font-weight: normal;
    top: 300px;
    font-size:26px;
    font-family: 'Anton', sans-serif !important;
}

.quote.visible > div {
    opacity: 1;
    top: 0;
}
</style>