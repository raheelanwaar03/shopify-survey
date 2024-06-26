<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/x-icon">

    <title>{{ env('APP_NAME') }} | Welcome to the new universe of earning</title>
    <link rel="stylesheet" href="{{ asset('land/web/mobirise-icons2/mobirise2.css') }}">
    <link rel="stylesheet" href="{{ asset('land/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('land/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('land/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('land/dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('land/socicon/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('land/theme/css/style.css') }}">
    <link rel="preload"
        href="https://fonts.googleapis.com/css?family=Anuphan:100,200,300,400,500,600,700&amp;display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Anuphan:100,200,300,400,500,600,700&amp;display=swap">
    </noscript>
    <link rel="preload" as="style" href="{{ asset('land/mobirise/css/mbr-additional.css') }}">
    <link rel="stylesheet" href="{{ asset('land/mobirise/css/mbr-additional.css') }}" type="text/css">


</head>

<body>

    <x-alert />
    <section data-bs-version="5.1" class="menu menu1 cid-tBnM1aClNb" once="menu" id="menu01-0">

        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">

                    <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-7"
                            href="{{ route('Welcome') }}">
                            <h3 class="fs-3">{{ env('APP_NAME') }}</h3>
                        </a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                    data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-primary fs-3 display-4"
                                href="{{ route('Welcome') }}">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-primary fs-3 display-4" href="#plans">Plans</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-primary fs-3 display-4"
                                href="#features">Features</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-primary fs-3 display-4"
                                href="#contact">Contacts</a>
                        </li>
                        @if (auth()->user())
                            <li class="nav-item"><a href="{{ route('User.Dashboard') }}"
                                    class="nav-link link text-primary fs-3 display-4">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item"><a href="{{ route('login') }}"
                                    class="nav-link link text-primary display-4">Login</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section data-bs-version="5.1" class="header3 cid-tBnM9yQwvx" id="header03-2">

        <div class="container">
            <div class="row align-left">
                <div class="col-12 m-auto col-lg-7 pb-5">

                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>Welcome to
                            {{ env('APP_NAME') }}</strong></h1>

                    <p class="mbr-text mbr-fonts-style display-7">
                        Best earning platform to earn daily profit and win expensive itesm in very cheep.</p>
                    <div class="mbr-section-btn mt-3">
                        @if (auth()->user())
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-secondary display-4">Logout</button>
                            </form>
                        @else
                            <a class="btn btn-secondary display-4" href="{{ route('login') }}">Login</a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('land/images/features4.jpg') }}" alt="Mobirise Website Builder">
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="features7 cid-tBnXUPCVJr" id="features07-3">
        <div class="container" id="features">
            <div class="row align-left justify-content-center">
                <div class="col-12">
                    <h2 class="mbr-section-maintitle mbr-fonts-style pb-5 display-2"><strong>Our Features</strong></h2>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="card-wrapper">
                        <div class="align-wrapper">
                            <div class="subtitle-wrap">
                                <h2 class="mbr-section-subtitle2 mbr-fonts-style display-4"><strong>

                                        Step 1</strong></h2>
                                <span class="mbr-iconfont mobi-mbri-right mobi-mbri"></span>
                                <h2 class="mbr-section-subtitle mbr-fonts-style display-4">
                                    <strong>{{ env('APP_NAME') }}</strong>
                                </h2>
                            </div>
                        </div>
                        <div class="item-img">
                            <img src="{{ asset('land/images/features2.jpg') }}" alt="Mobirise Website Builder">
                        </div>
                        <h1 class="mbr-section-title mbr-fonts-style mb-3 display-5">Registration</h1>
                        <p class="mbr-text mbr-fonts-style display-4">
                            Your first step is so simple as just follow the Instraction of registeration wait for your
                            account approvel.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="card-wrapper">
                        <div class="align-wrapper">
                            <div class="subtitle-wrap">
                                <h2 class="mbr-section-subtitle2 mbr-fonts-style display-4"><strong>

                                        Step 2</strong></h2>
                                <span class="mbr-iconfont mobi-mbri-right mobi-mbri"></span>
                                <h2 class="mbr-section-subtitle mbr-fonts-style display-4">
                                    <strong>{{ env('APP_NAME') }}</strong>
                                </h2>
                            </div>
                        </div>
                        <div class="item-img">
                            <img src="{{ asset('land/images/features1.jpg') }}" alt="Mobirise Website Builder">
                        </div>
                        <h1 class="mbr-section-title mbr-fonts-style mb-3 display-5">Task</h1>
                        <p class="mbr-text mbr-fonts-style display-4">
                            You only need to survey some of our prodcuts and you got daily profit and as much as you
                            survey the more you earn.
                        </p>

                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="card-wrapper">
                        <div class="align-wrapper">
                            <div class="subtitle-wrap">
                                <h2 class="mbr-section-subtitle2 mbr-fonts-style display-4"><strong>

                                        Step 3</strong></h2>
                                <span class="mbr-iconfont mobi-mbri-right mobi-mbri"></span>
                                <h2 class="mbr-section-subtitle mbr-fonts-style display-4">
                                    <strong>{{ env('APP_NAME') }}</strong>
                                </h2>
                            </div>
                        </div>
                        <div class="item-img">
                            <img src="{{ asset('land/images/features3.jpg') }}" alt="Mobirise Website Builder">
                        </div>
                        <h1 class="mbr-section-title mbr-fonts-style mb-3 display-5">Promotion</h1>
                        <p class="mbr-text mbr-fonts-style display-4">
                            You can also get bouns from our referral system. You only need to share your referral link
                            with your friends and family.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="header2 cid-tBnZ2WkWKw" id="header02-m">






        <div class="container">
            <div class="row align-left">
                <div class="col-12 col-lg-7">
                    <div class="align-wrapper">
                        <div class="subtitle-wrap">
                            <span class="mbr-iconfont mobi-mbri-edit-2 mobi-mbri"></span>
                            <h2 class="mbr-section-subtitle mbr-fonts-style display-4"><strong>

                                    Services</strong></h2>
                        </div>
                    </div>
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>Refer <br>Your
                            Friends</strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Share your referral link to your known ones and earn profit and chance more to win lucky draw
                        items.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="image1 cid-tBnXVkm3Df" id="image01-4">





        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="{{ asset('land/images/features1.jpg') }}" alt="Mobirise Website Builder">
                        <p class="mbr-text mbr-fonts-style mt-2 align-center display-7">
                            Management</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="{{ asset('land/images/features2.jpg') }}" alt="Mobirise Website Builder">
                        <p class="mbr-text mbr-fonts-style mt-2 align-center display-7">
                            Business Strategy</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-bs-version="5.1" class="people4 cid-tBnYYFIsRd" id="people04-k">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-5 display-2">
                        <strong>Our Team</strong>
                    </h3>

                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card-wrap">
                        <div class="image-wrap">
                            <img src="{{ asset('land/images/team1.jpg') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="content-wrap">
                            <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-7">
                                <strong>Johnny D. Ewing</strong>
                            </h5>
                            <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                Manager
                            </h6>

                            <div class="social-row display-7">
                                <div class="soc-item">
                                    <a href="#" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-facebook"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="#" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-twitter"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="#" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-instagram"></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card-wrap">
                        <div class="image-wrap">
                            <img src="{{ asset('land/images/team2.jpg') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="content-wrap">
                            <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-7">
                                <strong>Janet D. Gates</strong>
                            </h5>
                            <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                Manager
                            </h6>

                            <div class="social-row display-7">
                                <div class="soc-item">
                                    <a href="#" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-facebook"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="#" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-twitter"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="#" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-instagram"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card-wrap">
                        <div class="image-wrap">
                            <img src="{{ asset('land/images/team3.jpg') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="content-wrap">
                            <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-7">
                                <strong>Dustin G. Bailey</strong>
                            </h5>
                            <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                Manager
                            </h6>

                            <div class="social-row display-7">
                                <div class="soc-item">
                                    <a href="#" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-facebook"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="#" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-twitter"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="#" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-instagram"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="features4 cid-tBnZ7XFeqH" id="features04-n">
        <div class="container">
            <div class="row align-left">
                <div class="col-12 col-lg-6 pb-5">
                    <div class="align-wrapper">
                        <div class="subtitle-wrap">
                            <span class="mbr-iconfont mobi-mbri-rocket mobi-mbri"></span>
                            <h2 class="mbr-section-subtitle mbr-fonts-style display-4"><strong>Process</strong></h2>
                        </div>
                    </div>
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>Grow Up</strong></h1>

                    <p class="mbr-text mbr-fonts-style display-7">
                        You got higher levels as you make your team bigger!
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card-wrapper">
                        <div class="align-wrapper2">
                            <div class="subtitle-wrap2">
                                <h2 class="mbr-section-subtitle3 mbr-fonts-style display-4"><strong>

                                        Step 1</strong></h2>
                                <span class="mbr-iconfont mobi-mbri-right mobi-mbri"></span>
                                <h2 class="mbr-section-subtitle2 mbr-fonts-style display-4"><strong>

                                        1-2 weeks</strong></h2>
                            </div>
                        </div>
                        <h1 class="mbr-section-cardtitle mbr-fonts-style mb-3 display-5"><strong>Promotion</strong>
                        </h1>
                        <p class="mbr-cardtext mbr-fonts-style display-4">
                            You only need to share your link to make your team bigger and as they complete their
                            registration you got new levels and more bounses.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="features1 cid-tBnZso1HPz" id="features01-p">

        <div class="container">
            <div class="row align-left justify-content-center">

                <div class="col-12 col-lg-6">
                    <div class="wrapper">
                        <h5 class="mbr-section-title mbr-fonts-style mb-4 display-5"><strong>Management</strong></h5>
                        <p class="mbr-text mbr-fonts-style display-4">
                            To mange you account is very simple with our user-friendly design and performing simple
                            tasks.
                        </p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="wrapper">
                        <h5 class="mbr-section-title mbr-fonts-style mb-4 display-5">
                            <strong>Promotion</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style display-4">The more you share your link and invite friends
                            the more you unlock your level and get more benefits with it.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="pricing1 cid-tBnYSEdU9n" id="pricing01-f">




        <div class="container" id="plans">
            <div class="row">
                <div class="col-12 col-md-12 pb-5">
                    <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2">
                        <strong>Plans</strong>
                    </h3>
                </div>
            </div>
            <div class="row row-color justify-content-center">
                @foreach ($plan as $item)
                    <div class="col-12 col-md-12 card align-center col-lg-4">
                        <div class="plan">
                            <div class="plan-header align-left">
                                <span class="mbr-iconfont mobi-mbri-tablet-vertical mobi-mbri"></span>
                                <h6 class="plan-title mbr-fonts-style mb-0 display-5">{{ $item->plan_name }}</h6>
                                <div class="plan-price">

                                    <span
                                        class="price mbr-fonts-style m-0 display-2"><strong>${{ $item->invest }}</strong></span>
                                    <span class="price-term mbr-fonts-style mb-3 display-7">USD</span>
                                </div>
                                <h4 class="mbr-card-text mb-4 mt-2 mbr-fonts-style display-4">
                                    Duration : {{ $item->expire }}
                                    <br>
                                    Profit : {{ $item->profit }}
                                </h4>
                                <div class="mbr-section-btn mb-4"><a href="{{ route('login') }}"
                                        class="btn btn-primary display-4">Invest</a></div>
                                <hr>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="map1 cid-tBnYUulbUC" id="map01-h">
        <div class="container">
            <div class="mbr-section-head mb-4">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Visit Us</strong>
                </h3>

            </div>
            <div class="google-map"><iframe frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q=350%205th%20Ave,%20New%20York,%20NY%2010118"
                    allowfullscreen=""></iframe></div>
        </div>
    </section>

    <section data-bs-version="5.1" class="form2 cid-tBnYTBB2e3" id="form02-g">
        <div class="container">
            <div class="row align-left">
                <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    <h1 class="mbr-section-title mbr-fonts-style mb-5 display-2" id="contact">Contact Us</h1>
                    <!--Formbuilder Form-->
                    <form action="mailto:{{ $contact->email }}" method="POST" class="mbr-form form-with-styler"
                        data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true"
                            value="BOxEcS03lVNCVpQqwGEWra0Hof6NW0U77tLv3P3nAymCZ86YQagHTfpucz80LxKx/5qthSqfpGr9BJr98O3HT59AdHgrHIhDJN2wpQuts69owb/yAJpZBTuh/eBMFT4V.NhwjrUACgZFt1ohS/9yvfLEJg9d8AGqy3cHasuvxH4xljoWvGpy6q1Gudwu8lAJpcqBfKn1d1huoRPtgJ8tsyB9Bcs89aHuhkRQr2nJ4mKlTOTFUyGfYgg6RW5l8GbEB">
                        <div class="form-row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for
                                filling out
                                the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...!
                                some
                                problem!</div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="name">
                                <label for="name-form02-g" class="form-control-label mbr-fonts-style display-7">Full
                                    Name</label>
                                <input type="text" name="name" placeholder="Enter your full name"
                                    data-form-field="name" class="form-control display-7" value=""
                                    id="name-form02-g">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="email">
                                <label for="email-form02-g"
                                    class="form-control-label mbr-fonts-style display-7">Email</label>
                                <input type="email" name="email" placeholder="Enter your email"
                                    data-form-field="email" class="form-control display-7" value=""
                                    id="email-form02-g">
                            </div>
                            <div data-for="phone" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="phone-form02-g" class="form-control-label mbr-fonts-style display-7">Phone
                                    number</label>
                                <input type="tel" name="phone" placeholder="Enter your phone"
                                    data-form-field="phone" class="form-control display-7" pattern="*"
                                    value="" id="phone-form02-g">
                            </div>
                            <div data-for="message" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="message-form02-g"
                                    class="form-control-label mbr-fonts-style display-7">Message</label>
                                <textarea name="message" placeholder="Enter your message" data-form-field="message" class="form-control display-7"
                                    id="message-form02-g"></textarea>
                            </div>
                            <div class="col-auto"><button type="submit" class="w-100 btn btn-primary display-4">Send
                                    Message</button></div>
                        </div>
                    </form><!--Formbuilder Form-->
                </div>

            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="contact1 cid-tBnYURRLNQ" id="contacts01-i">
        <div class="container">
            <div class="row align-left">
                <div class="col-12 col-lg-6">
                    <h1 class="mbr-section-title mbr-fonts-style mb-5 display-2">Let's Work Together</h1>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-white display-4"
                            href="{{ $contact->link }}">Contact
                            Us</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <p class="mbr-text align-right mbr-fonts-style display-4"><a href="#"
                            class="text-white">LinkedIn</a>
                        <br><a href="#" class="text-white">Twitter</a>
                        <br><a href="#" class="text-white">Instagram</a>
                        <br><a href="{{ $contact->link }}" class="text-white">Whatsapp</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="footer2 cid-tBnYV8Mwlc" once="footers" id="footer02-j">
        <div class="container">
            <div class="media-container-row mbr-white">
                <div class="col-12 wrapper">
                    <div class="produced">
                        <p class="mbr-text mb-0 mbr-fonts-style produced align-right display-4">
                            © Copyright 2030 Mobirise - All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('land/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('land/smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('land/ytplayer/index.js') }}"></script>
    <script src="{{ asset('land/dropdown/js/navbar-dropdown.js') }}"></script>
    <script src="{{ asset('land/playervimeo/vimeo_player.js') }}"></script>
    <script src="{{ asset('land/theme/js/script.js') }}"></script>
    <script src="{{ asset('land/formoid.min.js') }}"></script>

</body>

</html>
