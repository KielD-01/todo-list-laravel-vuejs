<template>
    <v-row>
        <v-col md="10">
            <p v-text="item.title"></p>
        </v-col>
        <v-col md="2">
            <v-checkbox v-model="item.completed" @change="update(item)"></v-checkbox>
        </v-col>
    </v-row>
</template>

<script>
    import {mapActions} from "vuex";

    export default {
        name: "Item",
        props : {
            item : {
                type : Object,
                required : true
            }
        },
        methods : {
            ...mapActions({
                update : 'ToDoModule/update'
            })
        }
    }
</script>

<style scoped>

</style>
