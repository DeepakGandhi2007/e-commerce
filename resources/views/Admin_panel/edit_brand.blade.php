@extends("admin_panel/app")
@section("admin")
<div class="container-fluid" style="margin-left:300px">
    @include("admin_panel/layouts/sidebar")
    @if(session("success"))
    <div class="alert alert-success">{{session("success")}}</div>
    @endif
    <form action="{{ url('/admin_panel/edit-brand-data/'.$brand_data[0]->id)}}" method="post"
                        enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Edit Brands</h6>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{$brand_data[0]->brand_name}}" name="edit_name" class="form-control"
                            placeholder="Brand Nmae">
                        <label for="floatingInput">Brand Nmae</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Brand images</label>
                        <input class="form-control" type="file" name="brand_pic" id="formFileMultiple" multiple>
                        <img src="{{ asset('/brandpic/'.$brand_data[0]->brand_img) }}"  alt="" style="width:150px;height:150px;">
                        <input type="hidden" name="old_pic" value="{{$brand_data[0]->brand_img}}">
                    </div>
                    <input style="margin-top:25px;width:125px" type="submit" class="btn btn-primary">
                </div>
            </div>
        </div>
</div>



@endSection()
