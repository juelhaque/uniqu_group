<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\CompanyProfileController;
use App\Http\Controllers\admin\ContactInfoController;
use App\Http\Controllers\admin\MapController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductSubCategoryController;
use App\Http\Controllers\admin\RegistrationController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

// Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
// Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');
// Route::get('/product', [HomeController::class, 'product'])->name('frontend.product');
// Route::get('/product-details/{id}', [HomeController::class, 'productDetails'])->name('frontend.product_details');
// Route::get('/service-details/{id}', [HomeController::class, 'serviceDetails'])->name('frontend.service_details');
// Route::get('/service-item/{id}', [HomeController::class, 'serviceItem'])->name('frontend.service_item');
// Route::get('/product-item/{id}', [HomeController::class, 'productItem'])->name('frontend.product_item');
// Route::get('/check-status', [HomeController::class, 'checkStatus'])->name('frontend.check_status');
// Route::get('/check-masage', [HomeController::class, 'checkMasage']);


//Backend Route
Route::group(['middleware' => 'guest'], function () {

    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::put('/change-password', [AuthController::class, 'changePassword'])->name('password.change');

    // Create user
    Route::get('/user', [RegistrationController::class, 'index'])->name('user.index');
    Route::get('/user/create', [RegistrationController::class, 'create'])->name('user.create');
    Route::post('/user', [RegistrationController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [RegistrationController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [RegistrationController::class, 'update'])->name('user.update');
    Route::get('/user/{id}', [RegistrationController::class, 'destroy'])->name('user.destroy');

    // Slider routes
    Route::get('/sliders', [SliderController::class, 'index'])->name('sliders.index');
    Route::get('/sliders/create', [SliderController::class, 'create'])->name('sliders.create');
    Route::post('/sliders', [SliderController::class, 'store'])->name('sliders.store');
    Route::get('/sliders/{id}/edit', [SliderController::class, 'edit'])->name('sliders.edit');
    Route::put('/sliders/{id}', [SliderController::class, 'update'])->name('sliders.update');
    Route::get('/sliders/{id}', [SliderController::class, 'delete'])->name('sliders.delete');

    // Product routes
    // Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    // Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    // Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    // Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    // Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    // Route::get('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


    // Category routes
    // Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    // Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    // Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    // Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    // Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    // Route::get('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    // Sub Category routes
    // Route::get('/sub-categories', [SubCategoryController::class, 'index'])->name('sub_categories.index');
    // Route::get('/sub-categories/create', [SubCategoryController::class, 'create'])->name('sub_categories.create');
    // Route::post('/sub-categories', [SubCategoryController::class, 'store'])->name('sub_categories.store');
    // Route::get('/sub-categories/{id}/edit', [SubCategoryController::class, 'edit'])->name('sub_categories.edit');
    // Route::put('/sub-categories/{id}', [SubCategoryController::class, 'update'])->name('sub_categories.update');
    // Route::get('/sub-categories/{id}', [SubCategoryController::class, 'destroy'])->name('sub_categories.destroy');

    // Company profile routes
    Route::get('/company-profile', [CompanyProfileController::class, 'index'])->name('company-profile.index');
    Route::put('/company-profile-update', [CompanyProfileController::class, 'update'])->name('company_profile.update');

    // Contact Info routes
    Route::get('/contact-info', [ContactInfoController::class, 'index'])->name('contact_info.index');
    Route::put('/contact-info-update', [ContactInfoController::class, 'update'])->name('contact_info.update');

    // Map routes
    Route::get('/map', [MapController::class, 'index'])->name('map.index');
    Route::put('/map-update/{id}', [MapController::class, 'update'])->name('map.update');

});

// Message routes
Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
Route::post('/messages/store', [MessageController::class, 'store'])->name('messages.store');
Route::get('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');

