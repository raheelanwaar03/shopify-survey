@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-top">
                            <h3 style="text-align: center;">Add LuckyDraw Items</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Store.Lucky.Product') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="Item" class="form-label">Product Title</label>
                                    <input type="text" name="item_name" id="Item" class="form-control"
                                        placeholder="Item Name">
                                </div>
                                <div class="form-group">
                                    <label for="des" class="form-label">Product Description</label>
                                    <textarea name="des" id="des" cols="5" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="invest" class="form-label">Product Investment</label>
                                    <input type="number" name="invest" id="invest" class="form-control"
                                        placeholder="Product Investment">
                                </div>
                                <div class="form-group">
                                    <label for="img" class="form-label">Product Image</label>
                                    <input type="file" name="image" id="img" class="form-control">
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
