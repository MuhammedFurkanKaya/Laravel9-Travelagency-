@extends('layouts.adminbase')

@section('title','Show Category : '.$data->title)


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <a href="/admin/category/edit/{{$data->id}}" class="btn btn-lg btn-success">Edit</a>
                    <a href="/admin/category/destroy/{{$data->id}}" onclick="return confirm('Deleting! Are You Sure?')" class="btn btn-lg btn-success">Delete</a>
                    <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

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
                                    <th>Title</th>
                                    <td>{{$data->title}}</td>

                                </tr>

                                <tr>
                                    <th>Keywords</th>
                                    <td>{{$data->keywords}}</td>

                                </tr>

                                <tr>
                                    <th>Image</th>
                                    <td></td>

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
