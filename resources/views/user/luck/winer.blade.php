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
                    <h2 class="text-center">The Lucky winner is {{ $winner->winner_name ?? 'Not Annouce Yet!' }}</h2>
                    <h5 class="text-center">Don't lose hope you can also win <a href="{{ route('User.Lucky.Draw') }}">Try
                            it.</a></h5>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('winner/' . $winner->image) }}" alt="Card image cap">
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
