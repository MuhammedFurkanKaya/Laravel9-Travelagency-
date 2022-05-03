@extends('layouts.frontbase')

@section('title','Travel Agency Project')

@section('slider')
    @include('home.slider')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="our-listing owl-carousel">
                @foreach($sliderdata as $rs)
                <div class="list-item">
                    <div class="list-thumb">
                        <div class="title">
                            <h4>{{$rs->title}}</h4>
                        </div>
                        <img src="{{Storage::url($rs->image)}}" style="width: 270px; height: 200px">
                    </div> <!-- /.list-thumb -->
                    <div class="list-content">
                        <h5>Rome, Milan, Naples</h5>
                        <span>SILVER HOTEL, 4 NIGHTS, 5 STARS</span>
                        <a href="#" class="price-btn">{{$rs->price}}</a>
                    </div> <!-- /.list-content -->
                </div> <!-- /.list-item -->

                @endforeach
            </div> <!-- /.our-listing -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->

    <div class="middle-content"></div>

    <div class="partner-list">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="{{asset('assets')}}/images/partners/partner1.png" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="{{asset('assets')}}/images/partners/partner2.png" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="{{asset('assets')}}/images/partners/partner3.png" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="{{asset('assets')}}/images/partners/partner1.png" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item">
                        <img src="{{asset('assets')}}/images/partners/partner2.png" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="partner-item last">
                        <img src="{{asset('assets')}}/images/partners/partner3.png" alt="">
                    </div> <!-- /.partner-item -->
                </div> <!-- /.col-md-2 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.partner-list -->

@endsection
