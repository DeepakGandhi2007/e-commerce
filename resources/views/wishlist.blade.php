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
</style>

<body>
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
            @include('layouts/nav')
            <div class="modal fade" id="message" role="dialog">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" style="margin-left:955px" class="fa fa-close"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="margin-left:755px" id="bodymodal">

                            </div>
                        </div>
                    </div>
                </div>
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
                <main id="mt-main">
                    <section class="mt-contact-banner mt-banner-22 wow fadeInUp" data-wow-delay="0.4s"
                        style="background-image: url(http://placehold.it/1920x325);">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h1 class="text-center">WISHLIST</h1>
                                    <!-- Breadcrumbs of the Page -->
                                    <nav class="breadcrumbs">
                                        <ul class="list-unstyled">
                                            <li><a href="index.html">Home <i class="fa fa-angle-right"></i></a></li>
                                            <li>wishlist</li>
                                        </ul>
                                    </nav>
                                    <!-- Breadcrumbs of the Page end -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Mt Process Section of the Page -->
                    <div class="mt-process-sec wow fadeInUp" data-wow-delay="0.4s">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">

                                    <ul class="list-unstyled process-list">
                                        <li class="active">
                                            <span class="counter">01</span>
                                            <strong class="title">Wishlist</strong>
                                        </li>
                                        <li>
                                            <span class="counter">02</span>
                                            <strong class="title">Shopping Cart</strong>
                                        </li>
                                        <li>
                                            <span class="counter">03</span>
                                            <strong class="title">Check Out</strong>
                                        </li>
                                        <li>
                                            <span class="counter">04</span>
                                            <strong class="title">Order Complete</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mt Process Section of the Page end -->
                    <!-- Mt Product Table of the Page -->
                    <div class="mt-product-table wow fadeInUp" data-wow-delay="0.4s">
                        <div class="container">
                            <div class="row border">
                                <div class="col-md-3">
                                    <strong class="title">PRODUCT</strong>
                                </div>
                                <div class="col-md-3">
                                    <strong class="title" style="float: left">Product Name</strong>
                                </div>
                                  <div class="col-md-3">
                                    <strong class="title">PRICE</strong>
                                </div>
                            
                            </div>
                            
                         @foreach($wishlist_data as $wishlist)
                         <!-- @if(!isset($wishlist->id)){
                       <?php  print_r("no"); ?>
                       @else{
                        <?php print_r("no products added");?>
                       }
                       @endif -->
                    
                      
                       <!-- @if(isset($wishlist->id))your whslist is empty @endif -->
                            <div class="row border" id="item_{{$wishlist->id }}">
                                <div class="col-md-3">
                                    <div class="img-holder">
                                        <img
                                        src="{{ asset('products/' .$wishlist->pro_img)}} "
                                        style="width:100px;height:100px" alt="image"
                                        class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <strong class="product-name">{{$wishlist->pro_name}}</strong>
                                </div>
                                  <div class="col-md-3">
                                    <strong class="price"><i class="fa fa-inr"></i>{{$wishlist->pro_price}}</strong>
                                    <input type="hidden" name="pid"  id="pid" class="product_id" value="{{$wishlist->id }}">
                                    <input  id="pprice"type="hidden" value="" name="">
                                </div>
                                   <div class="col-md-3">
                                
                                    <a href="#">
                                        <i class='fa fa-trash delete_wish_data' style="color: red;float:right;margin-top:75px;font-size:25px"></i></a>
                                </div>
                            </div>
                          @endforeach
                        </div>
                    </div>
                    <!-- Mt Product Table of the Page end -->
                    <!-- Mt Detail Section of the Page -->
                   
                    <!-- Mt Detail Section of the Page end -->
                </main><!-- Main of the Page end here -->
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
