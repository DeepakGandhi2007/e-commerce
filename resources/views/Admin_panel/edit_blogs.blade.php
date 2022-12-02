@extends('Admin_panel/app')
@section('admin')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<div class="container-fluid" style="margin-left:300px">
    @include("Admin_panel/layouts/sidebar")
    @if(session("success"))
    <div class="alert alert-success">{{session("success")}}</div>
    @endif
    <form action="{{ url('/admin-panel/edit-blogs-data/'.$blog_data[0]->id)}}" method="post"
                        enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Edit Blogs</h6>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{$blog_data[0]->title}}" name="edit_title" class="form-control"
                            placeholder="About Title">
                        <label for="floatingInput">Blogs Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{$blog_data[0]->h1}}" name="edit_h1" class="form-control"
                            placeholder="About Title">
                        <label for="floatingInput">Blogs h1</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{$blog_data[0]->meta_description}}" name="edit_meta_desc" class="form-control"
                            placeholder="About Title">
                        <label for="floatingInput">Blogs meta description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{$blog_data[0]->meta_title}}" name="edit_meta_title" class="form-control"
                            placeholder="About Title">
                        <label for="floatingInput">Blogs meta title</label>
                    </div>
                    <br>
                    <label for="floatingTextarea">Blogs Description</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Description" id="summernote"
                            name="blog_desc" style="height: 150px;">{{$blog_data[0]->description}}</textarea>

                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">images</label>
                        <input class="form-control" type="file" name="blog_pic" id="formFileMultiple" multiple>

                        <img src="{{asset('blogs/'.$blog_data[0]->image)}}" alt=""
                            style="width:150px;height:150px;">
                        <input type="hidden" name="old_pic" value="{{$blog_data[0]->image}}">
                    </div>
                    <input style="margin-top:25px;width:125px" type="submit" class="btn btn-primary">
                </div>
            </div>
        </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 200
    });
</script>



@endSection()
