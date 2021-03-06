(function() {
    var postControllers = angular.module('postControllers', []);

    postControllers.controller('PostController',
        function ($scope, $http) {
            $http({
                method: 'GET',
                url: 'http://127.0.0.1:8000/api/posts?apikey=tester'
            }).then(function successCallback(response) {
                $scope.posts = response.data;
            }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
            });
        }
    );

    postControllers.controller('PostDetailController',
        function ($routeParams, $scope, $http) {
            var id = $routeParams.id;
            var route = 'http://127.0.0.1:8000/api/posts/' + id + '?apikey=tester';
            $scope.prdel = $routeParams;
            $http({
                method: 'GET',
                url: route
            }).then(function successCallback(response) {
                $scope.post = response.data;
            }, function errorCallback(response) {
                $scope.post.title = response.status;
                // called asynchronously if an error occurs
                // or server returns response with an error status.
            });
        }
    );
}) ();

