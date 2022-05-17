@extends('layouts.adminwindow')

@section('title','Show Message : '.$data->title)


@section('content')

        <div id="page-inner">
            <div class="row">

            </div>
            <!-- /. ROW  -->
            <div class="col-md-6" style="width: 100%">
                <!--    Context Classes  -->
                <div class="panel panel-default">

                    <div class="panel-heading">
                        Detail Message Data
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">

                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>

                                </tr>

                                <tr>
                                    <th>Product</th>
                                    <td>{{$data->product->title}}</td>

                                </tr>

                                <tr>
                                    <th>Name & Surname</th>
                                    <td>{{$data->user->name}}</td>

                                </tr>



                                <tr>
                                    <th>Subject</th>
                                    <td>{{$data->subject}}</td>

                                </tr>

                                <tr>
                                    <th>Review</th>
                                    <td>{{$data->review}}</td>

                                </tr>

                                <tr>
                                    <th>Rate</th>
                                    <td>{{$data->rate}}</td>

                                </tr>

                                <tr>
                                    <th>Ip Number</th>
                                    <td>{{$data->IP}}</td>

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

                                <tr>
                                <th>Admin Note: </th>
                                <td>
                                    <form role="form" action="{{route('admin.comment.update' ,['id'=>$data->id])}}" method="post" >
                                  @csrf
                                        <select name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                        <button type="submit" class="btn btn-info">Update Comment </button>
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
