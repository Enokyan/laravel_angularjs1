app.controller('registrCtrl', function($scope,$http) {

    $scope.registr=function () {
        if($scope.username && $scope.email &&  $scope.password) {

            formData = new FormData();
            formData.append('username', $scope.username);
            formData.append('email', $scope.email);
            formData.append('password', $scope.password);

            $http({
                url:'myauth/registr',
                method: "POST",
                data: formData,
                headers: {'Content-Type': undefined}

            }).then(function(response) {
                if(response.data.success){
                    document.location.assign("Location: http://lar_angul.dev/api/myuser#/home")
                }
            });

        }
    };
});
