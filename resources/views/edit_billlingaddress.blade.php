<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schön. | eCommerce HTML5 Template</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- include the site stylesheet -->
    @include('layouts/header')
    @include('Admin_panel/layouts/header')
</head>
<style>
    #exampleModal {
        display: none;
    }
</style>

<body>
    <div id="wrapper">
        <!-- Page Loader -->
        <div id="pre-loader" class="loader-container">
            <div class="loader">
                <img src="{{ asset('/user_panel/images/svg/rings.svg') }}" alt="loader">
            </div>
        </div>
        <!-- W1 start here -->
        <div class="w1">

            <!-- mt header style4 start here -->
            @include('layouts/nav')
        </div>
        <main>
            <div class="containe">
                <div class="row">
                    <div class="col-md-3">
                        <div class="w3-sidebar w3-light-grey w3-bar-block">
                            <h3 class="w3-bar-item">Menu</h3>
                            <a href="#" class="w3-bar-item w3-button">Orders</a>
                            <a href="{{ url('generalinformation') }}" class="w3-bar-item w3-button">General
                                Information</a>
                            <a href="#" class="w3-bar-item w3-button">Change Passwords</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form action="{{ url('edit_billing_add') }}" style="margin-left:250" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            @foreach ($address_data as $data)
                                <?php $unserr=unserialize($data->billingadress);?>
                                        <div class="col-md-6">
                                            <div class="bg-light rounded h-100 p-4">
                                                <h6 class="mb-4">User Address</h6>
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="billingadd" class="form-control"
                                                        id="floatingInput" placeholder="Catgeory Name"
                                                        value="<?php print_r($unserr['address']); ?>">
                                                    <label for="floatingInput">Address</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="billingflat" class="form-control"
                                                        id="floatingInput" placeholder="Catgeory Name"
                                                        value="<?php print_r($unserr['flat']); ?>">
                                                        <input type="hidden" name="billingid" class="form-control"
                                                        id="floatingInput" placeholder="Catgeory Name"
                                                        value="{{$data->billing_id}}">
                                                        {{-- <input type="hidden" name="shippingadd" class="form-control"
                                                        id="floatingInput" placeholder="Catgeory Name"
                                                        value="{{$data->shipping_address}}"> --}}
                                                        <input type="hidden" name="shippingid" class="form-control"
                                                        id="floatingInput" placeholder="Catgeory Name"
                                                        value="{{$data->shippijng_id}}">
                                                    <label for="floatingInput">Flat</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="billingland" class="form-control"
                                                        id="floatingInput" placeholder="Catgeory Name"
                                                        value="<?php print_r($unserr['landmark']); ?>">
                                                    <label for="floatingInput">landmark</label>
                                                </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" name="billingcity" class="form-control"
                                                    id="floatingInput" placeholder="Catgeory Name"
                                                    value="<?php print_r($unserr['city']); ?>">
                                                <label for="floatingInput">city</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" name="billingstsate" class="form-control"
                                                    id="floatingInput" placeholder="Catgeory Name"
                                                    value="<?php print_r($unserr['state']); ?>">
                                                <label for="floatingInput">state</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" name="billingzip" class="form-control"
                                                    id="floatingInput" placeholder="Catgeory Name"
                                                    value="<?php print_r($unserr['zip']); ?>">
                                                <label for="floatingInput">zip</label>
                                            </div>
                                            <input style="margin-top:25px;width:125px" type="submit"
                                                class="btn btn-primary">
                                        </div>
                                        @endforeach
                            </div>

                    </div>

        </main>
        <span id="back-top" class="fa fa-arrow-up"></span>
    </div>
    <!-- include jQuery -->
    @include('layouts/footer')
</body>

</html>
