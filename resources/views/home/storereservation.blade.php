@extends('layouts.frontbase')

@section('title','Contact | '. $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))



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
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-sm-6 map-wrapper">
                                <h3 class="widget-title">Reservation Page</h3>

                            </div>
                            <div class="col-md-5 col-sm-6">
                                <h3 class="widget-title">Reservation Form</h3>

                                <div class="contact-form">
                                    @include('home.messages')
                                    <form name="contactform" id="contactform" action="{{route("storereservationComplate")}}" method="post">
                                        @csrf
                                        <p>
                                            <input type="text" name="adres" placeholder="Adress" required>
                                        </p>
                                        <p>
                                            <input type="text"  name="telefon" placeholder="Phone Number">
                                        </p>
                                        <p>
                                            <textarea  name="mesaj"  placeholder="Your Message"></textarea>
                                        </p>



                                        <input type="submit" class="mainBtn" id="submit" value="Send">
                                    </form>
                                </div> <!-- /.contact-form -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
