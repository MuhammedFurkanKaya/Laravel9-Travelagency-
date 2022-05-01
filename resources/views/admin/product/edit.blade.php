@extends('layouts.adminbase')

@section('title','Edit Product : '.$data->title)


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Edit Product: {{$data->title}}</h1>


                </div>
            </div>
            <!-- /. ROW  -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    Product Elements
                </div>
                <div class="panel-body">
                    <form role="form" action="{{route('admin.product.update' ,['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Parent Category</label>
                            <select class="form-control select2" name="category_id" >
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif>{{\App\Http\Controllers\AdminPanelCategoryController::getParentsTree($rs,$rs->title)}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" type="text" name="title" value="{{$data->title}}" >
                            <p class="help-block">Help text here.</p>
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}">
                            <p class="help-block">Help text here.</p>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" type="text" name="description" value="{{$data->description}}">
                            <p class="help-block">Help text here.</p>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control" type="number" name="price" value="{{$data->price}}">

                        </div>
                        <div class="form-group">
                            <label>Day</label>
                            <input class="form-control" type="number" name="day" value="{{$data->day}}">

                        </div>
                        <div class="form-group">
                            <label>Number of People</label>
                            <input class="form-control" type="number" name="number_people" value="{{$data->number_people}}">

                        </div>
                        <div class="form-group">
                            <label>Tax %</label>
                            <input class="form-control" type="number" name="tax" value="{{$data->tax}}">

                        </div>

                        <div class="form-group">
                            <label>Detail Inf</label>
                            <textarea class="form-control" name="detail">
                                {{$data->detail}}"
                            </textarea>

                        </div>

                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <label style="height:33px  ;border-style:solid;background-color:beige; border: 2px solid bisque; border-radius: 8px; padding: 5px;">Choose Image</label>
                            <input type="file" name="image" class="file-u   pload-default" style="text-align: center; height:35px  ;border-style:solid;background-color:gainsboro; border: 2px solid gainsboro; border-radius: 8px; padding: 5px;"   >

                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option selected>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Text area</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>


                        <button type="submit" class="btn btn-info">Update Data </button>

                    </form>
                </div>
            </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
