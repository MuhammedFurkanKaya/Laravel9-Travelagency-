@extends('layouts.adminbase')

@section('title','Category List')


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Category List</h1>
                    <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Category List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Description</th>
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
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->keywords}}</td>
                                <td>{{$rs->description}}</td>
                                <td>{{$rs->image}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="/admin/category/edit{{$rs->id}}" class="btn btn-sm btn-info">Edit</a> </td>
                                <td><a href="/admin/category/delete{{$rs->id}}" class="btn btn-sm btn-danger" >Delete</a> </td>
                                <td><a href="/admin/category/show{{$rs->id}}" class="btn btn-sm btn-success">Show</a> </td>

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
