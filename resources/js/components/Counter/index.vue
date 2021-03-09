<template>
    <div class="hello text-7xl bg-purple-500">
        <h1>{{ count }}</h1>
        <button @click="addCount">Add</button> <br />
        <button @click="getData">click</button> <br />
        <button @click="getShortUrl">short Url</button> <br />
    </div>
</template>

<script>
// 工具函式
import { mapState, mapMutations } from 'vuex';
export default {
    name: 'counter',
    computed: {
        // count() {
        //   return this.$store.state.count;
        // },
        ...mapState(['count']),
    },
    methods: {
        // addCount() {
        //   this.$store.commit("addCount");
        // },
        ...mapMutations(['addCount']),
        getData() {
            axios
                .get('https://datacenter.taichung.gov.tw/swagger/OpenData/9af00e84-473a-4f3d-99be-b875d8e86256')
                .then(res => {
                    console.log(res.data);
                })
                .catch(err => {
                    console.log(err);
                });
        },
        getShortUrl() {},
    },
};
</script>
