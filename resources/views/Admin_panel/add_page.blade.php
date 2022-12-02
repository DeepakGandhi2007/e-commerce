@extends('admin_panel/app')
@section('admin')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <section class="dashboard-wrap mtb-40">
        <div class="container">
            <div class="body-content">
                <div class="row">
                    <div class="col-md-3">
                        @include('admin_panel/layouts/sidebar')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid" style="margin-left:300px">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ url('/admin_panel/add_page_data') }}" style="margin-left:250" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Add Pages</h6>
                        <div class="form-floating mb-3">
                            <input type="text" name="page_name" class="form-control" id="floatingInput"
                                placeholder="Page Name">
                            <label for="floatingInput">Page Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="page_title" class="form-control" id="floatingInput"
                                placeholder="Product Name">
                            <label for="floatingInput">Page Title</label>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label"> Image</label>
                            <input class="form-control" type="file" name="page_pic" id="formFileMultiple" multiple>
                        </div>
                        <div  class="mb-3">
                            <textarea class="ckeditor form-control" name="page_description"></textarea>
                            <label for="formFileMultiple" class="form-label">Page Description </label>
                        </div>
                        <input style="margin-top:25px;width:125px" type="submit" class="btn btn-primary">
                    </div>
                </div>
        </form>
    </div>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
    </div>
@endSection()

