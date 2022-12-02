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
        <form action="{{ url('/admin_panel/add_stock_data') }}" style="margin-left:250" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Add stock</h6>
                        <div class="form-floating mb-3">
                            <select name="product_name" id="" class="form-control">
                                <option value="">Select products</option>
                                @foreach($product_data as $product_data)
                                <option value="{{$product_data->product_id}}" >{{$product_data->product_name}}</option>
                                @endforeach
                              </select>
                            <label for="floatingInput">products Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="product_stock" class="form-control" id="floatingInput"
                                placeholder="Product stock">
                            <label for="floatingInput">Product stock</label>
                        </div>
                           
                         
                         
                        <!-- <div  class="form-floating mb-3"">
                            <textarea class="ckeditor form-control" name="product_feature"></textarea>
                            <label for="formFileMultiple" class="form-label">Product Feature </label>
                        </div> -->
                        <!-- <div  class="form-floating mb-3"">
                            <textarea class="ckeditor form-control" name="product_description"></textarea>
                            <label for="formFileMultiple" class="form-label">Product description </label>
                        </div> -->
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

