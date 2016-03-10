myapp.controller('ProjectSortController', function ($scope, $http, projectService) {

    var myDataPromise = projectService.getData();

    var tmpProjects = [];

    myDataPromise.then(function(result) {

        tmpProjects = result;

        $scope.projects = tmpProjects;

        $scope.sortingLog = [];

        $scope.sortableOptions = {

            stop: function(e, ui) {
                // this callback has the changed model
                var logEntry = tmpProjects.map(function(project){
                    return project.id;
                }).join(',');

                $http.post('/admin/projects/new-order', { order: logEntry });

            }
        };

    });

});