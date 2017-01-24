app.controller('createCtrl', function($scope,$http,$log) {
    var result = {
        results: []
    };
    $scope.t=false;
    $scope.insert=function () {
        $scope.data=result;
        if($scope.name && $scope.type &&  $scope.age) {
            $scope.data.results.push( {
                name:$scope.name,
                type:$scope.type,
                age: $scope.age});


            $http.post('api/create', {
                name: $scope.name,
                type: $scope.type,
                price : $scope.age
            }).then(function(response) {
                $log.info(response);
            });

            $scope.name = ''; $scope.type = '';  $scope.age = '';
        }

    }
    $scope.Delete = function(index){
        $scope.data.results.splice(index,1)
    };
    $scope.Update = function(index){
        var data=$scope.data.results[index];
        $scope.index=index;
        $scope.name=data.name;
        $scope.type=data.type;
        $scope.age=data.age;
        $scope.t=true;
    };
    $scope.tableUpdate=function () {
        var index=$scope.index;
        $update = $scope.data.results[index];
        $update['name']=$scope.name;
        $update['type']=$scope.type;
        $update['age']=$scope.age;
        $scope.t=false;
        $scope.name = ''; $scope.type = '';  $scope.age = '';
    }
});
