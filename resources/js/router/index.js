import VueRouter from "vue-router";
import config from "./config";

const routes = [
    { path: "/", redirect: "/component1" },
    {
        path: "/component1",
        component: config.Component1,
        name: "Component1"
    },
    {
        path: "/component2",
        component: config.Component2,
        name: "Component2"
    }
];

const router = new VueRouter({
    // mode: 'history',
    routes
});

export default router;
