@extends('layouts.frontbase')

@section('title','User Panel')



@section('content')

    <div class="middle-content">
        <div class="container">

            <div class="row"><!-- first row -->


                <div class="col-md-4"><!-- first column -->

                    <div class="widget-item">

                        <h3 class="widget-title">User Menu</h3>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 map-wrapper">
                                <h3 class="widget-title">User Menu</h3>
                                @include('home.user.usermenu')
                                <div class="contact-infos">

                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6">
                                <h3 class="widget-title">User Profile</h3>
                                <div class="contact-form">
@include('profile.show')
                                </div> <!-- /.contact-form -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection

