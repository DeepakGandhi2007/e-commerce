@extends("admin_panel/app")
@section("admin")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container-fluid" style="margin-left:300px">
    @include("admin_panel/layouts/sidebar")
    @if(session("success"))
    <div class="alert alert-success">{{session("success")}}</div>
    @endif
    <form action="{{ url('/admin_panel/edit-page-data/'.$page_data[0]->id)}}" method="post"
                        enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Edit stock</h6>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{$page_data[0]->page_name}}" name="edit_name" class="form-control"
                            placeholder="page Nmae">
                        <label for="floatingInput">Page Nmae</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{$page_data[0]->page_title}}" name="page_title" class="form-control"
                            placeholder="page title">
                        <label for="floatingInput">Page Title</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Page images</label>
                        <input class="form-control" type="file" name="page_pic" id="formFileMultiple" multiple>
                        <img src="{{ asset('/pagepic/'.$page_data[0]->images) }}"  alt="" style="width:150px;height:150px;">
                        <input type="hidden" name="old_pic" value="{{ asset('/pagepic/'.$page_data[0]->images) }}">
                    </div>

                    <label for="floatingInput">Optional Image</label>
             <br>
                <div  class="mb-3">
                    <textarea class="ckeditor form-control" name="page_description">{{$page_data[0]->page_description}}</textarea>
                    <label for="formFileMultiple" class="form-label">Page description </label>
                </div>
                    <input style="margin-top:25px;width:125px" type="submit" class="btn btn-primary">
                </div>
            </div>
        </div>
        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
</div>



@endSection()
