@extends('layouts.app')

@section('content')
<head>

    <!--angularjs-->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-route.js"></script>
        <script src="{{URL::asset('angular/app.js')}}"></script>
        <script src="{{URL::asset('angular/contollers/CarouselController.js')}}"></script>
    <!--angularjs-->

</head>
<body ng-app="myAppCarousel" style="background-color: cadetblue">
    <div  class='container' style='width:90%; margin-top:2%; background-color: aquamarine'>

        <div ng-controller="mycaruselCtrl">
            <span class="glyphicon glyphicon-chevron-left" ng-click="prev()"></span>
            <img ng-src="<%image%>">
            <span class="glyphicon glyphicon-chevron-right" ng-click="next()"></span>
        </div>


    </div>
</body>

@stop