<template>
    <v-row>
        <v-col md="4" offset-md="4" v-if="items.length">
            <Item :item="item" v-for="item in items" :key="`item_${item.id}`"></Item>
        </v-col>
        <v-col md="4" offset-md="4" v-else class="align-center">
            <p>No ToDo Items has been created for now</p>
        </v-col>
    </v-row>
</template>

<script>
    import Item from "./Item";

    export default {
        name: "List",
        props: {
            items: {
                type: Array,
                required: false,
                default: []
            }
        },
        components: {
            Item
        }
    }
</script>

<style scoped>

</style>
