@extends('layouts.frontbase')

@section('title','User Comments & Reviews')



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
                                <h3 class="widget-title">User Comments & Reviews</h3>
                                <div class="contact-form">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Product</th>
                                            <th>Subject</th>
                                            <th>Review</th>
                                            <th>Rate</th>
                                            <th>Status</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $comments as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td><a href="{{route('product',['id'=>$rs->product_id])}}">{{$rs->product->title}}</a></td>
                                                <td>{{$rs->subject}}</td>
                                                <td>{{$rs->review}}</td>
                                                <td>{{$rs->rate}}</td>
                                                <td>{{$rs->status}}</td>


                                                <td><a href="{{route('userpanel.reviewdestroy' ,['id'=>$rs->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Deleting! Are You Sure?')" >Delete</a> </td>



                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- /.contact-form -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection

