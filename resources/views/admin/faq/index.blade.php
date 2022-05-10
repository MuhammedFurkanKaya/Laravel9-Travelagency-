@extends('layouts.adminbase')

@section('title','FAQ List')


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.faq.create')}}" class="btn btn-lg btn-success">Add Question</a>


                </div>
            </div>
            <!-- /. ROW  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    FAQ List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Question</th>
                                <th>Answer</th>
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
                                    <td>{{$rs->question}}</td>
                                    <td>{!! $rs->answer !!}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.faq.edit' ,['id'=>$rs->id])}}" class="btn btn-sm btn-info">Edit</a> </td>
                                    <td><a href="{{route('admin.faq.destroy' ,['id'=>$rs->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Deleting! Are You Sure?')" >Delete</a> </td>
                                    <td><a href="{{route('admin.faq.show' ,['id'=>$rs->id])}}" class="btn btn-sm btn-success">Show</a> </td>

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
