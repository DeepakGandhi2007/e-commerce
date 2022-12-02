<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schön. | eCommerce HTML5 Template</title>
    <!-- include the site stylesheet -->
    @include('layouts/header')
</head>
<style>
    #exampleModal {
        display: none;
    }

    @import "http://fonts.googleapis.com/css?family=Raleway";

    /*----------------------------------------------
CSS settings for HTML div Exact Center
------------------------------------------------*/
    #abc {
        width: 100%;
        height: 100%;
        opacity: 1.5;
        top: 0;
        left: 0;
        display: none;
        position: fixed;
        background-color: black;
        overflow: auto
    }

    #showdiv {
        width: 100%;
        height: 100%;
        opacity: 1.5;
        top: 0;
        left: 0;
        display: none;
        position: fixed;
        background-color: black;
        overflow: auto
    }

    img#close {
        position: absolute;
        right: -14px;
        top: -14px;
        cursor: pointer
    }

    div#popupContact {
        position: fixed;
        opacity: 1.5;
        background-color: black;
        left: 30%;
        top: 17%;
        font-family: 'Raleway', sans-serif
    }

    div#Contact {
        position: fixed;
        opacity: 1.5;
        background-color: black;
        left: 30%;
        top: 17%;
        font-family: 'Raleway', sans-serif
    }

    form {
        max-width: 80%;
        min-width: 80%;
        padding: 10px 50px;
        border: 2px solid gray;
        border-radius: 10px;
        font-family: raleway;
        background-color: rgb(3, 0, 0)
    }

    p {
        margin-top: 30px
    }

    h2 {
        background-color: #FEFFED;
        padding: 20px 35px;
        margin: -10px -50px;
        text-align: center;
        border-radius: 10px 10px 0 0
    }

    hr {
        margin: 10px -50px;
        border: 0;
        border-top: 1px solid #ccc
    }

    input[type=text] {
        width: 100%;
        padding: 10px;
        margin-top: 30px;
        border: 1px solid #ccc;
        padding-left: 40px;
        font-size: 16px;
        font-family: raleway
    }

    #name {
        background-image: url(../images/name.jpg);
        background-repeat: no-repeat;
        background-position: 5px 7px
    }

    #email {
        background-image: url(../images/email.png);
        background-repeat: no-repeat;
        background-position: 5px 7px
    }

    textarea {
        background-image: url(../images/msg.png);
        background-repeat: no-repeat;
        background-position: 5px 7px;
        width: 82%;
        height: 95px;
        padding: 10px;
        resize: none;
        margin-top: 30px;
        border: 1px solid #ccc;
        padding-left: 40px;
        font-size: 16px;
        font-family: raleway;
        margin-bottom: 30px
    }

    #submit {
        text-decoration: none;
        width: 100%;
        text-align: center;
        display: block;
        background-color: #FFBC00;
        color: #fff;
        border: 1px solid #FFCB00;
        padding: 10px 0;
        font-size: 20px;
        cursor: pointer;
        border-radius: 5px
    }

    span {
        color: red;
        font-weight: 700
    }

    button {
        width: 25%;
        height: 45px;
        border-radius: 3px;
        background-color: #1495eb;
        margin-left: 45px;
        padding: 35px color: #fff;
        font-family: 'Raleway', sans-serif;
        font-size: 18px;
        cursor: pointer
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
    </div>
    <div class="w1">

        <!-- mt header style4 start here -->
        @include('layouts/nav')
        <div class="modal fade" id="message" role="dialog">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" style="margin-left:955px" class="fa fa-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="margin-left:755px" id="bodymodal">

                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-side-menu">
                <!-- mt holder start here -->
                <div class="mt-holder">
                    <a href="#" class="side-close"><span></span><span></span></a>
                    <strong class="mt-side-title">MY ACCOUNT</strong>
                    <!-- mt side widget start here -->
                    <div class="mt-side-widget">
                        <header>
                            <span class="mt-side-subtitle">SIGN IN</span>
                            <p>Welcome back! Sign in to Your Account</p>
                        </header>
                        <form action="#">
                            <fieldset>
                                <input type="text" placeholder="Username or email address" class="input">
                                <input type="password" placeholder="Password" class="input">
                                <div class="box">
                                    <span class="left"><input class="checkbox" type="checkbox" id="check1"><label
                                            for="check1">Remember Me</label></span>
                                    <a href="#" class="help">Help?</a>
                                </div>
                                <button type="submit" class="btn-type1">Login</button>
                            </fieldset>
                        </form>
                    </div>
                    <!-- mt side widget end here -->
                    <div class="or-divider"><span class="txt">or</span></div>
                    <!-- mt side widget start here -->
                    <div class="mt-side-widget">
                        <header>
                            <span class="mt-side-subtitle">CREATE NEW ACCOUNT</span>
                            <p>Create your very own account</p>
                        </header>
                        <form action="#">
                            <fieldset>
                                <input type="text" placeholder="Username or email address" class="input">
                                <button type="submit" class="btn-type1">Register</button>
                            </fieldset>
                        </form>
                    </div>
                    <!-- mt side widget end here -->
                </div>
                <!-- mt holder end here -->
            </div><!-- mt side menu end here -->
            <div class="mt-search-popup">
                <div class="mt-holder">
                    <a href="#" class="search-close"><span></span><span></span></a>
                    <div class="mt-frame">
                        <form action="#">
                            <fieldset>
                                <input type="text" placeholder="Search...">
                                <span class="icon-microphone"></span>
                                <button class="icon-magnifier" type="submit"></button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div><!-- mt search popup end here -->
            <main id="mt-main">
                <section class="mt-contact-banner mt-banner-22 wow fadeInUp" data-wow-delay="0.4s"
                    style="background-image: url(http://placehold.it/1920x325);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <h1 class="text-center">CHECK OUT</h1>
                                <!-- Breadcrumbs of the Page -->
                                <nav class="breadcrumbs">
                                    <ul class="list-unstyled">
                                        <li><a href="index.html">Home <i class="fa fa-angle-right"></i></a></li>
                                        <li>Check Out</li>
                                    </ul>
                                </nav>
                                <!-- Breadcrumbs of the Page end -->
                            </div>
                        </div>
                    </div>
                </section>
                <div class="mt-process-sec wow fadeInUp" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- Process List of the Page -->
                                <ul class="list-unstyled process-list">
                                    <li class="active">
                                        <span class="counter">01</span>
                                        <strong class="title">Shopping Cart</strong>
                                    </li>
                                    <li class="active">
                                        <span class="counter">02</span>
                                        <strong class="title">Check Out</strong>
                                    </li>
                                    <li>
                                        <span class="counter">03</span>
                                        <strong class="title">Order Complete</strong>
                                    </li>
                                </ul>
                                <!-- Process List of the Page end -->
                            </div>
                        </div>
                    </div>
                </div><!-- Mt Process Section of the Page end -->
                <section class="mt-detail-sec toppadding-zero wow fadeInUp" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>SHIPPING ADRESS</h2>
                                <button id="popup" onclick="div_show()">add addrress</button>
                                <div class="row" style=" margin-top:35px;">
                                    @foreach ($addressdata as $data)
                                        <?php $shipping = $data->shipping_address;
                                        $test = explode(',', $shipping);
                                        ?>
                                        @if (isset($test[4]))
                                            <div class="col-md-12">
                                                <div class="col-md-1">
                                                    <input type="radio" id="radioadd"
                                                        data-saddress="<?php print_r($test[0]); ?>"
                                                        data-sstate="<?php print_r($test[1]); ?>"
                                                        data-sflat="<?php print_r($test[2]); ?>"
                                                        data-slandmark="<?php print_r($test[3]); ?>"
                                                        data-user="{{ Auth::user()->id }}"name="radioadd"
                                                        style="margin-top: 35px;">
                                                </div>
                                                <div class="col-md-6" style="margin-top: 25px">
                                                    <div
                                                        style=" background-color: lightgray; !important;width: 400px;padding:  10px;">
                                                        <strong style="  color: white;font-size: 15PX;">
                                                            Address:</strong>
                                                        <span class="addname"
                                                            style=" color:  white ;padding:5px;text-transform:  uppercase ;">
                                                            <?php print_r($test[0]); ?></span>
                                                        <br><strong style="  color: white;font-size: 15PX;">
                                                            Flat:</strong>
                                                        <span
                                                            style=" color:  white ;padding:5px;text-transform:  uppercase ;"
                                                            class="flatname"> <?php print_r($test[1]); ?></span>
                                                        <br><strong style="  color: white;font-size: 15PX;">
                                                            Landmark:</strong>
                                                        <span
                                                            style=" color:  white ;padding:5px;text-transform:  uppercase ;"
                                                            class="landname"> <?php print_r($test[2]); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $shippingg_id = $data->shippijng_id; ?>
                                        @endif
                                    @endforeach
                                </div>
                                <div id="res"></div>
                                <br>
                                <div style="margin-top: 105px">
                                    <input type="checkbox" style="margin-top:20px" id="chkPassport" checked
                                        onclick="ShowHideDiv(this)" /> <span
                                        style="font-size: 18px;color: black; margin-left: 30px;margin-top:20px">Billing
                                        Addres Same As Shipping Address??</span>
                                </div>
                                <div col-md-6>
                                    <div id="dvPassport" style="display: none">
                                        <h2 style="margin-top:55px">Billing Address</h2>
                                        {{-- <div style="float: left"> --}}
                                        <button onclick="SHOWPOP()">add addrress</button>
                                        <div class="row" style=" margin-top:35px;">
                                            <div class="row" style=" margin-top:35px;">
                                                @foreach ($addressdata as $datas)
                                                    <?php $billing = $datas->billingadress;
                                                    $test2 = explode(',', $billing);
                                                    ?>

                                                    @if (isset($test2[4]))
                                                        <div class="col-md-12">
                                                            <div class="col-md-1">
                                                                <input type="radio" id="radioaddd"
                                                                    {{-- data-saddress="@if (session()->has('shippingaddress')) {{ $value = session()->get('shippingaddress') }} @else @endif" --}}
                                                                    data-baddress="<?php print_r($test2[0]); ?>"
                                                                    data-bstate="<?php print_r($test2[1]); ?>"
                                                                    data-bflat="<?php print_r($test2[2]); ?>"
                                                                    data-blandmark="<?php print_r($test2[3]); ?>"
                                                                    data-user="{{ Auth::user()->id }}"name="radioadd"
                                                                    style="margin-top: 35px;">
                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 25px">
                                                                <div
                                                                    style=" background-color: lightgray; !important;width: 400px;padding:  10px;">
                                                                    <strong style="  color: white;font-size: 15PX;">
                                                                        Address:</strong>
                                                                    <span class="addname"
                                                                        style=" color:  white ;padding:5px;text-transform:  uppercase ;">
                                                                        <?php print_r($test2[0]); ?></span>
                                                                    <br><strong
                                                                        style="  color: white;font-size: 15PX;">
                                                                        Flat:</strong>
                                                                    <span
                                                                        style=" color:  white ;padding:5px;text-transform:  uppercase ;"
                                                                        class="flatname">
                                                                        <?php print_r($test2[1]); ?></span>
                                                                    <br><strong
                                                                        style="  color: white;font-size: 15PX;">
                                                                        Landmark:</strong>
                                                                    <span
                                                                        style=" color:  white ;padding:5px;text-transform:  uppercase ;"
                                                                        class="landname">
                                                                        <?php print_r($test2[2]); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div id="response"></div>
                                        <DIV id="CDE" style="display: NONE">
                                            <div id="Contact">
                                                <form action="{{ url('add_billing_data') }}" id="billingform"
                                                    style="margin-left:250" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <img id="close" src="images/3.png" onclick="hidediv()">
                                                    <h2>ADDRESS Us</h2>
                                                    <hr>
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="text"><b>Address</b></label>
                                                                <br>
                                                                <input type="text" placeholder="ADDRESS"
                                                                    id="addd" name="addd" required>
                                                                <input type="hidden" id="user_idd"
                                                                    value="{{ Auth::user()->id }}"
                                                                    name="user_idd"required>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="psw"><b>Flat</b></label>
                                                                <br>
                                                                <input type="text" placeholder="FLAT"
                                                                    id="flatd" name="flatd" required>
                                                                <input type="hidden" id="shipping_id"
                                                                    value="<?php echo $shippingg_id; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="psw"><b>landmark</b></label>
                                                                <br>
                                                                <input type="text" placeholder="LANDMARK"
                                                                    id="landd" name="landd" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="psw"><b>state</b></label>
                                                                <br>
                                                                <input type="text" placeholder="STATE"
                                                                    id="stated" name="stated" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="psw"><b>City</b></label>
                                                                <br>
                                                                <input type="text" placeholder="CITY"
                                                                    id="cityd" name="cityd" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="psw"><b>Zip</b></label>
                                                                <br>
                                                                <input type="text" placeholder="ZIP"
                                                                    id="zipd" name="zipd" required>
                                                            </div>
                                                        </div>\
                                                        <input type="submit" id="submit">
                                                </form>
                                            </div>
                                        </DIV>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <aside>
                            <div class="holder">
                                <h2>YOUR ORDER</h2>
                                <ul class="list-unstyled block">
                                    @php $total=0 @endphp
                                    @if (isset($cart_data))
                                        @if (Cookie::get('shopping_cart'))
                                            @foreach ($cart_data as $data)
                                                <?php $itmename = $data['item_name']; ?>
                                                <?php $itmprice = $data['item_price']; ?>
                                                <?php $itmeqty = $data['item_quantity']; ?>
                                                {{-- {{$data}} --}}
                                                @csrf
                                                <li>
                                                    <div class="txt-holder">
                                                        <div class="text-wrap pull-left">
                                                            <strong class="title">PRODUCTS</strong>
                                                            <span>{{ $data['item_name'] }}
                                                                x{{ $data['item_quantity'] }}</span>
                                                        </div>
                                                        <div class="text-wrap txt text-right pull-right">
                                                            <strong class="title">TOTALS</strong>
                                                            <span><i
                                                                    class="fa fa-inr"></i>{{ number_format($data['item_quantity'] * $data['item_price'], 2) }}</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php $total = $total + $data['item_quantity'] * $data['item_price'];
                                                // print_r($total);
                                                ?>
                                            @endforeach
                                        @endif
                                    @else
                                    @endif

                                    <li>
                                        <div class="txt-holder">
                                            <strong class="title sub-title pull-left">CART SUBTOTAL</strong>
                                            <div class="txt pull-right">

                                                <span><i class="fa fa-inr"></i><?php echo $total; ?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="txt-holder">
                                            <strong class="title sub-title pull-left">SHIPPING</strong>
                                            <div class="txt pull-right">
                                                <span>Free Shipping</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li style="border-bottom: none;" id="apllybutton">
                                        <div class="txt-holder">
                                            <strong class="title sub-title pull-left">GRAND TOTAL</strong>
                                            <div class="txt pull-right">
                                                <span class="totallall"><i class="fa fa-inr "></i>
                                                    @if (session()->has('total'))
                                                        {{ $value = session()->get('total') }}
                                                    @else
                                                        <?php echo $total; ?>
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li style="border-bottom: none;">
                                        <div class="txt-holder">
                                            <strong class="title sub-title pull-left">Discounted Price</strong>
                                            <div class="txt pull-right">
                                                <span><i class="fa fa-inr"></i>
                                                    @if (session()->has('discount'))
                                                        {{ $value = session()->get('discount') }}
                                                    @else
                                                        0
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                @foreach ($coupon_data as $datas)
                                    <?php $couponcd = $datas->coupon_code; ?>
                                    <?php $couponvalue = $datas->coupon_value; ?>
                                    @csrf
                                    <div class="copy-button" style="margin-bottom: 60px">
                                        <input type="hidden" id="coupon_code" value="{{ $datas->coupon_code }}">
                                        <input type="hidden" id="coupon_price" value="{{ $datas->coupon_value }}">
                                        <input type="hidden" id="totalll" value="<?php echo $total; ?>">
                                    </div>
                                @endforeach
                                <input id="couponcodes" style="width:40%;margin-left:65px;border:none"
                                type="text" placeholder="Apply Promo Code ">
                            <button style="margin-left:0px;background-color:#FFBC00"
                                class="apllybutton">COPY</button>
                                <h2>PAYMENT METHODS</h2>
                                <!-- Panel Group of the Page -->
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <!-- Panel Panel Default of the Page -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    DIRECT BANK TRANSFER
                                                    <span class="check"><i class="fa fa-check"></i></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                            aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p>Make your payment directly into our bank account. Please use
                                                    your order id as the payment reference. Your order wont be
                                                    shippided until the funds have cleared in our account</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Panel Panel Default of the Page end -->
                                    <!-- Panel Panel Default of the Page -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" href="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    CHEQUE PAYMENT
                                                    <span class="check"><i class="fa fa-check"></i></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p>Make your payment directly into our bank account. Please use
                                                    your order id as the payment reference. Your order wont be
                                                    shippided until the funds have cleared in our account</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Panel Panel Default of the Page end -->
                                    <!-- Panel Panel Default of the Page -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" href="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    PAYPAL
                                                    <span class="check"><i class="fa fa-check"></i></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <p>Make your payment directly into our bank account. Please use
                                                    your order id as the payment reference. Your order wont be
                                                    shippided until the funds have cleared in our account</p>
                                            </div>
                                        </div>
                                        <div class="block-holder">
                                            <input type="checkbox" checked> I’ve read &amp; accept the <a
                                                href="#">terms &amp; conditions</a>
                                        </div>
                                        @if (isset($cart_data))
                                            @if (Cookie::get('shopping_cart'))
                                                @foreach ($cart_data as $data)
                                                    <?php $itmename = $data['item_name']; ?>
                                                    <?php $itmprice = $data['item_price']; ?>
                                                    <?php $itmeqty = $data['item_quantity']; ?>
                                                    <input type="hidden" class="itemname"
                                                        value="<?php print_r($itmename); ?>">
                                                    <input type="hidden" id="itemprice"
                                                        value="<?php print_r($itmprice); ?>">
                                                    <input type="hidden" id="itemqty"
                                                        value="<?php print_r($itmeqty); ?>">
                                                @endforeach
                                            @endif
                                        @else
                                        @endif
                                        <button
                                             data-subtotal="<?php echo $total; ?>"
                                            data-coupon-code="<?php print_r($couponcd); ?>"
                                            data-coupon-value="<?php print_r($couponvalue); ?>"
                                            data-userid="{{ Auth::user()->id }}" style="width:100%"
                                            class="process-btn orderbutton">PROCEED TO CHECKOUT
                                            <i class="fa fa-check"></i></button>
                                    </div>

                                    <!-- Panel Panel Default of the Page end -->
                                </div>
                                <!-- Panel Group of the Page end -->
                            </div>

                        </aside>
                        <div id="abc">
                            <!-- Popup Div Starts Here -->
                            <div id="popupContact">
                                <!-- Contact Us Form -->
                                <form action="{{ url('add_add_data') }}" id="addressform" style="margin-left:250"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <img id="close" src="images/3.png" onclick="div_hide()">
                                    <h2>Contact Us</h2>
                                    <hr>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="text"><b>Address</b></label>
                                                <br>
                                                <input type="text" placeholder="ADDRESS" id="add"
                                                    name="add" required>
                                                <input type="hidden" id="user_id" value="{{ Auth::user()->id }}"
                                                    name="user_id"required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="psw"><b>Flat</b></label>
                                                <br>
                                                <input type="text" placeholder="FLAT" id="flat"
                                                    name="flat" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="psw"><b>landmark</b></label>
                                                <br>
                                                <input type="text" placeholder="LANDMARK" id="land"
                                                    name="land" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="psw"><b>state</b></label>
                                                <br>
                                                <input type="text" placeholder="STATE" id="state"
                                                    name="state" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="psw"><b>City</b></label>
                                                <br>
                                                <input type="text" placeholder="CITY" id="city"
                                                    name="city" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="psw"><b>Zip</b></label>
                                                <br>
                                                <input type="text" placeholder="ZIP" id="zip"
                                                    name="zip" required>
                                            </div>
                                        </div>\
                                        <input type="submit" id="submit">
                                </form>
                            </div>
                        </div>

                    </div>
        </div>
        </section>
        </main>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p>© <a href="index.html">schön.</a> - All rights Reserved</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 text-right">
                        <div class="bank-card">
                            <img src="images/bank-card.png" alt="bank-card">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span id="back-top" class="fa fa-arrow-up"></span>
    </div>
    <!-- include jQuery -->
    @include('layouts/footer')
</body>

</html>
