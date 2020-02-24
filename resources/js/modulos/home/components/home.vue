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
    import navbar from "./navbar";
    import contenedor from "./contenedor";

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
            sidebar,
            navbar,
            contenedor
        }

    }
</script>
