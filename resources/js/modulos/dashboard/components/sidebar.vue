<template>
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="profile-element profile">
                        <img  height="60px" width="60px" alt="image" class="rounded-circle" :src="'/img/profile/'+data.profile"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" :href="'/dashboard/'+data.user_id">
                            <span class="block m-t-xs font-bold">{{data.nombre}} {{data.apellido}}</span>
                            <span class="text-muted text-xs block">Programador BackEnd</span>
                        </a>
                    </div>
                </li>

                <li>
                    <a href="/home"><i class="fa fa-diamond"></i> <span class="nav-label">Proyectos</span></a>
                </li>

                <li class="active">
                    <a :href="'/dashboard/'+data.user_id"><i class="fa fa-diamond"></i> <span class="nav-label">Perfil</span></a>
                </li>

                <li>
                    <a href="/correo"><i class="fa fa-pie-chart"></i> <span class="nav-label">Correo</span>  </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
                </li>
            </ul>
        </div>
    </nav>
</template>
<script>
export default {
    props:{
        data: Object,
    },
    data:function(){
        return {};
    },
    components: {
	},
    methods:{
    },
    mounted() {
    },
}
</script>
<style>
    nav .sidebar-collapse  .metismenu li {
        font-family: "open sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 13px;
        color: #676a6c;
    }

    nav .sidebar-collapse  .metismenu {
        background-color: transparent;
        border-color: #2f4050;
    }

    .navbar-default {
        background-color: #2f4050;
        height: 100%;
    }

    .profile a{
        text-decoration: none;
    }

    .profile a:hover{
        text-decoration: none;
        color: #ffffff;
    }

</style>
