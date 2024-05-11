@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-top">
                            <h3 style="text-align: center;">General Settings</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Setting', $withdraw->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="min_amount" class="form-label">Minimum Withdraw Amount</label>
                                    <input type="number" name="min_amount" id="min_amount" class="form-control"
                                        value="{{ $withdraw->min_amount }}">
                                </div>
                                <div class="form-group">
                                    <label for="max_amount" class="form-label">Maximum Withdraw Amount</label>
                                    <input type="number" name="max_amount" id="max_amount" step="0.0001"
                                        class="form-control" value="{{ $withdraw->max_amount }}">
                                </div>
                                <div class="form-group">
                                    <label for="dollar" class="form-label">Dollar Rate</label>
                                    <input type="number" name="dollar_rate" id="dollar" step="0.0001"
                                        class="form-control" value="{{ $withdraw->dollar_rate }}">
                                </div>
                                <div class="form-group">
                                    <label for="planA" class="form-label">Plan A</label>
                                    <input type="number" name="planA" id="planA" step="0.000001" class="form-control"
                                        value="{{ $withdraw->planA }}">
                                </div>
                                <div class="form-group">
                                    <label for="planB" class="form-label">Plan B</label>
                                    <input type="number" name="planB" id="planB" step="0.000001" class="form-control"
                                        value="{{ $withdraw->planB }}">
                                </div>
                                <div class="form-group">
                                    <label for="first" class="form-label">Second Commission</label>
                                    <input type="number" name="first_commission" step="0.000001" id="first"
                                        class="form-control" value="{{ $withdraw->first_commission }}">
                                </div>
                                <div class="form-group">
                                    <label for="second" class="form-label">Third Commission</label>
                                    <input type="number" name="second_commission" step="0.000001" id="second"
                                        class="form-control" value="{{ $withdraw->second_commission }}">
                                </div>
                                <div class="m-3">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
