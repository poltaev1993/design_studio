myapp.factory('sliderService', function($http) {

    var getData = function() {

        return $http.get('/admin/school/slider/all').then(function(result){
            return result.data;
        });

    };

    return { getData: getData };

});