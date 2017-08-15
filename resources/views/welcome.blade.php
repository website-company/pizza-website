<?php
/**
 * File For: pizza-website.com
 * File Name: welcome.blade.php.
 * Author: Mike Giammattei
 * Created On: 8/14/2017, 9:25 PM
 */;
?>

@extends('layouts.master')

@section('page title', 'Welcome Page')
@section('page description', '')

@section('content')
    <div class="container" id="home">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Welcome Page</h1>
                    </div>
                    <div class="panel-body">
                        @component('components.who')

                        @endcomponent
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
