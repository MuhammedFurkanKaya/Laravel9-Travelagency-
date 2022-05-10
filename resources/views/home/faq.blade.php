@extends('layouts.frontbase')

@section('title','Frequently Asked Questions | '. $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('content')

    <div class="middle-content">
        <div class="container">

            <div class="row"><!-- first row -->


                <div class="col-md-4"><!-- first column -->

                    <div class="widget-item">

                        <h3 class="widget-title">Upcoming Events</h3>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="widget-title">Frequently Asked Questions</h3>
                    <div id="accordion">
                        @foreach($datalist as $rs)
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                        {{$rs->question}}
                                    </a>
                                </div>
                                <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>{!! $rs->answer !!}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                    </div>

                </div>
            </div>
        </div>


@endsection
