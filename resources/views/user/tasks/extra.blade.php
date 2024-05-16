@extends('user.layout.app')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Earn more with these tasks</h2>
                    <h3 class="text-center mb-3">Balance: ${{ extraBalance() }} | {{ extraBalance_inPkr() }} pkr</h3>
                    <div class="text-center">
                        <a href="{{ route('User.Less.Level') }}" class="btn btn-success">Withdraw Now</a>
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
