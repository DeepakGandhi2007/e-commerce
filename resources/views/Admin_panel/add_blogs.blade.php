@extends('Admin_panel/app')
@section('admin')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <section class="dashboard-wrap mtb-40">
        <div class="container">
            <div class="body-content">
                <div class="row">
                    <div class="col-md-3">
                        @include('Admin_panel/layouts/sidebar')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid" style="margin-left:300px">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ url('/admin_panel/add_blog_data') }}" style="margin-left:250" method="post"
            enctype="multipart/form-data">

            @csrf
            <div class="row" >
                <div class="col-md-6">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Add Blog</h6>
                        <div class="form-floating mb-3">
                            <input type="text" name="blog_title" class="form-control" id="floatingInput"
                                placeholder="About Title">
                            <label for="floatingInput">Blog Title</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="blog_h1" class="form-control" id="floatingInput"
                                placeholder="About Title">
                            <label for="floatingInput">H1</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="metadesc" class="form-control" id="floatingInput"
                                placeholder="About Title">
                            <label for="floatingInput">Meta Desc</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="metatitle" class="form-control" id="floatingInput"
                                placeholder="About Title">
                            <label for="floatingInput">Meta Title</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Description" id="summernote"
                                name="blog" style="height: 150px;"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">images</label>
                            <input class="form-control" type="file" name="blog_pic" id="formFileMultiple" multiple>
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
