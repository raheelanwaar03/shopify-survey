@extends('user.layout.app')

@section('links')
    <link href="{{ asset('asset/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-slider owl-carousel">
                        @foreach ($luck as $item)
                            <div class="items">
                                <div class="card " style="width: 18rem;">
                                    <img class="card-img-top" src="{{ asset('products/' . $item->image) }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="text-center card-title">{{ $item->item_name }}</h5>
                                        <p class="card-text">{{ $item->des }}</p>
                                        <a href="#form" class="btn btn-success mb-2">Invest</a>
                                    </div>
                                </div>
                            </div>
                            </form>
                        @endforeach
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body bg-success">
                                <p class="text-center text-white">{{ $wallet->text }}</p>
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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-success">Enter Details</h3>
                            </div>
                            <div class="card-body bg-success">
                                <form action="{{ route('User.Invest.Lucky.Draw') }}" method="POST" id="form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="trx" class="form-label text-white fs-4">Trx ID</label>
                                        <input type="text" name="trx" id="trx" placeholder="Enter Trx ID"
                                            class="form-control">
                                    </div>
                                    <div class="m-3">
                                        <button class="btn btn-info" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection


    @section('scripts')
        <script src="{{ asset('asset/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('asset/vendor/owl-carousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('asset/js/dashboard/cards-center.js') }}"></script>

        <script>
            function cardsCenter() {

                /*  testimonial one function by = owl.carousel.js */

                jQuery('.card-slider').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: true,
                    center: true,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    slideSpeed: 1000,
                    paginationSpeed: 3000,
                    dots: false,
                    navText: ['', ''],
                    speed: 1000,
                    autoplay: {
                        speed: 1000,
                    },
                    responsive: {
                        0: {
                            items: 1
                        },
                        576: {
                            items: 1
                        },
                        800: {
                            items: 2
                        },
                        991: {
                            items: 2
                        },
                        1200: {
                            items: 2
                        },
                        1600: {
                            items: 3
                        }
                    }
                })
            }

            jQuery(window).on('load', function() {
                setTimeout(function() {
                    cardsCenter();
                }, 1000);
            });
        </script>

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
