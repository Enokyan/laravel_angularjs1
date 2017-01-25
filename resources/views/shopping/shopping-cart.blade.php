@extends('layouts.app')
@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 ">
                <ul class="list-group">
                    @foreach($posts as $post)
                        <li class="list-group-item">
                            <span class="badge">{{$post['qty']}}</span>
                            <strong class="label label-primary">{{$post['item']['name']}}</strong>
                            <span style="float:right;margin-right:50px ;" class="label label-warning">{{$post['price']}}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 ">
                <h2> <strong class="label label-danger"> Total : {{$totalPrice}} </strong></h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 ">
                <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 ">
                <h2>No  Items In Cart! </h2>
            </div>
        </div>
    @endif
@endsection