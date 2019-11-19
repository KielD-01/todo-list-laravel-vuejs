import Vue from 'vue';
import MainPage from "./components/MainPage";
import store from './store/index';
import vuetify from './plugins/vuetify';

require('./plugins/toastr');
require('./bootstrap');

new Vue({
    store,
    vuetify,
    render: h => h(MainPage),
}).$mount('#application');
