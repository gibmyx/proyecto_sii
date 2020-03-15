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
                            <proyectos   :datos="datos" v-if="datos.load.length >= 1"></proyectos>
                            <div class="d-flex justify-content-center" v-else>
                                <div class="ibox-content">
                                    <div class="spiner-example">
                                        <div class="sk-spinner sk-spinner-wave">
                                            <div class="sk-rect1"></div>
                                            <div class="sk-rect2"></div>
                                            <div class="sk-rect3"></div>
                                            <div class="sk-rect4"></div>
                                            <div class="sk-rect5"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nuevoproyecto ref="nuevoproyecto"  v-on:llamarFuncion="recargar"></nuevoproyecto>
    </div>
</template>
<script>
import proyectos from "./proyectos";
import datos from "./../data/data";
import nuevoproyecto from "./../modal/nuevoproyecto";
import toastr from 'toastr';

export default {
    props:{
        data: Object,
    },
    data: function(){
        return {
            datos: datos(),
        };
    },
    components: {
        proyectos,
        nuevoproyecto,
    },
    watch: {
    },
    methods:{
        NewProject(){
            let context = this;
            context.$refs.nuevoproyecto.show();
        },
        recargar(){
            this.datos.load = [];
            axios.post('/proyecto/ajax_get_proyecto').then((response) => {
                this.datos.proyectos = response.data.proyectos;
                this.datos.load = response.data.load;
            }).catch((error) => {

            });           
        },
    },
    mounted() {
        this.showLoading = false;
        this.recargar();
    },
}
</script>
<style>

</style>