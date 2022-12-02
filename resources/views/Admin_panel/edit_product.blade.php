@extends("admin_panel/app")
@section("admin")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container-fluid" style="margin-left:300px">
    @include("admin_panel/layouts/sidebar")
    @if(session("success"))
    <div class="alert alert-success">{{session("success")}}</div>
    @endif
    <form action="{{ url('/admin_panel/edit-product-data/'.$product_data[0]->product_id)}}" method="post"
                        enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Edit Products</h6>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{$product_data[0]->product_name}}" name="edit_name" class="form-control"
                            placeholder="Brand Nmae">
                        <label for="floatingInput">Product Nmae</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{$product_data[0]->product_price}}" name="product_price" class="form-control"
                            placeholder="Brand Nmae">
                        <label for="floatingInput">Product Price</label>
                    </div>
                    <div class="mb-3">

                        <label for="formFileMultiple" class="form-label">Product images</label>
                        <input class="form-control" type="file" name="product_pic" id="formFileMultiple" multiple>
                        <img src="{{ asset('/products/'.$product_data[0]->feature_img) }}"  alt="" style="width:150px;height:150px;">
                        <input type="hidden" name="old_pic" value="{{$product_data[0]->feature_img}}">
                    </div>
                    <label for="floatingInput">Optional Image</label>
             <br>
               <?php foreach (json_decode($product_data[0]->optional_img) as $image) {
               ?>
                    <div class="mb-3" style="display:inline">
                        <ul style="display:inline">
                        <li style="display:inline"><img src="{{ asset('/products/'.$image) }}"  alt="" style="width:150px;height:150px;float:left;padding-left:15px"></li></ul>
                        </div>
                    <?php
               }
               ?>
                  <div class="input-group hdtuto control-group lst incrementt">
                    <input type="file" name="imagenames[]" class="myfrm form-control">
                    <input type="hidden" name="old_pic1" value="{{$image}}">
                    <div class="input-group-btn">
                      <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                    </div>
                  </div>
                  <div class="clonee hide">
                    <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                      <input type="file" name="imagenames[]" class="myfrm form-control">
                      <input type="hidden" name="old_pic1" value="{{$image}}">
                      <div class="input-group-btn">
                        <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div  class="mb-3">
                    <textarea class="ckeditor form-control" name="product_feature">{{$product_data[0]->product_feature}}</textarea>
                    <label for="formFileMultiple" class="form-label">Product Feature </label>
                </div>
                <div  class="mb-3">
                    <textarea class="ckeditor form-control" name="product_description">{{$product_data[0]->product_description}}</textarea>
                    <label for="formFileMultiple" class="form-label">Product description </label>
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
