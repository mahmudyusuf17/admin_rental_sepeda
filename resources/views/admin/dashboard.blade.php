@extends('layout.master')
@section('title', 'Dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>20</h3>

            <p>Pesanan</p>
            </div>
            <div class="icon">
            <i class="ion ion-paper-airplane"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
            <h3>145</h3>

            <p>Sepeda Disewakan</p>
            </div>
            <div class="icon">
            <i class="ion ion-android-bicycle"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
            <h3>44</h3>

            <p>Sepeda Siap Diantar</p>
            </div>
            <div class="icon">
            <i class="ion ion-ios-pricetags"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>189</h3>

            <p>Pesanan Bulan Ini</p>
            </div>
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-info">
            <span class="info-box-icon"><i class="ion ion-paper-airplane"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Pesanan Hari Ini</span>
            <span class="info-box-number">410</span>

            <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
            </div>
            <a href="#" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-success">
            <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Sepeda Disewakan</span>
            <span class="info-box-number">105</span>

            <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
            </div>
            <a href="#" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-warning">
            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Events</span>
            <span class="info-box-number">41,410</span>

            <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
            </div>
            <a href="#" class="small-box-footer text-black">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-danger">
            <span class="info-box-icon"><i class="fas fa-comments"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Comments</span>
            <span class="info-box-number">41,410</span>

            <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
            </div>
            <a href="#" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
    @endsection