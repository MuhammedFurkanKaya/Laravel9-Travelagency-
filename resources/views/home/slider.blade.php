
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
                            <span class="price">$7,500</span>
                            <h3 class="title">{{$rs->title}}</h3>
                            <p>Travel is a responsive Bootstrap layout from
                                <span class="blue">template</span><span class="green">mo</span> website.
                                All images used in this template are from
                                <a rel="nofollow" href="http://unsplash.com" target="_parent">Unsplash</a>.</p>
                            <a href="{{route('product',['id'=>$rs->id])}}" class="slider-btn">Rezervasyon</a>
                        </div>
                    </div>

                </div>
            </div>

        </li>

        @endforeach
    </ul>

</div> <!-- /.flexslider -->
