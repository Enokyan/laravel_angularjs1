
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

    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-4 " >
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif

    <div  class=' col-md-12' style=' margin-top:2%; margin-bottom: 2%; background-color: rgba(36, 68, 30, 0.27)'>

        <div  ng-controller="UserCtrl" class="col-md-12">

            <div class="result col-md-12" >

                <div class="input-group" style="width: 30%;float:right;margin-top: 7px">
                    <input type="text" class="  search-query form-control" placeholder="Search User" ng-model="search" />
                    <br><br>
                </div>
                <table border="2px solid white" class="table table-hover col-md-12" style="margin-top: 20px;border: 2px solid lightyellow;">
                    <thead>
                   <tr style="color: #fff9f6">
                        <th><h3>Name</h3></th>
                        <th><h3>Email</h3></th>
                        <th><h3>Msg</h3></th>
                    </tr>
                    </thead>

                    <tr ng-repeat="user in users | filter:search" id="<%post.id%>" style="color: #800;">
                        <td><h4><%user.name%></h4></td>
                        <td><h4><%user.email%></h4></td>
                        <td><button class="btn btn-default">Msg</button></td>
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
                            <div class="form-group" class="col-sm-6">
                                <label for="pwd">Name:</label>
                                <input type="text" ng-model="name" class="form-control">
                                <label for="pwd">Type:</label>
                                <input type="text" ng-model="type" class="form-control">
                                <label for="pwd">Price:</label>
                                <input type="text" ng-model="price" class="form-control">
                            </div>

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
