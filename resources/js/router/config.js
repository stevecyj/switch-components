export default {
    Component1: () => import(/* webpackChunkName: 'Component1' */ '../components/Component1'),
    Component2: () => import(/* webpackChunkName: 'Component2' */ '../components/Component2'),
    Dashboard: () => import(/* webpackChunkName: 'Dashboard' */ '../views/Dashboard'),
    Events: () => import(/* webpackChunkName: 'Events' */ '../views/Events'),
    Card: () => import(/* webpackChunkName: 'Card' */ '../components/Card'),
    Chart: () => import(/* webpackChunkName: 'Chart' */ '../components/Chart'),
    Table: () => import(/* webpackChunkName: 'Table' */ '../components/Table'),
    Counter: () => import(/* webpackChunkName: 'Counter' */ '../components/Counter'),
};
