<template>
    <div>
    <div class="row  border-bottom white-bg dashboard-header">

            <div class="col-md-4">
                <h2>Ver proyecto</h2>
            </div>
        </div>

        <div class="wrapper wrapper-content  animated fadeInRight">
            <miembros></miembros>
        </div>

<!--        <detalle ref="detalle"></detalle>-->
    </div>
</template>
<script>
// import detalle from './../modal/detalle';
import miembros from './miembros';

export default {
    mounted() {
        this.cargarProyecto();
    },
    components: {
        // detalle,
        miembros,
    },
    methods: {
        cargarProyecto(){
            let urlParams = new URLSearchParams(window.location.search);
            console.log(urlParams.get('proyecto_id'));
        },

        // ver_task(){
        //     let context = this;
        //     context.$refs.detalle.show();
        // }
    }

}
</script>
<style>

</style>
