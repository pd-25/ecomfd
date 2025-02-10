<?php

use App\Http\Controllers\admin\auth\AuthController;
use App\Http\Controllers\admin\blog\BlogController;
use App\Http\Controllers\admin\CareerController;
use App\Http\Controllers\admin\casestudy\CaseStudyController;
use App\Http\Controllers\admin\category\CategoryController;
use App\Http\Controllers\admin\dashboard\DashboardController;
use App\Http\Controllers\admin\news\NewsController;
use App\Http\Controllers\admin\order\orderController;
use App\Http\Controllers\admin\product\ProductReviewController;
use App\Http\Controllers\admin\ResearchController;
use App\Http\Controllers\admin\JournalController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\product\ProductController;
use App\Http\Controllers\admin\user\userController;
use App\Http\Controllers\admin\contact\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware'=>'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('product-mamages', ProductController::class);
    Route::resource('category-mamages', CategoryController::class);
    Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');
    Route::resource('/reviews', ProductReviewController::class);
    Route::get('/reviews/product/{productId}', [ProductReviewController::class, 'showByProduct'])->name('reviews.showByProduct');
    Route::put('/reviews/{review}/status', [ProductReviewController::class, 'updateStatus'])->name('reviews.updateStatus');
    Route::resource('/users', userController::class);
    Route::resource('/orders', orderController::class);

    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::delete('/contact-delete/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

    Route::post('add-single-product-images', [ProductController::class, 'addImages'])->name('product.addImages');
    Route::post('set-product-images', [ProductController::class, 'setPrimaryImages'])->name('product.setPrimaryImages');
    Route::delete('product-images-delete/{id}', [ProductController::class, 'setImagesDelete'])->name('product.setImagesDelete');

});