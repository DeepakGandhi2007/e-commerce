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
    <style>
        /* .timeline li{
            height: 37px
        } */
        ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: #d4d9df;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }

        ul.timeline>li {
            margin: 20px 0;
            padding-left: 30px;
        }

        ul.timeline>li:before {
            content: '\2713';
            background: #fff;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 0;
            left: 5px;
            width: 50px;
            height: 50px;
            z-index: 400;
            text-align: center;
            line-height: 50px;
            color: #d4d9df;
            font-size: 24px;
            border: 2px solid #d4d9df;
        }

        ul.timeline>li.active:before {
            content: '\2713';
            background: #28a745;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 0;
            left: 5px;
            width: 50px;
            height: 50px;
            z-index: 400;
            text-align: center;
            line-height: 50px;
            color: #fff;
            font-size: 30px;
            border: 2px solid #28a745;
        }

        ul.timeline>li.deactive:before {
            content: '\2713';
            background: red;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 0;
            left: 5px;
            width: 50px;
            height: 50px;
            z-index: 400;
            text-align: center;
            line-height: 50px;
            color: #fff;
            font-size: 30px;
            border: 2px solid red;
        }

    </style>
</head>

<body>
    <!-- main container of all the page elements -->
    <div id="wrapper">
        <!-- Page Loader -->
        <div id="pre-loader" class="loader-container">
            <div class="loader">
                <img src="images/svg/rings.svg" alt="loader">
            </div>
        </div>
        <!-- W1 start here -->
        <div class="w1">
            <!-- mt header style4 start here -->
            <header id="mt-header" class="style4">
                <!-- mt bottom bar start here -->
                <div class="mt-bottom-bar">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- mt logo start here -->
                                <div class="mt-logo"><a href="#"><img src="images/mt-logo.png" alt="schon"></a>
                                </div>
                                <!-- mt icon list start here -->
                                <ul class="mt-icon-list">
                                    <li class="hidden-lg hidden-md">
                                        <a href="#" class="bar-opener mobile-toggle">
                                            <span class="bar"></span>
                                            <span class="bar small"></span>
                                            <span class="bar"></span>
                                        </a>
                                    </li>
                                    <li><a href="#" class="icon-magnifier"></a></li>
                                    <li><a href="#" class="icon-heart"></a></li>
                                    <li class="drop">
                                        <a href="#" class="cart-opener">
                                            <span class="icon-handbag"></span>
                                            <span class="num">3</span>
                                        </a>
                                        <!-- mt drop start here -->
                                        <div class="mt-drop">
                                            <!-- mt drop sub start here -->
                                            <div class="mt-drop-sub">
                                                <!-- mt side widget start here -->
                                                <div class="mt-side-widget">
                                                    <!-- cart row start here -->
                                                    <div class="cart-row">
                                                        <a href="#" class="img"><img
                                                                src="http://placehold.it/75x75" alt="image"
                                                                class="img-responsive"></a>
                                                        <div class="mt-h">
                                                            <span class="mt-h-title"><a href="#">Marvelous Modern
                                                                    3 Seater</a></span>
                                                            <span class="price"><i class="fa fa-eur"
                                                                    aria-hidden="true"></i> 599,00</span>
                                                            <span class="mt-h-title">Qty: 1</span>
                                                        </div>
                                                        <a href="#" class="close fa fa-times"></a>
                                                    </div><!-- cart row end here -->
                                                    <!-- cart row start here -->
                                                    <div class="cart-row">
                                                        <a href="#" class="img"><img
                                                                src="http://placehold.it/75x75" alt="image"
                                                                class="img-responsive"></a>
                                                        <div class="mt-h">
                                                            <span class="mt-h-title"><a href="#">Marvelous Modern
                                                                    3 Seater</a></span>
                                                            <span class="price"><i class="fa fa-eur"
                                                                    aria-hidden="true"></i> 599,00</span>
                                                            <span class="mt-h-title">Qty: 1</span>
                                                        </div>
                                                        <a href="#" class="close fa fa-times"></a>
                                                    </div><!-- cart row end here -->
                                                    <!-- cart row start here -->
                                                    <div class="cart-row">
                                                        <a href="#" class="img"><img
                                                                src="http://placehold.it/75x75" alt="image"
                                                                class="img-responsive"></a>
                                                        <div class="mt-h">
                                                            <span class="mt-h-title"><a href="#">Marvelous Modern
                                                                    3 Seater</a></span>
                                                            <span class="price"><i class="fa fa-eur"
                                                                    aria-hidden="true"></i> 599,00</span>
                                                            <span class="mt-h-title">Qty: 1</span>
                                                        </div>
                                                        <a href="#" class="close fa fa-times"></a>
                                                    </div><!-- cart row end here -->
                                                    <!-- cart row total start here -->
                                                    <div class="cart-row-total">
                                                        <span class="mt-total">Sub Total</span>
                                                        <span class="mt-total-txt"><i class="fa fa-eur"
                                                                aria-hidden="true"></i> 799,00</span>
                                                    </div>
                                                    <!-- cart row total end here -->
                                                    <div class="cart-btn-row">
                                                        <a href="#" class="btn-type2">VIEW CART</a>
                                                        <a href="#" class="btn-type3">CHECKOUT</a>
                                                    </div>
                                                </div><!-- mt side widget end here -->
                                            </div>
                                            <!-- mt drop sub end here -->
                                        </div><!-- mt drop end here -->
                                        <span class="mt-mdropover"></span>
                                    </li>
                                    <li>
                                        <a href="#" class="bar-opener side-opener">
                                            <span class="bar"></span>
                                            <span class="bar small"></span>
                                            <span class="bar"></span>
                                        </a>
                                    </li>
                                </ul><!-- mt icon list end here -->
                                <!-- navigation start here -->
                                <nav id="nav">
                                    <ul>
                                        <li>
                                            <a class="drop-link" href="homepage1.html">HOME <i
                                                    class="fa fa-angle-down hidden-lg hidden-md"
                                                    aria-hidden="true"></i></a>
                                            <div class="s-drop">
                                                <ul>
                                                    <li><a href="homepage1.html">Homepage1</a></li>
                                                    <li><a href="homepage2.html">homepage2</a></li>
                                                    <li><a href="homepage3.html">homepage3</a></li>
                                                    <li><a href="homepage4.html">homepage4</a></li>
                                                    <li><a href="homepage5.html">Homepage5</a></li>
                                                    <li><a href="homepage6.html">homepage6</a></li>
                                                    <li><a href="homepage7.html">homepage7</a></li>
                                                    <li><a href="homepage8.html">homepage8</a></li>
                                                    <li><a href="homepage9.html">homepage9</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="drop">
                                            <a href="product-grid-view.html">PRODUCTS <i class="fa fa-angle-down"
                                                    aria-hidden="true"></i></a>
                                            <!-- mt dropmenu start here -->
                                            <div class="mt-dropmenu text-left">
                                                <!-- mt frame start here -->
                                                <div class="mt-frame">
                                                    <!-- mt f box start here -->
                                                    <div class="mt-f-box">
                                                        <!-- mt col3 start here -->
                                                        <div class="mt-col-3">
                                                            <div class="sub-dropcont">
                                                                <strong class="title"><a
                                                                        href="product-grid-view.html"
                                                                        class="mt-subopener">PRODUCTS</a></strong>
                                                                <div class="sub-drop">
                                                                    <ul>
                                                                        <li><a href="product-grid-view.html">Product
                                                                                Grid View</a></li>
                                                                        <li><a href="product-list-view.html">Product
                                                                                List View</a></li>
                                                                        <li><a href="product-detail.html">Product
                                                                                Detail</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="sub-dropcont">
                                                                <strong class="title"><a href="#"
                                                                        class="mt-subopener">404 Pages</a></strong>
                                                                <div class="sub-drop">
                                                                    <ul>
                                                                        <li><a href="404-page.html">404 Page</a></li>
                                                                        <li><a href="404-page2.html">404 Page2</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- mt col3 end here -->

                                                        <!-- mt col3 start here -->
                                                        <div class="mt-col-3">
                                                            <div class="sub-dropcont">
                                                                <strong class="title"><a href="#"
                                                                        class="mt-subopener">About US</a></strong>
                                                                <div class="sub-drop">
                                                                    <ul>
                                                                        <li><a href="about-us.html">About</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="sub-dropcont">
                                                                <strong class="title"><a href="#"
                                                                        class="mt-subopener">Contact US</a></strong>
                                                                <div class="sub-drop">
                                                                    <ul>
                                                                        <li><a href="contact-us.html">Contact</a></li>
                                                                        <li><a href="contact-us2.html">Contact 2</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="sub-dropcont">
                                                                <strong class="title"><a href="#"
                                                                        class="mt-subopener">Coming Soon</a></strong>
                                                                <div class="sub-drop">
                                                                    <ul>
                                                                        <li><a href="coming-soon.html">Coming Soon</a>
                                                                        </li>
                                                                        <li><a href="coming-soon2.html">Coming
                                                                                Soon2</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- mt col3 end here -->

                                                        <!-- mt col3 start here -->
                                                        <div class="mt-col-3">
                                                            <div class="sub-dropcont">
                                                                <strong class="title"><a href="#"
                                                                        class="mt-subopener">KITCHEN
                                                                        FURNITURE</a></strong>
                                                                <div class="sub-drop">
                                                                    <ul>
                                                                        <li><a href="#">Kitchen Taps</a></li>
                                                                        <li><a href="#">Breakfast time</a></li>
                                                                        <li><a href="#">Cooking</a></li>
                                                                        <li><a href="#">Food Storage Boxes</a>
                                                                        </li>
                                                                        <li><a href="#">Spice Jars</a></li>
                                                                        <li><a href="#">Napskins</a></li>
                                                                        <li><a href="#">Oven Gloves</a></li>
                                                                        <li><a href="#">Placemats</a></li>
                                                                        <li><a href="#">Cooking</a></li>
                                                                        <li><a href="#">Food Storage Boxes</a>
                                                                        </li>
                                                                        <li><a href="#">Spice Jars</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- mt col3 end here -->

                                                        <!-- mt col3 start here -->
                                                        <div class="mt-col-3 promo">
                                                            <div class="mt-promobox">
                                                                <a href="#"><img
                                                                        src="http://placehold.it/295x320"
                                                                        alt="promo banner" class="img-responsive"></a>
                                                            </div>
                                                        </div>
                                                        <!-- mt col3 end here -->
                                                    </div>
                                                    <!-- mt f box end here -->
                                                </div>
                                                <!-- mt frame end here -->
                                            </div>
                                            <!-- mt dropmenu end here -->
                                            <span class="mt-mdropover"></span>
                                        </li>
                                        <li>
                                            <a class="drop-link" href="blog-right-sidebar.html">Blog <i
                                                    class="fa fa-angle-down hidden-lg hidden-md"
                                                    aria-hidden="true"></i></a>
                                            <div class="s-drop">
                                                <ul>
                                                    <li><a href="blog-fullwidth-page.html">Blog Fullwidth Page</a></li>
                                                    <li><a href="blog-right-sidebar2.html">blog right sidebar2</a></li>
                                                    <li><a href="blog-postlist-3-masonry.html">blog postlist
                                                            masonry</a></li>
                                                    <li><a href="blog-post-detail-sidebar.html">blog post detail
                                                            sidebar</a></li>
                                                    <li><a href="blog-post-detail-full-width.html">blog post detail
                                                            full width</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="drop">
                                            <a href="#">PAGES <i class="fa fa-angle-down"
                                                    aria-hidden="true"></i></a>
                                            <!-- mt dropmenu start here -->
                                            <div class="mt-dropmenu text-left">
                                                <!-- mt frame start here -->
                                                <div class="mt-frame">
                                                    <!-- mt f box start here -->
                                                    <div class="mt-f-box">
                                                        <!-- mt col3 start here -->
                                                        <div class="mt-col-3">
                                                            <div class="sub-dropcont">
                                                                <strong class="title"><a
                                                                        href="product-grid-view.html"
                                                                        class="mt-subopener">PRODUCTS</a></strong>
                                                                <div class="sub-drop">
                                                                    <ul>
                                                                        <li><a href="product-grid-view.html">Product
                                                                                Grid View</a></li>
                                                                        <li><a href="product-list-view.html">Product
                                                                                List View</a></li>
                                                                        <li><a href="product-detail.html">Product
                                                                                Detail</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="sub-dropcont">
                                                                <strong class="title"><a href="#"
                                                                        class="mt-subopener">404 Pages</a></strong>
                                                                <div class="sub-drop">
                                                                    <ul>
                                                                        <li><a href="404-page.html">404 Page</a></li>
                                                                        <li><a href="404-page2.html">404 Page2</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- mt col3 end here -->

                                                        <!-- mt col3 start here -->
                                                        <div class="mt-col-3">
                                                            <div class="sub-dropcont">
                                                                <strong class="title"><a href="#"
                                                                        class="mt-subopener">About US</a></strong>
                                                                <div class="sub-drop">
                                                                    <ul>
                                                                        <li><a href="about-us.html">About</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="sub-dropcont">
                                                                <strong class="title"><a href="#"
                                                                        class="mt-subopener">Contact US</a></strong>
                                                                <div class="sub-drop">
                                                                    <ul>
                                                                        <li><a href="contact-us.html">Contact</a></li>
                                                                        <li><a href="contact-us2.html">Contact 2</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="sub-dropcont">
                                                                <strong class="title"><a href="#"
                                                                        class="mt-subopener">Coming Soon</a></strong>
                                                                <div class="sub-drop">
                                                                    <ul>
                                                                        <li><a href="coming-soon.html">Coming Soon</a>
                                                                        </li>
                                                                        <li><a href="coming-soon2.html">Coming
                                                                                Soon2</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- mt col3 end here -->

                                                        <!-- mt col3 start here -->
                                                        <div class="mt-col-3">
                                                            <div class="sub-dropcont">
                                                                <strong class="title"><a href="#"
                                                                        class="mt-subopener">KITCHEN
                                                                        FURNITURE</a></strong>
                                                                <div class="sub-drop">
                                                                    <ul>
                                                                        <li><a href="#">Kitchen Taps</a></li>
                                                                        <li><a href="#">Breakfast time</a></li>
                                                                        <li><a href="#">Cooking</a></li>
                                                                        <li><a href="#">Food Storage Boxes</a>
                                                                        </li>
                                                                        <li><a href="#">Spice Jars</a></li>
                                                                        <li><a href="#">Napskins</a></li>
                                                                        <li><a href="#">Oven Gloves</a></li>
                                                                        <li><a href="#">Placemats</a></li>
                                                                        <li><a href="#">Cooking</a></li>
                                                                        <li><a href="#">Food Storage Boxes</a>
                                                                        </li>
                                                                        <li><a href="#">Spice Jars</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- mt col3 end here -->

                                                        <!-- mt col3 start here -->
                                                        <div class="mt-col-3 promo">
                                                            <div class="mt-promobox">
                                                                <a href="#"><img
                                                                        src="http://placehold.it/295x320"
                                                                        alt="promo banner" class="img-responsive"></a>
                                                            </div>
                                                        </div>
                                                        <!-- mt col3 end here -->
                                                    </div>
                                                    <!-- mt f box end here -->
                                                </div>
                                                <!-- mt frame end here -->
                                            </div>
                                            <!-- mt dropmenu end here -->
                                            <span class="mt-mdropover"></span>
                                        </li>
                                        <li><a href="about-us.html">About</a></li>
                                        <li>
                                            <a class="drop-link" href="contact-us.html">Contact <i
                                                    class="fa fa-angle-down hidden-lg hidden-md"
                                                    aria-hidden="true"></i></a>
                                            <div class="s-drop">
                                                <ul>
                                                    <li><a href="contact-us.html">Contact</a></li>
                                                    <li><a href="contact-us2.html">Contact 2</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- mt icon list end here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mt bottom bar end here -->
                <span class="mt-side-over"></span>
            </header><!-- mt header style4 end here -->
            <!-- mt side menu start here -->
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
                                    <span class="left"><input class="checkbox" type="checkbox"
                                            id="check1"><label for="check1">Remember Me</label></span>
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
            <!-- mt search popup start here -->
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
            <!-- mt main start here -->
            <main id="mt-main">
                <!-- Mt Contact Banner of the Page -->
                <section class="mt-contact-banner style4 wow fadeInUp" data-wow-delay="0.4s"
                    style="background-image: url(http://placehold.it/1920x205);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <h1>CHAIRS</h1>
                                <!-- Breadcrumbs of the Page -->
                                <nav class="breadcrumbs">
                                    <ul class="list-unstyled">
                                        <li><a href="index.html">Home <i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="product-detail.html">Products <i
                                                    class="fa fa-angle-right"></i></a></li>
                                        <li>Chairs</li>
                                    </ul>
                                </nav><!-- Breadcrumbs of the Page end -->
                            </div>
                        </div>
                    </div>
                </section><!-- Mt Contact Banner of the Page end -->
                <div class="container">
                    <div class="row">
                        <!-- sidebar of the Page start here -->
                        <aside id="sidebar" class="col-xs-12 col-sm-4 col-md-3 wow fadeInLeft"
                            data-wow-delay="0.4s">
                            <section class="shop-widget">
                                <h2>CATEGORIES</h2>
                                <!-- category list start here -->
                                <ul class="list-unstyled category-list">
                                    <li>
                                        <a href="{{ url('accounts') }}" class="w3-bar-item w3-button"><span
                                                class="name">My Accounts</span></a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{ url('/changepassword') }}" class="w3-bar-item w3-button"><span
                                                class="name">Change Passwords</span></a>
                                    </li> --}}
                                    <li>
                                        <a href="{{ url('generalinformation') }}" class="w3-bar-item w3-button"><span
                                                class="name">Orders</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('address') }}" class="w3-bar-item w3-button"><span
                                                class="name">Address</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('logout') }}" class="w3-bar-item w3-button"><span
                                                class="name">Logout</span></a>
                                    </li>
                                </ul><!-- category list end here -->
                            </section><!-- shop-widget of the Page end here -->
                        </aside><!-- sidebar of the Page end here -->
                        @foreach ($orders_data as $item)
                            <?php $orderid = $item->order_id;
                            $id = $item->id;
                          $status=$item->status;?>
                            <?php $pdfid = $item->id; ?>
                            <?php $cart = $item->cart_subtotal;
                            $coupon = $item->coupon_code;
                            $totalamount = $item->total_amount;
                            $discount = $item->discount; ?>
                            <?php $total = $item->total_amount; ?>
                            <?php $data = $item->shipping_address;
                            $data=explode("`",$data); ?>
                        @endforeach
                        <div class="col-xs-12 col-sm-8 col-md-9 wow fadeInRight" style="border: 1px solid black;passing:20px"
                            data-wow-delay="0.4s">
                            <h3 style="border-bottom: 1px dotted black;height:50px">Order Id:#2022<?php print_r($orderid); ?><a
                                        class="btn btn-primary" href="{{ url('pdf/' . $id) }}"
                                        style="float:right;margin-bottom:90px">Download PDF</a></h2>
                                <b style="margin-left:280px">Your Order (2022<?php print_r($orderid); ?>) has been placed
                                    successfully. </b>

                                    <b style="margin-left:280px">shipping address (<?php print_r($data[0]); ?>)</b>
                                <div class="col-md-6">
                                    <div class="card mt-4">
                                        <div class="card-body">
                                            <ul class="timeline">
                                                <li class="active">
                                                    <h6>You order has been placed successfully.</h6>
                                                    <p class="mb-0 text-muted">Order id: <?php print_r($orderid); ?></p>
                                                </li>
                                                @if ($status==1)
                                                <li class="active" style="height:70px;margin-top:35px">
                                                    <h6 style="padding-top:25px">You order is being Dispatch</h6>
                                                </li>
                                                @endif
                                                @if ($status==4)
                                                <li class="active" style="height:70px;margin-top:35px">
                                                    <h6 style="padding-top:25px">You order is being Dispatch</h6>
                                                </li>
                                                <li class="active" style="height:70px">
                                                    <h6 style="padding-top:25px">You order is out for Delivery</h6>

                                                </li>
                                                <li class="active" style="height:70px">
                                                    <h6 style="padding-top:25px">You order has been delivered
                                                        successfully</h6>

                                                </li>
                                                @endif
                                                @if ($status==3)
                                                <li class="deactive" style="height:70px;margin-top:35px">
                                                    <h6 style="padding-top:25px">You order is canceled</h6>
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @if ($status==0)
                                    <a
                                    class="btn btn-danger" href=""
                                    style="float:right;margin-bottom:90px">Cancel Order</a>
                                    @endif
                                    <?php $i = 0; ?>
                                    @foreach ($item_data as $item)
                                        <?php $forpdf = $item->id; ?>
                                        <?php $i++; ?>
                                        <?php $total = $item->item_qty * $item->item_price; ?>
                                        <div style="display:flex;margin-top:5px;border-bottom:1px solid black">

                                            <div class="image" style="width:50px;height:50px;margin-left;50px">
                                                <img src="{{ asset('products/' . $item->item_img) }}"
                                                    alt="image description">
                                            </div>
                                            <div style="padding:10px;padding-left:15px">{{ $item->item_name }} <div
                                                    style="margin: 5px 0;#888: ;font-weight: 600;font-size: 13px;">
                                                    <span>QTY:</span>{{ $item->item_qty }} <i class="fa fa-inr"
                                                        style="margin-left: 20px;color:red"><?php echo $total; ?></i>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                    <div style="border-bottom: 1px solid black">
                                        <H3>Bill Detail</H3>
                                        <p>Cart Subtotal:<span style="float: right"><i class="fa fa-inr"></i><?php print_r($cart);?></span></p>
                                        <br>
                                        <p>Discount:<span style="float: right"><i class="fa fa-inr"></i><?php print_r($discount);?></span></p>
                                        <br>

                                    </div>
                                    <div >
                                    <p>Grand Totall:<span style="float: right"><i class="fa fa-inr"></i><?php print_r($totalamount);?></span></p>
                                    </div>
                                </div>

                        </div>

                    </div>
                </div>
        </div>
    </div>
    </div>


    </div>
    </div>
    </div>
    </main><!-- mt main end here -->
    <!-- footer of the Page -->
    <footer id="mt-footer" class="style1 wow fadeInUp" data-wow-delay="0.4s">
        <!-- Footer Holder of the Page -->
        <div class="footer-holder dark">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
                        <!-- F Widget About of the Page -->
                        <div class="f-widget-about">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo.png" alt="Schon"></a>
                            </div>
                            <p>Exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <!-- Social Network of the Page -->
                            <ul class="list-unstyled social-network">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                            <!-- Social Network of the Page end -->
                        </div>
                        <!-- F Widget About of the Page end -->
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
                        <div class="f-widget-news">
                            <h3 class="f-widget-heading">Twitter</h3>
                            <div class="news-articles">
                                <div class="news-column">
                                    <i class="fa fa-twitter"></i>
                                    <div class="txt-box">
                                        <p>Laboris nisi ut <a href="#">#schön</a> aliquip econse- <br>quat. <a
                                                href="#">https://t.co/vreNJ9nEDt</a></p>
                                    </div>
                                </div>
                                <div class="news-column">
                                    <i class="fa fa-twitter"></i>
                                    <div class="txt-box">
                                        <p>Ficia deserunt mollit anim id est labo- <br>rum. incididunt ut labore et
                                            dolore <br><a href="#">https://t.co/vreNJ9nEDt</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomxs">
                        <!-- Footer Tabs of the Page -->
                        <div class="f-widget-tabs">
                            <h3 class="f-widget-heading">Product Tags</h3>
                            <ul class="list-unstyled tabs">
                                <li><a href="#">Sofas</a></li>
                                <li><a href="#">Armchairs</a></li>
                                <li><a href="#">Living</a></li>
                                <li><a href="#">Bedroom</a></li>
                                <li><a href="#">Lighting</a></li>
                                <li><a href="#">Tables</a></li>
                                <li><a href="#">Pouf</a></li>
                                <li><a href="#">Wood</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Outdoor</a></li>
                                <li><a href="#">Kitchen</a></li>
                                <li><a href="#">Stools</a></li>
                                <li><a href="#">Footstools</a></li>
                                <li><a href="#">Desks</a></li>
                            </ul>
                        </div>
                        <!-- Footer Tabs of the Page -->
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 text-right">
                        <!-- F Widget About of the Page -->
                        <div class="f-widget-about">
                            <h3 class="f-widget-heading">Information</h3>
                            <ul class="list-unstyled address-list align-right">
                                <li><i class="fa fa-map-marker"></i>
                                    <address>Connaugt Road Central Suite 18B, 148 <br>New Yankee</address>
                                </li>
                                <li><i class="fa fa-phone"></i><a href="tel:15553332211">+1 (555) 333 22 11</a></li>
                                <li><i class="fa fa-envelope-o"></i><a
                                        href="mailto:&#105;&#110;&#102;&#111;&#064;&#115;&#099;&#104;&#111;&#110;&#046;&#099;&#104;&#097;&#105;&#114;">&#105;&#110;&#102;&#111;&#064;&#115;&#099;&#104;&#111;&#110;&#046;&#099;&#104;&#097;&#105;&#114;</a>
                                </li>
                            </ul>
                        </div>
                        <!-- F Widget About of the Page end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Holder of the Page end -->
        <!-- Footer Area of the Page -->
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
        <!-- Footer Area of the Page end -->
    </footer><!-- footer of the Page end -->
    </div><!-- W1 end here -->
    <span id="back-top" class="fa fa-arrow-up"></span>
    </div>
    @include('layouts/footer')
</body>

</html>
