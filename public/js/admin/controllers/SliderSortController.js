myapp.controller('SliderSortController', function ($scope, $http, sliderService) {

    var myDataPromise = sliderService.getData();

    var tmpSlider = [];

    myDataPromise.then(function(result) {

        tmpSlider = result;

        $scope.slider = tmpSlider;

        $scope.sortingLog = [];

        $scope.sortableOptions = {

            stop: function(e, ui) {
                // this callback has the changed model
                var logEntry = tmpSlider.map(function(review){
                    return review.id;
                }).join(',');

                $http.post('/admin/school/slider/new-order', { order: logEntry });

            }
        };

    });

});