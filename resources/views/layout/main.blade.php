<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>@yield('title') | Lazis Baiturrahman</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesbrand" name="author" />

        @include('layout.css')

        @yield('privateCss')

    </head>

    <body>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="/" class="logo">
                        <span class="logo-light">
                            <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="64">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="45">
                        </span>
                    </a>
                </div>

                <nav class="navbar-custom">
                    <ul class="navbar-right list-inline float-right mb-0">

                        <!-- full screen -->
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                <i class="ion ion-md-qr-scanner noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list list-inline-item">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
                                    <a class="dropdown-item d-block" href="#"><i class="mdi mdi-settings"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-power text-danger"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Overview</li>
                            <li>
                                <a href="{{ URL('/') }}" class="waves-effect"><i class="fas fa-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="menu-title">Donasi</li>
                            <li>
                                <a href="/donatur" class="waves-effect"><i class="mdi mdi-account-card-details-outline"></i><span> Data Donatur Tetap </span></a>
                            </li>
                            <li>
                                <a href="/donasi" class="waves-effect"><i class="fas fa-donate"></i><span> Laporan Donasi </span></a>
                            </li>

                            <li class="menu-title">Program</li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-hand-holding-usd"></i><span>
                                    Data Penerima <span class="float-right menu-arrow"><i
                                            class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="/bus">BUS</a></li>
                                    <li><a href="/kubah">KUBAH</a></li>
                                    <li><a href="/simbahku">SIMBAHKU</a></li>
                                    <li><a href="/lain">Program Lain</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/penyaluran" class="waves-effect"><i class="fas fa-people-carry"></i><span> Laporan Penyaluran </span></a>
                            </li>

                            <li class="menu-title">SDM</li>
                            <li>
                                <a href="/karyawan" class="waves-effect"><i class="mdi mdi-tie"></i><span> Karyawan </span></a>
                            </li>
                            <li>
                                <a href="/relawan" class="waves-effect"><i class="fas fa-users"></i><span> Relawan Sabab </span></a>
                            </li>

                            <li class="menu-title">Homepage</li>
                            <li>
                                <a href="#" class="waves-effect"><i class="mdi mdi-settings"></i><span> Manajemen Homepage </span></a>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->
                @yield('container')
                <footer class="footer">
                    <span class="d-none d-sm-inline-block">© 2020 Lazis Baiturrahman</span>
                </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
        </div>
        <!-- END wrapper -->

        @yield('rightSidebar')
        
        @include('layout.script')

        @yield('privateScript')
        
    </body>

</html>