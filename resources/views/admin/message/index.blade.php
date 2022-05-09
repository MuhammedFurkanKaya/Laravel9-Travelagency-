@extends('layouts.adminbase')

@section('title','Contact Form Messages List')


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
                    Message List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Day</th>
                                <th>Status</th>
                                <th>Show</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->status}}</td>

                                    <td>
                                        <a href="{{route('admin.message.show' ,['id'=>$rs->id])}}" class="btn btn-sm btn-success"
                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                          Show
                                        </a>
                                    </td>
                                    <td><a href="{{route('admin.message.destroy' ,['id'=>$rs->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Deleting! Are You Sure?')" >Delete</a> </td>



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
