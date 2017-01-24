<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carousel</title>
</head>
<body ng-app="myAppCarousel" style="background-color: cadetblue">
    <div  class='container' style='width:90%; margin-top:2%; background-color: aquamarine'>


        <div  ng-controller="createCtrl">
            <div class="myform" >
                <h2>Name</h2> <input class="form-control"  type="text" ng-model="name"><br><br>
                <h2>Type </h2><input class="form-control"  type="text" ng-model="type"><br><br>
                <h2>Price </h2><input class="form-control"  type="text" ng-model="age"><br><br>
                <br>

                <button ng-click="insert()"  class="btn btn-default form-control" ng-show="!t">Insert</button>
                <button ng-click="tableUpdate()"  class="btn btn-default form-control" ng-show="t">Update</button>
                <br><br><br>
            </div>
        </div>

    </div>
</body>
</html>