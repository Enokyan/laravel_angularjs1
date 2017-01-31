myApp.controller('UserCtrl', function($scope,$http,$log) {

    $http.post('getuser', {
    }).then(function(response) {
        $scope.users=response.data;
    });

});
