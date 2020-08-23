@extends('backend.master.admin-app')

@section('title','Dashboard Admin')

@section('my-style')
    <style>

    </style>
@endsection

@section('content')
    <!-- start content -->

    <body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
    @include('backend.inc.menu')
    <!-- Left Sidebar End -->


        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">
                        <!-- Search input -->
                        <div class="search-wrap" id="search-wrap">
                            <div class="search-bar">
                                <input class="search-input" type="search" placeholder="Search"/>
                                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                    <i class="mdi mdi-close-circle"></i>
                                </a>
                            </div>
                        </div>

                        <ul class="list-inline float-right mb-0">
                            <!-- Search -->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                                    <i class="mdi mdi-magnify noti-icon"></i>
                                </a>
                            </li>
                            <!-- Fullscreen -->
                            <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                    <i class="mdi mdi-fullscreen noti-icon"></i>
                                </a>
                            </li>
                            <!-- notification-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown"
                                   href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="ion-ios7-bell noti-icon"></i>
                                    <span class="badge badge-danger noti-icon-badge">3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Notification (3)</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy
                                                text of the printing and typesetting industry.</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                        <p class="notify-details"><b>New Message received</b><small class="text-muted">You
                                                have 87 unread messages</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                        <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It
                                                is a long established fact that a reader will</small></p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        View All
                                    </a>

                                </div>
                            </li>
                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user"
                                   data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My
                                        Wallet</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="badge badge-success float-right m-t-5">5</span><i
                                            class="dripicons-gear text-muted"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock
                                        screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i>
                                        Logout</a>
                                </div>
                            </li>
                        </ul>

                        <!-- Page title -->
                        <ul class="list-inline menu-left mb-0">
                            <li class="list-inline-item">
                                <button type="button" class="button-menu-mobile open-left waves-effect">
                                    <i class="ion-navicon"></i>
                                </button>
                            </li>
                            <li class="hide-phone list-inline-item app-search">
                                <h3 class="page-title">Dashboard</h3>
                            </li>
                        </ul>

                        <div class="clearfix"></div>
                    </nav>

                </div>
                <!-- Top Bar End -->

                <!-- ==================
                     PAGE CONTENT START
                     ================== -->

                <div class="page-content-wrapper">

                    <div class="header-bg">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 mb-4 pt-5">
                                    <div id="morris-bar-example" class="dash-chart"></div>

                                    <div class="mt-4 text-center">
                                        <button type="button"
                                                class="btn btn-outline-primary ml-1 waves-effect waves-light">Year 2017
                                        </button>
                                        <button type="button"
                                                class="btn btn-outline-info ml-1 waves-effect waves-light">Year 2018
                                        </button>
                                        <button type="button"
                                                class="btn btn-outline-primary ml-1 waves-effect waves-light">Year 2019
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card text-center m-b-30">
                                    <div class="mb-2 card-body text-muted">
                                        <h3 class="text-info">15,852</h3>
                                        Monthly Statistics
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card text-center m-b-30">
                                    <div class="mb-2 card-body text-muted">
                                        <h3 class="text-purple">9,514</h3>
                                        New Orders
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card text-center m-b-30">
                                    <div class="mb-2 card-body text-muted">
                                        <h3 class="text-primary">289</h3>
                                        New Users
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card text-center m-b-30">
                                    <div class="mb-2 card-body text-muted">
                                        <h3 class="text-danger">5,220</h3>
                                        Unique Visitors
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-xl-4">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Monthly Earnings</h4>

                                        <div class="row text-center m-t-20">
                                            <div class="col-6">
                                                <h5 class="">56241</h5>
                                                <p class="text-muted font-14">Marketplace</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="">23651</h5>
                                                <p class="text-muted font-14">Total Income</p>
                                            </div>
                                        </div>

                                        <div id="morris-donut-example" class="dash-chart"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Email Sent</h4>

                                        <div class="row text-center m-t-20">
                                            <div class="col-4">
                                                <h5 class="">56241</h5>
                                                <p class="text-muted font-14">Marketplace</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="">23651</h5>
                                                <p class="text-muted font-14">Total Income</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="">23651</h5>
                                                <p class="text-muted font-14">Last Month</p>
                                            </div>
                                        </div>

                                        <div id="morris-area-example" class="dash-chart"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 m-b-30 header-title">Latest Transactions</h4>

                                        <div class="table-responsive">
                                            <table class="table m-t-20 mb-0 table-vertical">

                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/avatar-2.jpg" alt="user-image"
                                                             class="thumb-sm rounded-circle mr-2"/>
                                                        Herbert C. Patton
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                        Confirm
                                                    </td>
                                                    <td>
                                                        $14,584
                                                        <p class="m-0 text-muted font-14">Amount</p>
                                                    </td>
                                                    <td>
                                                        5/12/2016
                                                        <p class="m-0 text-muted font-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                                class="btn btn-secondary btn-sm waves-effect">Edit
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/avatar-3.jpg" alt="user-image"
                                                             class="thumb-sm rounded-circle mr-2"/>
                                                        Mathias N. Klausen
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                                        Waiting payment
                                                    </td>
                                                    <td>
                                                        $8,541
                                                        <p class="m-0 text-muted font-14">Amount</p>
                                                    </td>
                                                    <td>
                                                        10/11/2016
                                                        <p class="m-0 text-muted font-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                                class="btn btn-secondary btn-sm waves-effect">Edit
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/avatar-4.jpg" alt="user-image"
                                                             class="thumb-sm rounded-circle mr-2"/>
                                                        Nikolaj S. Henriksen
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                        Confirm
                                                    </td>
                                                    <td>
                                                        $954
                                                        <p class="m-0 text-muted font-14">Amount</p>
                                                    </td>
                                                    <td>
                                                        8/11/2016
                                                        <p class="m-0 text-muted font-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                                class="btn btn-secondary btn-sm waves-effect">Edit
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/avatar-5.jpg" alt="user-image"
                                                             class="thumb-sm rounded-circle mr-2"/>
                                                        Lasse C. Overgaard
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i>
                                                        Payment expired
                                                    </td>
                                                    <td>
                                                        $44,584
                                                        <p class="m-0 text-muted font-14">Amount</p>
                                                    </td>
                                                    <td>
                                                        7/11/2016
                                                        <p class="m-0 text-muted font-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                                class="btn btn-secondary btn-sm waves-effect">Edit
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/avatar-6.jpg" alt="user-image"
                                                             class="thumb-sm rounded-circle mr-2"/>
                                                        Kasper S. Jessen
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                        Confirm
                                                    </td>
                                                    <td>
                                                        $8,844
                                                        <p class="m-0 text-muted font-14">Amount</p>
                                                    </td>
                                                    <td>
                                                        1/11/2016
                                                        <p class="m-0 text-muted font-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                                class="btn btn-secondary btn-sm waves-effect">Edit
                                                        </button>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 m-b-15 header-title">Recent Activity Feed</h4>

                                        <ol class="activity-feed mb-0">
                                            <li class="feed-item">
                                                <span class="date">Sep 25</span>
                                                <span
                                                    class="activity-text">Responded to need “Volunteer Activities”</span>
                                            </li>

                                            <li class="feed-item">
                                                <span class="date">Sep 24</span>
                                                <span
                                                    class="activity-text">Added an interest “Volunteer Activities”</span>
                                            </li>
                                            <li class="feed-item">
                                                <span class="date">Sep 23</span>
                                                <span
                                                    class="activity-text">Joined the group “Boardsmanship Forum”</span>
                                            </li>
                                            <li class="feed-item">
                                                <span class="date">Sep 21</span>
                                                <span
                                                    class="activity-text">Responded to need “In-Kind Opportunity”</span>
                                            </li>
                                            <li class="feed-item">
                                                <span class="date">Sep 18</span>
                                                <span class="activity-text">Created need “Volunteer Activities”</span>
                                            </li>
                                            <li class="feed-item">
                                                <span class="date">Sep 17</span>
                                                <span class="activity-text">Attending the event “Some New Event”. Responded to needed.</span>
                                            </li>
                                            <li class="feed-item pb-1">
                                                    <span class="activity-text">
                                                        <a href="" class="text-primary">More Activities</a>
                                                    </span>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- end row -->

                    </div>


                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->

            <footer class="footer">
                © 2020 Cherki Hamza <i class="mdi mdi-heart text-danger"></i> cherki hamza.
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->
    <!-- end content -->

@endsection

@section('my-script')
    <script>
        console.log('welcome to dashboard !! :)')
    </script>
@endsection
