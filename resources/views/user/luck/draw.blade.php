@extends('user.layout.app')

@section('links')
    <link href="{{ asset('asset/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Lucky Products You Can Win</h2>
                    <h5 class="text-center">{{ $wallet->people }} Peoples has been invested</h5>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body bg-success">
                            <p class="text-center text-white">Use these details for participating in lucky draw</p>
                            <h4 class="text-white">Name : {{ $wallet->name }}</h4>
                            <h4 class="text-white">Bank : {{ $wallet->bank }}</h4>
                            <h4 class="text-white">Number : <span id="link">{{ $wallet->number }}</span>
                                <span class="coin-icon">
                                    <i class="fa-regular fa-copy copy-icon" onclick="copyReferralLink()"
                                        style="height: 25px;width: 25px;cursor: pointer;"></i>
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($luck as $item)
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('products/' . $item->image) }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title">{{ $item->item_name }}</h5>
                                    <h5 class="card-title">Invest : {{ $item->invest }}</h5>
                                </div>
                                <p class="card-text">{{ $item->des }}</p>
                                <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter{{ $item->id }}">Invest</button>
                            </div>
                        </div>
                    </div>

                    {{-- model --}}
                    <div class="modal fade" id="exampleModalCenter{{ $item->id }}">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Amount will be {{ $item->invest }} for {{ $item->item_name }}.</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('User.Invest.Lucky.Draw') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="product">Trx Id</label>
                                            <input type="text" name="product" id="product" class="form-control">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('asset/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('asset/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/js/plugins-init/datatables.init.js') }}"></script>
    <script>
        function copyReferralLink() {
            let referralLink = document.querySelector('#link').innerText;
            navigator.clipboard.writeText(referralLink);

            // Show tooltip
            let tooltip = document.createElement('span');
            document.querySelector('.copy-icon').appendChild(tooltip);
            alert('Copied');

        }
    </script>
@endsection
