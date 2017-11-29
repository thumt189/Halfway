app.controller('customerCtrl', function ($scope, customerService) {
    //<editor-fold defaultstate="collapsed" desc="Until model & function">


    $scope.reset_prepare_model = function () {
        // init add model
        $scope.prepare_item = {};
    };
    $scope.customer_id = 1;
    $scope.bill_note = '';

    $scope.load_edit_index = function (index) {
        $scope.current_edit_model['id'] = index.id;
        $scope.current_edit_model['name'] = index.name;
        $scope.current_edit_model['note'] = index.note;
    };

    $scope.load_remove_index = function (index) {
        $scope.current_remove_model['id'] = index.id;
        $scope.current_remove_model['name'] = index.name;
    };
    //</editor-fold>

    $scope.showMotherName = true;

    $scope.filtToday = false;
    $scope.filtTomorrow = false;
    $scope.filtYesterday = false;

    $scope.sortType = '';
    $scope.sortReveser = false;

    $scope.words = [];
    $scope.word = '';
    $scope.def = '';

    $scope.getWord = function () {
        var request_obj = getRequestObject('get_word');
        customerService.customerAction(request_obj).then(function (response) {
            $scope.words = response.data.data;
            console.log(response);
        });
    };

    $scope.addWord = function () {
        var request_obj = getRequestObject('add_word');
        request_obj['word'] = $scope.word;
        request_obj['def'] = $scope.def;
        customerService.customerAction(request_obj).then(function (response) {
            console.log(response);
            $scope.getWord();
            $scope.word = '';
            $scope.def = '';
        });
    };

    //<editor-fold defaultstate="collapsed" desc="Init function">
    $scope.getWord();
    //</editor-fold>


});
