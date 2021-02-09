<template>
    <div class="text-4xl bg-green-500">this is Component 2</div>
</template>
<script>
export default {
    name: 'component2',
    created() {
        // this.$http
        //     .get(`${process.env.MIX_DOG}`)
        //     .then(res => console.log(res.data))
        //     .catch(err => console.log(err));

        this.axios
            .get(`${process.env.MIX_CORS}${process.env.MIX_DOG}`)
            // .get(`${process.env.MIX_PARK}`)
            .then(res => console.log(res.data))
            .catch(err => console.log(err));
    },
};
</script>
