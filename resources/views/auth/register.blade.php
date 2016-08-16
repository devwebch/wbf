@extends('layouts.naked')

@section('content')
<form id="form-register" class="p-t-15" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} form-group-default">
                <label for="name" class="control-label">Name</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
                @endif
            </div>
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-group-default">
        <label for="email" class="control-label">E-Mail Address</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-group-default">
        <label for="password" class="control-label">Password</label>
        <input id="password" type="password" class="form-control" name="password">
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} form-group-default">
        <label for="password-confirm" class="control-label">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i> Register
            </button>
        </div>
    </div>
</form>
@endsection
