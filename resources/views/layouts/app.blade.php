<!DOCTYPE html>
<html>
<head>
    @include('layouts.partials.head')
</head>
<body class="fixed-header menu-pind">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar" data-pages="sidebar">
    <div id="appMenu" class="sidebar-overlay-slide from-top">
    </div>
    <!-- BEGIN SIDEBAR HEADER -->
    <div class="sidebar-header">
        <img src="{{asset('assets/img/logo_white.png')}}" alt="logo" class="brand" data-src="{{asset('assets/img/logo_white.png')}}" data-src-retina="{{asset('assets/img/logo_white2x.png')}}" width="78" height="22">
        <div class="sidebar-header-controls">
            <button data-pages-toggle="#appMenu" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" type="button"><i class="fa fa-angle-down fs-16"></i>
            </button>
        </div>
    </div>
    <!-- END SIDEBAR HEADER -->
    <!-- BEGIN SIDEBAR MENU -->
    <div class="sidebar-menu">
        <ul class="menu-items">
            <li class="m-t-30">
                <a href="/" class="detailed">
                    <span class="title">Dashboard</span>
                    <span class="details">234 notifications</span>
                </a>
                <span class="icon-thumbnail "><i class="pg-mail"></i></span>
            </li>
            <li class="">
                <a href="/table">
                    <span class="title">Table</span>
                </a>
                <span class="icon-thumbnail "><i class="pg-social"></i></span>
            </li>
            <li class="">
                <a href="/form">
                    <span class="title">Form</span>
                </a>
                <span class="icon-thumbnail "><i class="pg-social"></i></span>
            </li>
            <li class="">
                <a href="/maps">
                    <span class="title">Google Maps</span>
                </a>
                <span class="icon-thumbnail "><i class="pg-map"></i></span>
            </li>
            <li class="">
                <a href="javascript:;">
                    <span class="title">Leads</span>
                    <span class=" arrow"></span>
                </a>
                <span class="icon-thumbnail"><i class="pg-grid"></i></span>
                <ul class="sub-menu">
                    <li class="">
                        <a href="/leads/list">List</a>
                        <span class="icon-thumbnail">li</span>
                    </li>
                    <li class="">
                        <a href="/leads/new">New lead</a>
                        <span class="icon-thumbnail">nl</span>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <span class="title">Page 3</span>
                    <span class=" arrow"></span>
                </a>
                <span class="icon-thumbnail"><i class="pg-grid"></i></span>
                <ul class="sub-menu">
                    <li class="">
                        <a href="#">Sub Page 1</a>
                        <span class="icon-thumbnail">sp</span>
                    </li>
                    <li class="">
                        <a href="#">Sub Page 2</a>
                        <span class="icon-thumbnail">sp</span>
                    </li>
                    <li class="">
                        <a href="#">Sub Page 3</a>
                        <span class="icon-thumbnail">sp</span>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
<!-- START PAGE-CONTAINER -->
<div class="page-container">
    <!-- START PAGE HEADER WRAPPER -->
    <!-- START HEADER -->
    <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <div class="container-fluid relative">
            <!-- LEFT SIDE -->
            <div class="pull-left full-height visible-sm visible-xs">
                <!-- START ACTION BAR -->
                <div class="header-inner">
                    <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
                        <span class="icon-set menu-hambuger"></span>
                    </a>
                </div>
                <!-- END ACTION BAR -->
            </div>
            <div class="pull-center hidden-md hidden-lg">
                <div class="header-inner">
                    <div class="brand inline">
                        <img src="{{asset('assets/img/logo.png')}}" alt="logo" data-src="{{asset('assets/img/logo.png')}}" data-src-retina="{{asset('assets/img/logo_2x.png')}}" width="78" height="22">
                    </div>
                </div>
            </div>
            <!-- RIGHT SIDE -->
            <div class="pull-right full-height visible-sm visible-xs">
                <!-- START ACTION BAR -->
                <div class="header-inner">
                    <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
                        <span class="icon-set menu-hambuger-plus"></span>
                    </a>
                </div>
                <!-- END ACTION BAR -->
            </div>
        </div>
        <!-- END MOBILE CONTROLS -->
        <div class=" pull-left sm-table hidden-xs hidden-sm">
            <div class="header-inner">
                <div class="brand inline">
                    <img src="{{asset('assets/img/logo.png')}}" alt="logo" data-src="{{asset('assets/img/logo.png')}}" data-src-retina="{{asset('assets/img/logo_2x.png')}}" width="78" height="22">
                </div>
                <!-- START NOTIFICATION LIST -->
                <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">
                    <li class="p-r-15 inline">
                        <div class="dropdown">
                            <a href="javascript:;" id="notification-center" class="icon-set globe-fill" data-toggle="dropdown">
                                <span class="bubble"></span>
                            </a>
                            <!-- START Notification Dropdown -->
                            <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                                <!-- START Notification -->
                                <div class="notification-panel">
                                    <!-- START Notification Body-->
                                    <div class="notification-body scrollable">
                                        <!-- START Notification Item-->
                                        <div class="notification-item unread clearfix">
                                            <!-- START Notification Item-->
                                            <div class="heading open">
                                                <a href="#" class="text-complete pull-left">
                                                    <i class="pg-map fs-16 m-r-10"></i>
                                                    <span class="bold">Carrot Design</span>
                                                    <span class="fs-12 m-l-10">David Nester</span>
                                                </a>
                                                <div class="pull-right">
                                                    <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                                                        <div><i class="fa fa-angle-left"></i>
                                                        </div>
                                                    </div>
                                                    <span class=" time">few sec ago</span>
                                                </div>
                                                <div class="more-details">
                                                    <div class="more-details-inner">
                                                        <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
                                                            distinguishes between <br>
                                                            A leader and a follower.”</h5>
                                                        <p class="small hint-text">
                                                            Commented on john Smiths wall.
                                                            <br> via pages framework.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Notification Item-->
                                            <!-- START Notification Item Right Side-->
                                            <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                                                <a href="#" class="mark"></a>
                                            </div>
                                            <!-- END Notification Item Right Side-->
                                        </div>
                                        <!-- START Notification Body-->
                                        <!-- START Notification Item-->
                                        <div class="notification-item  clearfix">
                                            <div class="heading">
                                                <a href="#" class="text-danger pull-left">
                                                    <i class="fa fa-exclamation-triangle m-r-10"></i>
                                                    <span class="bold">98% Server Load</span>
                                                    <span class="fs-12 m-l-10">Take Action</span>
                                                </a>
                                                <span class="pull-right time">2 mins ago</span>
                                            </div>
                                            <!-- START Notification Item Right Side-->
                                            <div class="option">
                                                <a href="#" class="mark"></a>
                                            </div>
                                            <!-- END Notification Item Right Side-->
                                        </div>
                                        <!-- END Notification Item-->
                                        <!-- START Notification Item-->
                                        <div class="notification-item  clearfix">
                                            <div class="heading">
                                                <a href="#" class="text-warning-dark pull-left">
                                                    <i class="fa fa-exclamation-triangle m-r-10"></i>
                                                    <span class="bold">Warning Notification</span>
                                                    <span class="fs-12 m-l-10">Buy Now</span>
                                                </a>
                                                <span class="pull-right time">yesterday</span>
                                            </div>
                                            <!-- START Notification Item Right Side-->
                                            <div class="option">
                                                <a href="#" class="mark"></a>
                                            </div>
                                            <!-- END Notification Item Right Side-->
                                        </div>
                                        <!-- END Notification Item-->
                                        <!-- START Notification Item-->
                                        <div class="notification-item unread clearfix">
                                            <div class="heading">
                                                <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                                                    <img width="30" height="30" data-src-retina="{{asset('assets/img/profiles/1x.jpg')}}" data-src="assets/img/profiles/1.jpg" alt="" src="{{asset('assets/img/profiles/1.jpg')}}">
                                                </div>
                                                <a href="#" class="text-complete pull-left">
                                                    <span class="bold">Revox Design Labs</span>
                                                    <span class="fs-12 m-l-10">Owners</span>
                                                </a>
                                                <span class="pull-right time">11:00pm</span>
                                            </div>
                                            <!-- START Notification Item Right Side-->
                                            <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                                                <a href="#" class="mark"></a>
                                            </div>
                                            <!-- END Notification Item Right Side-->
                                        </div>
                                        <!-- END Notification Item-->
                                    </div>
                                    <!-- END Notification Body-->
                                    <!-- START Notification Footer-->
                                    <div class="notification-footer text-center">
                                        <a href="#" class="">Read all notifications</a>
                                        <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                                            <i class="pg-refresh_new"></i>
                                        </a>
                                    </div>
                                    <!-- START Notification Footer-->
                                </div>
                                <!-- END Notification -->
                            </div>
                            <!-- END Notification Dropdown -->
                        </div>
                    </li>
                    <li class="p-r-15 inline">
                        <a href="#" class="icon-set clip "></a>
                    </li>
                    <li class="p-r-15 inline">
                        <a href="#" class="icon-set grid-box"></a>
                    </li>
                </ul>
                <!-- END NOTIFICATIONS LIST -->
                <a href="#" class="search-link" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a> </div>
        </div>
        <div class=" pull-right">
            @include('partials.user')
        </div>
    </div>
    <!-- END HEADER -->
    <!-- END PAGE HEADER WRAPPER -->
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->
        <div class="content">
            <!-- START JUMBOTRON -->
            <div class="jumbotron" data-pages="parallax">
                <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                    <div class="inner">
                        <!-- START BREADCRUMB -->
                        <ul class="breadcrumb">
                            <li>
                                <p>Home</p>
                            </li>
                            <li><a href="#" class="active">Barebone template</a>
                            </li>
                        </ul>
                        <!-- END BREADCRUMB -->
                    </div>
                </div>
            </div>
            <!-- END JUMBOTRON -->
            <!-- START CONTAINER FLUID -->
            <div class="container-fluid container-fixed-lg">
                <!-- BEGIN PlACE PAGE CONTENT HERE -->
                @yield('content')
                <!-- END PLACE PAGE CONTENT HERE -->
            </div>
            <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START FOOTER -->
        <div class="container-fluid container-fixed-lg footer">
            <div class="copyright sm-text-center">
                <p class="small no-margin pull-left sm-pull-reset">
                    <span class="hint-text">Copyright © 2016</span>
                    <span class="font-montserrat">DevWeb</span>.
                    <span class="hint-text">All rights reserved.</span>
                    <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a>
                        </span>
                </p>
                <p class="small no-margin pull-right sm-pull-reset">
                    <a href="#">Powered by</a>
                    <span class="hint-text">DevWeb</span>
                </p>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- END FOOTER -->
    </div>
    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->
<!-- START OVERLAY -->
<div class="overlay" style="display: none" data-pages="search">
    <!-- BEGIN Overlay Content !-->
    <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
            <!-- BEGIN Overlay Logo !-->
            <img class="overlay-brand" src="{{asset('assets/img/logo.png')}}" alt="logo" data-src="{{asset('assets/img/logo.png')}}" data-src-retina="{{asset('assets/img/logo_2x.png')}}" width="78" height="22">
            <!-- END Overlay Logo !-->
            <!-- BEGIN Overlay Close !-->
            <a href="#" class="close-icon-light overlay-close text-black fs-16">
                <i class="pg-close"></i>
            </a>
            <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
            <!-- BEGIN Overlay Controls !-->
            <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
            <br>
            <div class="inline-block">
                <div class="checkbox right">
                    <input id="checkboxn" type="checkbox" value="1" checked="checked">
                    <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
                </div>
            </div>
            <div class="inline-block m-l-10">
                <p class="fs-13">Press enter to search</p>
            </div>
            <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
            <span id="overlay-suggestions"></span>
            <br>
            <div class="search-results m-t-40">
                <p class="bold">Pages Search Results</p>
                <div class="row">
                    <div class="col-md-6">
                        <!-- BEGIN Search Result Item !-->
                        <div class="">
                            <!-- BEGIN Search Result Item Thumbnail !-->
                            <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                <div>
                                    <img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                                </div>
                            </div>
                            <!-- END Search Result Item Thumbnail !-->
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                                <p class="hint-text">via john smith</p>
                            </div>
                        </div>
                        <!-- END Search Result Item !-->
                        <!-- BEGIN Search Result Item !-->
                        <div class="">
                            <!-- BEGIN Search Result Item Thumbnail !-->
                            <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                <div>T</div>
                            </div>
                            <!-- END Search Result Item Thumbnail !-->
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                                <p class="hint-text">via pages</p>
                            </div>
                        </div>
                        <!-- END Search Result Item !-->
                        <!-- BEGIN Search Result Item !-->
                        <div class="">
                            <!-- BEGIN Search Result Item Thumbnail !-->
                            <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                <div><i class="fa fa-headphones large-text "></i>
                                </div>
                            </div>
                            <!-- END Search Result Item Thumbnail !-->
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                                <p class="hint-text">via pagesmix</p>
                            </div>
                        </div>
                        <!-- END Search Result Item !-->
                    </div>
                    <div class="col-md-6">
                        <!-- BEGIN Search Result Item !-->
                        <div class="">
                            <!-- BEGIN Search Result Item Thumbnail !-->
                            <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                                <div><i class="fa fa-facebook large-text "></i>
                                </div>
                            </div>
                            <!-- END Search Result Item Thumbnail !-->
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                                <p class="hint-text">via facebook</p>
                            </div>
                        </div>
                        <!-- END Search Result Item !-->
                        <!-- BEGIN Search Result Item !-->
                        <div class="">
                            <!-- BEGIN Search Result Item Thumbnail !-->
                            <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                                <div><i class="fa fa-twitter large-text "></i>
                                </div>
                            </div>
                            <!-- END Search Result Item Thumbnail !-->
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                                <p class="hint-text">via twitter</p>
                            </div>
                        </div>
                        <!-- END Search Result Item !-->
                        <!-- BEGIN Search Result Item !-->
                        <div class="">
                            <!-- BEGIN Search Result Item Thumbnail !-->
                            <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                                <div><i class="fa fa-google-plus large-text "></i>
                                </div>
                            </div>
                            <!-- END Search Result Item Thumbnail !-->
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                                <p class="hint-text">via google plus</p>
                            </div>
                        </div>
                        <!-- END Search Result Item !-->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Overlay Search Results !-->
    </div>
    <!-- END Overlay Content !-->
</div>
<!-- END OVERLAY -->
@include('layouts.partials.scripts')
</body>
</html>