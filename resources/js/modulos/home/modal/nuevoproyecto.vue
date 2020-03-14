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
                    <form :id="name + 'form'" class="tab-content" style="height: 120px !important;">
                        
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
                            <button type="button" class="btn btn-primary btn-block" @click="guardarFile"
                                    :disabled="disableSave"><i class="fa fa-save"></i> Guardar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: "nuevoproyecto",

        data() {
            return {
                loading: true,
                disableSave: false,
                files: [],
                resolve: null,
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
            previewFiles(event) {
                this.files = event.target.files[0];
            },
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
            guardarFile() {
                return new Promise((resolve) => {
                    let formData = new FormData();
                    let fileSelector = document.querySelector('#subir_archivo2');
                    let file = fileSelector.files[0];
                    let modal = $('#' + this.name + 'Modal');
                    if (!!file) {
                        formData.append("file", file);
                        formData.append("erptkn", window.tkn);
                        axios.post( phost() + 'colaborador/ajax_importar_especie_automovil',formData ).then((response) => {
                            toastr.success(response.data.message);
                            modal.modal('hide');
                            this.files = [];
                            resolve();

                            this.resolve({
                                value: response.data.automoviles
                            })
                        }).catch((error) => {
                            toastr.error(error.response.data.message);
                            modal.modal('hide');
                        });
                    } else {
                        resolve();
                    }
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