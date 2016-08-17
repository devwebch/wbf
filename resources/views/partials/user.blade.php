<?php
/**
 * Created by PhpStorm.
 * User: SIMON
 * Date: 10.08.2016
 * Time: 15:17
 */

$logged_in          = false;
$user_name          = '';

if (Auth::check()) {
    $logged_in  = true;
    $user_name  = Auth::user()->name;
} else {

}
?>

@if($logged_in)
<!-- START User Info-->
<div class="visible-lg visible-md m-t-10">
    <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
        <span class="semi-bold">{{$user_name}}</span>
    </div>
    <div class="dropdown pull-right">
        <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="{{asset('assets/img/profiles/avatar.jpg')}}" alt=""
                     data-src="{{asset('assets/img/profiles/avatar.jpg')}}"
                     data-src-retina="{{asset('assets/img/profiles/avatar_small2x.jpg')}}" width="32" height="32">
            </span>
        </button>
        <ul class="dropdown-menu profile-dropdown" role="menu">
            <li><a href="#"><i class="pg-settings_small"></i> Settings</a></li>
            <li><a href="#"><i class="pg-signals"></i> Help</a></li>
            <li class="bg-master-lighter">
                <a href="/logout" class="clearfix">
                    <span class="pull-left">Logout</span>
                    <span class="pull-right"><i class="pg-power"></i></span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END User Info-->
@endif