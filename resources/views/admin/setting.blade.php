@extends('layouts.adminbase')

@section('title','Settings')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection
@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Settings</h1>


                </div>
            </div>
            <!-- /. ROW  -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    Settings
                </div>
                <div class="panel-body">
                    <form role="form" action="{{route('admin.setting.update' ,['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf


                        <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" type="text" id="title" name="title" value="{{$data->title}}" >
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
                            <label>Company</label>
                            <input class="form-control" type="text" name="company" value="{{$data->company}}">
                            <p class="help-block">Help text here.</p>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" name="address" value="{{$data->address}}">

                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input class="form-control" type="text" name="phone" value="{{$data->phone}}">

                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input class="form-control" type="text" name="email" value="{{$data->email}}">

                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control select2" name="status">
                                <option selected>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <label style="height:33px  ;border-style:solid;background-color:beige; border: 2px solid bisque; border-radius: 8px; padding: 5px;">Choose Icon</label>
                            <input type="file" name="icon" class="file-u   pload-default" style="text-align: center; height:35px  ;border-style:solid;background-color:gainsboro; border: 2px solid gainsboro; border-radius: 8px; padding: 5px;"   >

                        </div>
                        <div class="form-group">
                            <label>Smtp Server</label>
                            <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Smtp Email</label>
                            <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Smtppassword</label>
                            <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Smtpport</label>
                            <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Fax</label>
                            <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>About Us</label>
                            <textarea class="form-control" id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <textarea class="form-control" id="contact" name="contact">{{$data->contact}}</textarea>

                        </div>
                        <div class="form-group">
                            <label>References</label>
                            <textarea class="form-control" id="references" name="references">{{$data->references}}</textarea>

                        </div>




                        <button type="submit" class="btn btn-info">Update Setting </button>

                    </form>
                </div>
            </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
@section('foot')
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#aboutus').summernote();
                    $('#contact').summernote();
                    $('#references').summernote();
                });
            </script>
@endsection
