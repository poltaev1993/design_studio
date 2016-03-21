myapp.controller('ReviewSortController', function ($scope, $http, reviewService) {

    var myDataPromise = reviewService.getData();

    var tmpReviews = [];

    myDataPromise.then(function(result) {

        tmpReviews = result;

        $scope.reviews = tmpReviews;

        $scope.sortingLog = [];

        $scope.sortableOptions = {

            stop: function(e, ui) {
                // this callback has the changed model
                var logEntry = tmpReviews.map(function(review){
                    return review.id;
                }).join(',');

                $http.post('/admin/reviews/new-order', { order: logEntry });

            }
        };

    });

});