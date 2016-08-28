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
            <div class="panel">
                <div class="panel-body">
                    <h3>Hi there {{Auth::user()->first_name}}</h3>
                </div>
            </div>
            <div class="ar-1-1">
                <div class="widget-11-2 panel no-border panel-condensed no-margin widget-loader-circle">
                    <div class="padding-25">
                        <div class="pull-left">
                            <h2 class="no-margin">Your leads</h2>
                            <p class="no-margin">Today's sales</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="auto-overflow widget-11-2-table">
                        <table class="table table-condensed table-hover">
                            <tbody>
                                @foreach($leads as $lead)
                                <tr>
                                    <td class="col-lg-2 fs-18">{{date('d.m.Y', strtotime($lead->created_at))}}</td>
                                    <td class="fs-12 col-lg-6">
                                        <a href="/leads/view/{{$lead->id}}">{{$lead->name}}</a>
                                    </td>
                                    <td class="text-right col-lg-3">
                                        <span class="label {{$status_classes[$lead->status]}}">{{trans($status[$lead->status])}}</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 m-b-10">
            <div class="ar-1-1">
                <div class="widget-2 panel no-border bg-success widget no-margin">
                    <div class="panel-body">
                        <div class="pull-bottom bottom-left bottom-right padding-25">
                            <a href="#">
                                <h3 class="text-white">So much more to see at a glance.</h3>
                            </a>
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
@endsection