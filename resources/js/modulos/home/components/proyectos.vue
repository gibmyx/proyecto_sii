<template>
<div class="project-list">
        <table class="table table-hover">
            <tbody>
            <tr v-bind:is="'proyecto'" 
                v-for="o in datos.proyectos" 
                :o="o" ></tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import proyecto from './proyecto';

    export default {
        props:{
            datos: Object,
        },
        data:function(){
            return {
            };
        },
        mounted() {
        },
        components: {
            proyecto,
        },
        methods: {
        }
    }
</script>

<style>
</style>