@extends('layouts.adminbase')

@section('title','Comment & Reviews List')


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">



                </div>
            </div>
            <!-- /. ROW  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Comment List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Product</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Show</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td><a href="{{route('admin.product.show',['id'=>$rs->product_id])}}">{{$rs->product->title}}</a></td>
                                    <td>{{$rs->user->name}}</td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->review}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>

                                    <td>
                                        <a href="{{route('admin.comment.show' ,['id'=>$rs->id])}}" class="btn btn-sm btn-success"
                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                          Show
                                        </a>
                                    </td>
                                    <td><a href="{{route('admin.comment.destroy' ,['id'=>$rs->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Deleting! Are You Sure?')" >Delete</a> </td>



                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
