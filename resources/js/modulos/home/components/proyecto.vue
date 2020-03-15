<template>
    <tr>
        <td class="project-status">
            <span class="label label-primary">{{o.estado}}</span>
        </td>
        <td class="project-title">
            <a :href="'/proyecto?id='+this.o.id">{{o.nombre}}</a>
            <br/>
            <small>{{o.fecha}}</small>
        </td>
        <td class="project-completion">
            <small>Completion with: 28%: {{url_proyecto}}</small>
            <div class="progress progress-mini">
                <div style="width: 28%;" class="progress-bar"></div>
            </div>
        </td>
        <td class="project-people">
            <a href="#"><img alt="image" class="rounded-circle" src="img/a7.jpg"></a>
            <a href="#"><img alt="image" class="rounded-circle" src="img/a6.jpg"></a>
            <a href="#"><img alt="image" class="rounded-circle" src="img/a3.jpg"></a>
        </td>
        <td class="project-people">
             <a :href="'/proyecto?id='+this.o.id" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
        </td>
        <td class="project-actions dropdownAutomovilEspc">
            <a href="#"  @click.prevent="DespDrop" class="btn btn-white btn-sm dropdown-toggle btn-default btn-block"><i class="fa fa-pencil"></i> Edit </a>
            <ul :id="'dropDown_des'+o.id" class="dropdownAutomovilEspc-content" style="display: none;">
                <li class="list-item"><a href="#" id="descargarPlantilla"><i class="fa fa-download"></i> Opciones</a></li>
                <li class="list-item"><a href="#" id="importarDocumento" ><i class="fa fa-upload"></i>Opcioness</a></li>
            </ul>
        </td>
    </tr>
</template>

<script>


    export default {
        name: "proyecto",

        props: ['o'],
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
             DespDrop(){
                let drop  = document.querySelector('#dropDown_des'+this.o.id);
                drop.style.display = drop.style.display === 'none' ? 'block' : 'none';
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
        width: 300px;
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
