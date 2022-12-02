@extends('admin_panel/app')
@section('admin')
    <div class="container-fluid" style="margin-left:300px">
        @include('admin_panel/layouts/sidebar')
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ url('/admin_panel/edit-cate-data/' . $cate_data[0]->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Edit Category</h6>
                        <div class="form-floating mb-3">
                            <input type="text" value="{{ $cate_data[0]->cate_name }}" name="edit_name"
                                class="form-control" placeholder="Category Name">
                            <label for="floatingInput">Category Name</label>
                        </div>
                        <input style="margin-top:25px;width:125px" type="submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
    </div>
@endSection()
