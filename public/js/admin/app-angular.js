var myapp = angular.module('sort', ['ui.sortable'])
    .config(['$interpolateProvider', function ($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    }]);