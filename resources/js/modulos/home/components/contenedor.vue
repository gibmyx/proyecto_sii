<template>
    <div>
    <div class="row  border-bottom white-bg dashboard-header">
            
            <div class="col-md-3">
                <h2>Proyectos</h2>
                <small>You have 42 messages and 6 notifications.</small>
                <ul class="list-group clear-list m-t">
                    <li class="list-group-item fist-item">
                        <span class="float-right">
                            09:00 pm
                        </span>
                        <span class="label label-success">1</span> Please contact me
                    </li>
                    <li class="list-group-item">
                        <span class="float-right">
                            10:16 am
                        </span>
                        <span class="label label-info">2</span> Sign a contract
                    </li>
                    <li class="list-group-item">
                        <span class="float-right">
                            08:22 pm
                        </span>
                        <span class="label label-primary">3</span> Open new shop
                    </li>
                    <li class="list-group-item">
                        <span class="float-right">
                            11:06 pm
                        </span>
                        <span class="label label-default">4</span> Call back to Sylvia
                    </li>
                    <li class="list-group-item">
                        <span class="float-right">
                            12:00 am
                        </span>
                        <span class="label label-primary">5</span> Write a letter to Sandra
                    </li>
                </ul>
            </div>

            <div class="col-md-6">
                <div class="flot-chart dashboard-chart">
                    <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                </div>
                <div class="row text-left">
                    <div class="col">
                        <div class=" m-l-md">
                        <span class="h5 font-bold m-t block">$ 406,100</span>
                        <small class="text-muted m-b block">Sales marketing report</small>
                        </div>
                    </div>
                    <div class="col">
                        <span class="h5 font-bold m-t block">$ 150,401</span>
                        <small class="text-muted m-b block">Annual sales revenue</small>
                    </div>
                    <div class="col">
                        <span class="h5 font-bold m-t block">$ 16,822</span>
                        <small class="text-muted m-b block">Half-year revenue margin</small>
                    </div>

                </div>
            </div>

            <div class="col-md-3">
                <div class="statistic-box">
                <h4>
                    Project Beta progress
                </h4>
                <p>
                    You have two project with not compleated task.
                </p>
                    <div class="row text-center">
                        <div class="col-lg-6">
                            <canvas id="doughnutChart2" width="80" height="80" style="margin: 18px auto 0"></canvas>
                            <h5 >Kolter</h5>
                        </div>
                        <div class="col-lg-6">
                            <canvas id="doughnutChart" width="80" height="80" style="margin: 18px auto 0"></canvas>
                            <h5 >Maxtor</h5>
                        </div>
                    </div>
                    <div class="m-t">
                        <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                    </div>

                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>New data for the report</h5> <span class="label label-primary">IN+</span>
                                    <div class="ibox-tools">
                                        <a class="collapse-link" href="#">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="#" class="dropdown-item">Config option 1</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item">Config option 2</a>
                                            </li>
                                        </ul>
                                        <a class="close-link" href="#">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div>

                                        <div class="float-right text-right">

                                            <span class="bar_dashboard">Hola</span>
                                            <br/>
                                            <small class="font-bold">$ 20 054.43</small>
                                        </div>
                                        <h4>NYS report new data!
                                            <br/>
                                            <small class="m-r"><a href="graph_flot.html"> Check the stock price! </a> </small>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>New data for the report</h5> <span class="label label-primary">IN+</span>
                                    <div class="ibox-tools">
                                        <a class="collapse-link" href="#">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="#" class="dropdown-item">Config option 1</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item">Config option 2</a>
                                            </li>
                                        </ul>
                                        <a class="close-link" href="#">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div>

                                        <div class="float-right text-right">

                                            <span class="bar_dashboard">Hola</span>
                                            <br/>
                                            <small class="font-bold">$ 20 054.43</small>
                                        </div>
                                        <h4>NYS report new data!
                                            <br/>
                                            <small class="m-r"><a href="graph_flot.html"> Check the stock price! </a> </small>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>New data for the report</h5> <span class="label label-primary">IN+</span>
                                    <div class="ibox-tools">
                                        <a class="collapse-link" href="#">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="#" class="dropdown-item">Config option 1</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item">Config option 2</a>
                                            </li>
                                        </ul>
                                        <a class="close-link" href="#">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div>

                                        <div class="float-right text-right">

                                            <span class="bar_dashboard">Hola</span>
                                            <br/>
                                            <small class="font-bold">$ 20 054.43</small>
                                        </div>
                                        <h4>NYS report new data!
                                            <br/>
                                            <small class="m-r"><a href="graph_flot.html"> Check the stock price! </a> </small>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    mounted() {
    },
}
</script>
<style>

</style>