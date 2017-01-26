app.controller('loginCtrl', function($scope,$http,$log) {
console.log('asd')
    $scope.login=function () {
        $scope.data=result;
        if($scope.username && $scope.password) {

            formData = new FormData();
            formData.append('username', $scope.username);
            formData.append('passwo rd', $scope.password);

            console.log($scope.myfile);
            $http({
                url:'myauth/login',
                method: "POST",
                data: formData,
                headers: {'Content-Type': undefined}

            })
        }
    };
});
