<?php
/**
 * File For: pizza-website.com
 * File Name: home.php.
 * Author: Mike Giammattei
 * Created On: 8/4/2017, 7:24 PM
 */;
?>
@extends('layouts.master')

@section('page title', 'Start Taking Online Orders')
@section('page description', 'Fully functional website for pizza restaurants who want a strong web presents and start taking online orders. ')

@section('content')
    <div class="container" id="home">
        <div class="row">
            <div class="col-sm-6">
                <h1>Your Pizza Website Solution is Here!</h1>
                <p>Taking online orders has never been so simple. Your new website will be fully optimized, providing your customers a seamless experience.  </p>
                <a href="" class="btn btn-primary">Get Started</a>
            </div>
            <div class="col-md-12">
                @component('components.who')

                @endcomponent
            </div>
            <div class="col-sm-6">
                <img src="/images/pizza-website-display.png" class="img-responsive">
            </div>
            <div class="col-sm-12">
                <div class="call-to-action  text-center">
                    <h3>Created to be the Best Website Solution for pizza restaurant owners.</h3>
                    <p>We've established a strong reputation for bringing innovation to <a href="">pizza online ordering websites</a> </p>
                </div>
            </div>
            <div class="col-sm-4">
                <h3>Take your first order tonight</h3>
                <p>Taking online orders has never been so simple. Your new website will be fully optimized, providing your customers a seamless experience.  </p>
                <a href="" class="btn btn-primary">Get Started</a>
            </div>

            <div class="col-sm-4">
                <h4>Your Pizza Website Solution is Here!</h4>
                <p>Taking online orders has never been so simple. Your new website will be fully optimized, providing your customers a seamless experience.  </p>
                <a href="" class="btn btn-primary">Get Started</a>
            </div>
            <div class="col-sm-4">
                <h4>Your Pizza Website Solution is Here!</h4>
                <p>Taking online orders has never been so simple. Your new website will be fully optimized, providing your customers a seamless experience.  </p>
                <a href="" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>
@endsection