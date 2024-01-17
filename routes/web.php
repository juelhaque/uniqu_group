<?php

use App\Http\Controllers\AboutUniqueGroupController;
use App\Http\Controllers\AchievmentController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CompanyProfileController;
use App\Http\Controllers\admin\MapController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\RegistrationController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\WelcomeNoteController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\BusinessQueryController;
use App\Http\Controllers\CareerController;
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
use App\Http\Controllers\TermConditionController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;


//Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');
Route::get('/photos', [HomeController::class, 'photo'])->name('frontend.photo');
Route::get('/news-events', [HomeController::class, 'newsEvent'])->name('frontend.news_events');
Route::get('/news-event-details/{id}', [HomeController::class, 'newsEventDetails'])->name('frontend.news_event_details');
Route::get('/career', [HomeController::class, 'career'])->name('frontend.career');
Route::get('/business-entities/{id}', [HomeController::class, 'businessEntities'])->name('frontend.business_entities');
Route::get('/charter-of-unique-group', [HomeController::class, 'charter'])->name('frontend.charters');
Route::get('/sprit-of-unique-group', [HomeController::class, 'spritOfUniqueGroup'])->name('frontend.sprit');
Route::get('/social-responsibilites', [HomeController::class, 'socialResponsibilites'])->name('frontend.social_responsibilites');
Route::get('/terms-conditions', [HomeController::class, 'termCondition'])->name('frontend.terms_conditions');
Route::get('/director-message', [HomeController::class, 'message'])->name('message');
Route::get('/mission-vision', [HomeController::class, 'mission'])->name('frontend.missions');
Route::get('/corporate-governance', [HomeController::class, 'governance'])->name('governance');
Route::get('/company-managment', [HomeController::class, 'managment'])->name('managment');
Route::get('/company-culture', [HomeController::class, 'culture'])->name('culture');


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
    Route::get('/video-gallery', [VideoController::class, 'index'])->name('video-gallery.index');
    Route::get('/video-gallery/create', [VideoController::class, 'create'])->name('video-gallery.create');
    Route::post('/video-gallery', [VideoController::class, 'store'])->name('video-gallery.store');
    Route::get('/video-gallery/{id}/edit', [VideoController::class, 'edit'])->name('video-gallery.edit');
    Route::put('/video-gallery/{id}', [VideoController::class, 'update'])->name('video-gallery.update');
    Route::get('/video-gallery/{id}', [VideoController::class, 'destroy'])->name('video-gallery.destroy');

    // partner route
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

    // hotel & resturant route
    Route::get('/hotel&resort', [HotelResortController::class, 'index'])->name('hotel.index');
    Route::get('/hotel&resort/create', [HotelResortController::class, 'create'])->name('hotel.create');
    Route::post('/hotel&resort', [HotelResortController::class, 'store'])->name('hotel.store');
    Route::get('/hotel&resort/{id}/edit', [HotelResortController::class, 'edit'])->name('hotel.edit');
    Route::put('/hotel&resort/{id}', [HotelResortController::class, 'update'])->name('hotel.update');
    Route::get('/hotel&resort/{id}', [HotelResortController::class, 'delete'])->name('hotel.delete');

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
    Route::put('/sprit-update', [SpritController::class, 'update'])->name('sprit.update');

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


    // mission & vision route
    Route::get('/mission', [MissionController::class, 'index'])->name('mission.index');
    Route::put('/mission-update', [MissionController::class, 'update'])->name('mission.update');

    // Career route
    Route::get('/career-index', [CareerController::class, 'index'])->name('career.index');
    Route::put('/career-update', [CareerController::class, 'update'])->name('career.update');

    // Company profile routes
    Route::get('/company-profile', [CompanyProfileController::class, 'index'])->name('company-profile.index');
    Route::put('/company-profile-update', [CompanyProfileController::class, 'update'])->name('company_profile.update');

    // Welcome routes
    Route::get('/welcome-note', [WelcomeNoteController::class, 'index'])->name('welcome_note.index');
    Route::put('/welcome-note-update', [WelcomeNoteController::class, 'update'])->name('welcome_note.update');

    // About Unique Group routes
    Route::get('/about-unique-group', [AboutUniqueGroupController::class, 'index'])->name('about_unique_group.index');
    Route::put('/about-unique-group-update', [AboutUniqueGroupController::class, 'update'])->name('about_unique_group.update');

    // Terms & Condition routes
    Route::get('/terms-and-condition', [TermConditionController::class, 'index'])->name('terms_and_condition.index');
    Route::put('/terms-and-condition-update', [TermConditionController::class, 'update'])->name('terms_and_condition.update');

    // Achievment routes
    Route::get('/achievment', [AchievmentController::class, 'index'])->name('achievment.index');
    Route::put('/achievment-update', [AchievmentController::class, 'update'])->name('achievment.update');

    // company charter value route
    Route::get('/company-charter', [CharterController::class, 'index'])->name('charter.index');
    Route::put('/company-charter-update', [CharterController::class, 'update'])->name('charter.update');

    // Map routes
    Route::get('/map', [MapController::class, 'index'])->name('map.index');
    Route::put('/map-update/{id}', [MapController::class, 'update'])->name('map.update');

    // Banner routes
    Route::get('/banners', [BannerController::class, 'index'])->name('banner.index');
    Route::put('/banners-update', [BannerController::class, 'update'])->name('banner.update');

});

// Message routes
Route::get('/queries', [BusinessQueryController::class, 'index'])->name('queries.index');
Route::post('/queries/store', [BusinessQueryController::class, 'store'])->name('queries.store');
Route::get('/queries/{id}', [BusinessQueryController::class, 'destroy'])->name('queries.destroy');

// Apply routes
Route::get('/apply', [ApplyController::class, 'index'])->name('apply.index');
Route::post('/apply/store', [ApplyController::class, 'store'])->name('apply.store');
Route::get('/apply/{id}', [ApplyController::class, 'destroy'])->name('apply.destroy');

// Director Message routes
Route::get('/director-massage', [MessageController::class, 'index'])->name('director-massage.index');
Route::put('/director-massage-update', [MessageController::class, 'update'])->name('director-massage.update');

