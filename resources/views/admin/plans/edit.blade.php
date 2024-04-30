@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-top">
                            <h3 style="text-align: center;">Edit Plan</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Plan',$plan->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="plan_name" class="form-label">Plan Name</label>
                                    <input type="text" name="plan_name" id="plan_name" class="form-control"
                                        value="{{ $plan->plan_name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="invest" class="form-label">Plan Investment</label>
                                    <input type="number" name="invest" id="invest" class="form-control"
                                        value="{{ $plan->invest }}">
                                </div>
                                <div class="form-group">
                                    <label for="Profit" class="form-label">Plan Profit</label>
                                    <input type="text" name="profit" id="Profit" class="form-control"
                                        value="{{ $plan->profit }}">
                                </div>
                                <div class="form-group">
                                    <label for="expire" class="form-label">Plan Expire</label>
                                    <input type="text" name="expire" id="expire" class="form-control"
                                        value="{{ $plan->expire }}">
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
