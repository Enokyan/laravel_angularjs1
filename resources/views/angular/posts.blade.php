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
        <script src="{{URL::asset('angular/contollers/Postcontroller.js')}}"></script>
        <!--angularjs-->


        {{--bootstrap modal--}}
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body ng-app="myAppPost" style="background-color: cadetblue">
    <div  class='container' style='width:90%; margin-top:2%; background-color: aquamarine'>


        <div  ng-controller="PostCtrl">

            <div class="result" style="background-color: chartreuse;">

                <div class="input-group" style="width: 30%;float:right;margin-top: 7px">
                    <input type="text" class="  search-query form-control" placeholder="Search" ng-model="search" />
                    <br><br>
                </div>
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

                      <tr ng-repeat="post in posts | filter:search" id="<%post.id%>" >
                          <td><%$index+1%></td>
                         <td><%post.name%></td>
                         <td><%post.type%></td>
                         <td><%post.price%></td>
                          <td><button ng-click="UpdatePost($index,post.id)"  type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> </td>
                          <td> <button ng-click="DeletePost(post.id)" class="btn btn-default form-control">Delete</button></td>
                      </tr>


                </table>
            </div>
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">


                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body" >
                            <input type="text" ng-model="name">
                            <br>
                            <br>
                            <input type="text" ng-model="type">
                            <br>
                            <br>
                            <input type="text" ng-model="price">
                        </div>
                        <div class="modal-footer">
                            <button  type="button" class="btn btn-default" data-dismiss="modal" ng-click="TableUpdate()">Update</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

    </div>
        </div>
    </body>
@stop