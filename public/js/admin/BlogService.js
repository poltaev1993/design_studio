myapp.factory('blogService', function($http) {

    var getData = function() {

        return $http.get('/admin/blog/all').then(function(result){
            return result.data;
        });

    };

    return { getData: getData };

});