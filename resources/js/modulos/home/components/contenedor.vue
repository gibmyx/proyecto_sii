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
                                    <a href="#" class="btn btn-primary btn-xs">Nuevo  Proyecto</a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row m-b-sm m-t-sm">
                                    <div class="col-md-12">
                                        <div class="input-group"><input type="text" placeholder="Search" class="form-control-sm form-control"> <span class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                    </div>
                                </div>
                                <proyectos></proyectos>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</template>
<script>
import proyectos from "./proyectos";

export default {
    props:{
        data: Object,
    },
    data:function(){
        return {};
    },
    components: {
        proyectos,
	},
    methods:{
    },
    mounted() {
    },
}
</script>
<style>

</style>