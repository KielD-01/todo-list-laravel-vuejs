<template>
    <v-content>
        <v-container>
            <Create></Create>
            <List :items="items"></List>
        </v-container>
    </v-content>
</template>

<script>
    import List from "./todo/List";
    import Create from "./todo/Create";
    import {mapActions, mapGetters} from "vuex";

    export default {
        name: "MainPage",
        components: {
            Create,
            List
        },
        methods: {
            ...mapActions({
                getToDoItems: 'ToDoModule/getToDoItems'
            })
        },
        computed: {
            ...mapGetters({
                items: 'ToDoModule/items'
            })
        },
        mounted() {
            this.getToDoItems();
        }
    }
</script>

<style scoped>

</style>
