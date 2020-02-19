<template>
    <div>
        <sidebar></sidebar>
    </div>
</template>

<script>
    import sidebar from "./sidebar";

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
            sidebar,
        }

    }
</script>
