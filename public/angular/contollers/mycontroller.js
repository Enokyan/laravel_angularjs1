app.controller('createCtrl', function($scope,$http,$log,Upload) {
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


            formData = new FormData();
            formData.append('file', $scope.myfile);
            formData.append('name', $scope.name);
            formData.append('type', $scope.type);
            formData.append('price', $scope.age);

            console.log($scope.myfile);
            $http({
                url:'api/create',
                method: "POST",
                data: formData,
                headers: {'Content-Type': undefined},

            })

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
