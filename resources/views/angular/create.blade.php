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
            <div class="myform" style="float:left;background-color: chartreuse;width: 48%">
                <h2>Name</h2> <input class="form-control"  type="text" ng-model="name"><br><br>
                <h2>Type </h2><input class="form-control"  type="text" ng-model="type"><br><br>
                <h2>Price </h2><input class="form-control"  type="text" ng-model="age"><br><br>
                <br>

                <button ng-click="insert()"  class="btn btn-default form-control" ng-show="!t">Insert</button>
                <button ng-click="tableUpdate()"  class="btn btn-default form-control" ng-show="t">Update</button>
            </div>



            <div class="input-group" style="width: 30%;float:right;margin-top: 7px">
                <input type="text" class="  search-query form-control" placeholder="Search" ng-model="search" />
                <br><br>
            </div>



            <div class="result" style="float:right;background-color: chartreuse;width: 48%">

                <table border="1px solid" class="table table-hover" style="margin-top: 20px">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tr ng-repeat="x in data.results | filter:search">
                        <td><%$index+1%></td>
                        <td><%x.name%></td>
                        <td><%x.type%></td>
                        <td><%x.age%></td>
                        <td><button ng-click="Update($index)" class="btn btn-default form-control">Update</button></td>
                        <td><button ng-click="Delete($index)" class="btn btn-default form-control">Delete</button></td>
                    </tr>
                </table>
            </div>


        </div>

    </div>
</body>
@stop