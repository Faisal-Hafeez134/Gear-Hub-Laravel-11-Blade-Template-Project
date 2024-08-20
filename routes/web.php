<?php

use App\Http\Controllers\backend\AdminhomeController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\ProductEditController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\BlogdetailsController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\CompareController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ErrorController;
use App\Http\Controllers\frontend\FaqController;
use App\Http\Controllers\frontend\HeaderController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\MyaccountController;
use App\Http\Controllers\frontend\PrivacypolicyController;
use App\Http\Controllers\frontend\ProductcountdownController;
use App\Http\Controllers\frontend\ProductdetailsController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\frontend\StripePaymentController;
use App\Http\Controllers\frontend\VariableProductController;
use App\Http\Controllers\frontend\WishlistController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use PHPUnit\TextUI\Configuration\VariableCollection;

Route::get('/', [HomeController::class, 'index']);
Route::get('/header', [HeaderController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog-details', [BlogdetailsController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/compare', [CompareController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/404', [ErrorController::class, 'index']);
Route::get('/faq', [FaqController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/my-account', [MyaccountController::class, 'index']);
Route::get('/privacypolicy', [PrivacypolicyController::class, 'index']);
Route::get('/product-countdown', [ProductcountdownController::class, 'index']);

Route::get('/product-details{id}', [ProductdetailsController::class, 'index']);

Route::get('/services', [ServicesController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/variablesproduct', [VariableProductController::class, 'index']);
Route::get('/wishlist', [WishlistController::class, 'index']);
Route::get('/wishlist', [WishlistController::class, 'index']);

Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});


#insert data by post
Route::post('/contact', [ContactController::class, 'submitMessage']);
Route::post('/login', [LoginController::class, 'LoginUser']);
Route::post('/register', [LoginController::class, 'RegisterUser']);
Route::get('/logout', [LoginController::class, 'Logout']);
Route::post('/checkouts', [CheckoutController::class, 'checkout']);


//cart
Route::post('/cart', [CartController::class, 'AddtoCart']);
Route::post('/updatecart', [CartController::class, 'UpdateCart']);


#fetch
 Route::get('/', [HomeController::class, 'smartphone_tablet']);
Route::get('/', [HomeController::class, 'add_hot_deal_product_index']);

//delete
Route::get('/deletecartitem{id}', [CartController::class, 'DeletecartItem']);








##############################################################

#admn panel

##############################################################
use App\Http\Controllers\backend\AddattributesController;
use App\Http\Controllers\backend\AddnewuserController;
use App\Http\Controllers\backend\AddproductController;
use App\Http\Controllers\backend\AllrolesController;
use App\Http\Controllers\backend\AttributesController;
use App\Http\Controllers\backend\CategorylistController;
use App\Http\Controllers\backend\CitiesController;
use App\Http\Controllers\backend\ComponentsController;
use App\Http\Controllers\backend\CountriesController;
use App\Http\Controllers\backend\CreateroleController;
use App\Http\Controllers\backend\CreaterolesController;
use App\Http\Controllers\backend\EditpageController;
use App\Http\Controllers\backend\GalleryController;

use App\Http\Controllers\backend\ListpageController;
use App\Http\Controllers\backend\NewcategoryController;
use App\Http\Controllers\backend\NewpageController;
use App\Http\Controllers\backend\OderdetailController;
use App\Http\Controllers\backend\OderlistController;
use App\Http\Controllers\backend\Odertracking;
use App\Http\Controllers\backend\ProductlistController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\SignupController;
use App\Http\Controllers\backend\StatesController;


 Route::get('/adminhome', [AdminhomeController::class, 'index']);
//  Route::get('/adminhome', function(){
//     if(session()->has('admin_id')){
//         return redirect('/adminhome');
//     } else{
//         return view('backend.login');
//     }

// });

// Route::middleware('admin.auth')->group(function () {
//     Route::get('/adminhome', [AdminhomeController::class, 'index']);

// });




Route::get('/add-attributes', [AddattributesController::class, 'index']);
Route::get('/add-new-user', [AddnewuserController::class, 'index']);
Route::get('/add-product{id}', [AddproductController::class, 'index']);
Route::get('/add-product', [AddproductController::class, 'getcategory']);

Route::get('/all-roles', [AllrolesController::class, 'index']);
Route::get('/attributes', [AttributesController::class, 'index']);
Route::get('/category-list', [CategorylistController::class, 'index']);
Route::get('/cities', [CitiesController::class, 'index']);
Route::get('/components', [ComponentsController::class, 'index']);
Route::get('/countries', [CountriesController::class, 'index']);
Route::get('/create-role', [CreateroleController::class, 'index']);
Route::get('/create-roles', [CreaterolesController::class, 'index']);
Route::get('/edit-page', [EditpageController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/list-page', [ListpageController::class, 'index']);


Route::get('/admin/login', [AdminLoginController::class, 'index']);

Route::get('/new-category', [NewcategoryController::class, 'index']);


Route::get('/new-page', [NewpageController::class, 'index']);
Route::get('/oder-detail', [OderdetailController::class, 'index']);
Route::get('/oder-list', [OderlistController::class, 'index']);
Route::get('/oder-tracking', [Odertracking::class, 'index']);
Route::get('/product-list', [ProductlistController::class, 'index']);
Route::get('/report', [ReportController::class, 'index']);
Route::get('/setting', [SettingController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);
Route::get('/states', [StatesController::class, 'index']);


Route::post('/admin/register', [SignupController::class, 'RegisterUser']);
Route::post('/admin/login', [AdminLoginController::class, 'LoginUser']);
Route::post('/admin/logout', [AdminLoginController::class, 'Logout']);


# database

Route::post('/new-category', [NewcategoryController::class, 'addCategory']);
Route::post('/add-product', [AddproductController::class, 'addProduct']);


#data fech
Route::get('/category-list', [CategorylistController::class, 'categorylist']);


// product management
Route::get('/product-edit{id}', [ProductEditController::class, 'index'])->name('product.edit');
Route::put('/product-edits{id}', [ProductEditController::class, 'updateProduct']);


Route::delete('/deleteproduct{id}', [ProductlistController::class, 'deleteProduct'])->name('product.delete');
