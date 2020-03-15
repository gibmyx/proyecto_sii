<template>
<div class="project-list">
        <table class="table table-hover">
            <tbody v-if="datos.proyectos.length >= 1">
                <tr 
                    v-bind:is="'proyecto'" 
                    v-for="o in datos.proyectos" 
                    :o="o" >
                </tr>
            </tbody>

            <tbody v-else>
                <tr>
                    <td class="project-status">
                    </td>
                    <td class="project-title">
                    </td>
                    <td class="project-completion">
                    <div class="d-flex justify-content-center">
                            <h3>Sin resultado</h3>
                        </div>
                    </td>
                    <td class="project-people">
                    </td>
                    <td class="project-actions">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import proyecto from './proyecto';
    import vacio from "./vacio";
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
            vacio
        },
        methods: {
        }
    }
</script>

<style>
</style>