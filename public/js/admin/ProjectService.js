myapp.factory('projectService', function($http) {

    var getData = function() {

        return $http.get('/admin/projects/all').then(function(result){
            return result.data;
        });

    };

    return { getData: getData };

});