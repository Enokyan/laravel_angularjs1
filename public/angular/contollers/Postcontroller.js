appPost.controller('PostCtrl', function($scope,$http,$log) {

    $http.post('selectPost', {
    }).then(function(response) {
        $scope.posts=response.data;
    });


    $scope.DeletePost = function(id){
        $http.post('delete', {
            id: id
        })
        var articleRow = angular.element(document.querySelector('tr[id="'+id+'"]'));
        articleRow.remove();
    };

    $scope.UpdatePost = function(index,id){
        var data=$scope.posts[index];
        $scope.index=index;
        $scope.id=id;
        $scope.name=data.name;
        $scope.type=data.type;
        $scope.price=data.price;
    };
    $scope.TableUpdate=function () {
        var index=$scope.index;
        $http.post('UpdatePost', {
            id  : $scope.id,
            name: $scope.name,
            type: $scope.type,
            price : $scope.price
        })
        $update = $scope.posts[index];
        $update['name']=$scope.name;
        $update['type']=$scope.type;
        $update['price']=$scope.price;
        $scope.name = ''; $scope.type = '';  $scope.price = '';
    }
});
