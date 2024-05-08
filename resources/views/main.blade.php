<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> @yield('title') &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('style/assets/modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/modules/@fortawesome/fontawesome-free/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
    <link rel="stylesheet"
        href="{{ asset('style/assets/modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('style/assets/modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/modules/izitoast/dist/css/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/modules/select2/dist/css/select2.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('style/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                    {{-- <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div> --}}
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link nav-link-lg"><span id="date-time"></span></a>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('style/assets/img/avatar/avatar-4.png') }}"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">{{ auth()->user()->name }}
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">Stisla</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">St</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i
                                    class="fas fa-fire"></i><span>Dashboard</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                                <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">Master Data</li>
                        <li
                            class="dropdown {{ (request()->segment(1) === 'pegawai' ? 'active' : request()->segment(1) === 'user') ? 'active' : '' }}">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-users-cog"></i> <span>Pegawai</span></a>
                            <ul class="dropdown-menu">
                                <li class="{{ request()->segment(1) === 'pegawai' ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ url('/pegawai') }}">Data Pegawai</a></li>
                                <li class="{{ request()->segment(1) === 'user' ? 'active' : '' }}"><a class="nav-link"
                                        href="{{ url('user') }}">Data User</a></li>

                            </ul>
                        </li>
                        <li><a class="nav-link" href="{{ url('/pegawai') }}"><i class="far fa-users"></i> <span>Blank
                                    Page</span></a></li>

                    </ul>

                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                            <i class="fas fa-rocket"></i> Documentation
                        </a>
                    </div>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('header')

            </div>

            <div class="section-body">
                @yield('content')

            </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2024 <div class="bullet"></div> Design By <a href="">Ichlasul Amal</a>
            </div>
            <div class="footer-right">

            </div>
        </footer>
    </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('style/assets/modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('style/assets/modules/popper.js') }}"></script>
    <script src="{{ asset('style/assets/modules/tooltip.js/dist/tooltip.js') }}"></script>
    <script src="{{ asset('style/assets/modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/assets/modules/nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('style/assets/modules/moment/moment.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="https:////cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <script src="{{ asset('style/assets/modules/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('style/assets/modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('style/assets/modules/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('style/assets/modules/izitoast/dist/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('style/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('style/assets/js/page/modules-datatables.js') }}"></script>
    <script src="{{ asset('style/assets/js/page/modules-toastr.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('style/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('style/assets/js/custom.js') }}"></script>
</body>

</html>

<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':

                iziToast.info({
                    title: "{{ Session::get('alert-type') }}",
                    message: "{{ Session::get('message') }}",
                });
                break;
            case 'success':

                iziToast.success({
                    title: "{{ Session::get('alert-type') }}",
                    message: "{{ Session::get('message') }}",
                });

                break;
            case 'warning':

                iziToast.warning({
                    title: "{{ Session::get('alert-type') }}",
                    message: "{{ Session::get('message') }}",
                });

                break;
            case 'error':

                iziToast.error({
                    title: "{{ Session::get('alert-type') }}",
                    message: "{{ Session::get('message') }}",
                });

                break;
        }
    @endif


    window.addEventListener("load", () => {
        clock();

        function clock() {
            const today = new Date();

            // get time components
            const hours = today.getHours();
            const minutes = today.getMinutes();
            const seconds = today.getSeconds();

            //add '0' to hour, minute & second when they are less 10
            const hour = hours < 10 ? "0" + hours : hours;
            const minute = minutes < 10 ? "0" + minutes : minutes;
            const second = seconds < 10 ? "0" + seconds : seconds;

            //make clock a 12-hour time clock
            const hourTime = hour > 12 ? hour - 12 : hour;

            // if (hour === 0) {
            //   hour = 12;
            // }
            //assigning 'am' or 'pm' to indicate time of the day
            const ampm = hour < 12 ? "AM" : "PM";

            // get date components
            const month = today.getMonth();
            const year = today.getFullYear();
            const day = today.getDate();

            //declaring a list of all months in  a year
            const monthList = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ];

            //get current date and time
            const date = day + " " + monthList[month] + " " + year;
            const time = hourTime + ":" + minute + ":" + second + " " + ampm;

            //combine current date and time
            const dateTime = date + " - " + time;

            //print current date and time to the DOM
            document.getElementById("date-time").innerHTML = dateTime;
            setTimeout(clock, 1000);
        }
    });
</script>

@yield('script')
