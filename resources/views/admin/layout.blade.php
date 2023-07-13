<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}-Admin | {{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('assets/css/plugin.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ url('assets/css/line.css') }}">
    @stack('style')
</head>

<body class="layout-light side-menu">
    <div class="mobile-search">
        <form action="https://demo.dashboardmarket.com/" class="search-form">
            <img src="{{ url('assets/img/svg/search.svg') }}" alt="search" class="svg">
            <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..."
                aria-label="Search">
        </form>
    </div>
    <div class="mobile-author-actions"></div>
    <header class="header-top">
        <nav class="navbar navbar-light">
            <div class="navbar-left">
                <div class="logo-area">
                    <a class="navbar-brand" href="index.html">
                        <img class="dark" src="{{ url('assets/img/logo-dark.png') }}" alt="logo">
                        <img class="light" src="{{ url('assets/img/logo-white.png') }}" alt="logo">
                    </a>
                    <a href="#" class="sidebar-toggle">
                        <img class="svg" src="{{ url('assets/img/svg/align-center-alt.svg') }}" alt="img"></a>
                </div>
                <a href="#" class="customizer-trigger">
                    <i class="uil uil-edit-alt"></i>
                    <span>Customize...</span>
                </a>
            </div>

            <div class="navbar-right">
                <ul class="navbar-right__menu">
                    <li class="nav-author">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle"><img
                                    src="{{ url('assets/img/author-nav.jpg') }}" alt class="rounded-circle">
                                <span class="nav-item__title">Danial<i
                                        class="las la-angle-down nav-item__arrow"></i></span>
                            </a>
                            <div class="dropdown-parent-wrapper">
                                <div class="dropdown-wrapper">
                                    <div class="nav-author__info">
                                        <div class="author-img">
                                            <img src="{{ url('assets/img/author-nav.jpg') }}" alt
                                                class="rounded-circle">
                                        </div>
                                        <div>
                                            <h6>Rabbi Islam Rony</h6>
                                            <span>UI Designer</span>
                                        </div>
                                    </div>
                                    <div class="nav-author__options">
                                        <ul>
                                            <li>
                                                <a href>
                                                    <i class="uil uil-user"></i> Profile</a>
                                            </li>
                                            <li>
                                                <a href>
                                                    <i class="uil uil-setting"></i>
                                                    Settings</a>
                                            </li>
                                            <li>
                                                <a href>
                                                    <i class="uil uil-key-skeleton"></i> Billing</a>
                                            </li>
                                            <li>
                                                <a href>
                                                    <i class="uil uil-users-alt"></i> Activity</a>
                                            </li>
                                            <li>
                                                <a href>
                                                    <i class="uil uil-bell"></i> Help</a>
                                            </li>
                                        </ul>
                                        <a href class="nav-author__signout">
                                            <i class="uil uil-sign-out-alt"></i> Sign Out</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>

                </ul>

                <div class="navbar-right__mobileAction d-md-none">
                    <a href="#" class="btn-search">
                        <img src="{{ url('assets/img/svg/search.svg') }}" alt="search" class="svg feather-search">
                        <img src="{{ url('assets/img/svg/x.svg') }}" alt="x" class="svg feather-x"></a>
                    <a href="#" class="btn-author-action">
                        <img class="svg" src="{{ url('assets/img/svg/more-vertical.svg') }}"
                            alt="more-vertical"></a>
                </div>
            </div>

        </nav>
    </header>

    <main class="main-content">
        <div class="sidebar-wrapper">
            <div class="sidebar sidebar-collapse" id="sidebar">
                <div class="sidebar__menu-group">
                    <ul class="sidebar_nav">

                        <li>
                            <a href="{{ url('/admin') }}" class>
                                <span class="nav-icon uil uil-create-dashboard"></span>
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>


                        <li class="menu-title mt-30">
                            <span>Applications</span>
                        </li>

                        <li class="has-child">
                            <a href="#" class>
                                <span class="nav-icon uil uil-folder"></span>
                                <span class="menu-text">Coaching</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li class>
                                    <a href="{{ url('admin/coaching/all') }}">All Coaching</a>
                                </li>
                                <li class>
                                    <a href="{{ url('admin/coaching/create') }}">Create</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-child">
                            <a href="#" class>
                                <span class="nav-icon uil uil-users-alt"></span>
                                <span class="menu-text">Trash Can</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li class>
                                    <a href="{{ url('admin/coaching/all/trash') }}">Coaching</a>
                                </li>
                            </ul>
                        </li>


                        <li class>
                            <a href="{{ url('admin/logout') }}">
                                <span class="nav-icon uil uil-signin"></span>
                                <span class="menu-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contents">
            <div class="crm mb-25">
                <div class="container-fluid">
                    <div class="row ">


                        @yield('content')


                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-wrapper">
            <div class="footer-wrapper__inside">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <p><span>© 2023</span><a href="#">Sovware</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-menu text-end">
                                <ul>
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Team</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <div id="overlayer">
        <div class="loader-overlay">
            <div class="dm-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </div>
    </div>
    <div class="overlay-dark-sidebar"></div>
    <div class="customizer-overlay"></div>
    <div class="customizer-wrapper">
        <div class="customizer">
            <div class="customizer__head">
                <h4 class="customizer__title">Customizer</h4>
                <span class="customizer__sub-title">Customize your overview page layout</span>
                <a href="#" class="customizer-close">
                    <img class="svg" src="{{ url('assets/img/svg/x2.svg') }}" alt>
                </a>
            </div>
            <div class="customizer__body">
                <div class="customizer__single">
                    <h4>Layout Type</h4>
                    <ul class="customizer-list d-flex layout">
                        <li class="customizer-list__item">
                            <a href="https://demo.dashboardmarket.com/hexadash-html/ltr" class="active">
                                <img src="{{ url('assets/img/ltr.png') }}" alt>
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item">
                            <a href="https://demo.dashboardmarket.com/hexadash-html/rtl">
                                <img src="{{ url('assets/img/rtl.png') }}" alt>
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="customizer__single">
                    <h4>Sidebar Type</h4>
                    <ul class="customizer-list d-flex l_sidebar">
                        <li class="customizer-list__item">
                            <a href="#" data-layout="light" class="dark-mode-toggle active">
                                <img src="{{ url('assets/img/light.png') }}" alt>
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item">
                            <a href="#" data-layout="dark" class="dark-mode-toggle">
                                <img src="{{ url('assets/img/dark.png') }}" alt>
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="customizer__single">
                    <h4>Navbar Type</h4>
                    <ul class="customizer-list d-flex l_navbar">
                        <li class="customizer-list__item">
                            <a href="#" data-layout="side" class="active">
                                <img src="{{ url('assets/img/side.png') }}" alt>
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item top">
                            <a href="#" data-layout="top">
                                <img src="{{ url('assets/img/top.png') }}" alt>
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="colors"></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgYKHZB_QKKLWfIRaYPCadza3nhTAbv7c"></script>

    <script src="{{ url('assets/js/plugins.min.js') }}"></script>
    <script src="{{ url('assets/js/script.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        let base_url = window.location.origin;
        console.log(base_url);
    </script>
    @stack('script')
</body>

</html>
