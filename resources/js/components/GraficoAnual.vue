<template>
    <div class="container">
        <linear-chart
            v-if="loaded"
            :chartdata="chartdata"/>
    </div>
</template>

<script>


    import LinearChart from "./graficos/lineales/Linear-chart";

    console.log('hola');
    export default {
        name: 'grafico-anual',
        components: {LinearChart},
        data: () => ({
            loaded: false,
            chartdata: null,

        }),
        async mounted() {
            this.loaded = false;

            await axios
                .get('/api/luz')
                .then(response=>(this.chartdata = response))
                .catch(console.log('error'));

            this.loaded = true;
        }
    }
</script>
