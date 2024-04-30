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
                    <h2 class="text-center">Lucky Products You Can Win</h2>
                    <h5 class="text-center">500 Peoples has been invested</h5>
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
                                <a href="{{ route('User.Invest.Lucky.Draw', $item->id) }}"
                                    class="btn btn-success">Invest</a>
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
@endsection
