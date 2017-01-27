    <style>
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
    </style>
<div class="list-group col-md-12">
    <center><div  ng-controller="registrCtrl">
        <div class="myform" >
            <form action="home" method="get">
                <div class="col-md-12">
                    <label for="uname" sstyle="color: papayawhip;">UserName</label>
                    <input type="text" class="form-control" id="uname" name="uname" ng-model="username">
                </div>

                <div class="col-md-12">
                    <label for="email" sstyle="color: papayawhip;">Email</label>
                    <input type="email" id="email" class="form-control" name="lname" ng-model="email">
                </div>

                <div class="col-md-12">
                    <label for="password" sstyle="color: papayawhip;">Password</label>
                    <input type="password" id="password" class="form-control" name="lname" ng-model="password">
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                    <input type="button" ng-click="registr()" class="btn btn-default form-control" value="Registr" >
                </div>
            </form>
        </div>
    </div></center>
</div>

