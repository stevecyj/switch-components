<template>
    <div class="hello text-7xl bg-purple-500">
        <h1>{{ count }}</h1>
        <button @click="addCount" class="canterbury">Add</button> <br />
        <button @click="getData">UbikeOpenData(direct)</button> <br />
        <button @click="getShortUrl">short Url</button> <br />
        <button @click="getUbikeOpenData">UbikeOpenData</button> <br />
        <button @click="TestResellerRoute">TestResellerRoute</button> <br />
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
            let url = 'https://datacenter.taichung.gov.tw/swagger/OpenData/9af00e84-473a-4f3d-99be-b875d8e86256';
            axios
                .get(url)
                .then(res => {
                    console.log(res.data);
                })
                .catch(err => {
                    console.log(err);
                });
        },
        getShortUrl() {
            let url = '/~steve_tsao/switch-components/public/api/getshorturl/aa/shared-url';
            axios
                .get(url)
                .then(res => {
                    console.log(res.data);
                })
                .catch(err => {
                    console.log(err);
                });
        },
        getUbikeOpenData() {
            let url = '/~steve_tsao/switch-components/public/api/ubike-open-data';
            axios
                .get(url)
                .then(res => {
                    console.log(res.data);
                })
                .catch(err => {
                    console.log(err);
                });
        },
        TestResellerRoute() {
            let url = '/~steve_tsao/switch-components/public/reseller/test';
            axios
                .get(url)
                .then(res => {
                    console.log(res.data);
                })
                .catch(err => {
                    console.log(err);
                });
        },
    },
};
</script>

<style scoped>
@import '../../../css/font.css';
.canterbury {
    font-family: 'canterbury';
}
</style>
