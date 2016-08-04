@extends('layouts.app')

@section('title', 'Form')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Form</div>
        </div>
        <div class="panel-body">
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
     </div>

    <div class="quickview-wrapper open" id="quickview-form">
        <div class="view-port clearfix">
            <div class="view bg-white">
                <div class="navbar navbar-default">
                    <div class="navbar-inner">
                        <a class="inline action p-l-10 link text-master" data-toggle="quickview" data-toggle-element="#calendarLang"><i class="pg-close"></i></a>
                        <div class="view-heading">
                            Languages
                            <div class="fs-11">
                                Supports 70
                            </div>
                        </div>
                        <a class="inline action p-r-10 pull-right link text-master" href="#"><i class="pg-search"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection