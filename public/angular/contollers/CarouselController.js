app.controller('mycaruselCtrl',function($scope,$interval){
    $scope.data =[
        {
            image: '/images/download1.jpg'
        },
        {
            image: '/images/download2.jpg'
        },
        {
            image: '/images/download3.jpg'
        },
        {
            image: '/images/download4.jpg'
        }
    ]

    var count=0;
    $scope.image = $scope.data[count].image;
    $scope.next = function () {
        if(count==$scope.data.length - 1) count=-1;
        $scope.image = $scope.data[++count].image;

    }

    $scope.prev = function () {
        if(count==0) count = $scope.data.length;
        $scope.image = $scope.data[--count].image;
    }
    $interval($scope.next,3500)
});