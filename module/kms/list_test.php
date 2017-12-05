<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Chọn bài test</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php
        $serverPath = $_SERVER["DOCUMENT_ROOT"] . "/base_php";
        include "$serverPath/include/partial/header.php";
        ?>
    </head>
    <body class="hold-transition skin-blue-light sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper" style="overflow: hidden">

            <?php
            include "$serverPath/include/partial/main_header.php";
            ?>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Danh sách bài test
                    <small>Chọn loại bài test bên dưới</small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Bài test</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info"> Chọn loại bài test </button>
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"> Kinh tế </a></li>
                                        <li><a href="#"> Xã hội </a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>


                            <div class="row" style="margin-top: 50px;">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class = "thumbnail">
                                            <center>
                                                <div class = "thumbnail">
                                                    <img class="img_thumbnail img-responsive" src="../../include/adminLTE/dist/img/JANG0950.JPG">
                                                </div>
                                            </center>
                                            <hr/>
                                            <div class = "caption text-center" >
                                                <div class="text-left">
                                                    <span class="text-info">Số câu: <b>10</b></span><br/>
                                                    <span class="text-danger">Số câu cần đạt: <b>10</b></span><br/>
                                                    <span>Số lượt đã làm: 10</span>

                                                </div>
                                                <div class="btn">
                                                    <button class="btn btn-info">Chọn</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class = "thumbnail">
                                            <center>
                                                <div class = "thumbnail">
                                                    <img class="img_thumbnail img-responsive" src="../../include/adminLTE/dist/img/JANG0950.JPG">
                                                </div>
                                            </center>
                                            <hr/>
                                            <div class = "caption text-center" >
                                                <div class="text-left">
                                                    <span class="text-info">Số câu: <b>10</b></span><br/>
                                                    <span class="text-danger">Số câu cần đạt: <b>10</b></span><br/>
                                                    <span>Số lượt đã làm: 10</span>

                                                </div>
                                                <div class="btn">
                                                    <button class="btn btn-info">Chọn</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class = "thumbnail">
                                            <center>
                                                <div class = "thumbnail">
                                                    <img class="img_thumbnail img-responsive" src="../../include/adminLTE/dist/img/JANG0950.JPG">
                                                </div>
                                            </center>
                                            <hr/>
                                            <div class = "caption text-center" >
                                                <div class="text-left">
                                                    <span class="text-info">Số câu: <b>10</b></span><br/>
                                                    <span class="text-danger">Số câu cần đạt: <b>10</b></span><br/>
                                                    <span>Số lượt đã làm: 10</span>

                                                </div>
                                                <div class="btn">
                                                    <button class="btn btn-info">Chọn</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class = "thumbnail">
                                            <center>
                                                <div class = "thumbnail">
                                                    <img class="img_thumbnail img-responsive" src="../../include/adminLTE/dist/img/JANG0950.JPG">
                                                </div>
                                            </center>
                                            <hr/>
                                            <div class = "caption text-center" >
                                                <div class="text-left">
                                                    <span class="text-info">Số câu: <b>10</b></span><br/>
                                                    <span class="text-danger">Số câu cần đạt: <b>10</b></span><br/>
                                                    <span>Số lượt đã làm: 10</span>

                                                </div>
                                                <div class="btn">
                                                    <button class="btn btn-info">Chọn</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.box-body -->
                    
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
            <!-- /.content-wrapper -->

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <?php
        include "$serverPath/include/partial/footer.php";
        ?>
        <script>
            $(document).ready(function () {
                $('.sidebar-menu').tree()
            })
        </script>

    </body>
</html>
