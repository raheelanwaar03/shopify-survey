<!DOCTYPE html>
<html lang="en">

<head>

    <!-- All Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Shopify">
    <meta name="robots" content="">
    <meta name="keywords" content="Earning Platform">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('logo.png') }}">
    <!-- Page Title Here -->
    <title>{{ env('APP_NAME') }} | User Dashboard</title>
    @yield('links')
    <!-- Style css -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <x-alert />
    {{-- <div id="preloader">
		<div class="waviy">
			<span style="--i:1">L</span>
			<span style="--i:2">o</span>
			<span style="--i:3">a</span>
			<span style="--i:4">d</span>
			<span style="--i:5">i</span>
			<span style="--i:6">n</span>
			<span style="--i:7">g</span>
			<span style="--i:8">.</span>
			<span style="--i:9">.</span>
			<span style="--i:10">.</span>
		</div>
	</div> --}}
    <div id="main-wrapper">
        <div class="nav-header" style="background-color: #4cb32b;">
            <a href="{{ route('User.Dashboard') }}" class="brand-logo">
                <img src="{{ asset('logo.png') }}" height="50px" width="50px" alt="">
                <h2 class="brand-title text-white" width="124px" height="33px">Shopifi</h2>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line text-white"></span><span class="line text-white"></span><span
                        class="line text-white"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode p-0" href="javascript:void(0);">
                                    <i id="icon-light" class="fas fa-sun"></i>
                                    <i id="icon-dark" class="fas fa-moon"></i>

                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i
                                                class="flaticon-381-search-2"></i></a></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="dlabnav text-white" style="background-color: #4cb32b;color: white;">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="{{ route('User.Dashboard') }}" aria-expanded="false">
                            <i class="flaticon-025-dashboard text-white"></i>
                            <span class="nav-text text-white">Dashboard</span>
                        </a>
                    </li>
                    <li><a class="" href="{{ route('User.new.tasks') }}">
                            <i class="fa-solid fa-briefcase text-white" style="font-size: 20px"></i>
                            <span class="nav-text text-white">Tasks</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-wallet text-white" style="font-size: 20px"></i>
                            <span class="nav-text text-white">Withdraw</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('User.Apply.Withdraw') }}" class="text-white">Apply Withdraw</a></li>
                            <li><a href="{{ route('User.All.Withdraw') }}" class="text-white">Withdraw History</a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-user-plus text-white" style="font-size: 20px"></i>
                            <span class="nav-text text-white">Team</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('User.All.Members') }}" class="text-white">All Team Members</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-086-star text-white"></i>
                            <span class="nav-text text-white">Lucky Draw</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('User.Lucky.Draw') }}" class="text-white">Lucky Draw</a></li>
                            <li><a href="{{ route('User.Lucky.Winner') }}" class="text-white">Winner</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <div class="d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-power-off text-white" style="font-size: 20px"></i>
                                    <button
                                        style="background: none;border:none;color:white;margin-left:10px;">Logout</button>
                                </div>
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
