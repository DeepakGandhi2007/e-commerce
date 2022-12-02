<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schön. | eCommerce HTML5 Template</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    @include('layouts/header')
</head>

<body>
    <div id="wrapper">
        <div id="pre-loader" class="loader-container">
            <div class="loader">
                <img src="{{ asset('/user_panel/images/svg/rings.svg') }}" alt="loader">
            </div>
        </div>
    </div>
</body>
@include('layouts/nav')


<div class="w1">
    <div class="mt-side-menu">
        <div class="mt-holder">
            <a href="#" class="side-close"><span></span><span></span></a>
            <strong class="mt-side-title">MY ACCOUNT</strong>
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
            <div class="or-divider"><span class="txt">or</span></div>
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
        </div>
    </div>

    <div class="mt-main-slider">
        <div class="slider banner-slider">
            @foreach ($banner_data as $banner)
                @if ($banner->status == 1)
                    <div class="holder text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12"
                                    style="background-image: url({{ asset('/banner/' . $banner->banner_img) }})">
                                    <div class="text centerize">
                                        <img src="" alt="">
                                        <h1>{{ $banner->banner_title }}</h1>
                                        <div class="txt">
                                            <p>Consectetur adipisicing elit. Beatae accusamus, optio,
                                                repellendus inventore</p>
                                        </div>
                                        <a href="product-detail.html" class="shop">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>


<main id="mt-main">
    <div class="container">
        {{-- <div class="modal-dialog modal-dialog-centered" id="message" role="dialog"> --}}
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                      <button type="button" class="close" data-dismiss="modal" id="modalclose" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body" style="text-align: center;font-weight:bolder;font-size:18px">
                      ...
                    </div>
                    <div class="modal-footer">

                    </div>
                  </div>
                </div>
              </div>
        {{-- </div> --}}
        <div class="row">
            <div class="col-xs-12">
                <div id="resultsing"></div>
                <div class="mt-producttabs wow fadeInUp" data-wow-delay="0.4s">

                    <ul class="producttabs">
                        <li><a href="#tab1" class="active">FEATURED</a></li>
                        <li><a href="#tab2">LATEST</a></li>
                        <li><a href="#tab3">BEST SELLER</a></li>
                    </ul>

                    <div class="tab-content text-center">
                        <div id="tab1">

                            <div class="tabs-slider">

                                @foreach ($product_data as $product)
                                    <?php $percent = $product->product_discount_perc;

                                    $old_price = $product->product_price;

                                    $discount_value = ($old_price / 100) * $percent;

                                    $new_price = $old_price - $discount_value;

                                    ?>
                                    @csrf
                                    @if ($product->status == 1)
                                        <div class="slide">

                                            <div class="mt-product1 mt-paddingbottom20">
                                                <div class="box">
                                                    <div class="b1">
                                                        <div class="b2">
                                                            <a href="{{ url('productfilter') }}"> <img
                                                                    src="{{ asset('/products/' . $product->feature_img) }}"
                                                                    alt=""></a>
                                                            @if ($product->product_discount_rs)
                                                                <span class="caption"><span
                                                                        class="off">{{ $product->product_discount_rs }}Rs
                                                                        off /-</span>
                                                            @endif
                                                            </span>
                                                            @if ($product->product_discount_perc)
                                                                <span class="caption"><span
                                                                        class="off">{{ $product->product_discount_perc }}%
                                                                        off /-</span>
                                                            @endif
                                                            </span>
                                                            <ul class="links">
                                          
                                                                <li><i style="cursor: pointer"
                                                                        class="icon-handbag additem"
                                                                        data-id="{{ $product->product_id }}"
                                                                        data-name="{{ $product->product_name }}"
                                                                        data-price="@if ($product->product_discount_perc) {{ $new_price }}
                                                                        @elseif ($product->product_discount_rs)
                                                                            {{ $product->product_price - $product->product_discount_rs }}
                                                                            @else{{ $product->product_price }} @endif"
                                                                        data-img="{{ $product->feature_img }}"></i><span></span>
                                                                </li>
                                    
                                                                <li><i  style="cursor: pointer"
                                                                        class="icomoon icon-heart-empty addwish"  data-id="{{ $product->product_id }}"
                                                                        data-name="{{ $product->product_name }}"
                                                                        data-user="@if(Auth::user()){{ Auth::user()->id }} @endif"
                                                                        data-price="@if ($product->product_discount_perc) {{ $new_price }}
                                                                        @elseif ($product->product_discount_rs)
                                                                            {{ $product->product_price - $product->product_discount_rs }}
                                                                            @else{{ $product->product_price }} @endif"
                                                                        data-img="{{ $product->feature_img }}"></i>
                                                                </li>
                                                                <li><a
                                                                        href="{{ url('product_detail/' . $product->product_id) }}"><i
                                                                            class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txt">

                                                    <strong class="title"><a
                                                            href="product-detail.html">{{ $product->product_name }}</a></strong>
                                                    @if ($product->product_discount_perc)
                                                        <del>{{ $product->product_price }}</del>
                                                    @elseif ($product->product_discount_rs)
                                                        <del>{{ $product->product_price }}</del>
                                                    @else
                                                    @endif
                                                    <span class="price"><i class="fa fa-inr"></i>
                                                        @if ($product->product_discount_perc)
                                                            <span>{{ $new_price }}
                                                            @elseif ($product->product_discount_rs)
                                                                {{ $product->product_price - $product->product_discount_rs }}
                                                                @else{{ $product->product_price }}
                                                        @endif
                                                    </span></span>

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>

                        </div>
                        <div id="tab2">

                            <div class="tabs-slider">
                                @foreach ($product_value as $data)
                                    @if ($data->status == 1)
                                        <div class="slide">

                                            <div class="mt-product1 mt-paddingbottom20">
                                                <div class="box">
                                                    <div class="b1">
                                                        <div class="b2">
                                                            <a href=""> <img
                                                                    src="{{ asset('/products/' . $data->feature_img) }}"
                                                                    alt=""></a>
                                                            <span class="caption">
                                                                <span class="new">NEW</span>
                                                            </span>
                                                            <ul class="mt-stars">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="links">
                                                                <li><a href="#"><i
                                                                            class="icon-handbag"></i><span></span></a>
                                                                </li>
                                                                <li><a href="#"><i
                                                                            class="icomoon icon-heart-empty"></i></a>
                                                                </li>
                                                                <li><a href="#"><i
                                                                            class="icomoon icon-exchange"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txt">
                                                    <strong class="title"><a
                                                            href="product-detail.html">{{ $data->product_name }}</a></strong>
                                                    <span class="price"><i class="fa fa-inr"></i>
                                                        <span>{{ $data->product_price }}</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>

                        </div>
                        <div id="tab3">

                            <div class="tabs-slider">
                                @foreach ($seller_product as $product)
                                    <div class="slide">

                                        <div class="mt-product1 mt-paddingbottom20">
                                            <div class="box">
                                                <div class="b1">
                                                    <div class="b2">
                                                        <a href=""> <img
                                                                src="{{ asset('/products/' . $product->item_img) }}"
                                                                alt=""></a>
                                                        <span class="caption">
                                                            <span class="new">NEW</span>
                                                        </span>
                                                        <ul class="mt-stars">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        <ul class="links">
                                                            <li><a href="#"><i class="icon-handbag"
                                                                        data-id="$product->product_id"></i><span></span></a>
                                                            </li>
                                                            <li><a href="#"><i
                                                                        class="icomoon icon-heart-empty"></i></a>
                                                            </li>
                                                            <li><a href="#"><i
                                                                        class="icomoon icon-exchange"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <strong class="title"><a
                                                        href="product-detail.html">{{ $product->item_name }}</a></strong>
                                                <span class="price"><i class="fa fa-inr"></i>
                                                    <span>{{ $product->item_price }}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="mt-bestseller bg-grey text-center wow fadeInUp" data-wow-delay="0.4s">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 mt-heading text-uppercase">
                    <h2 class="heading">BEST SELLER</h2>
                    <p>EXCEPTinr SINT OCCAECAT</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="bestseller-slider">
                        @foreach ($seller_product as $product)
                            <div class="slide">
                                <div class="mt-product1 mt-paddingbottom20">
                                    <div class="box">
                                        <div class="b1">
                                            <div class="b2">
                                                <a href=""> <img
                                                        src="{{ asset('/products/' . $product->item_img) }}"
                                                        alt=""></a>
                                                <span class="caption">
                                                    <span class="new">NEW</span>
                                                </span>
                                                <ul class="mt-stars">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="links">
                                                    <li><a href="#"><i class="icon-handbag"
                                                                data-id="$product->product_id"></i><span></span></a>
                                                    </li>
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
                                                href="product-detail.html">{{ $product->item_name }}</a></strong>
                                        <span class="price"><i class="fa fa-inr"></i>
                                            <span>{{ $product->item_price }}</span></span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-smallproducts wow fadeInUp" data-wow-delay="0.4s">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 mt-paddingbottomsm">
                    <h3 class="heading">Hot Sale</h3>
                    @foreach ($bottomsale as $product)
                        <div class="mt-product4 mt-paddingbottom20">
                            <div class="img">
                                <a href="{{ url('productfilter') }}"> <img
                                        src="{{ asset('/products/' . $product->feature_img) }}" alt=""></a>
                            </div>
                            <div class="text">
                                <div class="frame">
                                    <strong><a href="product-detail.html">{{ $product->product_name }}</a></strong>
                                    <ul class="mt-stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </div>
                                <span class="price">{{ $product->product_price }}</span>
                            </div>
                        </div><!-- mt product4 end here -->
                    @endforeach


                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mt-paddingbottomsm">
                    <h3 class="heading">Featured Products</h3>
                    @foreach ($bottomfeatured_product as $product)
                        @csrf
                        @if ($product->status == 1)
                            <div class="mt-product4 mt-paddingbottom20">
                                <div class="img">
                                    <a href="{{ url('productfilter') }}"> <img
                                            src="{{ asset('/products/' . $product->feature_img) }}"
                                            alt=""></a>
                                </div>
                                <div class="text">
                                    <div class="frame">
                                        <strong><a
                                                href="product-detail.html">{{ $product->product_name }}</a></strong>
                                        <ul class="mt-stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <span class="price">{{ $product->product_price }}</span>
                                </div>
                            </div><!-- mt product4 end here -->
                        @endif
                    @endforeach
                    <!-- mt product4 start here -->
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h3 class="heading">New Products</h3>
                    @foreach ($bottomlatest_product as $data)
                        {{-- {{$product}} --}}
                        @if ($data->status == 1)
                            <div class="mt-product4 mt-paddingbottom20">
                                <div class="img">
                                    <a href=""> <img src="{{ asset('/products/' . $data->feature_img) }}"
                                            alt=""></a>
                                </div>
                                <div class="text">
                                    <div class="frame">
                                        <strong><a href="product-detail.html">{{ $data->product_name }}</a></strong>
                                        <ul class="mt-stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <span class="price">{{ $data->product_price }}0</span>
                                </div>
                            </div><!-- mt product4 end here -->
                        @endif
                    @endforeach
                    <!-- mt product4 start here -->
                </div>
            </div>
        </div>
    </div>
</main>

<footer id="mt-footer" class="style1 wow fadeInUp" data-wow-delay="0.4s">
    <!-- Footer Holder of the Page -->
    <div class="footer-holder dark">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
                    <!-- F Widget About of the Page -->
                    <div class="f-widget-about">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('user_panel/images/mt-logo.png') }}"
                                    alt="Schon"></a>
                        </div>
                        <p>Exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.</p>
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
                                    <p>Laboris nisi ut <a href="#">#schön</a> aliquip econse- <br>quat.
                                        <a href="#">https://t.co/vreNJ9nEDt</a>
                                    </p>
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

                        <img src="{{ asset('user_panel/images/bank-card.png') }}" alt="bank-card">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area of the Page end -->
</footer>
    @include('layouts/footer')

</html>
