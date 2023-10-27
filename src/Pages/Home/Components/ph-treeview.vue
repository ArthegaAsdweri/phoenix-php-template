<template>
    <v-treeview
        class="treeview"
        v-model="tree"
        :open="initiallyOpen"
        :items="items"
        item-key="name"
        dark
    >
        <template v-slot:prepend="{ item, open }">
            <v-icon v-if="!item.file">
                {{ open ? 'mdi-folder-open' : 'mdi-folder' }}
            </v-icon>
            <v-icon v-else>
                {{ files[item.file] }}
            </v-icon>
        </template>
    </v-treeview>
</template>

<script>
export default {
    name: "phTreeview",
    data() {
        return {
            initiallyOpen: ['src', 'Db'],
            files: {
                html: 'mdi-language-html5',
                js: 'mdi-nodejs',
                json: 'mdi-code-json',
                md: 'mdi-language-markdown',
                pdf: 'mdi-file-pdf',
                php: 'mdi-file-code',
                png: 'mdi-file-image',
                txt: 'mdi-file-document-outline',
                hidden: 'mdi-file-hidden'
            },
            tree: [],
            items: [
                {
                    name: 'src',
                    children: [
                        {
                            name: 'Db (Optional)'
                        },
                        {
                            name: 'Mixins (Optional)'
                        },
                        {
                            name: 'Modules (Optional)'
                        },
                        {
                            name: 'Pages'
                        },
                        {
                            name: 'PageWrapper'
                        },
                        {
                            name: 'Resources'
                        },
                        {
                            name: 'index.php',
                            file: 'php',
                        },
                    ],
                }
            ]
        }
    }
}
</script>

<style scoped>
.treeview {
    max-width: 300px;
    margin: auto;
    text-align: left;
}
</style>