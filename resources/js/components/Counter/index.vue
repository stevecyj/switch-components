<template>
    <div class="hello">
        <h1>{{ count }}</h1>
        <button @click="addCount">Add</button>
    </div>
</template>

<script>
// 工具函式
import { mapState, mapMutations } from "vuex";
export default {
    name: "counter",
    computed: {
        // count() {
        //   return this.$store.state.count;
        // },
        ...mapState(["count"])
    },
    methods: {
        // addCount() {
        //   this.$store.commit("addCount");
        // },
        ...mapMutations(["addCount"])
    }
};
</script>
