<template>
    <div>
        <div class="row  border-bottom white-bg dashboard-header">
            
           <div class="col-sm-4">
                <h2>Lista de Proyectos</h2>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Todos los proyectos asignados a esta cuenta.</h5>
                            <div class="ibox-tools">
                                <a  @click.prevent="NewProject()" class="btn btn-primary btn-xs">Nuevo  Proyecto</a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row m-b-sm m-t-sm">
                                <div class="col-md-12">
                                    <div class="input-group"><input type="text" placeholder="Search" class="form-control-sm form-control"> <span class="input-group-btn">
                                        <button type="button" @click.prevent="recargar()" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                </div>
                            </div>
                            <proyectos :datos="datos"></proyectos>
                            <cargando></cargando>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nuevoproyecto ref="nuevoproyecto"></nuevoproyecto>
    </div>
</template>
<script>
import proyectos from "./proyectos";
import cargando from "./cargando";
import datos from "./../data/data";
import nuevoproyecto from "./../modal/nuevoproyecto"

export default {
    props:{
        data: Object,
    },
    data: function(){
        return {
            datos: datos(),
            showComponent: 'no',
            showLoading: 'no',
        };
    },
    components: {
        proyectos,
        nuevoproyecto,
        cargando
    },
    watch: {
            showComponent (val) {
                this.showComponent = val;
            },
            showLoading (val) {
                this.showLoading = val;
            },
    },
    methods:{
        NewProject(){
            let context = this;

            context.$refs.nuevoproyecto.show().then((response) => {
                
            });
        },
        recargar(){
            this.showComponent = 'no';
            this.showLoading = 'si';
            setTimeout(function(){ 
                this.showComponent = 'si';
                this.showLoading = 'no';
            }, 3000);
        }
    },
    mounted() {
        this.recargar();
    },
}
</script>
<style>

</style>