<?php

namespace App\Providers;

use App\Models\Achievment;
use App\Models\Banner;
use App\Models\Business;
use App\Models\CompanyProfile;
use App\Models\ContactInfo;
use App\Models\HotelResort;
use App\Models\Mission;
use App\Models\WelcomeNote;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('company_profile', CompanyProfile::first());
        view()->share('welcome_notes', WelcomeNote::first());
        view()->share('business_companies', Business::get());
        view()->share('banner', Banner::first());
    }
}
