@extends('layouts.app')

@section('content')
<head>
    <!--bootstrap-->
    <!--bootstrap-->

    <meta charset="UTF-8">
    <title>Index</title>
    <!--angularjs-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-route.js"></script>
    <script src="{{URL::asset('angular/js/ng-file-upload.js')}}"></script>
    <script src="{{URL::asset('angular/js/ng-file-upload-shim.js')}}"></script>
    <script src="{{URL::asset('angular/app.js')}}"></script>
    <script src="{{URL::asset('angular/contollers/mycontroller.js')}}"></script>
    <!--angularjs-->

</head>
<body ng-app="myApp" style="background-color: cadetblue">
    <div  class='container ' style='width:30%; margin-top:2%; background-color: aquamarine'>



        <div  ng-controller="createCtrl" class="col-xs-24">
            <div class="myform col-xs-12" >
                <center><h2>Name</h2></center> <input class="form-control"  type="text" ng-model="name"><br><br>
                <center><h2>Type </h2></center><input class="form-control"  type="text" ng-model="type"><br><br>
                <center><h2>Price </h2></center><input class="form-control"  type="text" ng-model="age"><br><br>
                <center><h2>Image  <img  ng-src="<%image%>" alt="" width="50px"> </h2></center>
                <input  class="form-control"  type="file" onchange="angular.element(this).scope().Upload(event)">

                <br>

                <center><button ng-click="insert()"  class="btn btn-success " ng-show="!t">Insert</button></center>

                <br><br><br>

            </div>
        </div>

    </div>
</body>
@stop