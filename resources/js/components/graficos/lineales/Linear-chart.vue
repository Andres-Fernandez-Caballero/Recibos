<script>
    import {Line} from 'vue-chartjs'

    export default {
        extends: Line,
        props: {
            chartdata: {
                type: Object,
                default: null,
            },
            options: {
                responsive: true,
            }
        },
        mounted() {
            this.renderChart(this.chartdata, this.options)
        }
    }
</script>
