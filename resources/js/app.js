require("./bootstrap");

import Vue from "vue";
import VueRouter from "vue-router";

import router from "./router";
import App from "./views/app.vue";

Vue.use(VueRouter);

const app = new Vue({
    el: "#app",
    router,
    // store,
    components: { App },
});
