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
                            <h4 class="card-title">Approved Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>Balance</th>
                                            <th>Plan</th>
                                            <th>Trx ID</th>
                                            <th>Account</th>
                                            <th>Status</th>
                                            <th>Payment SS</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $item)
                                            <tr>
                                                <td>{{ $item->user_id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->balance }}</td>
                                                <td>{{ $item->trxIds->plan_name }}</td>
                                                <td>{{ $item->trxIds->trx }}</td>
                                                <td>{{ $item->trxIds->account }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <img src="{{ asset('images/' . $item->trxIds->img) }}" class="img-fluid"
                                                        height="50px" width="50px">
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#"
                                                            class="btn btn-success shadow btn-xs sharp me-1"><i
                                                                class="fa-solid fa-check"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp me-1"><i
                                                                class="fa-solid fa-xmark"></i></a>
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp">
                                                            <i class="fa-solid fa-gauge-simple"></i>
                                                        </a>
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
