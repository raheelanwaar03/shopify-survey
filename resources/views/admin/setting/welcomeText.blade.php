@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-top">
                            <h3 style="text-align: center;">Welcome Text</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Welcome.Text', $text->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="plan_name" class="form-label">Text</label>
                                    <textarea name="text" id="plan_name" cols="5" rows="5" class="form-control">{{ $text->text }}</textarea>
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
