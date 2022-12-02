<header id="mt-header" class="style9">
    <!-- mt bottom bar start here -->
    <div class="mt-bottom-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- mt icon list right start here -->
                    <ul class="mt-icon-list right">
                        <div class="mt-search-popup">
                            <div class="mt-holder">
                                {{-- <a href="#" class="search-close"><span></span><span></span></a> --}}
                                <div class="mt-frame">
                                    <form action="{{ url('searchpage') }}" method="post" class="search-form">
                                        @csrf
                                        <fieldset style="position:fixed;width:64%">
                                            <input type="text" name="search" id="search" class="search-box"
                                                placeholder="Search for product" required>
                                                <input type="submit" hidden />  {{-- <input type="submit"> --}}
                                            <div id="country_list"></div>
                                            {{-- <span class="icon-microphone"></span> --}}
                                            <button class="icon-magnifier" type="submit"></button>
                                        </fieldset>
                                    </form>
                                    <div id="result"
                                        style="color: white;margin-left:245px;width:65%;text-align: left;"></div>
                                </div>
                            </div>
                        </div><!-- mt search popup end here -->
                    </ul><!-- mt icon list right end here -->
                    <!-- mt icon list end here -->
                    <ul class="mt-icon-list">
                        <li><a href="#" class="icon-magnifier"></a></li>
                        <li class="drop">
                            <a href="#" class="cart-opener">
                                <span class="icon-handbag"></span>
                                <span class="" id="cartcount"></span>
                            </a>
                            <!-- mt drop start here -->
                            <div class="mt-drop">
                                <!-- mt drop sub start here -->
                                <div class="mt-drop-sub">
                                    <!-- mt side widget start here -->
                                    <div class="mt-side-widget" id="removeeeeeeeeee">
                                        <div id="cartdata"></div>
                                        @php $total=0;@endphp
                                        @if (isset($cart_data))
                                            @if (Cookie::get('shopping_cart'))
                                                @foreach ($cart_data as $data)
                                                @php
                                                $total=$total + ($data["item_quantity"] * $data["item_price"]);
                                                @endphp
                                                    <div class="cart-row" id="removecartdata__{{$data["item_id"]}}">
                                                        <a href="#" class="img"> <img
                                                                src="{{ asset('products/' . $data['item_image']) }}"
                                                                style="width:100px;height:100px" alt="image"
                                                                class="img-responsive"></a>
                                                        <div class="mt-h">
                                                            <input type="hidden" name="pid" class="product_id" value="{{ $data['item_id'] }}">
                                                            <span class="mt-h-title"><a
                                                                    href="#">{{ $data['item_name'] }}</a></span>
                                                            <span class="price"><i class="fa fa-eur"
                                                                    aria-hidden="true"></i>{{ $data['item_price'] }}</span>
                                                            <span class="mt-h-title">{{ $data['item_quantity'] }}</span>
                                                        </div>
                                                        <a class="close fa fa-times removecartssssss"></a>
                                                    </div>
                                                @endforeach
                                                <div class="cart-row-total" id="subtotalhide">
                                                    <span class="mt-total">Sub Total</span>
                                                    <span class="mt-total-txt"><i class="fa fa-eur"
                                                            aria-hidden="true"></i> <?php echo $total;?></span>
                                                </div>
                                            @endif
                                            <div class="cart-btn-row">
                                                <a href="{{url('cart')}}" class="btn-type2">VIEW CART</a>
                                                <a href="#" class="btn-type3">CHECKOUT</a>
                                            </div>
                                        @else
                                        <b style="margin-left: 95px" id="hideempty">Your Cart Is Empty</b>
                                        @endif
                                    </div><!-- mt side widget end here -->
                                </div>
                                <!-- mt drop sub end here -->
                            </div><!-- mt drop end here -->
                            <span class="mt-mdropover"></span>
                        </li>
                        <li><a href="{{url('wishlist')}}"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                        <li><a href="{{url('accounts')}}"><img src="{{ asset('/img/icons8-user-16.png') }}"></a></li>
                    </ul><!-- mt icon list end here -->
                    
                    <!-- mt logo start here -->
                    <div class="mt-logo" style="width: 112px;"><a href="#"><img
                                src="{{ asset('user_panel/images/mt-logo.png') }}" alt="schon"></a></div>
                </div>
            </div>
        </div>
    </div><!-- mt bottom bar end here -->
    <!-- mt bottom bar end here -->
    <span class="mt-side-over"></span>
</header><!-- mt header end here -->
