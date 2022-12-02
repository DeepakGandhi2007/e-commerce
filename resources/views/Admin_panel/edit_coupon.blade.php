@extends("admin_panel/app")
@section("admin")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container-fluid" style="margin-left:300px">
    @include("admin_panel/layouts/sidebar")
    @if(session("success"))
    <div class="alert alert-success">{{session("success")}}</div>
    @endif
    <form action="{{ url('/admin_panel/edit-coupon-data/'.$coupon_data[0]->id)}}" method="post"
                        enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Edit coupon</h6>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{$coupon_data[0]->coupon_name}}" name="edit_coupon_name" class="form-control"
                            placeholder="page Nmae">
                        <label for="floatingInput">coupon Nmae</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{$coupon_data[0]->coupon_code}}" name="edit_coupon_code" class="form-control"
                            placeholder="page title">
                        <label for="floatingInput">coupon code</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{$coupon_data[0]->coupon_value}}" name="edit_coupon_value" class="form-control"
                            placeholder="page title">
                        <label for="floatingInput">coupon value</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="time" value="{{$coupon_data[0]->start_time}}" name="start_time" class="form-control"
                            placeholder="page title">
                        <label for="floatingInput">start time</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" value="{{$coupon_data[0]->start_date}}" name="start_date" class="form-control"
                            placeholder="page title">
                        <label for="floatingInput">start date</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="time" value="{{$coupon_data[0]->expire_time}}" name="expire_time" class="form-control"
                            placeholder="page title">
                        <label for="floatingInput">expire time</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" value="{{$coupon_data[0]->expire_date}}" name="expire_date" class="form-control"
                            placeholder="page title">
                        <label for="floatingInput">expire date</label>
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
