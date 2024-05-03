@extends('user.layout.app')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h4 class="text-center">Accourding to Dollar Rate : ({{ $setting->dollar_rate }} * {{ auth()->user()->balance }} =
                            {{ $withdrawAble }})</h4>
                        <div class="card-header">
                            <h3>Can be Withdraw</h3>
                            <h2>{{ $withdrawAble }}$</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('User.Store.Withdraw') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="amount" class="form-label">Amount</label>
                                    <input type="number" name="amount" id="amount"
                                        placeholder="Enter Amount you want to Withdraw" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="bank" class="form-label">Select Wallet</label>
                                    <select name="bank" class="form-control" id="bank">
                                        <option value="Easypaisa">Easypaisa</option>
                                        <option value="JazzCash">JazzCash</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="account" class="form-label">Account Number</label>
                                    <input type="number" name="account" id="account"
                                        placeholder="Enter Your Account Number to Withdraw" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">Name on Account</label>
                                    <input type="text" name="name" id="name" placeholder="Your bank Name"
                                        class="form-control">
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-success" type="submit">Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
