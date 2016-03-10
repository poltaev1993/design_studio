var app = angular.module('callback', [])
    .config(['$interpolateProvider', function ($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    }]);

function CallbackController($scope, $http) {

    $scope.addCallback = function() {

        var callback = {
            name: $scope.callname,
            phone: $scope.callnumber
        };

        $http.post('/callbacks', callback);

        $("#callback-hide").hide();

        $scope.callbackLeaved = true;

    }

}
