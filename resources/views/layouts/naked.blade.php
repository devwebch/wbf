<!DOCTYPE html>
<html>
<head>
@include('layouts.partials.head')
</head>
<body class="fixed-header ">
<div class="register-container full-height sm-p-t-30">
    <div class="container-sm-height full-height">
        <div class="row row-sm-height">
            <div class="col-sm-12 col-sm-height col-middle">
                <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                <h3>Pages makes it easy to enjoy what matters the most in your life</h3>
                <p>
                    <small>
                        Create a pages account. If you have a facebook account, log into it for this process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a>
                    </small>
                </p>
                @yield('content')
            </div>
        </div>
    </div>
</div>
@include('layouts.partials.scripts')
@section('scripts')
<script>
    $(function()
    {
        $('#form-register').validate()
    })
</script>
@endsection
</body>
</html>