@extends('layouts.app')

@section('content')


<head>

    <link href="/css/myauth.css" rel="stylesheet">
    <!--angularjs-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
    <script src="{{URL::asset('myauth/app.js')}}"></script>
    <script src="{{URL::asset('myauth/config/routConfig.js')}}"></script>
    <script src="{{URL::asset('myauth/controllers/registrController.js')}}"></script>
    <script src="{{URL::asset('myauth/controllers/loginController.js')}}"></script>
    <!--angularjs-->

</head>


<body ng-app="myApp">
    <div class="list-group col-md-2" id="navbar" style="">
        <br><br>
        <a href="#login" class="list-group-item list-group-item-action mycss"><span style="color: brown;">Login</span> </a>
        <a href="#registr" class="list-group-item list-group-item-action mycss"><span style="color: brown;">Registr</span> </a>
    </div>
    <div class="col-md-12 ng_view"></div>

</body>

@endsection