@extends('layouts.adminbase')

@section('title','Packages List')


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.packages.create')}}" class="btn btn-lg btn-success">Add Packages</a>


                </div>
            </div>
            <!-- /. ROW  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Packages List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Day</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{\App\Http\Controllers\AdminPanelCategoryController::getParentsTree($rs,$rs->title)}}</td>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->price}}</td>
                                <td>{{$rs->day}}</td>


                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px" >
                                    @endif
                                </td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.packages.edit' ,['id'=>$rs->id])}}" class="btn btn-sm btn-info">Edit</a> </td>
                                <td><a href="{{route('admin.packages.destroy' ,['id'=>$rs->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Deleting! Are You Sure?')" >Delete</a> </td>
                                <td><a href="{{route('admin.packages.show' ,['id'=>$rs->id])}}" class="btn btn-sm btn-success">Show</a> </td>

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
