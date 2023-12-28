<?php

namespace App\Providers;

use App\Models\Achievment;
use App\Models\CompanyProfile;
use App\Models\ContactInfo;
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
        view()->share('contact_info', ContactInfo::first());
    }
}
