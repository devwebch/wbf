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
@endsection