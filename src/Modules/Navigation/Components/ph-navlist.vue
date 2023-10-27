<template>
    <v-list
        class="navList"
        v-bind:class="levelClass"
        dense
    >
        <template
            v-for='node in nodes'
        >
            <v-list-group v-if='node.items && node.items.length' v-model='node.active'>
                <v-list-item @click='' slot='activator'>
                    <v-subheader>
                        {{ node.title }}
                    </v-subheader>
                </v-list-item>
                <ph-navlist
                    :nodes='node.items'
                    :parentLevel="level"
                ></ph-navlist>
            </v-list-group>
            <div @click='' v-else>
                <v-list-item @click="call(node.url)">
                    <v-list-item-icon v-if="level !== 1">
                        <v-icon>mdi-menu-right</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                        {{ node.title }}
                    </v-list-item-title>
                </v-list-item>
            </div>
            <v-divider></v-divider>
        </template>
    </v-list>
</template>

<script>
export default {
    name: "phNavlist",
    props: {
        nodes: {
            type: Array,
            required: false
        },
        parentLevel: {
            type: Number,
            required: false,
            default: 0
        }
    },
    data() {
        return {
            level: this.parentLevel + 1
        }
    },
    methods: {
        call(url) {
            window.location = '/' + url;
        }
    },
    computed: {
        levelClass() {
            return {
                'l1': this.level === 1,
                'l2': this.level === 2,
                'l3': this.level === 3
            }
        }
    }
}
</script>

<style scoped>
.navList .v-list-group__header,
.navList .v-subheader {
    padding-left: 0;
    padding-right: 0;
}

.navList .l2 .v-list-group__header {
    padding-left: 10px;
}

.navList .l3 .v-list-item {
    padding-left: 40px;
}

.navList .v-divider:last-of-type {
    display: none;
}

</style>