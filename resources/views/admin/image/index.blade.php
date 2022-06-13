@extends('layouts.adminwindow')

@section('title','Packages Image Gallery')


@section('content')

    <h3>{{$packages->title}}</h3>
    <hr>
    <form role="form" action="{{route('admin.image.store',['pid'=>$packages->id])}}" method="post" enctype="multipart/form-data">
        @csrf




        <div class="form-group">
            <label class="control-label col-lg-4">No Input</label>
            <input class="form-control" type="text" name="title" placeholder="Title">
            <div class="">
                <div class="fileupload fileupload-new" data-provides="fileupload" >
                                <span class="btn btn-file btn-default">

                                    <input type="file" name="image">
                                </span>

                    <input class="fileupload-preview" type="submit" value="Upload">
                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
            </div>
        </div>





    </form>
            <!-- /. ROW  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Packages Image List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>

                                <th>Title</th>
                                <th>Image</th>
                                <th>Update</th>
                                <th>Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $images as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>


                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 100px" >
                                        @endif
                                    </td>

                                    <td><a href="{{route('admin.image.destroy' ,['pid'=>$packages->id,'id'=>$rs->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Deleting! Are You Sure?')" >Delete</a> </td>


                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


    @endsection
