<template>
    <v-card class="d-inline-block mx-auto" md="4" offset-md="4">
        <v-container>
            <v-row>
                <v-col md="8">
                    <v-text-field
                        v-model="form.title"
                        label="ToDo Item Title"
                        required
                    ></v-text-field>
                </v-col>
                <v-col md="2" class="align-center d-flex justify-center">
                    <v-checkbox
                        v-model="form.completed"
                        label="Completed"
                        required
                    ></v-checkbox>
                </v-col>
                <v-col md="2">
                    <v-btn color="primary" @click="save()">Save</v-btn>
                </v-col>
            </v-row>
        </v-container>
    </v-card>
</template>

<script>
    import {mapActions} from "vuex";

    export default {
        name: "Create",
        data: () => ({
            form: {
                title: '',
                completed: false
            },
        }),
        methods: {
            resetForm() {
                this.form = {
                    title: '',
                    completed: false
                };
            },
            save() {
                this.$toastr.info('Storing', 'Trying to store new ToDo item');
                this.store(this.form);
                this.resetForm();
            },
            ...mapActions({
                store: 'ToDoModule/store'
            })
        }
    }
</script>

<style scoped>

</style>
