<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Login Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo.png') }}">
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
                        <a href="{{ route('login') }}" class="fxt-logo"><img src="{{ asset('full-logo.png') }}" height="500px" width="500px"
                                alt="Logo"></a>
                    </div>
                    <div class="fxt-transformX-R-50 fxt-transition-delay-10">
                        <div class="fxt-middle-content">
                            <div class="fxt-sub-title">Welcome to</div>
                            <h1 class="fxt-main-title">{{ env('APP_NAME') }}.</h1>
                            <p class="fxt-description">We are glad to see you again! Share your link to earn and win
                                more profit.</p>
                        </div>
                    </div>
                    <div class="fxt-transformX-R-50 fxt-transition-delay-10">
                    </div>
                </div>
            </div>
            <div class="fxt-form-content">
                <div class="fxt-main-form">
                    <div class="fxt-inner-wrap fxt-opacity fxt-transition-delay-13">
                        <h2 class="fxt-page-title">Log In</h2>
                        <p class="fxt-description">Log In To Earn Unlimited bounce</p>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="fxt-label">Email Address</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="fxt-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="Enter Password" required>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('password.request') }}" class="fxt-switcher-text">Forgot Password</a>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="fxt-btn-fill">Log in</button>
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
