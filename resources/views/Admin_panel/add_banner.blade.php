@extends('admin_panel/app')
@section('admin')
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
        <form action="{{ url('/admin_panel/add_banner_data') }}" style="margin-left:250" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Add Banner</h6>
                        <div class="form-floating mb-3">
                            <input type="text" name="banner_title" class="form-control" id="floatingInput"
                                placeholder="Banner Title">
                            <label for="floatingInput">Banner Title</label>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Bannner Image</label>
                            <input class="form-control" type="file" name="banner_pic" id="formFileMultiple" multiple>
                        </div>
                        <input style="margin-top:25px;width:125px" type="submit" class="btn btn-primary">
                    </div>
                </div>
        </form>
    </div>
    </div>
@endSection()
