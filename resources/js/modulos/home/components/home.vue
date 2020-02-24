<template>
    <div id="wrapper">
        <sidebar></sidebar>
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
                 console.log('hola');
                let formData = new FormData();
                axios.post('http://localhost/trello_uni/public/home/ajax_get_detalle').then((response) => {

                }).catch((error) => {

                });
                
            },
        }
    }
</script>
