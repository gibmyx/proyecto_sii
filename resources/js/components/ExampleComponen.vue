<template>
    <div>
        <narbar-component></narbar-component>
        <sidebar-component></sidebar-component>
    </div>
</template>

<script>
    import sidebarComponent from './sidebarComponent';
    import navbarComponent from './navbarComponent';

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
            sidebarComponent,
            navbarComponent
        },
    }
</script>
