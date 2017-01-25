@extends('layouts.app')
@section('content')
<body style="background-color: #7da8c3">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 " style="background-color: #5bc0de">
        <h1>Chakeout</h1>
        <h4>Your Total : $ {{$total}}</h4>
        <div id="charge-error" class="alert alert-danger {{!Session::has('error') ? 'hidden' : ''}}">
            {{Session::get('error')}}
        </div>
        <form action="{{route('checkout')}}" method="post" id="checkout-form">

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <lable for="name">Name</lable>
                        <input type="text" id="name" class="form-control" required>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <lable for="name">Card Holder Name</lable>
                        <input type="text" id="card-name" class="form-control" required>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <lable for="name">Credit Card Number</lable>
                        <input type="text" id="card-number" class="form-control" required>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <lable for="card-expiry-month">Expiration Month</lable>
                                <input type="text" id="card-expiry-month" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <lable for="card-expiry-year">Expiration Year</lable>
                                <input type="text" id="card-expiry-year" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <lable for="name">CVC</lable>
                        <input type="text" id="card-cvc" class="form-control" required>
                    </div>
                </div>
            </div>
            {{csrf_field()}}
            <button type="submit" class="btn btn-success"> Buy now </button>
        </form>
    </div>
</body>

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{URL::asset('js/checkout.js')}}"></script>
@endsection