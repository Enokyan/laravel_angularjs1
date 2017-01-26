

app.config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/registr', {
        templateUrl: 'registr'
    });
    $routeProvider.when('/login', {
        templateUrl: 'login'
    });

}]);