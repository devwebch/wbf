@extends('layouts.app')

@section('title', 'Dashboard')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-metrojs/MetroJs.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('assets/plugins/jquery-metrojs/MetroJs.min.js')}}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 m-b-10">
            <h3>Hello Pages</h3>
            <form role="form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="col-md-3 m-b-10">
            <div class="ar-1-1">
                <div class="widget-3 panel no-border bg-complete no-margin widget-loader-bar">
                    <div class="panel-body no-padding">
                        <div class="metro live-tile" data-mode="carousel" data-start-now="true" data-delay="3000">
                            <div class="slide-front tiles slide active">
                                <div class="padding-30">
                                    <div class="pull-top">
                                        <div class="pull-left visible-lg visible-xlg">
                                            <i class="pg-map"></i>
                                        </div>
                                        <div class="pull-right">
                                            <ul class="list-inline ">
                                                <li>
                                                    <a href="#" class="no-decoration"><i class="pg-comment"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="widget-3-fav no-decoration"><i class="pg-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="pull-bottom p-b-30">
                                        <p class="p-t-10 fs-12 p-b-5 hint-text">21 Jan</p>

                                        <h3 class="no-margin text-white p-b-10">Carefully
                                            <br>designed for a
                                            <br>great
                                            <span class="semi-bold">experience</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-back tiles">
                                <div class="padding-30">
                                    <div class="pull-top">
                                        <div class="pull-left visible-lg visible-xlg">
                                            <i class="pg-map"></i>
                                        </div>
                                        <div class="pull-right">
                                            <ul class="list-inline ">
                                                <li>
                                                    <a href="#" class="no-decoration"><i class="pg-comment"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="widget-3-fav no-decoration"><i class="pg-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="pull-bottom p-b-30">
                                        <p class="p-t-10 fs-12 p-b-5 hint-text">21 Jan</p>

                                        <h3 class="no-margin text-white p-b-10">A whole new
                                            <br>
                                            <span class="semi-bold">page</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 m-b-10">
            <div class="ar-1-1">
                <div class="panel no-border no-margin widget-loader-bar">
                    <div class="container-xs-height full-height">
                        <div class="row-xs-height">
                            <div class="col-xs-height col-top">
                                <div class="panel-heading  top-left top-right">
                                    <div class="panel-title text-black">
                                        <span class="font-montserrat fs-11 all-caps">Weekly Sales <i class="fa fa-chevron-right"></i></span>
                                    </div>
                                    <div class="panel-controls">
                                        <ul>
                                            <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-xs-height">
                            <div class="col-xs-height col-top">
                                <div class="p-l-20 p-t-60 p-b-40 p-r-20">
                                    <h1 class="no-margin p-b-5">$23,000</h1>
                                    <span class="small hint-text pull-left">71% of total goal</span>
                                    <span class="pull-right small text-primary">$30,000</span>
                                </div>
                            </div>
                        </div>
                        <div class="row-xs-height">
                            <div class="col-xs-height col-bottom">
                                <div class="progress progress-small m-b-0">
                                    <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                    <div class="progress-bar progress-bar-primary" style="width:45%"></div>
                                    <!-- END BOOTSTRAP PROGRESS -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Hello</h3>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
@endsection