@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-top">
                            <h3 style="text-align: center;">Add Plan</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Store.Plan') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="plan_name" class="form-label">Plan Name</label>
                                    <input type="text" name="plan_name" id="plan_name" class="form-control"
                                        placeholder="Plan Name">
                                </div>
                                <div class="form-group">
                                    <label for="invest" class="form-label">Plan Investment</label>
                                    <input type="number" name="invest" id="invest" class="form-control"
                                        placeholder="Plan Investment">
                                </div>
                                <div class="form-group">
                                    <label for="Profit" class="form-label">Plan Profit</label>
                                    <input type="text" name="profit" id="Profit" class="form-control"
                                        placeholder="Plan Profit">
                                </div>
                                <div class="form-group">
                                    <label for="expire" class="form-label">Plan Expire</label>
                                    <input type="text" name="expire" id="expire" class="form-control"
                                        placeholder="Plan expire">
                                </div>
                                <div class="m-3">
                                    <button class="btn btn-primary" type="submit">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
