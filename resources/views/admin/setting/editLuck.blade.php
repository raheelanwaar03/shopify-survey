@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-top">
                            <h3 style="text-align: center;">Edit luck</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Luck', $luck->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="plan_name" class="form-label">Name</label>
                                    <input type="text" name="name" id="plan_name" class="form-control"
                                        value="{{ $luck->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="text" class="form-label">Text</label>
                                    <input type="text" name="text" id="text" class="form-control"
                                        value="{{ $luck->text }}">
                                </div>
                                <div class="form-group">
                                    <label for="number" class="form-label">Number</label>
                                    <input type="number" name="number" id="Number" class="form-control"
                                        value="{{ $luck->number }}">
                                </div>
                                <div class="form-group">
                                    <label for="bank" class="form-label">Bank</label>
                                    <input type="bank" name="bank" id="bank" class="form-control"
                                        value="{{ $luck->bank }}">
                                </div>
                                <div class="form-group">
                                    <label for="people" class="form-label">People Participated</label>
                                    <input type="people" name="people" id="people" class="form-control"
                                        value="{{ $luck->people }}">
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
