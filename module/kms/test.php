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
        <link href="../../include/custom/css/custom.css" rel="stylesheet" type="text/css"/>
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
                    Bài kiểm tra Oracle
                    <small>Bài làm trong 50'</small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Câu hỏi trắc nghiệm</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="row">
                                <div class="container-fluid">
                                    <!--<div class="side-body">-->
                                    <div class="row">

                                        <div class="col-md-10">
                                            <ul class="pagination">
                                                <li class="disabled"><a href="#">«</a></li>
                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li><a href="#">»</a></li>
                                            </ul>
                                        </div>

                                        <div id="countdowns" class="col-md-2">
                                            <div id="clockdiv">
                                                <div>
                                                    <span id="minutes"></span>
                                                </div>
                                                <div>
                                                    <span id="seconds"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class = "row">
                                        <div class = "col-md-12">
                                            <div class = "panel panel-info">
                                                <div class = "panel-heading">
                                                    <b>Câu 1: 
                                                        Có nhiều mẹ băn khoăn về những khó khăn trong việc cho con 
                                                        bú trong vài ngày đầu sau khi sinh và sợ rằng mình không đủ sữa cho con. 
                                                        Làm thế nào để giúp họ?
                                                    </b>
                                                </div>
                                                <div class = "panel-body center">
                                                    <form>
                                                        <div class = "col-md-7">
                                                            <div class = "input-group ">
                                                                <label class = "input-group-addon">A: </label>
                                                                <label class="col-md-11 form-control"> Câu trả lời A </label>
                                                            </div>
                                                            <br/>
                                                            <div class = "input-group ">
                                                                <label class = "input-group-addon">C: </label>
                                                                <label class="col-md-11 form-control"> Câu trả lời C </label>
                                                            </div>
                                                            <br/>
                                                            <div class = "input-group ">
                                                                <label class = "input-group-addon">C: </label>
                                                                <label class="col-md-11 form-control"> Câu trả lời C </label>
                                                            </div>
                                                            <br/>
                                                            <div class = "input-group ">
                                                                <label class = "input-group-addon">C: </label>
                                                                <label class="col-md-11 form-control"> Câu trả lời C </label>
                                                            </div>
                                                        </div>
                                                        <div class = "col-md-4 col-md-offset-1">
                                                            <img src = "../../include/adminLTE/dist/img/JANG0950.JPG" class = "img-thumbnall img-responsive">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button class="col-md-1 col-md-offset-11 btn btn-danger">Tạm dừng</button>
                                    </div>

                                    <!--</div>-->
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
        <script src="../../include/custom/js/custom.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('.sidebar-menu').tree()
            })
        </script>

    </body>
</html>
