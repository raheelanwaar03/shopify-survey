@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-top">
                            <h3 style="text-align: center;">Add Extra Earning Task</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Store.Extra.Earning.Task') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title" class="form-label">Task Title</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="Task Title">
                                </div>
                                <div class="form-group">
                                    <label for="des" class="form-label">Task Description</label>
                                    <textarea name="des" id="des" cols="5" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="invest" class="form-label">Earning</label>
                                    <input type="number" name="price" id="invest" class="form-control"
                                        placeholder="Task Earning which will users get" step="0.00001">
                                </div>
                                <div class="form-group">
                                    <label for="link" class="form-label">Link</label>
                                    <input type="text" name="link" id="link" placeholder="Enter Product Link" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="profit" class="form-label">Image</label>
                                    <input type="file" name="image" id="Profit" class="form-control">
                                </div>
                                <div class="m-3">
                                    <button class="btn btn-success" type="submit">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
