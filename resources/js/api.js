import axios from 'axios';

export class Api {
    static async getToDo() {
        return axios.get('/api/todo');
    }

    static async store(todo) {
        return axios.post('/api/todo', todo);
    }

    static async update(todo, opts) {
        return axios.patch(`/api/todo/${todo}`, opts);
    }

    static async delete(todo) {
        return axios.delete(`/api/todo/${todo}`);
    }
}
