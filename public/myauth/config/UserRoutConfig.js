
myApp.config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/home', {
        templateUrl: 'home'
    });

    $routeProvider.when('/mychat', {
        templateUrl: 'mychat'
    });
}]);