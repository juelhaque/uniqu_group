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
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CharterController;
use App\Http\Controllers\CultureController;
use App\Http\Controllers\GoverenceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelResortController;
use App\Http\Controllers\ManagmentController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\NewsEventController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SocialResponcibilitiesController;
use App\Http\Controllers\SpritController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VissionController;
use Illuminate\Support\Facades\Route;


//Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/director-message', [HomeController::class, 'message'])->name('message');
Route::get('/mission-vision', [HomeController::class, 'mission'])->name('mission');
Route::get('/corporateGovernance', [HomeController::class, 'governance'])->name('governance');
Route::get('/company-managment', [HomeController::class, 'managment'])->name('managment');
Route::get('/company-culture', [HomeController::class, 'culture'])->name('culture');

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

    // Business route
    Route::get('/business', [BusinessController::class, 'index'])->name('business.index');
    Route::get('/business/create', [BusinessController::class, 'create'])->name('business.create');
    Route::post('/business', [BusinessController::class, 'store'])->name('business.store');
    Route::get('/business/{id}/edit', [BusinessController::class, 'edit'])->name('business.edit');
    Route::put('/business/{id}', [BusinessController::class, 'update'])->name('business.update');
    Route::get('/business/{id}', [BusinessController::class, 'delete'])->name('business.delete');

    //Photo route
    Route::get('/photo', [PhotoController::class, 'index'])->name('photo.index');
    Route::get('/photo/create', [PhotoController::class, 'create'])->name('photo.create');
    Route::post('/photo', [PhotoController::class, 'store'])->name('photo.store');
    Route::get('/photo/{id}/edit', [PhotoController::class, 'edit'])->name('photo.edit');
    Route::put('/photo/{id}', [PhotoController::class, 'update'])->name('photo.update');
    Route::get('/photo/{id}', [PhotoController::class, 'delete'])->name('photo.delete');

    // video route
    Route::get('/video', [VideoController::class, 'index'])->name('video.index');
    Route::get('/video/create', [VideoController::class, 'create'])->name('video.create');
    Route::post('/video', [VideoController::class, 'store'])->name('video.store');
    Route::get('/video/{id}/edit', [VideoController::class, 'edit'])->name('video.edit');
    Route::put('/video/{id}', [VideoController::class, 'update'])->name('video.update');
    Route::get('/video/{id}', [VideoController::class, 'delete'])->name('video.delete');

    //   partner route
    Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');
    Route::get('/partners/create', [PartnerController::class, 'create'])->name('partners.create');
    Route::post('/partners', [PartnerController::class, 'store'])->name('partners.store');
    Route::get('/partners/{id}/edit', [PartnerController::class, 'edit'])->name('partners.edit');
    Route::put('/partners/{id}', [PartnerController::class, 'update'])->name('partners.update');
    Route::get('/partners/{id}', [PartnerController::class, 'delete'])->name('partners.delete');

    // managment route
    Route::get('/managment', [ManagmentController::class, 'index'])->name('managment.index');
    Route::get('/managment/create', [ManagmentController::class, 'create'])->name('managment.create');
    Route::post('/managment', [ManagmentController::class, 'store'])->name('managment.store');
    Route::get('/managment/{id}/edit', [ManagmentController::class, 'edit'])->name('managment.edit');
    Route::put('/managment/{id}', [ManagmentController::class, 'update'])->name('managment.update');
    Route::get('/managment/{id}', [ManagmentController::class, 'delete'])->name('managment.delete');

    //  hotel & resturant route
    Route::get('/hotel&resort', [HotelResortController::class, 'index'])->name('hotel.index');
    Route::get('/hotel&resort/create', [HotelResortController::class, 'create'])->name('hotel.create');
    Route::post('/hotel&resort', [HotelResortController::class, 'store'])->name('hotel.store');
    Route::get('/hotel&resort/{id}/edit', [HotelResortController::class, 'edit'])->name('hotel.edit');
    Route::put('/hotel&resort/{id}', [HotelResortController::class, 'update'])->name('hotel.update');
    Route::get('/hotel&resort/{id}', [HotelResortController::class, 'delete'])->name('hotel.delete');

    // mission route
    Route::get('/mission', [MissionController::class, 'index'])->name('mission.index');
    Route::get('/mission/create', [MissionController::class, 'create'])->name('mission.create');
    Route::post('/mission', [MissionController::class, 'store'])->name('mission.store');
    Route::get('/missiont/{id}/edit', [MissionController::class, 'edit'])->name('mission.edit');
    Route::put('/mission/{id}', [MissionController::class, 'update'])->name('mission.update');
    Route::get('/mission/{id}', [MissionController::class, 'delete'])->name('mission.delete');

    //  Vision Route
    Route::get('/vision', [VissionController::class, 'index'])->name('vision.index');
    Route::get('/vision/create', [VissionController::class, 'create'])->name('vision.create');
    Route::post('/vision', [VissionController::class, 'store'])->name('vision.store');
    Route::get('/vision/{id}/edit', [VissionController::class, 'edit'])->name('vision.edit');
    Route::put('/vision/{id}', [VissionController::class, 'update'])->name('vision.update');
    Route::get('/vision/{id}', [VissionController::class, 'delete'])->name('vision.delete');

    // goverence route
    Route::get('/governence', [GoverenceController::class, 'index'])->name('governence.index');
    Route::get('/governence/create', [GoverenceController::class, 'create'])->name('governence.create');
    Route::post('/governence', [GoverenceController::class, 'store'])->name('governence.store');
    Route::get('/governence/{id}/edit', [GoverenceController::class, 'edit'])->name('governence.edit');
    Route::put('/governence/{id}', [GoverenceController::class, 'update'])->name('governence.update');
    Route::get('/governence/{id}', [GoverenceController::class, 'delete'])->name('governence.delete');

    // company culture route
    Route::get('/culture', [CultureController::class, 'index'])->name('culture.index');
    Route::get('/culture/create', [CultureController::class, 'create'])->name('culture.create');
    Route::post('/culture', [CultureController::class, 'store'])->name('culture.store');
    Route::get('/culture/{id}/edit', [CultureController::class, 'edit'])->name('culture.edit');
    Route::put('/culture/{id}', [CultureController::class, 'update'])->name('culture.update');
    Route::get('/culture/{id}', [CultureController::class, 'delete'])->name('culture.delete');


    // company sprit route
    Route::get('/sprit', [SpritController::class, 'index'])->name('sprit.index');
    Route::get('/sprit/create', [SpritController::class, 'create'])->name('sprit.create');
    Route::post('/sprit', [SpritController::class, 'store'])->name('sprit.store');
    Route::get('/sprit/{id}/edit', [SpritController::class, 'edit'])->name('sprit.edit');
    Route::put('/sprit/{id}', [SpritController::class, 'update'])->name('sprit.update');
    Route::get('/sprit/{id}', [SpritController::class, 'delete'])->name('sprit.delete');

    // company social responcibilities route
    Route::get('/social-responsibilities', [SocialResponcibilitiesController::class, 'index'])->name('social.index');
    Route::get('/social-responsibilities/create', [SocialResponcibilitiesController::class, 'create'])->name('social.create');
    Route::post('/social-responsibilities', [SocialResponcibilitiesController::class, 'store'])->name('social.store');
    Route::get('/social-responsibilities/{id}/edit', [SocialResponcibilitiesController::class, 'edit'])->name('social.edit');
    Route::put('/social-responsibilities/{id}', [SocialResponcibilitiesController::class, 'update'])->name('social.update');
    Route::get('/social-responsibilities/{id}', [SocialResponcibilitiesController::class, 'delete'])->name('social.delete');

    // news & events route
    Route::get('/news-event', [NewsEventController::class, 'index'])->name('event.index');
    Route::get('/news-event/create', [NewsEventController::class, 'create'])->name('event.create');
    Route::post('/news-event', [NewsEventController::class, 'store'])->name('event.store');
    Route::get('/news-event/{id}/edit',[NewsEventController::class, 'edit'])->name('event.edit');
    Route::put('/news-event/{id}', [NewsEventController::class, 'update'])->name('event.update');
    Route::get('/news-event/{id}', [NewsEventController::class, 'delete'])->name('event.delete');

    // company   charter value route
    Route::get('/charter-value', [CharterController::class, 'valueIndex'])->name('value.index');
    Route::get('/charter-value/create', [CharterController::class, 'valueCreate'])->name('value.create');
    Route::post('/charter-value', [CharterController::class, 'valueStore'])->name('value.store');
    Route::get('/charter-value/{id}/edit',[CharterController::class, 'valueEdit'])->name('value.edit');
    Route::put('/charter-value/{id}', [CharterController::class, 'valueUpdate'])->name('value.update');
    Route::get('/charter-value/{id}', [CharterController::class, 'valueDelete'])->name('value.delete');

    // Company profile routes
    Route::get('/company-profile', [CompanyProfileController::class, 'index'])->name('company-profile.index');
    Route::put('/company-profile-update', [CompanyProfileController::class, 'update'])->name('company_profile.update');

    // Contact Info routes
    // Route::get('/contact-info', [ContactInfoController::class, 'index'])->name('contact_info.index');
    // Route::put('/contact-info-update', [ContactInfoController::class, 'update'])->name('contact_info.update');

    // Map routes
    Route::get('/map', [MapController::class, 'index'])->name('map.index');
    Route::put('/map-update/{id}', [MapController::class, 'update'])->name('map.update');


    Route::get('/banners', [BannerController::class, 'index'])->name('banner.index');
    Route::put('/banners-update', [BannerController::class, 'update'])->name('banner.update');

});

// Message routes
Route::get('/director-massage', [MessageController::class, 'index'])->name('director-massage.index');
Route::put('/director-massage-update', [MessageController::class, 'update'])->name('director-massage.update');

// charter route
Route::get('/charter', [CharterController::class, 'index'])->name('charter.index');
Route::put('/charter-update', [CharterController::class, 'update'])->name('charter.update');

