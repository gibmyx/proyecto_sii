<template>
    <div id="wrapper">
        <sidebar :nombre="nombre"></sidebar>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <navbar></navbar>
            <contenedor></contenedor>
        </div>
    </div>
</template>

<script>
    import sidebar from "./sidebar";
    import navbar from "./../../../components/navbar";
    import contenedor from "./contenedor";

    export default {
        data:function(){
            return {
                nombre: '',
            };
        },
        mounted() {
            this.ajax_detalle();
        },
        components: {
            sidebar,
            navbar,
            contenedor
        },
        methods: {
             ajax_detalle() {
                let formData = new FormData();
                axios.post('/ajax_get_detalle').then((response) => {
                    this.nombre = response.data.data.usuario;
                }).catch((error) => {

                });
                
            },
        }
    }
</script>
