app.controller('countdownCtrl', function ($scope, $interval) {
    $scope.module_name = "Countdown Module";

    $scope.day = 0;
    $scope.hour = 0;
    $scope.minute = 0;
    $scope.second = 0;
    
    $scope.targetTime = new Date(2017, 11, 02);
    
    
    var getTime = function(){
        var now = new Date();
        var resultDate = $scope.targetTime - now;
        
        var second = Math.floor(resultDate / 1000);
        var minute = Math.floor(second / 60);
        var hour = Math.floor(minute / 60);
        var day = Math.floor(hour / 24);
        
        hour %= 60;
        minute %= 60;
        second %= 60;
        
        $scope.hour = hour < 10 ? ("0" + hour) : hour;
        $scope.minute = minute < 10 ? ("0" + minute) : minute;
        $scope.second = second < 10 ? ("0" + second) : second;
        $scope.day = day;
        
    };
    
   $interval(getTime, 1000);
});
