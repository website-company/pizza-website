<?php
/**
 * File For: pizza-website.com
 * File Name: dashboard.php.
 * Author: Mike Giammattei
 * Created On: 8/13/2017, 4:08 PM
 */;
 ?>
<?php
/**
 * File For: pizza-website.com
 * File Name: home.php.
 * Author: Mike Giammattei
 * Created On: 8/4/2017, 7:24 PM
 */;
?>
@extends('layouts.master')

@section('page title', 'Admin Dashboard')
@section('page description', '')

@section('content')
    <div class="container" id="home">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Admin Dashboard</h1>
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
