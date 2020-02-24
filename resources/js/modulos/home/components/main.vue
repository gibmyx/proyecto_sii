<template>
    <div>
        <sidebar></sidebar>
        <contenido></contenido>
        <contenedor></contenedor>
    </div>
</template>

<script>
    import sidebar from "./sidebar";
    import contenido from "./contenido";
    import contenedor from "./contenedor";

    export default {
        mounted() {
            console.log('desde main')
        },
        components: {
            sidebar,
            contenido,
            contenedor
        }

    }
</script>
<style>
</style>
