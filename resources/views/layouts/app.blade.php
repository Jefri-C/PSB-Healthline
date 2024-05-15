<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Healthline</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset ('images/logos/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset ("css/styles.min.css")}}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="{{asset ('images/logos/dark-logo.svg')}}" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                            <a class="sidebar-link {{ request()->routeIs('specialities') ? 'active' : '' }}" href="{{ route('specialities')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-asterisk"></i>
                                </span>
                                <span class="hide-menu">Specialities</span>
                            </a>
                            <a class="sidebar-link {{ request()->routeIs('doctor') ? 'active' : '' }}" href="{{ route('doctor')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-stethoscope"></i>
                                </span>
                                <span class="hide-menu">Doctors</span>
                            </a>
                            <a class="sidebar-link {{ request()->routeIs('patients') ? 'active' : '' }}" href="{{ route('patients')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-friends"></i>
                                </span>
                                <span class="hide-menu">Patients</span>
                            </a>
                            <a class="sidebar-link {{ request()->routeIs('appointments') ? 'active' : '' }}" href="{{ route('appointments')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-address-book"></i>
                                </span>
                                <span class="hide-menu">Appointments</span>
                            </a>
                            <a class="sidebar-link {{ request()->routeIs('lab') ? 'active' : '' }}" href="{{ route('lab')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-microscope"></i>
                                </span>
                                <span class="hide-menu">Lab Results</span>
                            </a>
                        </li>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset ('images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <!-- <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a> -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            @yield('content')
        </div>
    </div>
    <script src="{{asset ('libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset ('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- <script src="{{asset ('js/sidebarmenu.js')}}"></script> -->
    <script src="{{asset ('js/app.min.js')}}"></script>
    <script src="{{asset ("libs/apexcharts/dist/apexcharts.min.js")}}"></script>
    <script src="{{asset ('libs/simplebar/dist/simplebar.js')}}"></script>
    <script src="{{asset ('js/dashboard.js')}}"></script>
</body>

</html>
