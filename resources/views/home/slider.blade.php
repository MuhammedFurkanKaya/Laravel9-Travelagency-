
<div class="flexslider">

    <ul class="slides">
        @foreach($sliderdata as $rs)
        <li>

            <div class="overlay"></div>
            <img src="{{Storage::url($rs->image)}}" style="width: 100%; height: 780px">
            <div class="container">
                <div class="row">

                    <div class="col-md-5 col-lg-4">
                        <div class="flex-caption visible-lg">

                            <h3 class="title">{{$rs->title}}</h3>


                            <a href="{{route('packages',['id'=>$rs->id])}}" class="slider-btn">Rezervasyon</a>
                        </div>
                    </div>

                </div>
            </div>

        </li>

        @endforeach
    </ul>

</div> <!-- /.flexslider -->
