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
    <title>{{ env('APP_NAME') }} | Admin Dashboard</title>
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
                <h2 class="brand-title text-white" width="124px" height="33px">Shopify</h2>
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
                        <h3 class="font-weight-bold text-success"><b>{{ env('APP_NAME') }}</b></h3>
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
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-045-heart text-white"></i>
                            <span class="nav-text text-white">Plans</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Add.Plan') }}" class="text-white">Add Plan</a></li>
                            <li><a href="{{ route('Admin.All.Plan') }}" class="text-white">All Plans</a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-050-info text-white"></i>
                            <span class="nav-text text-white">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.All.Users') }}" class="text-white">All Users</a></li>
                            <li><a href="{{ route('Admin.Pending.Users') }}" class="text-white">Pending Users</a></li>
                            <li><a href="{{ route('Admin.Approved.Users') }}" class="text-white">Approved Users</a></li>
                            <li><a href="{{ route('Admin.Rejected.Users') }}" class="text-white">Rejected Users</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-041-graph text-white"></i>
                            <span class="nav-text text-white">Tasks</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Add.Task') }}" class="text-white">Add Task</a></li>
                            <li><a href="{{ route('Admin.All.Task') }}" class="text-white">All Tasks</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon text-white" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-086-star text-white"></i>
                            <span class="nav-text text-white">LuckyDraw</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Add.Lucky.Product') }}" class="text-white">Add Lucky
                                    Product</a></li>
                            <li><a href="{{ route('Admin.Add.Winner') }}" class="text-white">Add Winner</a>
                            </li>
                            <li><a href="{{ route('Admin.All.Lucky.Product') }}" class="text-white">Products &
                                    Winner</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon text-white" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-gear fw-bold text-white"></i>
                            <span class="nav-text text-white">Settings</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Edit.Text') }}" class="text-white">Verification Text</a>
                            </li>
                            <li><a href="{{ route('Admin.Edit.Wallet') }}" class="text-white">Change Wallet</a></li>
                            <li><a href="{{ route('Admin.Edit.Setting') }}" class="text-white">Withdraw Limit</a>
                            </li>
                            <li><a href="{{ route('Admin.Edit.Contact') }}" class="text-white">Contact Details</a>
                            </li>
                            <li><a href="{{ route('Admin.Edit.Level') }}" class="text-white">Level Setting</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-045-heart text-white"></i>
                            <span class="nav-text text-white">Withdraw</span>
                        </a>
                        <ul aria-expanded="false" class="mm-collapse" style="">
                            <li><a href="{{ route('Admin.Pending.Withdraw') }}" class="text-white">Pending Withdraw</a>
                                <li><a href="{{ route('Admin.Approved.Withdraw') }}" class="text-white">Approved Withdraw</a>
                                    <li><a href="{{ route('Admin.Rejected.Withdraw') }}" class="text-white">Rejected Withdraw</a>
                            </li>
                        </ul>
                    </li>

                    <!--<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-072-printer"></i>
                            <span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="form-element.html">Form Elements</a></li>
                            <li><a href="form-wizard.html">Wizard</a></li>
                            <li><a href="form-ckeditor.html">CkEditor</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation.html">Form Validate</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-022-copy"></i>
                            <span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="page-login.html">Login<span
                                        class="badge badge-xs badge-success ms-3">Update</span></a></li>
                            <li><a href="page-register.html">Register<span
                                        class="badge badge-xs badge-success ms-3">Update</span></a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error<span
                                        class="badge badge-xs badge-success ms-3">Upadte</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">Error 400</a></li>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                    <li><a href="page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen<span
                                        class="badge badge-xs badge-success ms-3">Update</span></a></li>
                            <li><a href="empty-page.html">Empty Page</a></li>
                        </ul>
                    </li> -->
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
