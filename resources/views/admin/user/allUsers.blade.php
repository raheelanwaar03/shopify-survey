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
                            <h4 class="card-title">All Users</h4>
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
                                            <th>Referral</th>
                                            <th>Trx ID</th>
                                            <th>Account</th>
                                            <th>Status</th>
                                            <th>Payment SS</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $item)
                                            <tr id="tr_{{ $item->trxIds->user_id }}">
                                                <td class="text-dark">{{ $item->user_id }}</td>
                                                <td class="text-dark">{{ $item->name }}</td>
                                                <td class="text-dark">{{ $item->balance }}</td>
                                                <td class="text-dark">{{ $item->trxIds->plan_name }}</td>
                                                <td class="text-dark">{{ $item->referral }}</td>
                                                <td class="text-dark">{{ $item->trxIds->trx }}</td>
                                                <td class="text-dark">{{ $item->trxIds->account }}</td>
                                                <td class="text-dark">{{ $item->status }}</td>
                                                <td>
                                                    <img src="{{ asset('images/' . $item->trxIds->img) }}"
                                                        class="img-fluid" height="50px" width="50px">
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <button data-user-id="{{ $item->trxIds->user_id }}"
                                                            class="btn btn-success shadow btn-xs sharp me-1 approveButton"><i
                                                                class="fa-solid fa-check"></i></button>
                                                        <button data-user-id="{{ $item->trxIds->user_id }}"
                                                            class="btn btn-danger rejectButton shadow btn-xs sharp me-1"><i
                                                                class="fa-solid fa-xmark"></i></button>
                                                        <a href="{{ route('Admin.Edit.User', $item->id) }}"
                                                            class="btn btn-sm btn-info">Edit</a>
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

    {{-- User Status mangement --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.rejectButton').click(function() {
                var userId = $(this).data('user-id');
                $.ajax({
                    url: "{{ route('Admin.Make.User.Rejected') }}",
                    method: "GET",
                    data: {
                        user_id: userId
                    },
                    success: function(response) {
                        $("#" + response['tr']).hide();
                        alert(response.message);
                    },
                });
            });
        });

        // make user approve

        $(document).ready(function() {
            $('.approveButton').click(function() {
                var userId = $(this).data('user-id');
                $.ajax({
                    url: "{{ route('Admin.Make.User.Approved') }}",
                    method: "GET",
                    data: {
                        user_id: userId
                    },
                    success: function(response) {
                        $("#" + response['tr']).hide();
                        alert(response.message);
                    },
                });
            });
        });
    </script>
@endsection
