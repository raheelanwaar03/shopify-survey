<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Registeration Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('auth/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('auth/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('auth/css/fontawesome-all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('auth/font/flaticon.css') }}">
    <!-- Google Web Fonts -->
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
                        <div class="card bg-transparent mb-2" style="border: 1px solid #1ebe92">
                            <div class="card-body text-center">
                                <h3 style="color:#1ebe92">Silver</h3>
                                <h6 style="color:#1ebe92">Investment : 100$</h6>
                                <h6 style="color:#1ebe92">Daily Earning : 1$</h6>
                                <h6 style="color:#1ebe92">Expire : Lifetime</h6>
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
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="plan_name" class="fxt-label">Select Plan</label>
                                <select name="plan_name" id="plan_name" class="form-control">
                                    <option value="silver">silver</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ID" class="fxt-label">Transcation ID:</label>
                                <input type="text" id="ID" class="form-control" name="trx"
                                    placeholder="Transcation ID of Payment Transfer" required="required">
                            </div>
                            <div class="form-group">
                                <label for="account" class="fxt-label">Account No:</label>
                                <input id="account" type="text" class="form-control" name="account"
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

</body>

</html>
