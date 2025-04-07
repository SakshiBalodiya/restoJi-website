<?php
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\UserRoles;
use App\Helpers\AppHelper as Helper;


?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('images/restoji_favicon.png') }}" type="image/png" />
	<!--plugins-->
	<!-- <link href="{{ asset ('admin/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/> -->
	<link href="{{ asset ('admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{ asset ('admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{ asset ('admin/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset ('admin/css/pace.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

	<script src="{{ asset ('admin/js/pace.min.js')}}"></script>
    <link href="{{ asset('css/colors/theme.css') }}" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link href="{{ asset ('admin/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset ('admin/css/bootstrap-extended.css')}}" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="{{ asset ('admin/css/app.css')}}" rel="stylesheet">
	<!-- <link href="{{ asset('admin/css2?family=Roboto:wght@400;500&display=swap') }}" rel="stylesheet"> -->
	<link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset ('admin/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{ asset ('admin/css/semi-dark.css')}}" />
	<!-- <link rel="stylesheet" href="{{ asset ('admin/css/header-colors.css')}}" /> -->
	<title>Restoji</title>
</head>
<body class="front {{ Str::contains(request()->url(), 'restoji') ? 'red-theme' : 'blue-theme' }}">

	<!--wrapper-->
	<div class="wrapper">
		<div class="sidebar-wrapper" data-simplebar="init">
			<div class="simplebar-mask">
				<div class="simplebar-offset" style="right: 0px; bottom: 0px;">
					<div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
						<div class="simplebar-content mm-active" style="padding: 0px;" >
                      
							<div class="sidebar-header">
								<div class="sidebar_header-image">
									<img src="{{asset('images/logo.png')}}" class="logo-icon" alt="logo icon" width="180">
								</div>
								<!-- <div class="sidebar_header-logo">
									<img src="{{asset('images/restoji_logo.png')}}" class="logo-icon" width="40" alt="logo icon">
								</div> -->
								<!-- <div class="toggle-icon ms-auto"><i class="bx bx-arrow-back"></i>
								</div> -->
							</div>
                            <ul class="metismenu mm-show" id="menu">
								<li class="menu-item {{ Request::is('admin/blog') ? 'selected' : '' }}">
									<a href="{{url('admin/blog')}}" aria-expanded="true">
										<div class="parent-icon"><i class='bx bx-detail'></i>
										</div>
										<div class="menu-title">Blogs</div>
									</a>
								</li>
                                {{-- <li class="menu-item {{ Request::is('admin/faq') ? 'selected' : '' }}">
									<a href="{{url('admin/faq')}}" aria-expanded="true">
										<div class="parent-icon"><i class='bx bxs-dashboard'></i>
										</div>
										<div class="menu-title">FAQ</div>
									</a>
								</li> --}}
								
									{{-- @csrf
		
									<x-dropdown-link :href="route('logout')"
											onclick="event.preventDefault();
														this.closest('form').submit();">
										{{ __('Log Out') }}
									 --}}
									 <form method="POST" action="{{ route('logout') }}">
										@csrf
								<li class="menu-item logout_btn">
								
										
										<button class="btn custom-btn" style="width:100% !important;" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
											{{-- <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"> --}}
												Logout
											{{-- </x-dropdown-link> --}}
									</button>
									
							
								</li>
							</form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset ('admin/js/bootstrap.bundle.min.js')}} "></script>
	<!--plugins-->
	<script src="{{ asset ('admin/js/jquery.min.js')}}"></script>
	<script src="{{ asset ('admin/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ asset ('admin/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<!-- <script src="{{ asset ('admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script> -->
	<!-- <script src="{{ asset ('admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script> -->
	<!-- <script src="{{ asset ('admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script> -->
	<script src="{{ asset ('admin/plugins/chartjs/js/chart.js')}}"></script>
	<!-- <script src="{{ asset ('admin/js/index.js')}}"></script> -->
	<script src="{{ asset ('https://unpkg.com/feather-icons')}}"></script>

	<!--app JS-->
	<script src="{{ asset ('admin/js/app.js')}}"></script>
</body>
</html>