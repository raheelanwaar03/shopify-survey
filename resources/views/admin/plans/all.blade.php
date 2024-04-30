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
                            <h4 class="card-title">All Plans</h4>
                            <a href="{{ route('Admin.Add.Plan') }}" class="btn btn-success">Add Plans</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Plan Name</th>
                                            <th>Investment</th>
                                            <th>Profit</th>
                                            <th>Expire</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($plans as $item)
                                            <tr>
                                                <td>{{ $item->plan_name }}</td>
                                                <td>{{ $item->invest }}</td>
                                                <td>{{ $item->profit }}</td>
                                                <td>{{ $item->expire }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('Admin.Edit.Plan', $item->id) }}"
                                                            class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                class="fas fa-pencil-alt"></i></a>
                                                        <a href="{{ route('Admin.Delete.Plan', $item->id) }}"
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
