@extends('layouts.frontbase')

@section('title',$data->title)



@section('content')

    <div class="middle-content">
        <div class="container">

            <div class="row"><!-- first row -->

                <div class="col-md-4"><!-- first column -->

                    <div class="widget-item">

                        <h3 class="widget-title">Upcoming Events</h3>



                            <!-- /.service-content -->
                        </div> <!-- /.service-item -->

                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-trophy"></i>
                            </div> <!-- /.service-icon -->
                            <div class="service-content">
                                @include('home.messages')
                                <h4>{{$data->title}}</h4>
                                <p>{{$data->description}}</p>
                            </div> <!-- /.service-content -->
                        </div> <!-- /.service-item -->




                    </div> <!-- /.widget-item -->

                </div><!-- /.col-md-4 -->

            <div class="container" style="margin-top: 50px">
                <div class="row">
                    <div class="our-listing owl-carousel">
                        <div class="list-item">

                            <div class="list-thumb">
                                <img src="{{Storage::url($data->image)}}" style="width: 270px; height: 200px">

                            </div>
                       <!-- /.list-thumb -->
                            <div class="list-content">
                                <h5>Rome, Milan, Naples</h5>
                                <span>SILVER HOTEL, 4 NIGHTS, 5 STARS</span>
                                <a href="#" class="price-btn">{{$data->price}}</a>
                            </div>
                     <!-- /.list-content -->
                        </div> <!-- /.list-item -->
                    </div> <!-- /.our-listing -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->

            </div>
        <!-- /.row first -->
        <div class="container">


                <div class="our-listing owl-carousel">
                    @foreach($images as $rs)
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

                            </div> <!-- /.list-content -->
                        </div> <!-- /.list-item -->

                    @endforeach
                </div><!-- /.our-listing -->

            <!-- /.row -->
        </div>
        <br><br>


                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Detail
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$data->title}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {!! $data->detail !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

        @foreach($reviews as $rs)
            <div class="single-review">
                <div class="review-heading">
                    <div><a href="#"><i class="fa fa-user"></i>{{$rs->user->name}}</a></div>
                    <div><a href="#"><i class="fa fa-clock-o"></i>{{$rs->created_at}}</a></div>
                    <div class="review-rating ">
                        <i class="fa fa-star- @if ($rs->rate<1)-o @endif "></i>
                        <i class="fa fa-star @if ($rs->rate<2)-o  @endif "></i>
                        <i class="fa fa-star @if ($rs->rate<3)-o  @endif "></i>
                        <i class="fa fa-star @if ($rs->rate<4)-o  @endif "></i>
                        <i class="fa fa-star @if ($rs->rate<5)-o  @endif "></i>
                    </div>
                </div>
                <div class="review-body">
                    <strong>{{$rs->subject}}</strong>
                    <p>{{$rs->review}}</p>
                </div>
            </div>
        @endforeach
        <form class="review-form" action="{{route("storecomment")}}" method="post">
            @csrf
            <input class="input-append" type="hidden" name="product_id" value="{{$data->id}}">
            <p>
                <input class="input-append" type="text" name="subject" placeholder="Subject">
            </p>

            <p>
                <textarea  class="input-append" name="review" placeholder="Your Review"></textarea>
            </p>

            <div>
                <div class="input-append">
                    <strong class="text-uppercase">Your Raiting: </strong>
                </div>
                <div class="fa-star-o">

                    <input type="radio" id="star5" name="rate" value="5"> <label for="star5"></label>
                    <input type="radio" id="star4" name="rate" value="4"> <label for="star4"></label>
                    <input type="radio" id="star3" name="rate" value="3"> <label for="star3"></label>
                    <input type="radio" id="star2" name="rate" value="2"> <label for="star2"></label>
                    <input type="radio" id="star1" name="rate" value="1"> <label for="star1"></label>
                </div>
            </div>
            @auth
                <input type="submit" class="mainBtn" id="submit" value="Send Message">
            @else
                <a href="/login" class="btn-primary">For Submit Your Review, Please Login </a>
            @endauth
        </form>





        </div> <!-- /.container -->
    </div> <!-- /.middle-content -->


@endsection
