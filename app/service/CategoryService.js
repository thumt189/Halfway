app.factory('categoryService', function ($http, $q, $log) {
    var factory = {};
   
    factory.categoryAction = function (data) {
        return  $http({
            url: "service/tmp_category.php",
            method: "POST",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            data: jQuery.param(data)
        }).then(function (response) {
            return response;
        });
    };

    return factory;
});