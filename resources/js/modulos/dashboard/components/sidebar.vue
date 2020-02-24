<template>
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="profile-element profile">
                        <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">David Williams</span>
                            <span class="text-muted text-xs block">Art Director</span>
                        </a>
                    </div>
                </li>
                
                <li>
                    <a href="home"><i class="fa fa-diamond"></i> <span class="nav-label">Proyectos</span></a>
                </li>

                <li class="active">
                    <a href="dashboard"><i class="fa fa-diamond"></i> <span class="nav-label">Pelfir</span></a>
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-pie-chart"></i> <span class="nav-label">Correo</span>  </a>
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
    mounted() {
            console.log('desde sidebar')
    },
}
</script>
<style>
 

</style>