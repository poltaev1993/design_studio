var app = angular.module('instudio', [])
    .config(['$interpolateProvider', function ($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
}]);

function CommentsController($scope, $http) {

    $http.get('/comments/' + $scope.id).success(function(comments) {
        $scope.comments = comments;
    });

    $scope.addComment = function() {

        var comment = {
            project_id: $scope.id,
            author: $scope.username ? $scope.username : 'admin',
            body: $scope.commentbody
        };

        $scope.comments.unshift(comment);

        $http.post('/comments', comment);

        $scope.username = '';
        $scope.commentbody = '';

        var count = 0;
        angular.forEach($scope.comments, function() {
            count++;
        });

        $(".comments-icon").html(count);
    }

}

function LikesController($scope, $http) {

    $scope.checked = false;

    $scope.like = function() {

        if ( ! $scope.checked )
        {
            var like = {
                project_id: $scope.id
            };

            $http.post('/liked', like);

            var likesCount = $("#likes-count");
            var likes = parseInt(likesCount.html());

            likesCount.html(++likes);

            $scope.checked = true;
        }

    }

}