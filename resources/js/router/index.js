import VueRouter from "vue-router";
import config from "./config";

const routes = [
    { path: "/", redirect: "/component1" },
    {
        path: "/component1",
        component: config.Component1,
        name: "component1"
    },
    {
        path: "/component2",
        component: config.Component2,
        name: "component2"
    },
    {
        path: "/dashboard",
        redirect: "/dashboard/card",
        component: config.Dashboard,
        name: "dashboard",
        children: [
            {
                path: "card",
                component: config.Card,
                name: "card"
            },
            {
                path: "chart",
                component: config.Chart,
                name: "chart"
            },
            {
                path: "table",
                component: config.Table,
                name: "table"
            }
        ]
    },
    {
        path: "/events",
        component: config.Events,
        name: "events"
    }
];

const router = new VueRouter({
    // mode: 'history',
    routes
});

export default router;
