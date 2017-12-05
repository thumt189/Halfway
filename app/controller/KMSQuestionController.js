app.controller('questionCtrl', function ($scope, questionService) {
    //<editor-fold defaultstate="collapsed" desc="Until model & function">
    function getRequestObject(mode) {
        var object = {};
        object['mode'] = mode;
        return object;
    }

    //</editor-fold>

    $scope.questions = [];

    //<editor-fold defaultstate="collapsed" desc="Service function: get, add, edit, remove">
    $scope.getQuestion = function () {
        var request_data = getRequestObject('get_question');

        questionService.questionAction(request_data).then(function (response) {
            console.log(response);
            //$scope.questions = response.data.data;
        });
    };

    //</editor-fold>

    //<editor-fold defaultstate="collapsed" desc="Init: auto call function first time">
    $scope.getQuestion();
    //</editor-fold>

});