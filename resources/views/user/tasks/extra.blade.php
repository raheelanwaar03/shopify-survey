@extends('user.layout.app')

@section('links')
    <link href="{{ asset('asset/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Earn more with these tasks</h2>
                    <h3 class="text-center mb-3">Balance: ${{ extraBalance() }} | {{ extraBalance_inPkr() }} pkr</h3>
                    <div class="text-center">
                        <a href="{{ route('User.Less.Level') }}" class="btn btn-success mb-2">Withdraw Now</button>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($task as $item)
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ $item->des }}</p>
                                <a href="{{ route('User.Get.Extra.Task.Reward', $item->id) }}" class="btn btn-success"
                                    onclick="window.open('{{ $item->link }}', '_blank')">Get Reward</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('asset/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/js/plugins-init/datatables.init.js') }}"></script>
    {{-- model --}}
    {{-- <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Withdraw</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('User.Less.Level') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Price</label>
                            <input type="number" name="price" id="price" class="form-control"
                                placeholder="Enter amount to withdraw">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Account Holder Name</label>
                            <input type="text" name="name" id="price" class="form-control"
                                placeholder="account holder name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Account Number</label>
                            <input type="number" name="number" id="price" class="form-control"
                                placeholder="Account number to withdraw balance">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Bank</label>
                            <select name="bank" id="bank" class="form-control">
                                <option value="Easypaisa">Easypaisa</option>
                                <option value="Jazzcash">Jazzcash</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div> --}}
@endsection
