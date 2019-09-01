<template>
    <div class="g-anual">
        <linear-chart :chart-data="datacollection"></linear-chart>
       <!-- <button class="btn sm-btn btn-info" @click="fillData()">Actualizar</button>-->
    </div>
</template>

<script>
    import LinearChart from "./graficos/lineales/Linear-chart";
    export default {

        components: {LinearChart},
        data() {
            return {
                datacollection: null
            }
        },
        async mounted() {
            this.fillData()
        },
        methods: {
            async fillData() {
                const uriLuz = '/api/luz';
                const uriGas = '/api/gas';

                let rLuz;
                let rGas;
                let meses = [];
                let saldoLuz = [];
                let saldoGas = [];

                await axios.get(uriLuz)
                    .then(function (response) {
                        rLuz=response.data;
                        console.log('datos cargados' + rLuz);
                        for (let i = 0; i < rLuz.length; i++) {
                            meses[i] = rLuz[i].mes;
                            saldoLuz[i] = rLuz[i].saldo;
                        }
                    })
                    .catch(function () {
                        console.log('error de api rest recibos')
                    });
                await axios.get(uriGas)
                    .then(function (response) {
                        rGas=response.data;
                        console.log('datos cargados' + rGas);
                        for (let i = 0; i < rGas.length; i++) {
                            meses[i] = rGas[i].mes;
                            saldoGas[i] = rGas[i].saldo;
                        }
                    })
                    .catch(function () {
                        console.log('error de api rest recibos')
                    });


                this.datacollection = {
                    labels: meses,
                    datasets: [
                        {
                            label: 'recibos de luz',
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: saldoLuz,
                        }, {
                            label: 'Data One',
                            borderColor: "rgba(203,9,46,0.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(203,20,66,0.5)",
                            data: saldoGas
                        }
                    ],
                    options:[{
                        scales:{
                            YAxes:[{

                            }]
                        },
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }
                    }]
                }
            }
        }
    }
</script>
