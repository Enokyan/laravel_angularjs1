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
        </div>
    </div>