myapp.factory('reviewService', function($http) {

    var getData = function() {

        return $http.get('/admin/reviews/all').then(function(result){
            return result.data;
        });

    };

    return { getData: getData };

});