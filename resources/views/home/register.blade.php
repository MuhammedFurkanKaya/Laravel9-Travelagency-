@extends('layouts.frontbase')

@section('title','User Registration Page | ')




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
                   @include('auth.register')
                </div>

            </div>
        </div>
    </div>


@endsection
