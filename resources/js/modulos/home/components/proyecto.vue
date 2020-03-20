<template>
    <tr>
        <td class="project-status">
            <span class="label label-primary">{{o.estado}}</span>
        </td>
        <td class="project-title">
            <a :href="'/proyecto?proyecto_id='+this.o.id">{{o.nombre}}</a>
            <br/>
            <small>{{o.fecha}}</small>
        </td>
        <td class="project-completion">
            <small>Completion with: 28%: </small>
            <div class="progress progress-mini">
                <div style="width: 28%;" class="progress-bar"></div>
            </div>
        </td>
        <td class="project-people">
           <small>Integrantes</small>
           <div class="d-flex justify-content-center">
                <span class="badge badge-pill badge-primary">{{o.miembros}}/{{o.cantidad_personas}}</span>
            </div>
        </td>
        <td class="project-people">
             <a :href="'/proyecto?id='+this.o.id" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
        </td>
        <td class="project-actions dropdownAutomovilEspc" v-if="o.user_id == data.user_id" >
            <a href="#"  @click.prevent="DespDropCreador" class="btn btn-white btn-sm dropdown-toggle btn-default btn-block"><i class="fa fa-pencil"></i> Edit </a>
            <ul :id="'dropDown_desCreador'+o.id" class="dropdownAutomovilEspc-content" style="display: none;">
                <li class="list-item"><a href="#"><i class="fa fa-download"></i> Opciones para el creador</a></li>
                <li class="list-item"><a href="#"><i class="fa fa-upload"></i> Opciones para el creador</a></li>
            </ul>
        </td>
        <td class="project-actions dropdownAutomovilEspc"  v-else  >
            <a href="#"  @click.prevent="DespDropOtros" class="btn btn-white btn-sm dropdown-toggle btn-default btn-block"><i class="fa fa-pencil"></i> Edit </a>
            <ul :id="'dropDown_desOtros'+o.id" class="dropdownAutomovilEspc-content" style="display: none;">
                <li class="list-item"><a href="#" @click.prevent="abandonarProyecto()"><i class="fa fa-download"></i> Abandonar Proyecto</a></li>
            </ul>
        </td>
    </tr>
</template>

<script>


    export default {
        name: "proyecto",

        props:{
            data: Object,
            o: Object,
        },
        data:function(){
            return {
            };
        },
        mounted() {
        },
        components: {
        },
        methods: {
            ver_proyecto: function(){
                window.location.href = "/proyecto?id="+this.o.id
            },
            DespDropCreador(){
                let dropCreador  = document.querySelector('#dropDown_desCreador'+this.o.id);
                dropCreador.style.display = dropCreador.style.display === 'none' ? 'block' : 'none';
            },
            DespDropOtros(){
                let drop  = document.querySelector('#dropDown_desOtros'+this.o.id);
                drop.style.display = drop.style.display === 'none' ? 'block' : 'none';
            },
            abandonarProyecto(){
                let formData = new FormData();
                formData.append("user_id", this.data.user_id);
                formData.append("proyecto_id", this.o.proyecto_id);
                axios.post('/proyecto/ajax_get_proyecto', formData).then((response) => {
                    this.datos.proyectos = response.data.proyectos;
                    this.datos.load = response.data.load;
                }).catch((error) => {

                });
            },
        },
        computed: {
        }
    }
</script>

<style>
    .dropdownAutomovilEspc{
        position: relative;
    }
    .dropdownAutomovilEspc-content {
        border: medium none;
        border-radius: 3px;
        box-shadow: 0 0 3px rgba(86, 96, 117, 0.7);
        float: left;
        font-size: 12px;
        list-style: none outside none;
        position: absolute;
        text-shadow: none;
        top: 91%;
        left: -252px;
        z-index: 1000;
        background-color: white;
        width: 200px;
        padding: 3px;
    }

    .list-item{
        margin: 5px 5px 5px 10px
    }

    .list-item a {
        font-family: "open sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #676a6c;
    }
</style>
