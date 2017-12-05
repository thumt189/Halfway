<!DOCTYPE html>
<html ng-app="app">
    <head ng-controller="kmsCtrl">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{page_title}}</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php
        $serverPath = "{$_SERVER["DOCUMENT_ROOT"]}/base_php";
        require "$serverPath/include/partial/header.php";
        ?>
    </head>
    <body class="hold-transition skin-blue-light sidebar-mini" ng-controller="questionCtrl">
        <!-- Site wrapper -->
        <div class="wrapper">

            <?php
            include "$serverPath/include/partial/main_header.php";
            ?>

            <?php
            include "$serverPath/include/partial/menu.php";
            ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        {{page_header}}
                        <small>Câu hỏi trắc nghiệm</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Danh sách câu hỏi</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Danh sách</h3>

                                            <div class="box-tools">
                                                <div class="input-group input-group-sm" style="width: 150px;">
                                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                                    <div class="input-group-btn">
                                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body table-responsive no-padding">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Danh mục</th>
                                                        <th>Nội dung câu</th>
                                                        <th>Kiểu câu hỏi</th>
                                                        <th>Ảnh</th>                                                        <th>Ảnh</th>
                                                        <th>Kiểu câu trả lời</th>
                                                        <th>Ghi chú</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr  ng-repeat="item in questions">
                                                        <td>{{$index + 1}}</td>
                                                        <td>{{item.cat_id}}</td>
                                                        <td>{{item.content}}</td>
                                                        <td><span class="label label-success">{{item.pic_type}}</span></td>
                                                        <td>{{item.pic_link}}</td>
                                                        <td>{{item.answer_type}}</td>
                                                        <td>{{item.note}}</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            Xem
                        </div>
                        <!-- /.box-footer-->
                    </div>
                    <!-- /.box -->

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.0
                </div>
                <strong>Copyright &copy; 2014-2016 <a href="">Thumt</a>.</strong> All rights
                reserved.
            </footer>

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <?php
        include "$serverPath/include/partial/footer.php";
        ?>
        <script src="../../app/service/KMSQuestionService.js" type="text/javascript"></script>
        <script src="../../app/controller/KMSController.js" type="text/javascript"></script>

        <script src="../../app/controller/KMSQuestionController.js" type="text/javascript"></script>
        <script>
                                                            $(document).ready(function () {
                                                            $('.sidebar-menu').tree()
                                                            })
        </script>

    </body>
</html>
