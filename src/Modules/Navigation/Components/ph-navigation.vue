<template>
    <v-navigation-drawer
        v-model="drawer"
        fixed
        right
    >
        <v-btn
            class="mt-2 mr-2 float-right"
            right
            elevation="2"
            icon
            @click="toggle"
        >
            <v-icon>
                mdi-close
            </v-icon>
        </v-btn>
        <br>
        <ph-navlist
            :nodes="groups"
        ></ph-navlist>
    </v-navigation-drawer>
</template>

<script>
export default {
    name: "phNavigation",
    components: {
        'ph-navlist': phNavlist
    },
    props: {
        drawer: {
            type: Boolean,
            default: false,
            required: false
        }
    },
    data() {
        return {
            groups: [
                {
                    title: "Home",
                    url: ""
                },
                {
                    title: "Some Group",
                    items: [
                        {
                            title: "Some Page",
                            url: "some-page/some-action"
                        }
                    ]
                }
            ]
        }
    },
    methods: {
        toggle() {
            this.$emit("toggle")
        }
    },
    computed: {
        isMobile() {
            return window.screen.width < 1024;
        }
    }
}
</script>

<style scoped>
.v-list-item__icon {
    margin-right: 12px !important;
}

.v-list-item__title {
    color: var(--ci-orange) !important;
}

.v-list-item a {
    color: inherit !important;
    display: block;
}
</style>