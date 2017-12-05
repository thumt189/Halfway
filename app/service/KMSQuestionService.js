app.factory('questionService', function ($http, $q, $log) {
    var factory = {};
    var domain = "http://localhost/base_php/";
    factory.questionAction = function (data) {
        return  $http({
            url: domain + "services/KMSquestion.php",
            method: "POST",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            data: jQuery.param(data)
        }).then(function (response) {
            return response;
        });
    };

    return factory;
});