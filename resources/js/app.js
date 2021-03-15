require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';

import router from './router/index';
import store from './store';

import '../css/font.css';

import App from './views/app.vue';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

// const app = new Vue({
//     el: "#app",
//     router,
//     // store,
//     components: { App },
// });

new Vue({
    router,
    store,
    render: h => h(App),
}).$mount('#app');
