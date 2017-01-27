myApp.controller('UserCtrl', function($scope,$http,$log) {

    $http.post('getuser', {
    }).then(function(response) {
        $scope.users=response.data;
    });

    // $scope.login=function () {
    //     if($scope.username && $scope.password) {
    //
    //         formData = new FormData();
    //         formData.append('username', $scope.username);
    //         formData.append('password', $scope.password);
    //
    //         $http({
    //             url:'myauth/login',
    //             method: "POST",
    //             data: formData,
    //             headers: {'Content-Type': undefined}
    //
    //         })
    //     }
    // };
});
