import {Api} from "../../api";

const namespaced = true;

const state = {
    items: []
};

const actions = {
    getToDoItems({commit}) {
        Api.getToDo()
            .then(result => commit('SET_ITEMS', result.data.data.items))
            .catch(() => this._vm.$toastr.error('ToDo List', 'Failed to fetch list'));
    },
    store({dispatch}, todo) {
        Api.store(todo)
            .then(() => {
                this._vm.$toastr.success('ToDo List', 'ToDo List Item has been successfully saved!');
                dispatch('getToDoItems')
            })
            .catch(() => this._vm.$toastr.error('ToDo List', 'Failed to save'));
    },
    update({dispatch}, item) {
        Api.update(item.id, item)
            .then(() => {
                this._vm.$toastr.success('ToDo List', 'ToDo List Item has been successfully updated!');
                dispatch('getToDoItems');
            })
            .catch(() => this._vm.$toastr.error('ToDo List', 'Failed to update'));
    },
    delete({dispatch}, id) {
        Api.delete(id)
            .then(() => dispatch('getToDoItems'))
            .catch(() => this._vm.$toastr.error('ToDo List', 'Failed to delete'));
    }
};

const mutations = {
    SET_ITEMS(state, items = []) {
        state.items = items;
    },
    ADD_ITEM(state, item = {}) {
        state.items.push(item);
    }
};

const getters = {
    items: state => state.items
};

export default {
    namespaced,
    state,
    actions,
    mutations,
    getters
}
