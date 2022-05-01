@extends('layouts.adminbase')

@section('title','Show Product : '.$data->title)


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.product.edit', ['id'=>$data->id])}}" class="btn btn-lg btn-success">Edit</a>
                    <a href="{{route('admin.product.destroy', ['id'=>$data->id])}}" onclick="return confirm('Deleting! Are You Sure?')" class="btn btn-lg btn-success">Delete</a>


                </div>
            </div>
            <!-- /. ROW  -->
            <div class="col-md-6" style="width: 100%">
                <!--    Context Classes  -->
                <div class="panel panel-default">

                    <div class="panel-heading">
                        Detail Data
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">

                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>

                                </tr>

                                <tr>
                                    <th>Category</th>
                                    <td>
                                        {{\App\Http\Controllers\AdminPanelCategoryController::getParentsTree($data->category,$data->category->title)}}

                                    </td>

                                </tr>

                                <tr>
                                    <th>Title</th>
                                    <td>{{$data->title}}</td>

                                </tr>

                                <tr>
                                    <th>Keywords</th>
                                    <td>{{$data->keywords}}</td>

                                </tr>

                                <tr>
                                    <th>Description</th>
                                    <td>{{$data->description}}</td>

                                </tr>

                                <tr>
                                    <th>Price</th>
                                    <td>{{$data->price}}</td>

                                </tr>

                                <tr>
                                    <th>Day</th>
                                    <td>{{$data->day}}</td>

                                </tr>

                                <tr>
                                    <th>Number of People</th>
                                    <td>{{$data->number_people}}</td>

                                </tr>

                                <tr>
                                    <th>Tax</th>
                                    <td>{{$data->tax}}</td>

                                </tr>

                                <tr>
                                    <th>Detail Inf</th>
                                    <td>{{$data->detail}}</td>

                                </tr>

                                <tr>
                                    <th>Image</th>
                                    <td>
                                        @if($data->image)
                                            <img src="{{Storage::url($data->image)}}" style="height: 100px" >
                                        @endif
                                    </td>

                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>

                                </tr>

                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>

                                </tr>

                                <tr>
                                    <th>Update Date</th>
                                    <td>{{$data->updated_at}}</td>

                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
                <!--  end  Context Classes  -->
            </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
