@extends('admin.layout.app')

@section('links')
    <link href="{{ asset('asset/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Lucky Products</h4>
                            <a href="{{ route('Admin.Add.Lucky.Product') }}" class="btn btn-success">Add Products</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($product as $item)
                                            <tr>
                                                <td>{{ $item->item_name }}</td>
                                                <td>
                                                    <img src="{{ asset('products/' . $item->image) }}" height="50px"
                                                        width="50px" class="img-fluid">
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('Admin.Delete.Lucky.Product',$item->id) }}"
                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                                {{-- Winner --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Winners</h4>
                            <a href="{{ route('Admin.Add.Winner') }}" class="btn btn-success">Add Winner</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Winner Name</th>
                                            <th>Item</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($winner as $item)
                                            <tr>
                                                <td>{{ $item->winner_name }}</td>
                                                <td>{{ $item->item }}</td>
                                                <td>
                                                    <img src="{{ asset('winner/' . $item->image) }}" height="50px"
                                                        width="50px" class="img-fluid">
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('Admin.Delete.Winner', $item->id) }}"
                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                class="fa fa-trash"></i></a>
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
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('asset/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/js/plugins-init/datatables.init.js') }}"></script>
@endsection
