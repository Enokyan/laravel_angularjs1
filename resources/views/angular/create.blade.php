@extends('layouts.app')

@section('content')
<head>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--bootstrap-->

    <meta charset="UTF-8">
    <title>Index</title>

    <!--angularjs-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-route.js"></script>
    <script src="{{URL::asset('angular/app.js')}}"></script>
    <script src="{{URL::asset('angular/contollers/mycontroller.js')}}"></script>
    <!--angularjs-->

</head>
<body ng-app="myApp" style="background-color: cadetblue">
    <div  class='container' style='width:90%; margin-top:2%; background-color: aquamarine'>



        <div  ng-controller="createCtrl">
            <div class="myform" >
                <h2>Name</h2> <input class="form-control"  type="text" ng-model="name"><br><br>
                <h2>Type </h2><input class="form-control"  type="text" ng-model="type"><br><br>
                <h2>Price </h2><input class="form-control"  type="text" ng-model="age"><br><br>
                <h2>Image <img  ng-src="<%image%>" alt="" width="50px"> </h2>
                <input  class="form-control"  type="file" onchange="angular.element(this).scope().Upload(event)">

                <br>

                <button ng-click="insert()"  class="btn btn-default form-control" ng-show="!t">Insert</button>

                <br><br><br>

            </div>
        </div>

    </div>
</body>
@stop