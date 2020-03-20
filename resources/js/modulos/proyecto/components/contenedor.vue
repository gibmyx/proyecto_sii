<template>
    <div>
    <div class="row  border-bottom white-bg dashboard-header">

            <div class="col-md-4">
                <h2>Ver proyecto</h2>
            </div>
        </div>

        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <!--desde aqui-->

                <div class="col-lg-4">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h3>To-do</h3>
                            <p class="small"><i class="fa fa-hand-o-up"></i> Drag task between list</p>

                            <div class="input-group">
                                <input type="text" placeholder="Add new task. " class="input form-control-sm form-control">
                                <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-plus"></i> Add task</button>
                                </span>
                            </div>

                            <ul class="sortable-list connectList agile-list" id="todo">
                                <li class="warning-element" id="task1">
                                    Simply dummy text of the printing and typesetting industry.
                                    <div class="agile-detail">
                                        <a href="#" class="float-right btn btn-xs btn-white">Tag</a>
                                        <i class="fa fa-clock-o"></i> 12.10.2015
                                    </div>
                                </li>
                                <li class="success-element" id="task2">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default.
                                    <div class="agile-detail">
                                        <a href="#" class="float-right btn btn-xs btn-white">Mark</a>
                                        <i class="fa fa-clock-o"></i> 05.04.2015
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h3>In Progress</h3>
                            <p class="small"><i class="fa fa-hand-o-up"></i> Drag task between list</p>
                            <ul class="sortable-list connectList agile-list" id="inprogress">
                                <li class="success-element" id="task9">
                                    Quisque venenatis ante in porta suscipit.
                                    <div class="agile-detail">
                                        <a href="#" class="float-right btn btn-xs btn-white">Tag</a>
                                        <i class="fa fa-clock-o"></i> 12.10.2015
                                    </div>
                                </li>
                                <li class="success-element" id="task10">
                                    Phasellus sit amet tortor sed enim mollis accumsan in consequat orci.
                                    <div class="agile-detail">
                                        <a href="#" class="float-right btn btn-xs btn-white">Mark</a>
                                        <i class="fa fa-clock-o"></i> 05.04.2015
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h3>Completed</h3>
                            <p class="small"><i class="fa fa-hand-o-up"></i> Drag task between list</p>
                            <ul class="sortable-list connectList agile-list" id="completed">
                                <li class="info-element" id="task16">
                                    Sometimes by accident, sometimes on purpose (injected humour and the like).
                                    <div class="agile-detail">
                                        <a href="#" class="float-right btn btn-xs btn-white">Mark</a>
                                        <i class="fa fa-clock-o"></i> 16.11.2015
                                    </div>
                                </li>
                                <li class="warning-element" id="task17"  @click.prevent="ver_task()">
                                    Ut porttitor augue non sapien mollis accumsan.
                                    Nulla non elit eget lacus elementum viverra.
                                    <div class="agile-detail">
                                        <a href="#" class="float-right btn btn-xs btn-white">Tag</a>
                                        <i class="fa fa-clock-o"></i> 09.12.2015
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--hasta aqui-->
            </div>
        </div>
        <detalle ref="detalle"></detalle>
    </div>
</template>
<script>
import detalle from './../modal/detalle';
export default {
    mounted() {
        this.cargarProyecto();
    },
    components: {
        detalle,
    },
    methods: {
        cargarProyecto(){
            let urlParams = new URLSearchParams(window.location.search);
            console.log(urlParams.get('proyecto_id'));
        },

        ver_task(){
            let context = this;
            context.$refs.detalle.show();
        }
    }

}
</script>
<style>

</style>
