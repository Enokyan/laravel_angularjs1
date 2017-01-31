CarouselApp.controller('mycaruselCtrl',function($scope,$interval){
    $scope.data =[
        {
            image: '/img/1480928462.jpg'
        },
        {
            image: '/img/1480933838.jpg'
        },
        {
            image: '/img/Chrysanthemum.jpg'
        },
        {
            image: '/img/Desert.jpg'
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