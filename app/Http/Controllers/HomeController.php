<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\ContactInfo;
use App\Models\Map;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders'] = Slider::get();
        $data['company_profiles'] = CompanyProfile::get();
        return view("frontend.home", $data);
    }

    public function about()
    {
        return view('frontend.about');
    }



    public function contact()
    {
        $data['maps'] = Map::first();
        $data['contact_info'] = ContactInfo::first();
        return view('frontend.contact', $data);
    }

}


