
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
                    <div class="col-md-12">
                        <label for="fname" sstyle="color: papayawhip;">UserName</label>
                        <input type="text" id="fname" name="fname" ng-model="userame">
                    </div>
                    <div class="col-md-12">
                        <label for="lname" sstyle="color: papayawhip;">Password</label>
                        <input type="text" id="lname" name="lname" ng-model="password">
                    </div>
                    <div class="col-md-12">
                        <button ng-click="login()"  class="btn btn-default form-control" ng-show="!t">Login</button>
                    </div>
                </div>
            </div>
        </div>

