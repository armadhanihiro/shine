<?php
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductAtrrController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\CouponController;
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
/* FrontEnd Location */
Route::get('/',[IndexController::class, 'Index']);
Route::get('/list-products', [IndexController::class, 'shop']);
Route::get('/cat/{id}', [IndexController::class, 'listByCat'])->name('cats');
Route::get('/product-detail/{id}',[IndexController::class, 'detialpro']);
////// get Attribute ////////////
Route::get('/get-product-attr',[IndexController::class, 'getAttrs']);
///// Cart Area /////////
Route::post('/addToCart',[CartController::class, 'addToCart'])->name('addToCart');
Route::get('/viewcart',[CartController::class, 'index']);
Route::get('/cart/deleteItem/{id}',[CartController::class, 'deleteItem']);
Route::get('/cart/update-quantity/{id}/{quantity}',[CartController::class, 'updateQuantity']);
/////////////////////////
/// Apply Coupon Code
Route::post('/apply-coupon',[CouponController::class, 'applycoupon']);
/// Simple User Login /////
Route::get('/login_page',[UsersController::class, 'index']);
Route::post('/register_user',[UsersController::class, 'register']);
Route::post('/user_login',[UsersController::class, 'login']);
Route::get('/logout',[UsersController::class, 'logout']);

////// User Authentications ///////////
Route::group(['middleware'=>'FrontLogin_middleware'],function (){
    Route::get('/myaccount',[UsersController::class, 'account']);
    Route::put('/update-profile/{id}',[UsersController::class, 'updateprofile']);
    Route::put('/update-password/{id}',[UsersController::class, 'updatepassword']);
    Route::get('/check-out',[CheckOutController::class, 'index']);
    Route::post('/submit-checkout',[CheckOutController::class, 'submitcheckout']);
    Route::get('/order-review',[OrdersController::class, 'index']);
    Route::post('/submit-order',[OrdersController::class, 'order']);
    Route::get('/cod',[OrdersController::class, 'cod']);
    Route::get('/paypal',[OrdersController::class, 'paypal']);
});
///




/* Admin Location */
Auth::routes(['register'=>false]);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
    Route::get('/', [AdminController::class, 'index'])->name('admin_home');
    /// Setting Area
    Route::get('/settings', [AdminController::class, 'settings']);
    Route::get('/check-pwd',[AdminController::class, 'chkPassword']);
    Route::post('/update-pwd',[AdminController::class, 'updatAdminPwd']);
    /// Category Area
    Route::resource('/category',CategoryController::class);
    Route::get('delete-category/{id}',[CategoryController::class, 'destroy']);
    Route::get('/check_category_name',[CategoryController::class, 'checkCateName']);
    /// Products Area
    Route::resource('/product',ProductsController::class);
    Route::get('delete-product/{id}',[ProductsController::class, 'destroy']);
    Route::get('delete-image/{id}',[ProductsController::class, 'deleteImage']);
    /// Product Attribute
    Route::resource('/product_attr',ProductAtrrController::class);
    Route::get('delete-attribute/{id}',[ProductAtrrController::class, 'deleteAttr']);
    /// Product Images Gallery
    Route::resource('/image-gallery',ImagesController::class);
    Route::get('delete-imageGallery/{id}',[ImagesController::class, 'destroy']);
    /// ///////// Coupons Area //////////
    Route::resource('/coupon',CouponController::class);
    Route::get('delete-coupon/{id}',[CouponController::class, 'destroy']);
///
});