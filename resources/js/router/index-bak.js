import VueRouter from "vue-router";
import config from "./config-bak";

const routes = [
    { path: "/", redirect: "/component1" },
    {
        path: "/component1",
        component: () =>
            import(
                /* webpackChunkName: 'Component1' */ "../components/Component1"
            ),
        name: "component1"
    },
    {
        path: "/component2",
        component: () =>
            import(
                /* webpackChunkName: 'Component2' */ "../components/Component2"
            ),
        name: "component2"
    },
    {
        path: "/dashboard",
        redirect: "/dashboard/card",
        component: () =>
            import(/* webpackChunkName: 'Dashboard' */ "../views/Dashboard"),
        name: "dashboard",
        children: [
            {
                path: "card",
                component: () =>
                    import(/* webpackChunkName: 'Card' */ "../components/Card"),
                name: "card"
            },
            {
                path: "chart",
                component: () =>
                    import(
                        /* webpackChunkName: 'Chart' */ "../components/Chart"
                    ),
                name: "chart"
            },
            {
                path: "table",
                component: () =>
                    import(
                        /* webpackChunkName: 'Table' */ "../components/Table"
                    ),
                name: "table"
            }
        ]
    },
    {
        path: "/events",
        component: config.Events,
        name: "events"
    },
    {
        path: "/counter",
        component: config.Counter,
        name: "counter"
    }
];

const router = new VueRouter({
    // mode: 'history',
    routes
});

export default router;