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


    public function message()
    {
        return view('frontend.message');

    }


    public function mission()
    {
        return view('frontend.mission');
    }


    public function governance()
    {
        return view('frontend.governance');


    }
    public function managment()
    {
        return view('frontend.managment');
    }

    public function culture()
    {
        return view('frontend.culture');
    }



    public function contact()
    {
        $data['maps'] = Map::first();
        $data['contact_info'] = ContactInfo::first();
        return view('frontend.contact', $data);
    }

}


