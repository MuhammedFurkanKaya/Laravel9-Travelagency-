@extends('layouts.adminbase')

@section('title','User List')


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
                    User List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
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
                                    <td>{{$rs->email}}</td>
                                    <td>
                                        @foreach($rs->roles as $role)
                                            {{$role->name}}
                                        @endforeach

                                    </td>
                                    <td></td>

                                    <td>
                                        <a href="{{route('admin.user.show' ,['id'=>$rs->id])}}" class="btn btn-sm btn-success"
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
