@extends('layouts.adminbase')

@section('title','Add Packages')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Add Packages</h1>
                    <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    Packages Elements
                </div>
                <div class="panel-body">
                    <form role="form" action="{{route('admin.packages.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Parent Packages</label>
                            <select class="form-control select2" name="category_id" >
                                @foreach($data as $rs)
                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanelCategoryController::getParentsTree($rs,$rs->title)}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" type="text" name="title" placeholder="Title">
                            <p class="help-block">Help text here.</p>
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <input class="form-control" type="text" name="keywords" placeholder="Keywords">
                            <p class="help-block">Help text here.</p>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" type="text" name="description" placeholder="Description">

                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control" type="number" name="price" value="0">

                        </div>
                        <div class="form-group">
                            <label>Day</label>
                            <input class="form-control" type="number" name="day" value="0">

                        </div>
                        <div class="form-group">
                            <label>Number of People</label>
                            <input class="form-control" type="number" name="number_people" value="0">

                        </div>
                        <div class="form-group">
                            <label>Tax %</label>
                            <input class="form-control" type="number" name="tax" value="0">

                        </div>

                        <div class="form-group">
                            <label>Detail Inf</label>
                            <textarea class="form-control" id="detail" name="detail">

                            </textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#detail' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>

                        </div>

                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <label style="height:33px  ;border-style:solid;background-color:beige; border: 2px solid bisque; border-radius: 8px; padding: 5px;">Choose Image</label>
                            <input type="file" name="image" class="file-u   pload-default" style="text-align: center; height:35px  ;border-style:solid;background-color:gainsboro; border: 2px solid gainsboro; border-radius: 8px; padding: 5px;"   >

                            </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Text area</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>


                        <button type="submit" class="btn btn-info">Save </button>

                    </form>
                </div>
            </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
