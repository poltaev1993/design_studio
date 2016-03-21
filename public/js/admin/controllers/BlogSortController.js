myapp.controller('BlogSortController', function ($scope, $http, blogService) {

    var myDataPromise = blogService.getData();

    var tmpPosts = [];

    myDataPromise.then(function(result) {

        tmpPosts = result;

        $scope.posts = tmpPosts;

        $scope.sortingLog = [];

        $scope.sortableOptions = {

            stop: function(e, ui) {
                // this callback has the changed model
                var logEntry = tmpPosts.map(function(post){
                    return post.id;
                }).join(',');

                $http.post('/admin/blog/new-order', { order: logEntry });

            }
        };

    });

});