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
        <form action="{{ url('/admin_panel/add_coupon_data') }}" style="margin-left:250" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="row" >
                <div class="col-md-6">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Add Coupon</h6>
                        <div class="form-floating mb-3">
                            <input type="text" name="coupon_name" class="form-control" id="floatingInput"
                                placeholder="Catgeory Name">
                            <label for="floatingInput">Coupon Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="coupon_code" class="form-control" id="floatingInput"
                                placeholder="Catgeory Name">
                            <label for="floatingInput">Coupon Code</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text"  name="coupon_value" class="form-control" id="floatingInput"
                                placeholder="Catgeory Name">
                            <label for="floatingInput">Coupon Value</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="time"  name="start_time" class="form-control" id="floatingInput"
                                placeholder="Catgeory Name">
                            <label for="floatingInput">start time</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date"  name="start_date" class="form-control" id="floatingInput"
                                placeholder="Catgeory Name">
                            <label for="floatingInput">start date</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="time"  name="expire_time" class="form-control" id="floatingInput"
                                placeholder="Catgeory Name">
                            <label for="floatingInput">expire time</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date"  name="expire_date" class="form-control" id="floatingInput"
                                placeholder="Catgeory Name">
                            <label for="floatingInput">expire date</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="product_name" id="" class="form-control">
                                <option value="">Select Product</option>
                                @foreach($product_data as $product_value)
                                <option value="{{$product_value->product_id}}" >{{$product_value->product_name}}</option>
                                @endforeach
                              </select>
                            <label for="floatingInput">Product Name</label>
                        </div>

                        <input style="margin-top:25px;width:125px" type="submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
    </div>
@endSection()
