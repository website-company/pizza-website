<?php
/**
 * File For: pizza-website.com
 * File Name: header.php.
 * Author: Mike Giammattei
 * Created On: 8/6/2017, 5:49 PM
 */;
?>
<header>
    <div class="top-box">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo">
                        <span class="accent">Pizza</span> Website
                    </div>
                </div>
                <div class="col-sm-8 text-right">
                    <nav class="nav-sub">
                        @if (Auth::guest())
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @else
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endif
                        <a href="">Order Now</a>
                        <a href="">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="main-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav>
                        <a class="first" href="">Get Started</a>
                        <a href="">Prices</a>
                        <a href="">Contact Us</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
