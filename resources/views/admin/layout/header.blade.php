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
                <svg class="logo-abbr" width="53" height="53" viewBox="0 0 53 53">
                    <path
                        d="M21.6348 8.04782C21.6348 5.1939 23.9566 2.87204 26.8105 2.87204H28.6018L28.0614 1.37003C27.7576 0.525342 26.9616 0 26.1132 0C25.8781 0 25.639 0.0403711 25.4052 0.125461L7.3052 6.7133C6.22916 7.105 5.67535 8.29574 6.06933 9.37096L7.02571 11.9814H21.6348V8.04782Z"
                        fill="#759DD9" />
                    <path
                        d="M26.8105 5.97754C25.6671 5.97754 24.7402 6.90442 24.7402 8.04786V11.9815H42.8555V8.04786C42.8555 6.90442 41.9286 5.97754 40.7852 5.97754H26.8105Z"
                        fill="#F8A961" />
                    <path class="svg-logo-primary-path"
                        d="M48.3418 41.8457H41.0957C36.8148 41.8457 33.332 38.3629 33.332 34.082C33.332 29.8011 36.8148 26.3184 41.0957 26.3184H48.3418V19.2275C48.3418 16.9408 46.4879 15.0869 44.2012 15.0869H4.14062C1.85386 15.0869 0 16.9408 0 19.2275V48.8594C0 51.1462 1.85386 53 4.14062 53H44.2012C46.4879 53 48.3418 51.1462 48.3418 48.8594V41.8457Z"
                        fill="#5BCFC5" />
                    <path class="svg-logo-primary-path"
                        d="M51.4473 29.4238H41.0957C38.5272 29.4238 36.4375 31.5135 36.4375 34.082C36.4375 36.6506 38.5272 38.7402 41.0957 38.7402H51.4473C52.3034 38.7402 53 38.0437 53 37.1875V30.9766C53 30.1204 52.3034 29.4238 51.4473 29.4238ZM41.0957 35.6348C40.2382 35.6348 39.543 34.9396 39.543 34.082C39.543 33.2245 40.2382 32.5293 41.0957 32.5293C41.9532 32.5293 42.6484 33.2245 42.6484 34.082C42.6484 34.9396 41.9532 35.6348 41.0957 35.6348Z"
                        fill="#5BCFC5" />
                </svg>
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
