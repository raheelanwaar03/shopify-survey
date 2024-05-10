@extends('admin.layout.app')

@section('links')
    <link href="{{ asset('asset/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endsection

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
                            <form action="{{ route('Admin.Store.Extra.Earning.Task') }}" method="POST"
                                enctype="multipart/form-data">
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
                                    <input type="text" name="link" id="link" placeholder="Enter Product Link"
                                        class="form-control">
                                </div>
                                <div class="m-3">
                                    <button class="btn btn-success" type="submit">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h2 class="text-center my-3">All Extra Earning Tasks</h2>
                    <table id="example3" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Plan</th>
                                <th>Level</th>
                                <th>Earning</th>
                                <th>link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($extraTask as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->plan }}</td>
                                    <td>{{ $item->level }}</td>
                                    <td>{{ number_format($item->price, 5) }}</td>
                                    <td>{{ $item->link }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('Admin.Del.Extra.Task', $item->id) }}"
                                                class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('asset/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/js/plugins-init/datatables.init.js') }}"></script>
@endsection
