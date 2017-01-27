
    <style>
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
    </style>

        <div class="list-group col-md-12">
            <div  ng-controller="loginCtrl">
                <div class="myform" >
                    <center><div class="col-md-12">
                        <label for="fname" sstyle="color: papayawhip;">Email</label>
                        <input type="email" id="fname" class="form-control" name="fname" ng-model="username">
                    </div>
                    <div class="col-md-12">
                        <label for="lname" sstyle="color: papayawhip;">Password</label>
                        <input type="password" id="lname" class="form-control" name="lname" ng-model="password">
                    </div>
                    <br>
                    <div class="col-md-12" style="margin-top: 20px">
                        <button ng-click="login()"  class="btn btn-default form-control" ng-show="!t">Login</button>
                    </div>
                    </center>
                </div>
            </div>
        </div>

