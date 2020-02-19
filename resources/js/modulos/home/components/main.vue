<template>
    <div>
        <sidebar></sidebar>
        <contenido></contenido>
    </div>
</template>

<script>
    import sidebar from "./sidebar";
    import contenido from "./contenido";

    export default {
        mounted() {
            console.log('desde main')
        },
        components: {
            sidebar,
            contenido,
        }

    }
</script>
<style>
</style>
