<template>
    <tr>
        <td class="project-status">
            <span class="label label-primary">{{o.estado}}</span>
        </td>
        <td class="project-title">
            <a @click.prevent="ver_proyecto()" href="#">{{o.nombre}}</a>
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
        <td class="project-actions">
            <a href="#" @click.prevent="ver_proyecto()" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
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
            }
        },
        computed: {
        }
    }
</script>

<style scoped>

</style>
