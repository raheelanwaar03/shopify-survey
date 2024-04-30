@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-top">
                            <h3 style="text-align: center;">Add LuckyDraw Winner</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Store.Lucky.Draw.Winner') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Winner Name</label>
                                    <input type="text" name="winner_name" id="name" class="form-control"
                                        placeholder="Winner Name">
                                </div>
                                <div class="form-group">
                                    <label for="item" class="form-label">Wining Item</label>
                                    <input type="text" name="item" id="item" class="form-control"
                                        placeholder="Wining Item">
                                </div>
                                <div class="form-group">
                                    <label for="image" class="form-label">Item Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
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
