<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schön. | eCommerce HTML5 Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @include('layouts/header')
    <style>
    .checked {
        color: orange;
    }

    p {
        color: black;
        text-align: justify;
    }

    .rate-area {
        float: left;
        border-style: none;
    }

    .rate-area:not(:checked)>input {
        position: absolute;
        clip: rect(0, 0, 0, 0);
    }

    .rate-area:not(:checked)>label {
        float: right;
        width: 56px;
        height:50px;
        /* padding: 0 .1em;
        overflow: hidden; */
        white-space: nowrap;
        cursor: pointer;
        font-size: 400%;
        line-height: 1.2;
        color: lightgrey;
        text-shadow: 1px 1px #bbb;
    }

    .rate-area:not(:checked)>label:before {
        content: '★ ';
    }

    .rate-area>input:checked~label {
        color: gold;
        text-shadow: 1px 1px #c60;
        font-size: 50px% !important;
    }

    .rate-area:not(:checked)>label:hover,
    .rate-area:not(:checked)>label:hover~label {
        color: gold;
    }

    .rate-area>input:checked+label:hover,
    .rate-area>input:checked+label:hover~label,
    .rate-area>input:checked~label:hover,
    .rate-area>input:checked~label:hover~label,
    .rate-area>label:hover~input:checked~label {
        color: gold;
        text-shadow: 1px 1px goldenrod;
    }

    .rate-area>label:active {
        position: relative;
        top: 2px;
        left: 2px;
    }
    </style>
</head>

<body>
    <!-- main container of all the page elements -->
    <!-- main container of all the page elements -->
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
            <header id="mt-header" class="style4">
                <!-- mt bottom bar start here -->
                <div class="mt-bottom-bar">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- mt logo start here -->
                                <div class="mt-logo"><a href="#"><img src="images/mt-logo.png" alt="schon"></a></div>
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
                                                        <a href="#" class="img"><img src="http://placehold.it/75x75"
                                                                alt="image" class="img-responsive"></a>
                                                        <div class="mt-h">
                                                            <span class="mt-h-title"><a href="#">Marvelous Modern 3
                                                                    Seater</a></span>
                                                            <span class="price"><i class="fa fa-eur"
                                                                    aria-hidden="true"></i> 599,00</span>
                                                            <span class="mt-h-title">Qty: 1</span>
                                                        </div>
                                                        <a href="#" class="close fa fa-times"></a>
                                                    </div><!-- cart row end here -->
                                                    <!-- cart row start here -->
                                                    <div class="cart-row">
                                                        <a href="#" class="img"><img src="http://placehold.it/75x75"
                                                                alt="image" class="img-responsive"></a>
                                                        <div class="mt-h">
                                                            <span class="mt-h-title"><a href="#">Marvelous Modern 3
                                                                    Seater</a></span>
                                                            <span class="price"><i class="fa fa-eur"
                                                                    aria-hidden="true"></i> 599,00</span>
                                                            <span class="mt-h-title">Qty: 1</span>
                                                        </div>
                                                        <a href="#" class="close fa fa-times"></a>
                                                    </div><!-- cart row end here -->
                                                    <!-- cart row start here -->
                                                    <div class="cart-row">
                                                        <a href="#" class="img"><img src="http://placehold.it/75x75"
                                                                alt="image" class="img-responsive"></a>
                                                        <div class="mt-h">
                                                            <span class="mt-h-title"><a href="#">Marvelous Modern 3
                                                                    Seater</a></span>
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
                                                                <strong class="title"><a href="product-grid-view.html"
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
                                                                        <li><a href="coming-soon2.html">Coming Soon2</a>
                                                                        </li>
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
                                                                        <li><a href="#">Food Storage Boxes</a></li>
                                                                        <li><a href="#">Spice Jars</a></li>
                                                                        <li><a href="#">Napskins</a></li>
                                                                        <li><a href="#">Oven Gloves</a></li>
                                                                        <li><a href="#">Placemats</a></li>
                                                                        <li><a href="#">Cooking</a></li>
                                                                        <li><a href="#">Food Storage Boxes</a></li>
                                                                        <li><a href="#">Spice Jars</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- mt col3 end here -->

                                                        <!-- mt col3 start here -->
                                                        <div class="mt-col-3 promo">
                                                            <div class="mt-promobox">
                                                                <a href="#"><img src="http://placehold.it/295x320"
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
                                                    <li><a href="blog-postlist-3-masonry.html">blog postlist masonry</a>
                                                    </li>
                                                    <li><a href="blog-post-detail-sidebar.html">blog post detail
                                                            sidebar</a></li>
                                                    <li><a href="blog-post-detail-full-width.html">blog post detail full
                                                            width</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="drop">
                                            <a href="#">PAGES <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <!-- mt dropmenu start here -->
                                            <div class="mt-dropmenu text-left">
                                                <!-- mt frame start here -->
                                                <div class="mt-frame">
                                                    <!-- mt f box start here -->
                                                    <div class="mt-f-box">
                                                        <!-- mt col3 start here -->
                                                        <div class="mt-col-3">
                                                            <div class="sub-dropcont">
                                                                <strong class="title"><a href="product-grid-view.html"
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
                                                                        <li><a href="coming-soon2.html">Coming Soon2</a>
                                                                        </li>
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
                                                                        <li><a href="#">Food Storage Boxes</a></li>
                                                                        <li><a href="#">Spice Jars</a></li>
                                                                        <li><a href="#">Napskins</a></li>
                                                                        <li><a href="#">Oven Gloves</a></li>
                                                                        <li><a href="#">Placemats</a></li>
                                                                        <li><a href="#">Cooking</a></li>
                                                                        <li><a href="#">Food Storage Boxes</a></li>
                                                                        <li><a href="#">Spice Jars</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- mt col3 end here -->

                                                        <!-- mt col3 start here -->
                                                        <div class="mt-col-3 promo">
                                                            <div class="mt-promobox">
                                                                <a href="#"><img src="http://placehold.it/295x320"
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
                <!-- Mt Product Detial of the Page -->
                <section class="mt-product-detial wow fadeInUp" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="row">
                        @foreach ($stock_data as $data)
                        <?php $stock=$data->product_stock;?>
                        @endforeach
                            @foreach ($product_data as $data)
                            <?php $features=$data->product_feature;
                             $product_id=$data->product_id;?>
                            <?php $description=$data->product_description;?>
                            <div class="col-xs-12">
                                <!-- Slider of the Page -->
                                <div class="slider">
                                    <!-- Comment List of the Page -->
                                    <ul class="list-unstyled comment-list">
                                        <li><a href="#"><i class="fa fa-heart"></i>27</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>12</a></li>
                                        <li><a href="#"><i class="fa fa-share-alt"></i>14</a></li>
                                    </ul>
                                    <!-- Comment List of the Page end -->
                                    <!-- Product Slider of the Page -->
                                    <div class="product-slider">
                                        <div class="slide">
                                            <img src="{{ asset('/products/' . $data->feature_img) }}" alt="">
                                        </div>

                                    </div>
                                    <!-- Product Slider of the Page end -->
                                    <!-- Pagg Slider of the Page -->

                                    <!-- Pagg Slider of the Page end -->
                                </div>
                                <!-- Slider of the Page end -->
                                <!-- Detail Holder of the Page -->
                                <div class="detial-holder">
                                    <!-- Breadcrumbs of the Page -->
                                    <ul class="list-unstyled breadcrumbs">
                                        <li><a href="#">Chairs <i class="fa fa-angle-right"></i></a></li>
                                        <li>Products</li>
                                    </ul>
                                    <!-- Breadcrumbs of the Page end -->
                                    <h2>{{$data->product_name}}</h2>
                                    <!-- Rank Rating of the Page -->
                                    <div class="rank-rating">
                                        <span class="total-price">Reviews (12)</span>
                                        <ul class="list-unstyled rating-list">
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Rank Rating of the Page end -->
                                    <div class="text-holder">
                                        <span class="price"><i class="fa fa-inr">{{$data->product_price}}</i></span>
                                        @if($stock==0){
                                           <span class="price"> out of stock</span>
                                        }
                                        @else{
                                            <span class="price" style="font-size:20px">stock left :{{$stock}}</span>
                                        }
                                        @endif
                                    </div>
                                    <!-- Product Form of the Page -->
                                    <div class="txt-wrap">
                                        <p>{!!$data->product_description!!}</p>

                                    </div>
                                    <!-- Product Form of the Page end -->
                                    <ul class="list-unstyled list">
                                        <li><a href="#"><i class="fa fa-share-alt"></i>SHARE</a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i>COMPARE</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i>ADD TO WISHLIST</a></li>
                                    </ul>
                                </div>
                                <!-- Detail Holder of the Page end -->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section><!-- Mt Product Detial of the Page end -->
                <div class="product-detail-tab wow fadeInUp" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="mt-tabs text-center text-uppercase">
                                    <li><a href="#tab1" class="active">DESCRIPTION</a></li>
                                    <li><a href="#tab2">INFORMATION</a></li>
                                    <li><a href="#tab3">REVIEWS ({{$countreview}})</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab1">
                                        <p><?php echo $description;?>
                                    </div>
                                    <div id="tab2">
                                        <p><?php echo $features;?>
                                    </div>
                                    <div id="tab3">
                                        <div class="product-comment">
                                            @foreach ($review_data as $data)
                                            @if($data->status)
                                            <div class="mt-box">
                                                <div class="mt-hold">
                                                    <ul class="mt-star">
                                                        @if ($data->stars==5)
                                                        <span class="fa fa-star checked"></span><span
                                                            class="fa fa-star checked"></span><span
                                                            class="fa fa-star checked"></span><span
                                                            class="fa fa-star checked"></span><span
                                                            class="fa fa-star checked"></span>
                                                        @endif
                                                        @if ($data->stars==4)
                                                        <span class="fa fa-star checked"></span><span
                                                            class="fa fa-star checked"></span><span
                                                            class="fa fa-star checked"></span><span
                                                            class="fa fa-star checked"></span>
                                                        @endif
                                                        @if ($data->stars==3)
                                                        <span class="fa fa-star checked"></span><span
                                                            class="fa fa-star checked"></span><span
                                                            class="fa fa-star checked"></span>
                                                        @endif
                                                        @if ($data->stars==2)
                                                        <span class="fa fa-star checked"></span><span
                                                            class="fa fa-star checked"></span>
                                                        @endif
                                                        @if ($data->stars==1)
                                                        <span class="fa fa-star checked"></span>
                                                        @endif
                                                    </ul>
                                                    <br>
                                                    <p class="name">name:</p><span class="name">{{$data->name}}</span>
                                                </div>
                                                <p class="name">Review:</p><span class="name"
                                                    style="text-align:justify">{{$data->review}}</span>
                                            </div>
                                            @endif
                                            @endforeach

                                            <fieldset>

                                                <h2>Add Comment</h2>
                                                <form action="{{ url('review')}}" method="post"
                                                    enctype="multipart/form-data" id="review">
                                                    @csrf
                                                    <div class="mt-row">
                                                        <label>Rating</label>
                                                        <ul class="rate-area">
                                                            <input type="radio" class="rattingstart" id="5-star"
                                                                style="font-size: 55px" name="rating" value="5"><label
                                                                style="font-size: 35px" for="5-star"
                                                                title="Amazing"></label>
                                                            <input type="radio" class="rattingstart" id="4-star"
                                                                style="font-size: 55px" name="rating" value="4"><label
                                                                style="font-size: 35px" for="4-star"
                                                                title="Good"></label>
                                                            <input type="radio" class="rattingstart" id="3-star"
                                                                style="font-size: 55px" name="rating" value="3"><label
                                                                style="font-size: 35px" for="3-star"
                                                                title="Average"></label>
                                                            <input type="radio" class="rattingstart" id="2-star"
                                                                style="font-size: 55px" name="rating" value="2"><label
                                                                style="font-size: 35px" for="2-star"
                                                                title="Not Good"></label>
                                                            <input type="radio" class="rattingstart" id="1-star"
                                                                style="font-size: 55px" name="rating" value="1"><label
                                                                style="font-size: 35px" for="1-star"
                                                                title="Bad"></label>
                                                        </ul>
                                                    </div>
                                                    <div class="mt-row">
                                                        <label>Name</label>
                                                        <input type="text" name="name" id="namereview"
                                                            class="form-control">
                                                        <input type="hidden" name="product_id"
                                                            value="<?php print_r($product_id);?>" id="namereview"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mt-row">
                                                        <label>E-Mail</label>
                                                        <input id="emailreview" name="email" type="text"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mt-row">
                                                        <label>Review</label>
                                                        <textarea id="reviewtext" name="review"
                                                            class="form-control"></textarea>
                                                    </div>
                                                    <input class="reviewbtn btn btn-primary" value="Add Review"
                                                        id="reviewbtn" type="submit" class="btn-type4">
                                            </fieldset>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- related products start here -->
                <div class="related-products wow fadeInUp" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>RELATED PRODUCTS</h2>
                                <div class="row">
                                    <div class="col-xs-12">
                                        @foreach ($relatedpro as $data)


                                        <!-- mt product1 center start here -->
                                        <div class="mt-product1 mt-paddingbottom20">
                                            <div class="box">
                                                <div class="b1">
                                                    <div class="b2">
                                                        <a href="product-detail.html"><img
                                                                src="{{ asset('/products/' . $data->feature_img) }}"
                                                                alt="image description"></a>
                                                        <span class="caption">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <ul class="mt-stars">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        <ul class="links">
                                                            <li><a href="#"><i class="icon-handbag"></i><span>Add to
                                                                        Cart</span></a></li>
                                                            <li><a href="#"><i class="icomoon icon-heart-empty"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="icomoon icon-exchange"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <strong class="title"><a
                                                        href="product-detail.html">{{$data->product_name}}</a></strong>
                                                <span class="price"><i class="fa fa-eur"></i>
                                                    <span>{{$data->product_price}}</span></span>
                                            </div>
                                        </div><!-- mt product1 center end here -->
                                        @endforeach
                                        <!-- mt product1 center start here -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- related products end here -->
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
                                        <a href="#"><img src="images/logo.png" alt="Schon"></a>
                                    </div>
                                    <p>Exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla pariatur.</p>
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
                                                <p>Ficia deserunt mollit anim id est labo- <br>rum. incididunt ut labore
                                                    et dolore <br><a href="#">https://t.co/vreNJ9nEDt</a></p>
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
                                        <li><i class="fa fa-phone"></i><a href="tel:15553332211">+1 (555) 333 22 11</a>
                                        </li>
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
    <!-- include jQuery -->
    @include('layouts/footer')
</body>

</html>