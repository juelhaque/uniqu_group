@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        @include('message')
        <div class="row mb-2">
            <div class="col-sm-12 text-center">
                <h1 style="font-size: 50px"><strong>Unique Group</strong></h1>
                <h5>Administrative Panel</h5>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 col-6 text-center">
                <div class="small-box card">
                    <div class="inner">
                        <h4><b>Business Entities</b></h4>
                        <h3>{{$business_entities}}</h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('business.index') }}" class="small-box-footer text-light" style="background: #55548d">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <div class="small-box card">
                    <div class="inner">
                        <h4><b>Total Photo</b></h4>
                        <h3>{{$photo}}</h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{route('photo.index')}}" class="small-box-footer text-light" style="background: #55548d">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <div class="small-box card">
                    <div class="inner">
                        <h4><b>Total Hotel & Resort</b></h4>
                        <h3>{{$hotelResort}}</h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('hotel.index') }}" class="small-box-footer text-light" style="background: #55548d">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <div class="small-box card">
                    <div class="inner">
                        <h4><b>Total Videos</b></h4>
                        <h3>{{$videos}}</h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('video-gallery.index') }}" class="small-box-footer text-light" style="background: #55548d">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
    </div>
    <!-- /.card -->
</section>
@endsection

