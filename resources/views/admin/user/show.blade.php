@extends('layouts.adminwindow')

@section('title','User Detail : '.$data->title)


@section('content')

        <div id="page-inner">
            <div class="row">

            </div>
            <!-- /. ROW  -->
            <div class="col-md-6" style="width: 100%">
                <!--    Context Classes  -->
                <div class="panel panel-default">

                    <div class="panel-heading">
                        Detail User Data
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">

                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>

                                </tr>

                                <tr>
                                    <th>Name & Surname</th>
                                    <td>{{$data->name}}</td>

                                </tr>

                                <tr>
                                    <th>Email</th>
                                    <td>{{$data->email}}</td>

                                </tr>

                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        @foreach($data->roles as $role)
                                            {{$role->name}}
                                            <a href="{{route('admin.user.destroyrole' ,['uid'=>$data->id,'rid'=>$role->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Deleting! Are You Sure?')" >[x]</a>
                                        @endforeach

                                    </td>

                                </tr>

                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>

                                </tr>

                                <tr>
                                    <th>Update Date</th>
                                    <td>{{$data->updated_at}}</td>

                                </tr>

                                <tr>
                                <th>Add Role to User </th>
                                <td>
                                    <form role="form" action="{{route('admin.user.addrole' ,['id'=>$data->id])}}" method="post" >
                                  @csrf
                                        <select name="role_id">
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-info">Add Role </button>
                                    </form>
                                </td>

                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
                <!--  end  Context Classes  -->
            </div>
        <!-- /. PAGE INNER  -->


@endsection
