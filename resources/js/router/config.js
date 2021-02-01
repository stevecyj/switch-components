// const routes = [
//     { path: "/", redirect: "/component1" },
//     {
//         path: "/component1",
//         component: () =>
//             import(
//                 /* webpackChunkName: 'Component1' */ "../components/Component1"
//             ),
//         name: "Component1"
//     },
//     {
//         path: "/component2",
//         component: () =>
//             import(
//                 /* webpackChunkName: 'Component2' */ "../components/Component2"
//             ),
//         name: "Component2"
//     }
// ];

export default {
    Component1: () =>
        import(/* webpackChunkName: 'Component1' */ "../components/Component1"),
    Component2: () =>
        import(/* webpackChunkName: 'Component2' */ "../components/Component2"),
    Dashboard: () =>
        import(/* webpackChunkName: 'Dashboard' */ "../views/Dashboard")
};
