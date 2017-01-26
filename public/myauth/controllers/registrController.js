app.controller('registrCtrl', function($scope,$http) {

    $scope.registr=function () {
        console.log(123123)
        if($scope.username && $scope.firstname && $scope.lastname && $scope.email &&  $scope.password) {

            formData = new FormData();
            formData.append('username', $scope.username);
            formData.append('firstname', $scope.firstname);
            formData.append('lastname', $scope.lastname);
            formData.append('email', $scope.email);
            formData.append('password', $scope.password);

            console.log($scope.myfile);
            $http({
                url:'myauth/registr',
                method: "POST",
                data: formData,
                headers: {'Content-Type': undefined}

            })
        }
    };
});
