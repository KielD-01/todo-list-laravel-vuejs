import Vue from 'vue';
import Vuex from 'vuex';
import {state} from "./state";
import {actions} from "./actions";
import {mutations} from "./mutations";
import {getters} from "./getters";

/** Modules **/
import ToDoModule from "./modules/ToDoModule";

Vue.use(Vuex);

export default new Vuex.Store({
    state,
    actions,
    mutations,
    getters,
    modules: {
        ToDoModule
    }
})
