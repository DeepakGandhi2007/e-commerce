<script src="{{ url('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user_panel/js/jquery.js') }}"></script>
<script src="{{ asset('user_panel/js/jquery.main.js') }}"></script>
<script src="{{ asset('user_panel/js/particles.js') }}"></script>
<script src="{{ asset('user_panel/js/plugins.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".additem").click(function() {
            var dataname = $(this).attr("data-name");
            var dataid = $(this).attr("data-id");
            var dataimg = $(this).attr("data-img");
            var dataprice = $(this).attr("data-price");
            let url = "{{ route('session.create') }}";
            $.ajax({
                url: url,
                method: 'post',
                data: {
                    dataname: dataname,
                    "_token": "{{ csrf_token() }}",
                    dataid: dataid,
                    dataimg: dataimg,
                    dataprice: dataprice,
                },
                success: function(response) {
                    $("#emptycart").hide();
                    $(".modal-body").html(response.status);
                    $("#exampleModalCenter").modal('show');
                    console.log(JSON.stringify(response.data));
                    for (var j = 0; j < response.count; j++) {
                        count = j + 1;
                    }
                    var html = '';
                    var total = 0;
                    for (var i = 0; i < response.data.length; i++) {
                        title = response.data[i].item_name;
                        item_id = response.data[i].item_id;
                        price = response.data[i].item_price;
                        quantity = response.data[i].item_quantity;
                        item_image = response.data[i].item_image;
                        total = total + quantity * price;
                        console.log(total);
                        html +=
                            '<div class="cart-row" id="removecartdata__'+item_id+'"><a href="#" class="img"><img src="/products/' +
                            item_image +
                            '" style="width:100px;height:100px" alt="image" class="img-responsive"></a>';
                        html += '<div class="mt-h"><span class="mt-h-title"><a href="#">' +
                            title + '</a></span>';
                        html +=
                            '<span class="price"><i class="fa fa-eur" aria-hidden="true"></i>' +
                            price +
                            '</span>  <input type="hidden" name="pid" class="product_id" value="' +
                            item_id + '">';
                        html += '<span class="mt-h-title">' + quantity +
                            '</span></div><a class="close fa fa-times removecartsssss"></a></div>'
                    }
                    html +=
                        '<div class="cart-row-total"><span class="mt-total">Sub Total</span><span class="mt-total-txt"><i class="fa fa-eur" aria-hidden="true"></i>' +
                        total + '</span></div>'
                    html +=
                        '<div class="cart-btn-row"><a href="{{ url('cart') }}" class="btn-type2">VIEW CART</a><a href="#" class="btn-type3">CHECKOUT</a></div>'
                    var itm_data = response.data
                    $('#cartdata').html(html);
                    $('#subtotalhide').hide();
                    $('#cartcount').html(count);
                    $('#hideempty').hide();
                }
            });

        });
    });
</script>
<script>
        $("#cartdata").on("click", '.removecartsssss', function() {
            alert("ok");
            var product_id = $(this).closest(".cart-row").find('.product_id').val();
                      console.log(product_id);
                      var data = {"_token": "{{ csrf_token() }}","product_id": product_id};
                      $.ajax({
                          url: '/delete-from-cart',
                          type: 'DELETE',
                          data: data,
                          success: function(response) {
                              $('#removecartdata__'+product_id)
                                  .remove();
                              alert("item deleted");
                          }
                      });
        });
</script>
<script>
    $("#removeeeeeeeeee").on("click", '.removecartssssss', function() {
        var product_id = $(this).closest(".cart-row").find('.product_id').val();
                  console.log(product_id);
                  var data = {"_token": "{{ csrf_token() }}","product_id": product_id};
                  $.ajax({
                      url: '/delete-from-cart',
                      type: 'DELETE',
                      data: data,
                      success: function(response) {
                          $('#removecartdata__' + product_id).remove();
                          alert("item deleted");
                      }
                  });
    });
</script>
<script>
    $(document).ready(function() {
        $("#modalclose").click(function() {
            $("#exampleModalCenter").modal('hide');
        });
    });
</script>

<script>
    $(document).ready(function() {

        $('.increment-btn').click(function(e) {
            e.preventDefault();
            var incre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(incre_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value < 10) {
                value++;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }
        });

        $('.decrement-btn').click(function(e) {
            e.preventDefault();
            var decre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(decre_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }
        });

    });
</script>
<script>
    $(document).ready(function() {

        $('.changeQuantity').click(function(e) {
            e.preventDefault();
            // alert("oj");

            var quantity = $(this).parents('.quantity').find('.qty-input').val();
            var product_id = $(this).closest(".border").find('.product_id').val();
            var pprice = document.getElementById('pprice').value;
            // alert(product_id);

            var data = {
                "_token": "{{ csrf_token() }}",
                'quantity': quantity,
                'product_id': product_id,
                'pprice': pprice,
            };

            $.ajax({
                url: '/update-to-cart',
                type: 'POST',
                data: data,
                success: function(response) {
                    // console.log()
                    $('#tprice_' + product_id).html(quantity * pprice);
                    $('#ttprice_' + product_id).hide();
                    // Display Modal
                    // $('.tprice').html(qty*pprice);
                }
            });
        });

    });
</script>

<script>
    $(document).ready(function() {

        $('.delete_cart_data').click(function(e) {
            e.preventDefault();

            var product_id = $(this).closest(".border").find('.product_id').val();

            var data = {
                "_token": "{{ csrf_token() }}",
                "product_id": product_id,
            };

            alert("arec you sure you want to remove");

            // $(this).closest(".cartpage").remove();

            $.ajax({
                url: '/delete-from-cart',
                type: 'DELETE',
                data: data,
                success: function(response) {
                    $('#item_' + product_id).remove();
                    alert("item deleted");

                }
            });
        });

    });
</script>

<script>
    function check_empty() {
        if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document
            .getElementById('msg').value == "") {
            alert("Fill All Fields !");
        } else {
            document.getElementById('form').submit();
            alert("Form Submitted Successfully...");
        }
    }
    //Function To Display Popup
    function div_show() {
        document.getElementById('abc').style.display = "block";
    }
    //Function to Hide Popup
    function div_hide() {
        document.getElementById('abc').style.display = "none";
    }
</script>



<script>
    $('#addressform').on('submit', function(e) {
        e.preventDefault();
        var add = document.getElementById("add").value;
        var flat = document.getElementById("flat").value;
        var land = document.getElementById("land").value;
        var state = document.getElementById("state").value;
        var city = document.getElementById("city").value;
        var zip = document.getElementById("zip").value;
        var user_id = document.getElementById("user_id").value;

        $.ajax({
            type: 'post',
            url: '/add_add_data',
            data: {
                add: add,
                "_token": "{{ csrf_token() }}",
                flat: flat,
                land: land,
                state: state,
                city: city,
                zip: zip,
                user_id: user_id
            },

            success: function(response) {
                $('#abc').hide();
                var ad_data = response.address;
                $('#res').append(
                    '<div class=col-md-1> <input type="radio" name="" style=" margin-top:38px"></div><div class="col-md-4"><div id="res" style=" background-color: lightgray; !important;width: 400px;padding:  10px;"><strong style="  color: white;font-size: 15PX;"> Address:</strong> <span class="addname">' +
                    ad_data.address + '</span>' +
                    ' <br><strong style="  color: white;font-size: 15PX;"> Flat:</strong> <span class="flatname">' +
                    ad_data.flat +
                    ' <br><strong style="  color: white;font-size: 15PX;"> Landmark:</strong>  </span>' +
                    '<span class="landname">' + ad_data.land + '</span></div></div>');
            }

        });

    });
</script>

<script type="text/javascript">
    $(function() {
        $("#chkPassport").click(function() {
            if ($(this).is(":checked")) {
                $("#dvPassport").hide();
            } else {
                $("#dvPassport").show();
            }
        });
    });
</script>
<SCRipt>
    function SHOWPOP() {
        document.getElementById('CDE').style.display = "block";
    }

    function hidediv() {
        document.getElementById('CDE').style.display = "none";
    }
    //Function to Hide Popup
</SCRipt>

<script>
    $('#billingform').on('submit', function(e) {
        e.preventDefault();
        var addd = document.getElementById("addd").value;
        var flatd = document.getElementById("flatd").value;
        var landd = document.getElementById("landd").value;
        var stated = document.getElementById("stated").value;
        var cityd = document.getElementById("cityd").value;
        var zipd = document.getElementById("zipd").value;
        var shipping_id = document.getElementById("shipping_id").value;
        var user_idd = document.getElementById("user_idd").value;

        $.ajax({
            type: 'post',
            url: '/add_billing_data',
            data: {
                addd: addd,
                "_token": "{{ csrf_token() }}",
                flatd: flatd,
                shipping_id: shipping_id,
                landd: landd,
                stated: stated,
                cityd: cityd,
                zipd: zipd,
                user_idd: user_idd
            },

            success: function(response) {
                $('#cde').hide();
                var ad_datad = response.addressd;
                $('#response').append(
                    '<div class=col-md-1> <input type="radio" name="" style=" margin-top:38px"></div><div class="col-md-4"><div id="res" style=" background-color: lightgray; !important;width: 400px;padding:  10px;"><strong style="  color: white;font-size: 15PX;"> Address:</strong> <span class="addname">' +
                    ad_datad.address + '</span>' +
                    ' <br><strong style="  color: white;font-size: 15PX;"> Flat:</strong> <span class="flatname">' +
                    ad_datad.flat +
                    ' <br><strong style="  color: white;font-size: 15PX;"> Landmark:</strong>  </span>' +
                    '<span class="landname">' + ad_datad.landmark + '</span></div></div>');

            }

        });

    });
</script>

<script type="text/javascript">
    $('.apllybutton').click(function(e) {
        e.preventDefault();
        var coupon_code = document.getElementById("coupon_code").value;
        var couponcode = document.getElementById("couponcodes").value;
        var couponprice = document.getElementById("coupon_price").value;
        var totalll = document.getElementById("totalll").value;
        // var tordersub = $(this).attr('data-tsub');
        // var tordersub= document.getElementById("totalll").value;
        // var toalprice = document.getElementById("toalprice").value;
        $.ajax({
            url: 'add_coupon',
            method: 'post',
            cache: false,
            data: {
                coupon_code: coupon_code,
                "_token": "{{ csrf_token() }}",
                totalll: totalll,
                couponprice: couponprice,
                couponcode: couponcode
            },
            success: function(response) {
                if (coupon_code == couponcode) {
                    $('.totallall').html(totalll - couponprice);
                }
                if (coupon_code == couponcode) {
                    $('#discounted').html(couponprice);
                    $("#totallall").hide();
                    alert("applied code");
                } else {
                    alert("invalid code");
                }
            }
        });

    });
</script>

<script type="text/javascript">
    $(document).on('click', '#apllybutton', function() {
        $('#hidesub').remove();
    });
</script>

<script>
    $('#radioadd').click(function() {
        var address = $(this).attr('data-saddress');
        var flat = $(this).attr('data-sflat');
        var state = $(this).attr('data-sstate');
        var landmark = $(this).attr('data-slandmark');
        var userid = $(this).attr('data-user');
        $.ajax({
            url: "order",
            method: "POST",
            data: {
                address: address,
                flat: flat,
                state: state,
                landmark: landmark,
                "_token": "{{ csrf_token() }}",
                // baddress:baddress,
                userid: userid
            },
            success: function(response) {
                console.log(response)
                $('#texting').append(response);
                // window.location = "";
                alert("address added");
            }
        });
    });
</script>
<script>
    $('#radioaddd').click(function() {
        var userid = $(this).attr('data-user');
        var baddress = $(this).attr('data-baddress');
        var bflat = $(this).attr('data-bflat');
        var bstate = $(this).attr('data-bstate');
        var blandmark = $(this).attr('data-blandmark');
        var buserid = $(this).attr('data-user');
        $.ajax({
            url: "border",
            method: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                baddress: baddress,
                bflat: bflat,
                bstate: bstate,
                blandmark: blandmark,
                userid: buserid
            },
            success: function(data) {
                alert("address added");
            }
        });
    });
</script>
<script type="text/javascript">
    $('.orderbutton').click(function(e) {
        e.preventDefault();
        var subtotal = $(this).attr('data-subtotal');
        var couponcode = $(this).attr('data-coupon-code');
        var couponvalue = $(this).attr('data-coupon-value');
        var userid = $(this).attr('data-userid');

        $.ajax({
            url: 'addorder',
            method: 'post',
            cache: false,
            data: {
                subtotal: subtotal,
                "_token": "{{ csrf_token() }}",
                couponcode: couponcode,
                userid: userid,
                couponvalue: couponvalue,
            },
            success: function(response) {

            }
        });

    });
</script>
<script type="text/javascript">
    $(function() {
        $(".myAnc").click(function() {
            if ($(this).is(":checked")) {
                $("#myDiv").hide();
                //    alert("oj");
            }
        });
    });
    jQuery(".selector").click(function() {
        if (jQuery(".selector:checked").length == 0) {
            $("#myDiv").show();
            $("#cateresult").hide();
        }
    });
</script>

<script type="text/javascript">
    $(".selector").click(function(i) {
        var checkboxvalue = [];
        $('input[type="checkbox"]:checked').each(function(i) {
            checkboxvalue.push($(this).val());
        });
        var title = checkboxvalue.join(',');
        console.log(checkboxvalue);
        $.ajax({
            url: "get_by_cate",
            method: "POST",
            data: {
                title: title,
                "_token": "{{ csrf_token() }}",
            },
            cache: false,
            success: function(response) {
                //  alert("ok");
                var pr_data = response.products;
                $('<ul class="masonry-list list-inline" style="display:inline;"><li style="display:inline;"><div class="mt-product1 large"><div class="box"><img width="80" height="150"  alt="image description" src="{{ asset('/products/') }}/' +
                    pr_data['2'] +
                    '"><ul class="mt-stars"><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star-o"></i></li></ul></div><div class="txt"><strong class="title">' +
                    pr_data['0'] +
                    '</strong><span class="price"><i class="fa fa-inr"></i> <span>' + pr_data[
                        '1'] + '</span></span></div></div></li></ul>').appendTo('#cateresult')
            }

        });
    });
</script>
{{-- <script type="text/javascript">
    $(document).ready(function() {
        $(".reviewbtn").click(function(e){
           e.preventDefault();
           var name =document.getElementById("namereview").value;
           var email =document.getElementById("emailreview").value;
           var reviewww =document.getElementById("reviewtext").value;
           var star =document.getElementsByClassName("rattingstart").value;
           console.log(star);
              $.ajax({
            url:"review",
            method:"POST",
            data: {
                     name:name,
                     email:email,
                     reviewww:reviewww,
                    form : $("#review").serialize()
                 },
          success: function(data) {
         alert("addd");
        }
      });

        });
    });
</script> --}}
<script>
    $('#reviewbtn').submit(function() {
        var star = $(".rattingstart:checked").val();
        $.ajax({
            url: "review",
            method: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                star: star
            },
            success: function(data) {
                alert("address added");
            }
        });
    });
</script>
<script>
    $('#mt-header').on('keyup', '#search', function() {
        // alert("ok");

        var query = $(this).val();

        $.ajax({

            url: "search",

            type: "post",

            data: {
                'search': query,
                "_token": "{{ csrf_token() }}"
            },

            success: function(data) {

                $('#country_list').html(data);
            }
        })

    });

    $(document).on('click', 'li', function() {

        var value = $(this).text();

        $('#search').val(value);

        $('#country_list').html("");
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $(".addwish").click(function() {
            var dataname = $(this).attr("data-name");
            var dataid = $(this).attr("data-id");
            var dataimg = $(this).attr("data-img");
            var dataprice = $(this).attr("data-price");
            var userid = $(this).attr('data-user');
            let url = "{{ route('wish') }}";
            if(userid==""){
                   window.location.href="http://127.0.0.1:8000/login";
                }
                else{
            $.ajax({
                url: url,
                method: 'post',
                data: {
                    dataname: dataname,
                    "_token": "{{ csrf_token() }}",
                    dataid: dataid,
                    dataimg: dataimg,
                    dataprice: dataprice,
                    userid:userid,
                },
               
                success: function(response) {
                    alert(response.status);
                  
                }
            });
        }

        });
    });
</script>

<script>
    $(document).ready(function() {

        $('.delete_wish_data').click(function(e) {
            e.preventDefault();
            // alert("delete");

            var product_id = $(this).closest(".border").find('.product_id').val();

            // alert(product_id);

            var data = {
                "_token": "{{ csrf_token() }}",
                "product_id": product_id,
            };

            alert("arec you sure you want to remove");

            // $(this).closest(".cartpage").remove();

            $.ajax({
                url: '/delete-from-wish',
                type: 'DELETE',
                data: data,
                success: function(response) {
                    $('#item_' + product_id).remove();
                    alert("item deleted");

                }
            });
        });

    });
</script>