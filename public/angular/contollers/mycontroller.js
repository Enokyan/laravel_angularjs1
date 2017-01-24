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

            // $http.post('api/create', {
            //     name: $scope.name,
            //     type: $scope.type,
            //     price : $scope.age
            // })
            $http.post('api/create', {
                file: $scope.myfile,
                name: $scope.name,
                type: $scope.type,
                price : $scope.age
            })
            console.log($scope.myfile);
            $scope.name = ''; $scope.type = '';  $scope.age = '';
        }
    };
    $scope.Upload = function(event){
        if(event.target.files[0])  {

            var files = event.target.files[0];
                $scope.myfile=files;

                reader= new FileReader();
                reader.onload = function(e){
                    $scope.image=e.target.result;
                    $scope.$apply();
            };
            reader.readAsDataURL(files);
            $scope.fileEvent = event;        }
        else
            $scope.step="";

    };


});
