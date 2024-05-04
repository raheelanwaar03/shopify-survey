<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Registeration Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('auth/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('auth/style.css') }}">
</head>

<body>
    <x-alert />
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    <section class="fxt-template-animation fxt-template-layout33">
        <div class="fxt-content-wrap">
            <div class="fxt-heading-content">
                <div class="fxt-inner-wrap fxt-transformX-R-50 fxt-transition-delay-3">
                    <div class="fxt-transformX-R-50 fxt-transition-delay-10">
                        @foreach ($plans as $item)
                            <div class="card bg-transparent mb-2" style="border: 1px solid #1ebe92">
                                <div class="card-body text-center">
                                    <h3 style="color:#1ebe92">{{ $item->plan_name }}</h3>
                                    <h6 style="color:#1ebe92">Investment : {{ $item->invest }}$</h6>
                                    <h6 style="color:#1ebe92">Profit : {{ $item->profit }}$</h6>
                                    <h6 style="color:#1ebe92">Expire : {{ $item->expire }}</h6>
                                </div>
                            </div>
                        @endforeach
                        <div class="card bg-transparent mb-2" style="border: 1px solid #1ebe92">
                            <div class="card-body text-center">
                                <h6 class="text-white text-center">Use these details for payment</h6>
                                <h5 style="color:#1ebe92">Name : {{ $wallet->name }}</h5>
                                <h6 style="color:#1ebe92">Number : <span id="link">{{ $wallet->number }}</span> <i
                                        onclick="copyReferralLink()" class="fa-regular fa-copy"
                                        style="font-size:20px;cursor: pointer;"></i></h6>
                                <h6 style="color:#1ebe92">Bank : {{ $wallet->bank }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fxt-form-content">
                <div class="fxt-main-form">
                    <div class="fxt-inner-wrap fxt-opacity fxt-transition-delay-13">
                        <h2 class="fxt-page-title">Plans</h2>
                        <p class="fxt-description">Choose Your Plan and Start Earning</p>
                        <form action="{{ route('Buy.Plan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="plan_name" class="fxt-label">Select Plan</label>
                                <select name="plan_name" id="plan_name" class="form-control">
                                    @foreach ($plans as $item)
                                        <option value="{{ $item->plan_name }}">{{ $item->plan_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ID" class="fxt-label">Transcation ID:</label>
                                <input type="text" id="ID" class="form-control" name="trx"
                                    placeholder="Transcation ID of Payment Transfer" required="required">
                            </div>
                            <div class="form-group">
                                <label for="account" class="fxt-label">Account No:</label>
                                <input id="account" type="number" class="form-control" name="account"
                                    placeholder="Your Account Number" required="required">
                            </div>
                            <div class="form-group">
                                <label for="name" class="fxt-label">Your Name</label>
                                <input id="name" type="text" class="form-control" name="user_name"
                                    placeholder="Your Name on Your Wallet" required="required">
                            </div>
                            <div class="form-group">
                                <label class="fxt-label">Payment Screen Shot</label>
                                <input type="file" class="form-control" name="img">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="fxt-btn-fill">Submit</button>
                            </div>
                        </form>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <div class="text-center">
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="{{ asset('auth/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
    <!-- Imagesloaded js -->
    <script src="{{ asset('auth/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Validator js -->
    <script src="{{ asset('auth/js/validator.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('auth/js/main.js') }}"></script>

    <script>
        function copyReferralLink() {
            let referralLink = document.querySelector('#link').innerText;
            navigator.clipboard.writeText(referralLink);

            // Show tooltip
            let tooltip = document.createElement('span');
            alert('Copied');

        }
    </script>

</body>

</html>
