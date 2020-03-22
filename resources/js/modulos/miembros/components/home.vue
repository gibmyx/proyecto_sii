<template>
    <div id="wrapper">
        <sidebar :data="data" :proyecto_id="proyecto_id"></sidebar>
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
        props: ['proyecto_id'],
        data(){
            return {
                data: {
                    nombre: '',
                    apellido: '',
                    sex: '',
                    profile: '',
                    user_id: '',
                }


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
                    this.data.nombre = response.data.data.usuario;
                    this.data.apellido = response.data.data.apellido;
                    this.data.sex = response.data.data.sex;
                    this.data.profile = response.data.data.profile;
                    this.data.user_id = response.data.data.user_id;
                }).catch((error) => {

                });

            },
        }
    }
</script>

<style>
    #wrapper {
        background-color: #2f4050;
    }
</style>
