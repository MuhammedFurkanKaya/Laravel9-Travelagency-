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
                                <h3 class="widget-title">Contact Information</h3>
                                <div class="map-holder">
                                    <div class="wp-block-column">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.370166777009!2d28.9878468!3d41.0609006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7036293e1e3%3A0x9673ab71a3e39391!2sOCT!5e0!3m2!1str!2str!4v1551164011932" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>

                                    </div>

                                </div>
                                <div class="contact-infos">
                                    {!! $setting->contact!!}
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6">
                                <h3 class="widget-title">Contacts Form</h3>
                                <div class="contact-form">
                                    @include('home.messages')
                                    <form name="contactform" id="contactform" action="{{route("storemessage")}}" method="post">
                                        @csrf
                                        <p>
                                            <input name="name" type="text" placeholder="Name & Surname">
                                        </p>
                                        <p>
                                            <input name="phone" type="tel"  placeholder="Phone Number">
                                        </p>

                                        <p>
                                            <input name="email" type="email"  placeholder="Email">
                                        </p>
                                        <p>
                                            <input name="subject" type="text" placeholder="Subject">
                                        </p>
                                        <p>
                                            <textarea  name="message" type="text" placeholder="Your Message"></textarea>
                                        </p>

                                        <input type="submit" class="mainBtn" id="submit" value="Send Message">
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
