app.config(function($routeProvider) {
    $routeProvider
        .when("/myCarousel", {
            templateUrl : "carousel.html",
        })
        .when("/london", {
            templateUrl : "london.html"
        })
        .when("/profil", {
            templateUrl : "angular1.html"
        });
});
