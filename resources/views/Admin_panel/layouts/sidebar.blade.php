 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
     <nav class="navbar bg-light navbar-light">
         <a href="index.html" class="navbar-brand mx-4 mb-3">
             <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
         </a>
         <div class="d-flex align-items-center ms-4 mb-4">
             <div class="position-relative">
                 <img class="rounded-circle" src="{{ asset('/img/user.jpg') }}" alt=""
                     style="width: 40px; height: 40px;">
                 <div
                     class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                 </div>
             </div>
             <div class="ms-3">
                 {{-- <h6 class="mb-0"> {{Admin }}</h6> --}}
                 <span>Admin</span>
             </div>
         </div>
         <div class="navbar-nav w-100">
             <a href="{{ url('/admin_panel/admin-dashboard') }}" class="nav-item nav-link active"><i
                     class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
             <div class="nav-item ">
                 <a href="{{ url('/admin_panel/banner') }}" class="nav-link dropdown-toggle"><i
                         class="fa fa-laptop me-2"></i>Banner</a>
             </div>
             <div class="nav-item ">
                 <a href="{{ url('/admin_panel/brands') }}" class="nav-link dropdown-toggle"><i
                         class="fa fa-laptop me-2"></i>Brands</a>
             </div>
             <div class="nav-item">
                 <a href="{{ url('/admin_panel/category') }}" class="nav-link dropdown-toggle"><i
                         class="fa fa-laptop me-2"></i>Categories</a>
                 <div class="nav-item ">
                     <a href="{{ url('/admin_panel/coupon') }}" class="nav-link dropdown-toggle"><i
                             class="fa fa-laptop me-2"></i>Coupons</a>
                 </div>
                 <div class="nav-item ">
                    <a href="{{ url('/admin_panel/page') }}" class="nav-link dropdown-toggle"><i
                            class="fa fa-laptop me-2"></i>Pages</a>
                </div>

                 <div class="nav-item ">
                     <a href="{{ url('/admin_panel/product') }}" class="nav-link dropdown-toggle"><i
                             class="fa fa-laptop me-2"></i>Products</a>
                 </div>
                 <div class="nav-item ">
                    <a href="{{ url('/admin_panel/reviews') }}" class="nav-link dropdown-toggle"><i
                            class="fa fa-laptop me-2"></i>review</a>
                </div>
                <div class="nav-item ">
                    <a href="{{ url('/admin_panel/orders') }}" class="nav-link dropdown-toggle"><i
                            class="fa fa-laptop me-2"></i>Orders</a>
                </div>
                  <div class="nav-item ">
                    <a href="{{ url('/admin_panel/blogs') }}" class="nav-link dropdown-toggle"><i
                            class="fa fa-laptop me-2"></i>Blogs</a>
                </div>
                <div class="nav-item ">
                    <a href="{{ url('/admin_panel/stocks') }}" class="nav-link dropdown-toggle"><i
                            class="fa fa-laptop me-2"></i>stock</a>
                </div>
             </div>
         </div>
     </nav>
 </div>
