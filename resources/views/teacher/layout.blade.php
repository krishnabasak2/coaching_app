<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coaching</title>
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
                                <span class="menu-text">Project</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li class>
                                    <a href="projects.html">Project</a>
                                </li>
                                <li class>
                                    <a href="application-ui.html">Project
                                        Details</a>
                                </li>
                                <li class>
                                    <a href="create.html">Create
                                        Project</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-child">
                            <a href="#" class>
                                <span class="nav-icon uil uil-users-alt"></span>
                                <span class="menu-text">Users</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li class>
                                    <a href="users-membar.html">Team</a>
                                </li>
                                <li class>
                                    <a href="users-card.html">Users Grid</a>
                                </li>
                                <li class>
                                    <a href="users-list.html">Users
                                        List</a>
                                </li>
                                <li class>
                                    <a href="users-card2.html">Users Grid
                                        style</a>
                                </li>
                                <li class>
                                    <a href="users-group.html">Users
                                        Group</a>
                                </li>
                                <li class>
                                    <a href="user-info.html">Add User</a>
                                </li>
                                <li class>
                                    <a href="users-datatable.html">Users
                                        Table</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class>
                                <span class="nav-icon uil uil-at"></span>
                                <span class="menu-text">Contact</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li class>
                                    <a href="contact-2.html">Contact
                                        Grid</a>
                                </li>
                                <li class>
                                    <a href="contact-1.html">Contact
                                        List</a>
                                </li>
                                <li class>
                                    <a href="contact-3.html">Contact
                                        Create</a>
                                </li>
                            </ul>
                        </li>


                        <li class>
                            <a href="{{ url('teacher/logout') }}">
                                <span class="nav-icon uil uil-signin"></span>
                                <span class="menu-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



        @yield('content')



        <div class="contents">
            <div class="crm mb-25">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">TEACHER DASHBOARD</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i
                                                        class="uil uil-estate"></i>Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Demo 1</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="row">
                                <div class="col-xxl-6 col-sm-6 mb-25">

                                    <div
                                        class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">
                                        <div class="overview-content w-100">
                                            <div
                                                class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                                                <div class="ap-po-details__titlebar">
                                                    <h1>100+</h1>
                                                    <p>Total Products</p>
                                                </div>
                                                <div class="ap-po-details__icon-area">
                                                    <div class="svg-icon order-bg-opacity-primary color-primary">
                                                        <i class="uil uil-briefcase-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ap-po-details-time">
                                                <span class="color-success"><i class="las la-arrow-up"></i>
                                                    <strong>25.36%</strong></span>
                                                <small>Since last month</small>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xxl-6 col-sm-6 mb-25">

                                    <div
                                        class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">
                                        <div class="overview-content w-100">
                                            <div
                                                class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                                                <div class="ap-po-details__titlebar">
                                                    <h1>30,825</h1>
                                                    <p>Total Orders</p>
                                                </div>
                                                <div class="ap-po-details__icon-area">
                                                    <div class="svg-icon order-bg-opacity-info color-info">
                                                        <i class="uil uil-shopping-cart-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ap-po-details-time">
                                                <span class="color-success"><i class="las la-arrow-up"></i>
                                                    <strong>25.36%</strong></span>
                                                <small>Since last month</small>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xxl-6 col-sm-6 mb-25">

                                    <div
                                        class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">
                                        <div class="overview-content w-100">
                                            <div
                                                class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                                                <div class="ap-po-details__titlebar">
                                                    <h1>$30,825</h1>
                                                    <p>Total Sales</p>
                                                </div>
                                                <div class="ap-po-details__icon-area">
                                                    <div class="svg-icon order-bg-opacity-secondary color-secondary">
                                                        <i class="uil uil-usd-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ap-po-details-time">
                                                <span class="color-danger"><i class="las la-arrow-down"></i>
                                                    <strong>25.36%</strong></span>
                                                <small>Since last month</small>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xxl-6 col-sm-6 mb-25">

                                    <div
                                        class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">
                                        <div class="overview-content w-100">
                                            <div
                                                class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                                                <div class="ap-po-details__titlebar">
                                                    <h1>30,825</h1>
                                                    <p>New Customers</p>
                                                </div>
                                                <div class="ap-po-details__icon-area">
                                                    <div class="svg-icon order-bg-opacity-warning color-warning">
                                                        <i class="uil uil-users-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ap-po-details-time">
                                                <span class="color-success"><i class="las la-arrow-up"></i>
                                                    <strong>25.36%</strong></span>
                                                <small>Since last month</small>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 mb-25">
                            <div class="card border-0 h-100">
                                <div class="card-header border-0 pb-md-0 pb-20">
                                    <h4>Sales Reports</h4>
                                    <div class="card-extra">
                                        <div class="dropdown dropleft">
                                            <a href="#" role="button" id="else"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ url('assets/img/svg/more-horizontal.svg') }}"
                                                    alt="more-horizontal" class="svg">
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="else">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0 pb-25 mt-n10">
                                    <div class="label-detailed">
                                        <div class="label-detailed__single"><span
                                                class="label-detailed__type label-detailed__type--primary">Orders</span>
                                            <strong class="label-detailed__total">$8,550</strong> <span
                                                class="label-detailed__status color-success"><img class="svg')}}"
                                                    src="{{ url('assets/img/svg/arrow-success-up.svg') }}"
                                                    alt><strong>25%</strong></span>
                                        </div>
                                        <div class="label-detailed__single"><span
                                                class="label-detailed__type label-detailed__type--info">Sales</span>
                                            <strong class="label-detailed__total">$5,550</strong> <span
                                                class="label-detailed__status color-danger"><img class="svg"
                                                    src="{{ url('assets/img/svg/arrow-danger-down.svg') }}" alt>
                                                <strong>15%</strong></span>
                                        </div>
                                    </div>
                                    <div class="parentContainer position-relative">
                                        <div>
                                            <canvas id="salesReports"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 mb-25">
                            <div class="card border-0 px-25 h-100">
                                <div class="card-header px-0 border-0">
                                    <h6>Sales Growth</h6>
                                    <div class="card-extra">
                                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                                            <li>
                                                <a class="active" href="#salesgrowth" data-bs-toggle="tab"
                                                    id="salesgrowth-tab" role="tab"
                                                    aria-selected="true">Today</a>
                                            </li>
                                            <li>
                                                <a href="#salesgrowth2" data-bs-toggle="tab" id="salesgrowth2-tab"
                                                    role="tab" aria-selected="false">Week</a>
                                            </li>
                                            <li>
                                                <a href="#salesgrowth3" data-bs-toggle="tab" id="salesgrowth3-tab"
                                                    role="tab" aria-selected="false">Month</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0 pb-sm-25">
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="salesgrowth" role="tabpanel"
                                            aria-labelledby="salesgrowth-tab">
                                            <div class="label-detailed label-detailed--two">
                                                <div class="label-detailed__single"><strong
                                                        class="label-detailed__total">$8,550</strong> <span
                                                        class="label-detailed__status color-success"><img
                                                            class="svg"
                                                            src="{{ url('assets/img/svg/arrow-success-up.svg') }}"
                                                            alt>
                                                        <strong>25%</strong></span> </div>
                                                <div class="label-detailed__single"><strong
                                                        class="label-detailed__total">$5,550</strong> <span
                                                        class="label-detailed__status color-danger"><img
                                                            class="svg"
                                                            src="{{ url('assets/img/svg/arrow-danger-down.svg') }}"
                                                            alt>
                                                        <strong>15%</strong></span> </div>
                                            </div>
                                            <div class="parentContainer">
                                                <div>
                                                    <canvas id="salesGrowthToday"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="salesgrowth2" role="tabpanel"
                                            aria-labelledby="salesgrowth2-tab">
                                            <div class="label-detailed label-detailed--two">
                                                <div class="label-detailed__single"><strong
                                                        class="label-detailed__total">$8,550</strong> <span
                                                        class="label-detailed__status color-success"><img
                                                            class="svg"
                                                            src="{{ url('assets/img/svg/arrow-success-up.svg') }}"
                                                            alt>
                                                        <strong>25%</strong></span> </div>
                                                <div class="label-detailed__single"><strong
                                                        class="label-detailed__total">$5,550</strong> <span
                                                        class="label-detailed__status color-danger"><img
                                                            class="svg"
                                                            src="{{ url('assets/img/svg/arrow-danger-down.svg') }}"
                                                            alt>
                                                        <strong>15%</strong></span> </div>
                                            </div>
                                            <div class="parentContainer">
                                                <div>
                                                    <canvas id="salesGrowthWeek"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="salesgrowth3" role="tabpanel"
                                            aria-labelledby="salesgrowth3-tab">
                                            <div class="label-detailed label-detailed--two">
                                                <div class="label-detailed__single"><strong
                                                        class="label-detailed__total">$8,550</strong> <span
                                                        class="label-detailed__status color-success"><img
                                                            class="svg"
                                                            src="{{ url('assets/img/svg/arrow-success-up.svg') }}"
                                                            alt>
                                                        <strong>25%</strong></span> </div>
                                                <div class="label-detailed__single"><strong
                                                        class="label-detailed__total">$5,550</strong> <span
                                                        class="label-detailed__status color-danger"><img
                                                            class="svg"
                                                            src="{{ url('assets/img/svg/arrow-danger-down.svg') }}"
                                                            alt>
                                                        <strong>15%</strong></span> </div>
                                            </div>
                                            <div class="parentContainer">
                                                <div>
                                                    <canvas id="salesGrowthMonth"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-8 mb-25">
                            <div class="card border-0 h-100">
                                <div class="card-header">
                                    <h6>Sales by Location</h6>
                                    <div class="card-extra">
                                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                                            <li>
                                                <a href="#se_region-today" class="active" data-bs-toggle="tab"
                                                    id="se_region-today-tab" role="tab"
                                                    aria-selected="true">Today</a>
                                            </li>
                                            <li>
                                                <a href="#se_region-week" data-bs-toggle="tab"
                                                    id="se_region-week-tab" role="tab"
                                                    aria-selected="false">Week</a>
                                            </li>
                                            <li>
                                                <a href="#se_region-month" data-bs-toggle="tab"
                                                    id="se_region-month-tab" role="tab"
                                                    aria-selected="false">Month</a>
                                            </li>
                                            <li>
                                                <a href="#se_region-year" data-bs-toggle="tab"
                                                    id="se_region-year-tab" role="tab"
                                                    aria-selected="false">Year</a>
                                            </li>
                                        </ul>
                                        <div class="dropdown dropleft">
                                            <a href="#" role="button" id="else"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ url('assets/img/svg/more-horizontal.svg') }}"
                                                    alt="more-horizontal" class="svg">
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="else">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-sm-30 pb-sm-50 pb-30">
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="se_region-today" role="tabpanel"
                                            aria-labelledby="se_region-today-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="table-responsive table-top-regions">
                                                        <table class="table table--default table-borderless">
                                                            <thead>
                                                                <tr>
                                                                    <th>Top region</th>
                                                                    <th>order</th>
                                                                    <th>Revenue</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>United States</td>
                                                                    <td>90</td>
                                                                    <td>$536</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Australia</td>
                                                                    <td>70</td>
                                                                    <td>$573</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Canada</td>
                                                                    <td>30</td>
                                                                    <td>$457</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Japan</td>
                                                                    <td>50</td>
                                                                    <td>$524</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>India</td>
                                                                    <td>20</td>
                                                                    <td>$354</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex align-items-center justify-content-center">
                                                    <div class="regions-svg">
                                                        <div id="s_region-map_T"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="se_region-week" role="tabpanel"
                                            aria-labelledby="se_region-week-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="table-responsive table-top-regions">
                                                        <table class="table table--default table-borderless">
                                                            <thead>
                                                                <tr>
                                                                    <th>Top region</th>
                                                                    <th>order</th>
                                                                    <th>Revenue</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>United States</td>
                                                                    <td>90</td>
                                                                    <td>$536</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Australia</td>
                                                                    <td>70</td>
                                                                    <td>$573</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Canada</td>
                                                                    <td>30</td>
                                                                    <td>$457</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Japan</td>
                                                                    <td>50</td>
                                                                    <td>$524</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>India</td>
                                                                    <td>20</td>
                                                                    <td>$354</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex align-items-center justify-content-center">
                                                    <div class="regions-svg">
                                                        <div id="s_region-map_W"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="se_region-month" role="tabpanel"
                                            aria-labelledby="se_region-month-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="table-responsive table-top-regions">
                                                        <table class="table table--default table-borderless">
                                                            <thead>
                                                                <tr>
                                                                    <th>Top region</th>
                                                                    <th>order</th>
                                                                    <th>Revenue</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>United States</td>
                                                                    <td>90</td>
                                                                    <td>$536</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Australia</td>
                                                                    <td>70</td>
                                                                    <td>$573</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Canada</td>
                                                                    <td>30</td>
                                                                    <td>$457</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Japan</td>
                                                                    <td>50</td>
                                                                    <td>$524</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>India</td>
                                                                    <td>20</td>
                                                                    <td>$354</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex align-items-center justify-content-center">
                                                    <div class="regions-svg">
                                                        <div id="s_region-map_M"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="se_region-year" role="tabpanel"
                                            aria-labelledby="se_region-year-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="table-responsive table-top-regions">
                                                        <table class="table table--default table-borderless">
                                                            <thead>
                                                                <tr>
                                                                    <th>Top region</th>
                                                                    <th>order</th>
                                                                    <th>Revenue</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>United States</td>
                                                                    <td>90</td>
                                                                    <td>$536</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Australia</td>
                                                                    <td>70</td>
                                                                    <td>$573</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Canada</td>
                                                                    <td>30</td>
                                                                    <td>$457</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Japan</td>
                                                                    <td>50</td>
                                                                    <td>$524</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>India</td>
                                                                    <td>20</td>
                                                                    <td>$354</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex align-items-center justify-content-center">
                                                    <div class="regions-svg">
                                                        <div id="s_region-map_Y"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6 mb-25">
                            <div class="card border-0 px-25">
                                <div class="card-header px-0 border-0">
                                    <h6>Top Selling Products</h6>
                                    <div class="card-extra">
                                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                                            <li>
                                                <a class="active" href="#t_selling-today" data-bs-toggle="tab"
                                                    id="t_selling-today-tab" role="tab"
                                                    aria-selected="true">Today</a>
                                            </li>
                                            <li>
                                                <a href="#t_selling-week" data-bs-toggle="tab"
                                                    id="t_selling-week-tab" role="tab"
                                                    aria-selected="true">Week</a>
                                            </li>
                                            <li>
                                                <a href="#t_selling-month" data-bs-toggle="tab"
                                                    id="t_selling-month-tab" role="tab"
                                                    aria-selected="true">Month</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="t_selling-today" role="tabpanel"
                                            aria-labelledby="t_selling-today-tab">
                                            <div class="selling-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th>PRDUCTS NAME</th>
                                                                <th>Price</th>
                                                                <th>Sold</th>
                                                                <th>Revenue</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                                            src="{{ url('assets/img/premium-clock.png') }}"
                                                                            alt="img">
                                                                        <span>Premium Clock</span>
                                                                    </div>
                                                                </td>
                                                                <td>$280</td>
                                                                <td>339</td>
                                                                <td>$38,536</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                                            src="{{ url('assets/img/t-shirt.png') }}"
                                                                            alt="img">
                                                                        <span>Boys T-Shirt</span>
                                                                    </div>
                                                                </td>
                                                                <td>$25</td>
                                                                <td>80</td>
                                                                <td>$20,573</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                                            src="{{ url('assets/img/nike.png') }}"
                                                                            alt="img">
                                                                        <span>Nike Shoes</span>
                                                                    </div>
                                                                </td>
                                                                <td>$32</td>
                                                                <td>58</td>
                                                                <td>$17,457</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                                            src="{{ url('assets/img/cup-glass.png') }}"
                                                                            alt="img">
                                                                        <span>Smart Glass</span>
                                                                    </div>
                                                                </td>
                                                                <td>$9,50</td>
                                                                <td>36</td>
                                                                <td>$15,354</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                                            src="{{ url('assets/img/women-bag.png') }}"
                                                                            alt="img">
                                                                        <span>Women Bag</span>
                                                                    </div>
                                                                </td>
                                                                <td>$32</td>
                                                                <td>40</td>
                                                                <td>$12,354</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="t_selling-week" role="tabpanel"
                                            aria-labelledby="t_selling-week-tab">
                                            <div class="selling-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th>PRDUCTS NAME</th>
                                                                <th>Price</th>
                                                                <th>Sold</th>
                                                                <th>Revenue</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="{{ url('assets/img/287.png') }}"
                                                                            alt="img">
                                                                        <span>Samsung Galaxy S8 256GB</span>
                                                                    </div>
                                                                </td>
                                                                <td>$289</td>
                                                                <td>339</td>
                                                                <td>$60,258</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid"
                                                                            src="{{ url('assets/img/165.png') }}"
                                                                            alt="img">
                                                                        <span>Half Sleeve Shirt</span>
                                                                    </div>
                                                                </td>
                                                                <td>$29</td>
                                                                <td>136</td>
                                                                <td>$2,483</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="{{ url('assets/img/166.png') }}"
                                                                            alt="img">
                                                                        <span>Marco Shoes</span>
                                                                    </div>
                                                                </td>
                                                                <td>$59</td>
                                                                <td>448</td>
                                                                <td>$19,758</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="{{ url('assets/img/315.png') }}"
                                                                            alt="img">
                                                                        <span>15" Mackbook Pro</span>
                                                                    </div>
                                                                </td>
                                                                <td>$1,299</td>
                                                                <td>159</td>
                                                                <td>$197,458</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="{{ url('assets/img/506.png') }}"
                                                                            alt="img">
                                                                        <span>Apple iPhone X</span>
                                                                    </div>
                                                                </td>
                                                                <td>$899</td>
                                                                <td>146</td>
                                                                <td>115,254</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="t_selling-month" role="tabpanel"
                                            aria-labelledby="t_selling-month-tab">
                                            <div class="selling-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th>PRDUCTS NAME</th>
                                                                <th>Price</th>
                                                                <th>Sold</th>
                                                                <th>Revenue</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="{{ url('assets/img/287.png') }}"
                                                                            alt="img">
                                                                        <span>Samsung Galaxy S8 256GB</span>
                                                                    </div>
                                                                </td>
                                                                <td>$149</td>
                                                                <td>389</td>
                                                                <td>$60,278</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid"
                                                                            src="{{ url('assets/img/165.png') }}"
                                                                            alt="img">
                                                                        <span>Half Sleeve Shirt</span>
                                                                    </div>
                                                                </td>
                                                                <td>$59</td>
                                                                <td>136</td>
                                                                <td>$2,483</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="{{ url('assets/img/166.png') }}"
                                                                            alt="img">
                                                                        <span>Marco Shoes</span>
                                                                    </div>
                                                                </td>
                                                                <td>$89</td>
                                                                <td>448</td>
                                                                <td>$19,758</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="{{ url('assets/img/315.png') }}"
                                                                            alt="img">
                                                                        <span>15" Mackbook Pro</span>
                                                                    </div>
                                                                </td>
                                                                <td>$1,29</td>
                                                                <td>15</td>
                                                                <td>$197,8</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                                            src="{{ url('assets/img/506.png') }}"
                                                                            alt="img">
                                                                        <span>Apple iPhone X</span>
                                                                    </div>
                                                                </td>
                                                                <td>$99</td>
                                                                <td>16</td>
                                                                <td>1154</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6 mb-25">
                            <div class="card border-0 px-25 browser-states">
                                <div class="card-header px-0 border-0">
                                    <h6>Browser States</h6>
                                    <div class="card-extra">
                                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                                            <li>
                                                <a class="active" href="#t_selling-today2" data-bs-toggle="tab"
                                                    id="t_selling-today2-tab" role="tab"
                                                    aria-selected="true">Today</a>
                                            </li>
                                            <li>
                                                <a href="#t_selling-week2" data-bs-toggle="tab"
                                                    id="t_selling-week2-tab" role="tab"
                                                    aria-selected="true">Week</a>
                                            </li>
                                            <li>
                                                <a href="#t_selling-month3" data-bs-toggle="tab"
                                                    id="t_selling-month3-tab" role="tab"
                                                    aria-selected="true">Month</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="t_selling-today2" role="tabpanel"
                                            aria-labelledby="t_selling-today2-tab">
                                            <div class="selling-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th>Browsers</th>
                                                                <th>Session</th>
                                                                <th>Bounce Rate</th>
                                                                <th>CTE</th>
                                                                <th>Goal Conv. Rate</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Google Chrome</span>
                                                                    </div>
                                                                </td>
                                                                <td>92,345</td>
                                                                <td>3.5%</td>
                                                                <td>
                                                                    12025
                                                                </td>
                                                                <td>90%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Mozila Firefox</span>
                                                                    </div>
                                                                </td>
                                                                <td>92,345</td>
                                                                <td>3.5%</td>
                                                                <td>
                                                                    12025
                                                                </td>
                                                                <td>90%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Apple Safari</span>
                                                                    </div>
                                                                </td>
                                                                <td>92,345</td>
                                                                <td>3.5%</td>
                                                                <td>
                                                                    12025
                                                                </td>
                                                                <td>90%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Internet Explorer</span>
                                                                    </div>
                                                                </td>
                                                                <td>92,345</td>
                                                                <td>3.5%</td>
                                                                <td>
                                                                    12025
                                                                </td>
                                                                <td>90%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Opera Mini</span>
                                                                    </div>
                                                                </td>
                                                                <td>92,345</td>
                                                                <td>3.5%</td>
                                                                <td>
                                                                    12025
                                                                </td>
                                                                <td>90%</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="t_selling-week2" role="tabpanel"
                                            aria-labelledby="t_selling-week2-tab">
                                            <div class="selling-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th>Customer</th>
                                                                <th>Session</th>
                                                                <th>Bounce Rate</th>
                                                                <th>CTE</th>
                                                                <th>Goal Conv. Rate</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Google Chrome</span>
                                                                    </div>
                                                                </td>
                                                                <td>92,345</td>
                                                                <td>3.5%</td>
                                                                <td>
                                                                    12025
                                                                </td>
                                                                <td>90%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Mozila Firefox</span>
                                                                    </div>
                                                                </td>
                                                                <td>92,345</td>
                                                                <td>3.5%</td>
                                                                <td>
                                                                    12025
                                                                </td>
                                                                <td>90%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Apple Safari</span>
                                                                    </div>
                                                                </td>
                                                                <td>92,345</td>
                                                                <td>3.5%</td>
                                                                <td>
                                                                    12025
                                                                </td>
                                                                <td>90%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Internet Explorer</span>
                                                                    </div>
                                                                </td>
                                                                <td>92,345</td>
                                                                <td>3.5%</td>
                                                                <td>
                                                                    12025
                                                                </td>
                                                                <td>90%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Opera Mini</span>
                                                                    </div>
                                                                </td>
                                                                <td>92,345</td>
                                                                <td>3.5%</td>
                                                                <td>
                                                                    12025
                                                                </td>
                                                                <td>90%</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="t_selling-month3" role="tabpanel"
                                            aria-labelledby="t_selling-month3-tab">
                                            <div class="selling-table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table--default table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th>Customer</th>
                                                                <th>Session</th>
                                                                <th>Bounce Rate</th>
                                                                <th>CTE</th>
                                                                <th>Goal Conv. Rate</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Google Chrome</span>
                                                                    </div>
                                                                </td>
                                                                <td>73,345</td>
                                                                <td>3.5%</td>
                                                                <td>
                                                                    12025
                                                                </td>
                                                                <td>90%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Mozila Firefox</span>
                                                                    </div>
                                                                </td>
                                                                <td>45,345</td>
                                                                <td>3.5%</td>
                                                                <td>
                                                                    12025
                                                                </td>
                                                                <td>90%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Apple Safari</span>
                                                                    </div>
                                                                </td>
                                                                <td>57,345</td>
                                                                <td>3.5%</td>
                                                                <td>
                                                                    12025
                                                                </td>
                                                                <td>90%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Internet Explorer</span>
                                                                    </div>
                                                                </td>
                                                                <td>92,345</td>
                                                                <td>3.5%</td>
                                                                <td>
                                                                    12025
                                                                </td>
                                                                <td>90%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="selling-product-img d-flex align-items-center">
                                                                        <span>Opera Mini</span>
                                                                    </div>
                                                                </td>
                                                                <td>78,345</td>
                                                                <td>1.5%</td>
                                                                <td>
                                                                    48584
                                                                </td>
                                                                <td>80%</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    @stack('script')
</body>

</html>
