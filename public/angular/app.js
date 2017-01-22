// var app = angular.module("myApp", ["ngRoute"]);


var app = angular.module('myApp', ["ngRoute"], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});