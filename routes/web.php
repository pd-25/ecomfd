<?php

use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\OrderController;
use App\Http\Controllers\frontend\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Route::get('/linkstorage', function () {
//     Artisan::call('storage:link');
//     return 'link create successfully !';
// });

// Route::get('/clear-cache', function () {
//     Artisan::call('route:cache');
//     Artisan::call('view:clear');
//     Artisan::call('view:clear');
//     return 'Routes cache has clear successfully !';
// });

Auth::routes();
Route::get('/', [IndexController::class, 'index'])->name('index');


Route::get('/about-us', [IndexController::class, 'aboutUs'])->name("aboutUs");
Route::get('/certificate', [IndexController::class, 'certificate'])->name("certificate");
Route::get('/contact-us', [IndexController::class, 'contactus'])->name("contactus");
Route::post('/contact-us', [IndexController::class, 'postcontactus'])->name("postcontactus");
Route::get('/products', [ProductController::class, 'products'])->name("products");
Route::get('/category-products/{slug}', [ProductController::class, 'categoryWiseProduct'])->name("categoryWiseProduct");
Route::get('/single-product/{slug}', [ProductController::class, 'singleProduct'])->name("singleProduct");
Route::group(['middleware' => 'usercheck'], function () {
    Route::get('/account', [IndexController::class, 'account'])->name('account');
    Route::put('/account-update', [IndexController::class, 'accountUpdate'])->name('account.update');
    Route::post('/add-to-cart', [OrderController::class, 'addToCart'])->name('addToCart');
    Route::get('/cart', [OrderController::class, 'cart'])->name('cart');
    Route::delete('/cart-delete/{cart}', [OrderController::class, 'cartItemsDelete'])->name('cart.delete');
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/write-feedback/{product_id}', [ProductController::class, 'writeFeedback'])->name('writeFeedback');
    Route::post('/update-cart', [OrderController::class, 'updateCart'])->name('cart.update');
    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('placeOrder');
    Route::post('razorpay-payment', [OrderController::class, 'payPlaceOrder'])->name('razorpay.payment.store');

});


// Route::get('/login', function () {
//     return view('frontend.login');
// });

Route::get('/privacy-policy', function () {
    return view('frontend.privacypolicy');
});

Route::get('/recover-password', function () {
    return view('frontend.recoverpassword');
});


Route::get('/terms-conditions', function () {
    return view('frontend.termsconditions');
});

require __DIR__ . '/admin.php';