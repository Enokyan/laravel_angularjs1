<!DOCTYPE html>
<html>
<head>
  <title>my test</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
  </head>
<body>
	<div class="container" style="margin-top:25px;">
		<div class="row">
		  <form>
			<div class="form-group" class="col-sm-6">
			  <label for="usr">Firstname:</label>
			  <input type="text" class="form-control" id="firstname">
			</div>
			<div class="form-group" class="col-sm-6">
			  <label for="pwd">Lastname:</label>
			  <input type="password" class="form-control" id="lastname">
			</div>
			<div class="form-group" class="col-sm-6">
			  <label for="pwd">Username:</label>
			  <input type="password" class="form-control" id="username">
			</div>
			<button type="button" class="btn btn-primary">Primary</button>
		  </form>
		</div><br/><br/>

		<table class="table">
	    <tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Username</th>
			<th>Actions</th>
	    </tr>
		<tr>
			<td>Firstname</td>
			<td>Lastname</td>
			<td>Username</td>
			<td>Actions</td>
	    </tr>
		
	</table>
	</div><br/><br/><br/>

	
	<div ng-app="">
			<h1>hello world</h1>
			<input type="text" ng-model="userName"><br/><br/>
			hi {{userName}}
			
			<div ng-init="firstname='usta'"></div>
			<p>His name is <span ng-bind="firstname"></span></p>
    </div>

  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/angular.min.js"></script>
</body>
</html>
