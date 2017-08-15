<?php
/**
 * File For: pizza-website.com
 * File Name: who.blade.php.
 * Author: Mike Giammattei
 * Created On: 8/14/2017, 9:27 PM
 */;
?>
@if(Auth::guard('web')->check())
    <p class="text-success">You are logged in as a USER</p>

@else
    <p class="text-danger">You are logged out a USER</p>
@endif

@if(Auth::guard('admin')->check())
    <p class="text-success">You are logged in as a Admin</p>

@else
    <p class="text-danger">You are logged out as an Admin</p>
@endif