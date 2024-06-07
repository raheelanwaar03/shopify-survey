@extends('user.layout.app')

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
                            <h4 class="card-title">Withdraw History</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="" class="display" style="min-width: 300px">
                                    <thead>
                                        <tr style="background: green;color:white" class="mb-4">
                                            <th>Amount</th>
                                            <th>Bank</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @forelse ($withdraw as $item)
                                            <tr>
                                                <td style="color: black">{{ $item->amount }}</td>
                                                <td style="color: black">{{ $item->bank }}</td>
                                                @if ($item->status == 'approved')
                                                    <td class="badge badge-success">{{ $item->status }}</td>
                                                @else
                                                    <td class="badge badge-primary">{{ $item->status }}</td>
                                                @endif
                                                <td style="color: black">{{ $item->created_at }}</td>
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
