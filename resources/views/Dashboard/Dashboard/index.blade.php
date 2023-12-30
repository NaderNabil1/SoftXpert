@extends('Dashboard.app')

@section('title', 'Dashboard')
@section('content')
<div class="content-area p-y-1">
    <div class="container-fluid">
        <div class="row row-md">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="box box-block tile tile-2 bg-danger m-b-2">
                    <div class="t-icon right"><i class="ti-shopping-cart-full"></i></div>
                    <div class="t-content">
                        <h1 class="m-b-1">{{$users}}</h1>
                        <h6 class="text-uppercase">Total Users</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="box box-block tile tile-2 bg-success m-b-2">
                    <div class="t-icon right"><i class="ti-bar-chart"></i></div>
                    <div class="t-content">
                        <h1 class="m-b-1">{{$finished_tasks}}</h1>
                        <h6 class="text-uppercase">Completed Tasks</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="box box-block tile tile-2 bg-primary m-b-2">
                    <div class="t-icon right"><i class="ti-package"></i></div>
                    <div class="t-content">
                        <h1 class="m-b-1">{{$unfinished_tasks}}</h1>
                        <h6 class="text-uppercase">Pending Tasks</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="box box-block tile tile-2 bg-warning m-b-2">
                    <div class="t-icon right"><i class="ti-receipt"></i></div>
                    <div class="t-content">
                        <h1 class="m-b-1">{{$managers}}</h1>
                        <h6 class="text-uppercase">Total Managers</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


