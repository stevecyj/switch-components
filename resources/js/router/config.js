const routes = [
    { path: "/", redirect: "/component1" },
    {
        path: "/component1",
        component: () =>
            import(
                /* webpackChunkName: 'Component1' */ "../components/Component1"
            ),
        name: "Component1"
    },
    {
        path: "/component2",
        component: () =>
            import(
                /* webpackChunkName: 'Component2' */ "../components/Component2"
            ),
        name: "Component2"
    }
];

export default routes;
