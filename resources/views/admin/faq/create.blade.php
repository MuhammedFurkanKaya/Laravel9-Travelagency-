@extends('layouts.adminbase')

@section('title','Add FAQ ')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Add FAQ </h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    FAQ  Elements
                </div>
                <div class="panel-body">
                    <form role="form" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Question</label>
                            <input class="form-control" type="text" name="question" placeholder="Question">
                            <p class="help-block">Help text here.</p>
                        </div>

                        <div class="form-group">
                            <label>Answer</label>
                            <textarea class="form-control" id="answer" name="answer">

                            </textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#answer' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>

                        </div>


                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>


                        <button type="submit" class="btn btn-info">Save </button>

                    </form>
                </div>
            </div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection
