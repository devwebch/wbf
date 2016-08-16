<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>
    @if(View::hasSection('title'))
        @yield('title') - Web Business Finder
    @else
        Web Business Finder
    @endif
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="apple-touch-icon" href="pages/ico/60.png">
<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN Vendor CSS-->
<link href="{{asset('assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/bootstrapv3/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{asset('assets/plugins/bootstrap-select2/select2.css')}}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{asset('assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
@yield('styles')
<!-- BEGIN Pages CSS-->
<link href="{{asset('pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css">
<link class="main-stylesheet" href="{{asset('pages/css/pages.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
<!--[if lte IE 9]>
<link href="{{asset('pages/css/ie9.css')}}" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript">
    window.onload = function()
    {
        // fix for windows 8
        if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
            document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="{{asset('pages/css/windows.chrome.fix.css')}}" />'
    }
</script>
