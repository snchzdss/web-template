<style>
    .page-header {
        font-weight: 900;
    }

    .info-box {
        background-color: #00296b;
    }

    .info-card {
        background-color: #00296b;
        color: white;
        border: 2px solid white;
        height: 130px;
    }

    .info-icon {
        background-color: #fdc500;
        color: #00296b;
    }

    table tr {
        text-align: center;
    }
</style>

<div class="content-header">
    <div class="container-fluid">
        <div class="card">
            <!--Card-->
            <div class="card-header">
                <h3 class="card-title">Summary</h3>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <!--Card 1-->
                    <div class="col-md-4 col-sm-12" style="height: auto;">
                        <div class="info-box info-card">
                            <span class="info-box-icon info-icon">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text" style="font-size: 30px;">Total Accounts</span>
                                <span class="info-box-number info-number" style="font-size: 33px;">1,234</span>
                            </div>
                        </div>
                    </div>
                    <!--Card 2-->
                    <div class="col-md-4 col-sm-12" style="height: auto;">
                        <div class="info-box info-card">
                            <span class="info-box-icon info-icon">
                                <i class="fas fa-chart-line"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text" style="font-size: 30px;">Admin</span>
                                <span class="info-box-number" style="font-size: 33px;">4567</span>
                            </div>
                        </div>
                    </div>
                    <!--Card 3-->
                    <div class="col-md-4 col-sm-12" style="height: auto;">
                        <div class="info-box info-card">
                            <span class="info-box-icon info-icon">
                                <i class="fas fa-database"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text" style="font-size: 30px;">User</span>
                                <span class="info-box-number" style="font-size: 33px;">8912</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Charts-->
        <div class="row">
            <!--Chart 1 - Bar Chart-->
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Chart 1</div>
                    <div class="card-body">
                        <div id="bar-chart" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
            <!--Chart 2 - Line Chart-->
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Chart 2</div>
                    <div class="card-body">
                        <div id="line-chart" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- /.container-fluid -->

    <script src="https://code.highcharts.com/highcharts.js"></script>
    


</div>