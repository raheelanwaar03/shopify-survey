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
                            <h4 class="card-title">Pending Withdraw Request</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Bank</th>
                                            <th>Account</th>
                                            <th>Amount</th>
                                            <th>Total Team</th>
                                            <th>Pre Withdraw</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($withdraw as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->bank }}</td>
                                                <td>{{ $item->account }}</td>
                                                <td>{{ $item->amount }}</td>
                                                <td>{{ $item->total_team }}</td>
                                                <td>{{ $item->pre_withdraw }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('Admin.Make.Withdraw.Approve', $item->id) }}"
                                                            class="btn btn-success shadow btn-xs sharp me-1"><i
                                                                class="fa-solid fa-check"></i></a>
                                                        <a href="{{ route('Admin.Make.Withdraw.Rejected', $item->id) }}"
                                                            class="btn btn-danger shadow btn-xs sharp"><i
                                                                class="fa-solid fa-xmark"></i></a>
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
