<!DOCTYPE html>
<html lang="en" ng-app="app">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Module quản lý khách hàng - Services</title>
        <script src="include/offlinelib/angular.min.js" type="text/javascript"></script>
        <script src="app/module/app.js" type="text/javascript"></script>
   
        <?php
        $serverPath = $_SERVER["DOCUMENT_ROOT"] . "/Services";
        include "$serverPath/include/partial/header.php";
        ?>

        <style>
            .row{
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div id="wrapper" >
            <!-- Navigation and menu-->
            <?php
            include "$serverPath/include/partial/navbar_menu.php";
            ?>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Module quản lý shopee</h1>
                        </div>
                        <div class="col-md-12">
                            <div class="row alert alert-info">

                                <div class="col-md-6">
                                    <h3 class="text-center">Bộ lọc</h3>
                                    <div class="col-md-6 form-group">
                                        <div class="checkbox">
                                            <label><input type="checkbox" ng-model="showMotherName" checked="showMotherName">Họ tên mẹ</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" ng-model="showPhone">SDT</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" ng-model="showAddress">Địa chỉ</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" ng-model="showBabyName">Họ tên bé</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" ng-model="showDOB">Ngày sinh</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" ng-model="showProductName">Tên SP</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" ng-model="showNote">Ghi chú</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" ng-model="showPrice">Đơn giá</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" ng-model="showQuantity">Số lượng</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" ng-model="showTotal">Thành tiền</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" ng-model="showPromotion">Khuyến mãi</label>
                                        </div>
                                        <h4 class="">Lọc bé có ngày sinh</h4>
                                        <div class="row">
                                            <div class="checkbox-inline">
                                                <label><input type="checkbox" ng-model="filtToday">Hôm nay</label>
                                            </div>
                                            <div class="checkbox-inline">
                                                <label><input type="checkbox" ng-model="filtYesterday">Hôm qua</label>
                                            </div>  
                                        </div>

                                        <div class="row">
                                            <div class="checkbox-inline">
                                                <label><input type="checkbox" ng-model="filtTomorrow">Ngày mai</label>
                                            </div>
                                            <div class="checkbox-inline">
                                                <label><input type="checkbox" value="">Tuần này</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h3>Bộ thống kê </h3>
                                    <p>Tổng dữ liệu: {{(customers|  filter:childCategorySortSearchQuery | filterToday:filtToday | filterTomorrow:filtTomorrow | filterYesterday:filtYesterday).length}}</p>
                                    <p>Số bé SN hôm nay: {{(customers| filterToday:true).length}}</p>
                                </div>


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="pull-right">
                                    <form>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-search"></i></div>
                                                <input type="text" class="form-control" placeholder="Nhập dữ liệu cần tìm kiếm" ng-model="childCategorySortSearchQuery">
                                            </div>      
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <a href="">
                                                #
                                                <span ng-show="sortType == 'id' && !sortReveser" class="fa fa-caret-down"></span>
                                                <span ng-show="sortType == 'id' && sortReveser" class="fa fa-caret-up"></span>
                                            </a>
                                        </th>
                                        <th ng-show="showMotherName">
                                            <a href="">
                                                Họ tên mẹ
                                                <span ng-show="sortType == 'mother_name' && !sortReveser" class="fa fa-caret-down"></span>
                                                <span ng-show="sortType == 'mother_name' && sortReveser" class="fa fa-caret-up"></span>
                                            </a>
                                        </th>
                                        <th ng-show="showPhone">
                                            <a href="">
                                                SDT
                                                <span ng-show="sortType == 'phone' && !sortReveser" class="fa fa-caret-down"></span>
                                                <span ng-show="sortType == 'phone' && sortReveser" class="fa fa-caret-up"></span>
                                            </a>
                                        </th>
                                        <th ng-show="showAddress">
                                            <a href="">
                                                Địa chỉ
                                                <span ng-show="sortType == 'address' && !sortReveser" class="fa fa-caret-down"></span>
                                                <span ng-show="sortType == 'address' && sortReveser" class="fa fa-caret-up"></span>
                                            </a>
                                        </th>
                                        <th ng-show="showBabyName">
                                            <a href="">
                                                Họ tên bé
                                                <span ng-show="sortType == 'baby_name' && !sortReveser" class="fa fa-caret-down"></span>
                                                <span ng-show="sortType == 'baby_name' && sortReveser" class="fa fa-caret-up"></span>
                                            </a>
                                        </th>
                                        <th ng-show="showDOB">
                                            <a href="">
                                                Ngày sinh
                                                <span ng-show="sortType == 'dob' && !sortReveser" class="fa fa-caret-down"></span>
                                                <span ng-show="sortType == 'dob' && sortReveser" class="fa fa-caret-up"></span>
                                            </a>
                                        </th>
                                        <th ng-show="showProductName">
                                            <a href="">
                                                Tên SP
                                                <span ng-show="sortType == 'product_name' && !sortReveser" class="fa fa-caret-down"></span>
                                                <span ng-show="sortType == 'product_name' && sortReveser" class="fa fa-caret-up"></span>
                                            </a>
                                        </th>
                                        <th ng-show="showPrice">
                                            <a href="">
                                                Đơn giá
                                                <span ng-show="sortType == 'price' && !sortReveser" class="fa fa-caret-down"></span>
                                                <span ng-show="sortType == 'price' && sortReveser" class="fa fa-caret-up"></span>
                                            </a>
                                        </th>
                                        <th ng-show="showQuantity">
                                            <a href="">
                                                Số lượng
                                                <span ng-show="sortType == 'quantity' && !sortReveser" class="fa fa-caret-down"></span>
                                                <span ng-show="sortType == 'quantity' && sortReveser" class="fa fa-caret-up"></span>
                                            </a>
                                        </th>
                                        <th ng-model="showTotal">
                                            <a href="">
                                                Thành tiền
                                                <span ng-show="sortType == 'price * quantity' && !sortReveser" class="fa fa-caret-down"></span>
                                                <span ng-show="sortType == 'price * quantity' && sortReveser" class="fa fa-caret-up"></span>
                                            </a>
                                        </th>
                                        <th ng-show="showPromotion">
                                            <a href="">
                                                KM
                                                <span ng-show="sortType == 'promotion' && !sortReveser" class="fa fa-caret-down"></span>
                                                <span ng-show="sortType == 'promotion' && sortReveser" class="fa fa-caret-up"></span>
                                            </a>
                                        </th>
                                        <th ng-show="showNote">
                                            <a href="">
                                                Ghi chú
                                                <span ng-show="sortType == 'note' && !sortReveser" class="fa fa-caret-down"></span>
                                                <span ng-show="sortType == 'note' && sortReveser" class="fa fa-caret-up"></span>
                                            </a>
                                        </th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr ng-repeat="item in (filteredData = customers| orderBy:sortType:childCategorySortReverse | filter:childCategorySortSearchQuery | filterToday:filtToday | filterTomorrow:filtTomorrow | filterYesterday:filtYesterday) ">
                                        <td>{{$index + 1}}</td>
                                        <td ng-show="showMotherName">{{item.mother_name}}</td>
                                        <td ng-show="showPhone">{{item.phone}}</td>
                                        <td ng-show="showAddress">{{item.address}}</td>
                                        <td ng-show="showBabyName">{{item.baby_name}}</td>
                                        <td ng-show="showDOB">{{item.dob}}</td>
                                        <td ng-show="showProductName">{{item.product_name}}</td>
                                        <td ng-show="showPrice">{{item.price| currency:"":0}} ₫</td>
                                        <td ng-show="showQuantity">{{item.quantity}}</td>
                                        <td ng-show="showTotal">{{item.price * item.quantity| currency:"":0}} ₫</td>
                                        <td ng-show="showPromotion">{{item.promotion}}</td>
                                        <td ng-show="showNote">{{item.note}}</td>
                                        <td>
                                            <button  ng-click="load_edit_category(item)"  class="btn btn-circle btn-warning"  data-toggle="modal" data-target="#myModalEdit" >
                                                <i class="fa fa-pencil" data-toggle="tooltip" title="Sửa"></i>
                                            </button>
                                            <button ng-click="load_remove_category(item)" class="btn btn-circle btn-danger"  data-toggle="modal" data-target="#myModalRemove">
                                                <i class="fa fa-trash" data-toggle="tooltip" title="Xóa"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
    </body>
</html>
