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
                        <div class="categories">
                            <p id="ctegorylist"
                                style="font-weight:colder;font-size: 20px;text-align: center;font-family: Poppins; padding-left: 5px;">
                                Browse All Categories</p>
                            <ul id="licate" style="  list-style-type: none;">
                                @foreach ($cate_data as $data)
                                @csrf
                                    <li>
                                        <input class="myAnc selector" value="{{ $data->cate_name }}"
                                            style="margin-top:25px" type="checkbox" name="category[]"><span
                                            style="padding-left:10px ;text-decoration: none;font-size:18px;color: black; width: auto;">{{ $data->cate_name }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="Brands">
                            <ul style="  list-style-type: none;">
                                <p
                                    style="font-weight:colder;font-size: 20px;margin-top: 35px;font-family: Poppins; padding-left: 5px;">
                                    Browse All Brands</p>
                                @foreach ($brand_data as $data)
                                {{-- @csrf --}}
                                    <li>
                                        <input class="myAnc selector" value="{{ $data->brand_name }}"
                                            style="margin-top:25px" id="myAnc" type="checkbox" name="category[]"><span
                                            style="padding-left:10px ;text-decoration: none;font-size:18px;color: black; width: auto;">{{ $data->brand_name }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div id="cateresult"></div>
                        <ul class="masonry-list" id="myDiv">
                            @foreach ($product_data as $product)
                            <div class="mt-product1 mt-paddingbottom20"  style="padding-left:20px">
                                <div class="box">
                                    <div class="b1">
                                        <div class="b2">
                                            <a href="{{url('productfilter')}}"> <img style="width:200px;height;300px"
                                                    src="{{ asset('/products/' . $product->feature_img) }}"
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
                                                <li><i style="cursor: pointer"
                                                        class="icon-handbag additem"
                                                        data-id="{{ $product->product_id }}"
                                                        data-name="{{ $product->product_name }}"
                                                        data-price="{{ $product->product_price }}"
                                                        data-img="{{ $product->feature_img }}"></i><span></span>
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
                                            href="product-detail.html">{{ $product->product_name }}</a></strong>
                                    <span class="price"><i class="fa fa-eur"></i>
                                        <span>{{ $product->product_price }}</span></span>
                                </div>
                            </div>
                            @endforeach
                        </ul>

                    </div>
                </div>
        </main>
    </div>`
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
