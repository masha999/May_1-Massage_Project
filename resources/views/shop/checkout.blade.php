@extends('layouts.app')

@section('title')
    Checkout
@endsection

@section('content')

<div class="shoppage">
	<div class="shopheader_bg">
    	<div class="container">
			<div class="row">
				<h1 class="cover-heading text-center shopheader">Check Out</h1>
			</div>
		</div>
    </div>

    <div class="authpages">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Checkout</div>
                        <div class="panel-body">
                            <h4>Your Total: ${{ $total }}</h4>
                            <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''  }}">
                                {{ Session::get('error') }}
                            </div>
                            <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" class="form-control" required name="name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" id="address" class="form-control" required name="address">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="card-name">Card Holder Name</label>
                                            <input type="text" id="card-name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="card-number">Credit Card Number</label>
                                            <input type="text" id="card-number" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label for="card-expiry-month">Expiration Month</label>
                                                    <input type="text" id="card-expiry-month" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label for="card-expiry-year">Expiration Year</label>
                                                    <input type="text" id="card-expiry-year" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="card-cvc">CVC</label>
                                            <input type="text" id="card-cvc" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-info">Buy now</button>
                            </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('src/js/checkout.js') }}"></script>
@endsection