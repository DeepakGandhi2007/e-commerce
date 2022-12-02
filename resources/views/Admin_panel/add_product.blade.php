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
        <form action="{{ url('/admin_panel/add_product_data') }}" style="margin-left:250" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Add Products</h6>
                        <div class="form-floating mb-3">
                            <input type="text" name="product_name" class="form-control" id="floatingInput"
                                placeholder="Product Name">
                            <label for="floatingInput">Product Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="cate_name" id="" class="form-control">
                                <option value="">Select category</option>
                                @foreach($cate_data as $cate_value)
                                <option value="{{$cate_value->id}}" >{{$cate_value->cate_name}}</option>
                                @endforeach
                              </select>
                            <label for="floatingInput">category Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="brand_name" id="" class="form-control">
                                <option value="">Select Brand</option>
                                @foreach($brand_data as $brand_value)
                                <option value="{{$brand_value->id}}" >{{$brand_value->brand_name}}</option>
                                @endforeach
                              </select>
                            <label for="floatingInput">Brand Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="product_price" class="form-control" id="floatingInput"
                                placeholder="Product Name">
                            <label for="floatingInput">Product Price</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="product_disc_per" class="form-control" id="floatingInput"
                                placeholder="Product Name">
                            <label for="floatingInput">Product Discount in %</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="product_disc_rs" class="form-control" id="floatingInput"
                                placeholder="Product Name">
                            <label for="floatingInput">Product Discount in Rs</label>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label"> Image</label>
                            <input class="form-control" type="file" name="product_pic" id="formFileMultiple" multiple>
                        </div>
                        <div class="input-group hdtuto control-group lst increment">
                            <input type="file" name="filenames[]" class="myfrm form-control">
                            <div class="input-group-btn">
                              <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                            </div>
                          </div>
                          <div class="clone hide">
                            <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                              <input type="file" name="filenames[]" class="myfrm form-control">
                              <div class="input-group-btn">
                                <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                              </div>
                            </div>
                          </div>
                        <div  class="mb-3">
                            <textarea class="ckeditor form-control" name="product_feature"></textarea>
                            <label for="formFileMultiple" class="form-label">Product Feature </label>
                        </div>
                        <div  class="mb-3">
                            <textarea class="ckeditor form-control" name="product_description"></textarea>
                            <label for="formFileMultiple" class="form-label">Product description </label>
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

