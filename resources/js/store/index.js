import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
    strict: true,
    state: {
        count: 0,
        username: "",
        list: []
    },
    actions: {},
    mutations: {
        addCount(state) {
            // Vue.set(this.state, "count", 0);
            state.count += 1;
        }
    }
});
