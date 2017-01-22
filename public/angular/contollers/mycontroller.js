app.controller('createCtrl', function($scope) {
    var result = {
        results: []
    };
    $scope.t=false;
    $scope.insert=function () {

        $scope.data=result;
        if($scope.firstName && $scope.lastName &&  $scope.age) {

            $scope.data.results.push( {
                firstName:$scope.firstName,
                lastName:$scope.lastName,
                age: $scope.age});
            $scope.firstName = '';
            $scope.lastName = '';
            $scope.age = '';
        }
    }

    $scope.Delete = function(index){

        $scope.data.results.splice(index,1)
    };

    $scope.Update = function(index){

        var data=$scope.data.results[index];
        $scope.index=index;
        $scope.firstName=data.firstName;
        $scope.lastName=data.lastName;
        $scope.age=data.age;
        $scope.t=true;
    };
    $scope.tableUpdate=function () {
        var index=$scope.index;
        $update = $scope.data.results[index];
        $update['firstName']=$scope.firstName;
        $update['lastname']=$scope.lastName;
        $update['age']=$scope.age;
        $scope.t=false;
        $scope.firstName = '';
        $scope.lastName = '';
        $scope.age = '';
    }
});
