   <!-- Footer Start -->
   <div class="container-fluid pt-4 px-4">
       <div class="bg-light rounded-top p-4">
           <div class="row">
               <div class="col-12 col-sm-6 text-center text-sm-start">
                   &copy; <a href="#">Bharat Specturm</a>, All Right Reserved.
               </div>
               <div class="col-12 col-sm-6 text-center text-sm-end">
                   <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                   Designed By <a href="https://www.doorsstudio.com/" target="_blank">Doors Studio</a>
               </div>
           </div>
       </div>
   </div>
   <!-- Footer End -->

   <!-- Back to Top -->
   <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

   <!-- JavaScript Libraries -->
   <script src="{{ url('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('lib/chart/chart.min.js') }}"></script>
   <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
   <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
   <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
   <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
   <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

   <script>
    $(function() {
               $('.toggle-class').change(function() {
                //    alert("ajdgh");
                   let status = $(this).is(':checked') === true ? 1 : 0;
                   let id = $(this).data('id');
                   let url ="{{route('/changeStatus')}}";
                //    alert(url);

                   $.ajax({
                       type: "POST",
                       dataType: "json",
                       url:url,
                       data: {
                           'status': status,
                           "_token": "{{ csrf_token() }}",
                           'id': id
                       },
                       success: function(data) {
                           alert("ok");
                           console.log(data.message);
                       }
                   });
                   });
               });
</script>

<script>
    $(function() {
               $('.togglee-class').change(function() {
                //    alert("ajdgh");
                   let brandstatus = $(this).is(':checked') === true ? 1 : 0;
                   let brandid = $(this).data('id');
                   let url ="{{route('/changeeStatus')}}";
                //    alert(url);

                   $.ajax({
                       type: "POST",
                       dataType: "json",
                       url:url,
                       data: {
                           'brandstatus': brandstatus,
                           "_token": "{{ csrf_token() }}",
                           'brandid': brandid
                       },
                       success: function(data) {
                           alert("ok");
                           console.log(data.message);
                       }
                   });
                   });
               });
</script>

<script>
    $(function() {
               $('.toggleee-class').change(function() {
                   alert("ajdgh");
                   let productstatus = $(this).is(':checked') === true ? 1 : 0;
                   let productid = $(this).data('id');
                   let url ="{{route('/changeeeStatus')}}";

                   $.ajax({
                       type: "POST",
                       dataType: "json",
                       url:url,
                       data: {
                           'productstatus': productstatus,
                           "_token": "{{ csrf_token() }}",
                           'productid': productid
                       },
                       success: function(data) {
                           alert("ok");
                           console.log(data.message);
                       }
                   });
                   });
               });
</script>

<script>
    $(function() {
               $('.toggleeeee-class').change(function() {
                   alert("ajdgh");
                   let pagestatus = $(this).is(':checked') === true ? 1 : 0;
                   let pageid = $(this).data('id');
                   let url ="{{route('/changeeeeeStatus')}}";

                   $.ajax({
                       type: "POST",
                       dataType: "json",
                       url:url,
                       data: {
                           'pagestatus': pagestatus,
                           "_token": "{{ csrf_token() }}",
                           'pageid': pageid
                       },
                       success: function(data) {
                           alert("ok");
                           console.log(data.message);
                       }
                   });
                   });
               });
</script>

<script>
    $(function() {
               $('.toggleeee-class').change(function() {
                   alert("ajdgh");
                   let bannerstatus = $(this).is(':checked') === true ? 1 : 0;
                   let bannerid = $(this).data('id');
                   let url ="{{route('/changeeeeStatus')}}";

                   $.ajax({
                       type: "POST",
                       dataType: "json",
                       url:url,
                       data: {
                           'bannerstatus': bannerstatus,
                           "_token": "{{ csrf_token() }}",
                           'bannerid': bannerid
                       },
                       success: function(data) {
                           alert("ok");
                           console.log(data.message);
                       }
                   });
                   });
               });
</script>

<script>
    $(function() {
               $('.togggle-class').change(function() {
                   alert("ajdgh");
                   let couponstatus = $(this).is(':checked') === true ? 1 : 0;
                   let couponid = $(this).data('id');
                   let url ="{{route('/changgeStatus')}}";

                   $.ajax({
                       type: "POST",
                       dataType: "json",
                       url:url,
                       data: {
                           'couponstatus': couponstatus,
                           "_token": "{{ csrf_token() }}",
                           'couponid': couponid
                       },
                       success: function(data) {
                           alert("ok");
                           console.log(data.message);
                       }
                   });
                   });
               });
</script>
<script>
    $(function() {
               $('.togggleeeeeeeeeeee-class').change(function() {
                   alert("ajdgh");
                   let reviewststus = $(this).is(':checked') === true ? 1 : 0;
                   let reviewid = $(this).data('id');
                   let url ="{{route('/statuschange')}}";

                   $.ajax({
                       type: "POST",
                       dataType: "json",
                       url:url,
                       data: {
                           'reviewststus': reviewststus,
                           "_token": "{{ csrf_token() }}",
                           'reviewid': reviewid
                       },
                       success: function(data) {
                           alert("ok");
                           console.log(data.message);
                       }
                   });
                   });
               });
</script>

<script>
    $(document).ready(function() {
      $(".btn-success").click(function(){
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){
          $(this).parents(".hdtuto").remove();
      });
    });
</script>

<script>
    $(document).ready(function() {
      $(".btn-success").click(function(){
          var lssthmtl = $(".clonee").html();
          $(".incrementt").after(lssthmtl);
      });
      $("body").on("click",".btn-danger",function(){
          $(this).parents(".hdtuto").remove();
      });
    });
</script>
{{-- <script>
    $(document).ready(function(){
        $(".openitemmodal").on("click", function(){

    });

});
</script> --}}
<script>
    $(document).ready(function() {
                $(".openitemmodal").each(function(){
                    $('.openitemmodal').click(function() {
                        var fired_button = $(this).val();
                // = $(".openitemmodal").val();
                // alert(fired_button);
                let url ="{{route('/modaldata')}}";
                // alert(fired_button);
                   $.ajax({
                       type: "POST",
                       url:url,
                       data: {
                           'fired_button': fired_button,
                           "_token": "{{ csrf_token() }}",
                       },
                       success: function(response) {
                        var html = '';
                        var total = 0;
                        // var data =response[0].item_name;
                        for (var i = 0; i < response.length; i++) {
                        //  console.log(i);
                           var data =response[i].item_name;
                           var qty =response[i].item_qty;
                           var img =response[i].item_img;
                           var price =response[i].item_price;
                           console.log(price);
                           var total = total + qty * price;
                        //    alert(total);
                           html +='<img src="/products/' +img +'" style="width:100px;height:100px" alt="image" class="img-responsive"><br>'
                           html +=data+'<br>';
                           html +=qty+'<br>';



                         }
                         html +="cartsubtotal:"+total+'<br>';
                         $('#tstststst').html(html);
                       }
                   });
                   });
               });
            });
</script>

<script>
    $(document).ready(function() {
    $(".orderstatus").change(function(){
        var value = $(this).val();
        var id = $(this).attr("data-id");
        let url ="{{route('/updatestatus')}}";
        $.ajax({
                       type: "POST",
                       url:url,
                       data: {
                           'value': value,
                           'id':id,
                           "_token": "{{ csrf_token() }}",
                       },
                       success: function() {
                        location.reload(true);
                       }
                    });

    });
    });
</script>
