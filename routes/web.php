<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Route

Route::get('/admin_panel', [App\Http\Controllers\AdminController::class, 'index']);

Route::post('custom-login', [App\Http\Controllers\AdminController::class, 'customLogin'])->name('login.custom');

Route::get('admin_panel/admin-dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);

Route::post('/admin_panel/modaldata', [App\Http\Controllers\AdminController::class, 'modaldata'])->name('/modaldata');

// Category Route

Route::get('/admin_panel/category', [App\Http\Controllers\CategoryController::class, 'index']);

Route::get('/admin_panel/add_cate', [App\Http\Controllers\CategoryController::class, 'addcate']);

Route::post('/admin_panel/add_cate_data', [App\Http\Controllers\CategoryController::class, 'add_cate']);

Route::post('/admin_panel/changeStatus', [App\Http\Controllers\CategoryController::class, 'changeStatus'])->name('/changeStatus');

Route::get('/admin_panel/category', [App\Http\Controllers\CatelistController::class, 'index']);

Route::get('/admin_panel/edit_cate/{id}', [App\Http\Controllers\CatelistController::class, 'edit']);

Route::post('/admin_panel/edit-cate-data/{id}', [App\Http\Controllers\CatelistController::class, 'update_cate']);

Route::get('/admin_panel/delete/{id}', [App\Http\Controllers\CatelistController::class, 'delete_cate']);

// Brands Routes

Route::get('/admin_panel/brands', [App\Http\Controllers\BrandController::class, 'index']);

Route::get('/admin_panel/add_brand', [App\Http\Controllers\BrandController::class, 'addbrand']);

Route::post('/admin_panel/add_brand_data', [App\Http\Controllers\BrandController::class, 'add_brand']);

Route::post('/admin_panel/changeeStatus', [App\Http\Controllers\BrandController::class, 'changeeStatus'])->name('/changeeStatus');

Route::get('/admin_panel/brands', [App\Http\Controllers\BrandlistController::class, 'index']);

Route::get('/admin_panel/edit_brand/{id}', [App\Http\Controllers\BrandlistController::class, 'eddit']);

Route::post('/admin_panel/edit-brand-data/{id}', [App\Http\Controllers\BrandlistController::class, 'update_brand']);

Route::get('/admin_panel/deletee/{id}', [App\Http\Controllers\BrandlistController::class, 'delete_brand']);

// PRODUCTS ROUTES START

Route::get('/admin_panel/product', [App\Http\Controllers\ProductController::class, 'index']);

Route::get('/admin_panel/add_product', [App\Http\Controllers\ProductController::class, 'addproduct']);

Route::post('/admin_panel/add_product_data', [App\Http\Controllers\ProductController::class, 'add_product']);

Route::post('/admin_panel/changeeeStatus', [App\Http\Controllers\ProductController::class, 'changeeeStatus'])->name('/changeeeStatus');

Route::get('/admin_panel/product', [App\Http\Controllers\ProductListController::class, 'index']);

Route::get('/admin_panel/edit_product/{id}', [App\Http\Controllers\ProductListController::class, 'edddit']);

Route::post('/admin_panel/edit-product-data/{id}', [App\Http\Controllers\ProductListController::class, 'update_product']);

Route::get('/admin_panel/deleteee/{id}', [App\Http\Controllers\ProductListController::class, 'delete_product']);

Route::get('/admin_panel/reviews', [App\Http\Controllers\ReviewController::class, 'index']);

Route::post('/admin_panel/statuschange', [App\Http\Controllers\ReviewController::class, 'statuschange'])->name('/statuschange');

// COUPON ROUTE START

Route::get('/admin_panel/coupon', [App\Http\Controllers\CouponController::class, 'index']);

Route::get('/admin_panel/add_copuon', [App\Http\Controllers\CouponController::class, 'addcopuon']);

Route::post('/admin_panel/add_coupon_data', [App\Http\Controllers\CouponController::class, 'add_coupon']);

Route::post('/admin_panel/changgeStatus', [App\Http\Controllers\CouponController::class, 'changgeStatus'])->name('/changgeStatus');

Route::get('/admin_panel/coupon', [App\Http\Controllers\CouponListController::class, 'index']);

Route::get('/admin_panel/edit_coupon/{id}', [App\Http\Controllers\CouponListController::class, 'edit']);

Route::post('/admin_panel/edit-coupon-data/{id}', [App\Http\Controllers\CouponListController::class, 'update_coupon']);

Route::get('/admin_panel/deleteeeeee/{id}', [App\Http\Controllers\CouponListController::class, 'delete_coupon']);

// BANNER ROUTE START

Route::get('/admin_panel/banner', [App\Http\Controllers\BannerController::class, 'index']);

Route::get('/admin_panel/add_banner', [App\Http\Controllers\BannerController::class, 'addbaner']);

Route::post('/admin_panel/add_banner_data', [App\Http\Controllers\BannerController::class, 'add_banner']);

Route::post('/admin_panel/changeeeeStatus', [App\Http\Controllers\BannerController::class, 'changeeeeStatus'])->name('/changeeeeStatus');

Route::get('/admin_panel/banner', [App\Http\Controllers\BannerlistController::class, 'index']);

Route::get('/admin_panel/edit_banner/{id}', [App\Http\Controllers\BannerlistController::class, 'eddddit']);

Route::post('/admin_panel/edit-banner-data/{id}', [App\Http\Controllers\BannerlistController::class, 'update_banner']);

Route::get('/admin_panel/deleteeee/{id}', [App\Http\Controllers\BannerlistController::class, 'delete_banner']);

// PAGE ROUTE START

Route::get('/admin_panel/page', [App\Http\Controllers\PageController::class, 'index']);

Route::get('/admin_panel/add_page', [App\Http\Controllers\PageController::class, 'addpage']);

Route::post('/admin_panel/add_page_data', [App\Http\Controllers\PageController::class, 'add_page']);

Route::post('/admin_panel/changeeeeeStatus', [App\Http\Controllers\PageController::class, 'changeeeeeStatus'])->name('/changeeeeeStatus');

Route::get('/admin_panel/page', [App\Http\Controllers\PagelistController::class, 'index']);

Route::get('/admin_panel/edit_page/{id}', [App\Http\Controllers\PagelistController::class, 'edddddit']);

Route::post('/admin_panel/edit-page-data/{id}', [App\Http\Controllers\PagelistController::class, 'update_page']);

Route::get('/admin_panel/deleteeeee/{id}', [App\Http\Controllers\PagelistController::class, 'delete_page']);


Route::get('/admin_panel/orders', [App\Http\Controllers\AdminController::class, 'orders']);

Route::get('/admin_panel/orders', [App\Http\Controllers\AdminController::class, 'ordersdetails']);

Route::post('/admin_panel/updatestatus', [App\Http\Controllers\AdminController::class, 'updatestatus'])->name('/updatestatus');

Route::get('/admin_panel/blogs', [App\Http\Controllers\blogcontroller::class, 'index']);

Route::get('/admin_panel/add_blogs', [App\Http\Controllers\blogcontroller::class, 'addblogs']);

Route::post('/admin_panel/add_blog_data', [App\Http\Controllers\blogcontroller::class, 'add_blog']);


Route::get('/admin_panel/blogs', [App\Http\Controllers\BloglistController::class, 'index']);

Route::get('/admin_panel/edit_blogs/{id}', [App\Http\Controllers\BloglistController::class, 'edit']);

Route::post('/admin-panel/edit-blogs-data/{id}', [App\Http\Controllers\BloglistController::class, 'update_blog']);

Route::get('/admin_panel/destroy/{id}', [App\Http\Controllers\BlogController::class, 'delete_blog']);


// HOMEPAGE ROUTES START

Route::get('homepage', [App\Http\Controllers\HonmepageController::class, 'index']);

Route::POST('setdata', [App\Http\Controllers\HonmepageController::class, 'setData'])->name('session.create');

Route::get('product_detail/{id}', [App\Http\Controllers\ProductDetailController::class, 'index']);

Route::post('review',[App\Http\Controllers\ProductDetailController::class, 'review']);

// CART ROUTES START

Route::get('cart', [App\Http\Controllers\CartController::class, 'index']);

Route::post('update-to-cart',[App\Http\Controllers\CartController::class, 'updatetocart']);

Route::delete('delete-from-cart',[App\Http\Controllers\CartController::class, 'deletefromcart']);

// CHECCKOUT ROUTES START

Route::get('checkout', [App\Http\Controllers\CheckoutController::class, 'index']);

Route::post('add_add_data',[App\Http\Controllers\CheckoutController::class, 'addaddress']);

Route::post('add_billing_data',[App\Http\Controllers\CheckoutController::class, 'addbilling']);

Route::post('add_coupon',[App\Http\Controllers\CheckoutController::class, 'add_coupon']);

Route::post('addorder',[App\Http\Controllers\CheckoutController::class, 'addorder']);

Route::post('order',[App\Http\Controllers\CheckoutController::class, 'selectedadd']);

Route::post('border',[App\Http\Controllers\CheckoutController::class, 'selectedbadd']);

Route::post('ordeer',[App\Http\Controllers\CheckoutController::class, 'selectedadd']);

Route::post('order',[App\Http\Controllers\CheckoutController::class, 'selectedadd']);


// PRODUCT FILTER OUTE START

Route::get('productfilter', [App\Http\Controllers\ProductFilterController::class, 'index']);

Route::post('get_by_cate',[App\Http\Controllers\ProductFilterController::class, 'filter']);

// Route::get('/search',[App\Http\Controllers\HonmepageController::class, 'search'])->name('search');

Route::Post('search', [App\Http\Controllers\HonmepageController::class, 'search']);

Route::post('searchpage', [App\Http\Controllers\HonmepageController::class, 'searchresult']);





// ACCOUNTS ROUTES START

Route::get('accounts', [App\Http\Controllers\UserController::class, 'index']);

Route::get('generalinformation', [App\Http\Controllers\UserController::class, 'general']);

Route::post('edit_info', [App\Http\Controllers\UserController::class, 'edit_data']);

Route::get('changepassword', [App\Http\Controllers\UserController::class, 'password']);

Route::post('edit_password', [App\Http\Controllers\UserController::class, 'edit_pass']);

Route::get('address', [App\Http\Controllers\UserController::class, 'address']);

Route::get('edit_address/{id}', [App\Http\Controllers\UserController::class, 'edits']);

Route::post('edit_shipping_add', [App\Http\Controllers\UserController::class, 'edit_shippingadd']);

Route::get('edit_billlingaddress/{id}', [App\Http\Controllers\UserController::class, 'editss']);

Route::post('edit_billing_add', [App\Http\Controllers\UserController::class, 'edit_billingadd']);

Route::delete('delete/[id]',[App\Http\Controllers\UserController::class, 'delete_address']);

Route::get('/logout',[App\Http\Controllers\UserController::class, 'perform'])->name('logout.perform');

// ORDER DETAIL ROUTE SSTART

Route::get('orderdetail/{id}', [App\Http\Controllers\oRderDEtailController::class, 'index']);

// Route::get('pdf/{id}', [App\Http\Controllers\pdfController::class, 'index']);

Route::get('pdf/{id}', [App\Http\Controllers\pdfController::class, 'createPDF']);

Route::get('sendbasicemail',[App\Http\Controllers\CheckoutController::class, 'basic_email']);


// ISHLIST ROUTE START

Route::POST('wish', [App\Http\Controllers\HonmepageController::class, 'wish'])->name('wish');

Route::get('wishlist', [App\Http\Controllers\wishlistcontroller::class, 'index']);

Route::get('/admin_panel/stocks', [App\Http\Controllers\stockController::class, 'index']);

Route::get('admin_panel/add_stock', [App\Http\Controllers\stockController::class, 'addstock']);

Route::post('/admin_panel/add_stock_data', [App\Http\Controllers\stockController::class, 'add_stock']);

Route::delete('delete-from-wish',[App\Http\Controllers\wishlistcontroller::class, 'deletefromwish']);

Route::get('/admin_panel/edit_stock/{id}', [App\Http\Controllers\stockController::class, 'edit']);