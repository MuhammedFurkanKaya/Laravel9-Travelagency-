@extends('layouts.frontbase')

@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('slider')
    @include('home.slider')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="our-listing owl-carousel">
                @foreach($packageslist1 as $rs)
                <div class="list-item">
                    <div class="list-thumb">
                        <div class="title">
                            <h4>{{$rs->title}}</h4>
                        </div>
                        <img src="{{Storage::url($rs->image)}}" style="width: 270px; height: 200px">
                    </div> <!-- /.list-thumb -->
                    <div class="list-content">

                        <a href="{{route('packages',['id'=>$rs->id])}}" class="price-btn">{{$rs->price}}</a>
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
                </div><!-- /.col-md-2 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.partner-list -->

@endsection
