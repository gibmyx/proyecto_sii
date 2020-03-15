<template>
    <div class="modal inmodal" :id="name + 'Modal'" tabindex="-1" role="dialog" :aria-labelledby="name + 'ModalLabel'">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Crear Nuevo Proyecto</h4>
                </div>
                <div class="modal-body">
                    <form :id="name + 'form'" class="tab-content" style="height: 300px !important;">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre del proyecto" v-model="nombre">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <select class="form-control" id="cantidad_persibas" v-model="cantidad_personas">
                                    <option>5</option>
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                    <option>50</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="descripcion" rows="3" v-model="descripcion"></textarea>
                            </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex">
                        <div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4 ml-auto">
                            <button type="button" class="btn btn-w-m btn-default btn-block" data-dismiss="modal">
                                <i class="fa fa-ban"></i> Cancelar
                            </button>
                        </div>
                        <div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <button type="button" class="btn btn-primary btn-block" @click="guardar"
                                ><i class="fa fa-save"></i> Guardar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import toastr from 'toastr';

    export default {
        name: "nuevoproyecto",

        data() {
            return {
                nombre: '',
                cantidad_personas: '',
                descripcion: '',
                name: 'nuevoproyecto'

            };
        },
        mounted() {
        },
        computed: {

        },
        watch: {

        },
        methods: {
            hide() {
                let modal = $('#' + this.name + 'Modal');
                modal.modal('hide');
            },
            show() {
                let modal = $('#' + this.name + 'Modal');
                return new Promise((resolve) => {
                    this.resolve = resolve;
                    modal.modal('show');
                });
            },
            guardar() {
                return new Promise((resolve) => {
                    let formData = new FormData();
                    
                    formData.append("nombre", this.nombre);
                    formData.append("descripcion", this.descripcion);
                    formData.append("cantidad_personas", this.cantidad_personas)
                    this.hide();

                    axios.post('proyecto/store',formData ).then((response) => {
                        toastr.success("Se a creado el proyecto");
                        this.nombre = '';
                        this.cantidad_personas = '';
                        this.descripcion = '';
                        this.$emit('llamarFuncion');
                    }).catch((error) => {
                        //toastr.error(error.response.data.message);

                    });
                });
            },
        },

    }
</script>
<style>
    .select2-container--open {
        z-index: 999999 !important;
    }
</style>