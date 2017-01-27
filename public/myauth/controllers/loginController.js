app.controller('loginCtrl', function($scope,$http,$log) {
    $scope.login=function () {
        if($scope.username && $scope.password) {

            formData = new FormData();
            formData.append('username', $scope.username);
            formData.append('password', $scope.password);

            $http({
                url:'myauth/login',
                method: "POST",
                data: formData,
                headers: {'Content-Type': undefined}

            })
        }
    };
});
