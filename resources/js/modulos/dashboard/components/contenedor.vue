<template>
    <div>
    <div class="row  border-bottom white-bg dashboard-header">

            <div class="col-md-4">
                <h2>Dashboard</h2>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Proyectos</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{perfil.proyectos}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Tareas completadas</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{perfil.tareas}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Seguidores</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{perfil.tareas}}</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-b-lg m-t-lg">
                <div class="col-md-6">

                    <div class="profile-image">
                        <img :src="'/img/profile/'+perfil.foto" class="rounded-circle circle-border m-b-md" alt="profile">
                    </div>
                    <div class="profile-info">
                        <div class="">
                            <div v-if="modoEdicion">
                                <form>
                                    <div class="form-group">
                                        <input type="text" v-model="perfil.nombre" value="perfil.nombre" class="form-control" placeholder="Example input">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" v-model="perfil.descripcion" value="perfil.descripcion" rows="3"></textarea>
                                    </div>
                                </form>
                            </div>

                            <div v-else>
                                <h3 class="mb-3">
                                    Nombre: {{perfil.nombre}}
                                </h3>
                                <h5 class="mb-3">Correo: {{perfil.email}}</h5>
                                <small v-if="perfil.descripcion != ''">
                                    Descripcion: {{perfil.descripcion}}
                                </small>
                                <small v-else>
                                    No posee descripcion
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <table class="table small m-b-xs" v-show="data.user_id == dashboard_id">
                        <tbody>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm btn-block">Cambiar foto</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button v-if="!modoEdicion" type="button" v-on:click.prevent="edicion" class="btn btn-primary btn-sm btn-block">Editar perfil</button>
                                <button v-else type="button" v-on:click.prevent="guardar_perfil" class="btn btn-primary btn-sm btn-block">guardar</button>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm btn-block">Cambiar contraseña</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                 <div class="ibox">
                        <div class="ibox-content">
                            <h3>Followers and friends</h3>
                            <p class="small">
                                If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing
                            </p>
                            <div class="user-friends">
                                <a href="#"><img alt="image" class="rounded-circle" src="/img/a3.jpg"></a>
                                <a href="#"><img alt="image" class="rounded-circle" src="/img/a1.jpg"></a>
                                <a href="#"><img alt="image" class="rounded-circle" src="/img/a2.jpg"></a>
                                <a href="#"><img alt="image" class="rounded-circle" src="/img/a4.jpg"></a>
                                <a href="#"><img alt="image" class="rounded-circle" src="/img/a5.jpg"></a>
                                <a href="#"><img alt="image" class="rounded-circle" src="/img/a6.jpg"></a>
                                <a href="#"><img alt="image" class="rounded-circle" src="/img/a7.jpg"></a>
                                <a href="#"><img alt="image" class="rounded-circle" src="/img/a8.jpg"></a>
                                <a href="#"><img alt="image" class="rounded-circle" src="/img/a2.jpg"></a>
                                <a href="#"><img alt="image" class="rounded-circle" src="/img/a1.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import datos from './../data/datos';

export default {
    props: ['dashboard_id', 'data'],
    data (){
        return {
            perfil: datos(),
            modoEdicion: false
        }
    },
    mounted() {
        this.get_dashboard();
    },
    methods: {
        get_dashboard(){
            axios.get('/dashboard/ajax_get_user/'+ this.dashboard_id).then((response) => {
                this.perfil = response.data.perfil;
            }).catch((error) => {

            });
        },
        edicion(){
            this.modoEdicion = !this.modoEdicion;
        },
        guardar_perfil(){
            let formData = new FormData();

            formData.append("id", this.perfil.id);
            formData.append("name", this.perfil.nombre);
            formData.append("descripcion", this.perfil.descripcion);
            axios.post('/dashboard/ajax_guardar_perfil', formData).then((response) => {
                this.get_dashboard();
                this.modoEdicion = !this.modoEdicion;
            }).catch((error) => {
            });
        }
    }
}
</script>
<style>

</style>
