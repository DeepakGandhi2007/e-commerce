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
                        <div class="w3-sidebar w3-light-grey w3-bar-block" >
                            <h3 class="w3-bar-item">Menu</h3>
                            <a href="#" class="w3-bar-item w3-button">Orders</a>
                            <a href="{{url('edit_pass')}}" class="w3-bar-item w3-button">General Information</a>
                            <a href="#" class="w3-bar-item w3-button">Change Passwords</a>
                          </div>
                    </div>
                    <div class="col-md-9">
                    @foreach ($user_data as $data )
                   <?php $password=$data->password;?>
                   <?php $username=$data->name;?>
                   <?php $email=$data->email;?>
                    @endforeach
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                           @endif
                            <form action="{{ url('edit_password') }}" style="margin-left:250" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row" >
                                    <div class="col-md-6">
                                        <div class="bg-light rounded h-100 p-4">
                                            <h6 class="mb-4">Change Password</h6>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="user_name" class="form-control" id="floatingInput"
                                                placeholder="Catgeory Name" value="<?php echo $username ?>">
                                                <input type="hidden" name="email_id" class="form-control" id="floatingInput"
                                                placeholder="Catgeory Name" value="<?php echo $email ?>">
                                                {{-- <input type="hidden" name="mobile_num" class="form-control" id="floatingInput"
                                                placeholder="Catgeory Name" value="<?php echo $mobile ?>"> --}}
                                                <input type="text" name="passwod" class="form-control" id="floatingInput"
                                                    placeholder="Catgeory Name" value="<?php echo $password ?>" readonly>
                                                <label for="floatingInput">password</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" name="pass" class="form-control" id="floatingInput"
                                                    placeholder="Catgeory Name">
                                                <label for="floatingInput">password</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" name="confirmpass" class="form-control" id="floatingInput"
                                                    placeholder="Catgeory Name">
                                                <label for="floatingInput">confirm password</label>
                                            </div>


                                            <input style="margin-top:25px;width:125px" type="submit" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <span id="back-top" class="fa fa-arrow-up"></span>
    </div>
    <!-- include jQuery -->
    @include('layouts/footer')
</body>

</html>
