<?php

namespace App\Http\Controllers;

use App\Models\AboutUniqueGroup;
use App\Models\Achievment;
use App\Models\Banner;
use App\Models\Business;
use App\Models\Career;
use App\Models\Charter;
use App\Models\CompanyProfile;
use App\Models\Culture;
use App\Models\Governence;
use App\Models\HotelResort;
use App\Models\Managment;
use App\Models\Map;
use App\Models\Message;
use App\Models\Mission;
use App\Models\NewsEvent;
use App\Models\Partner;
use App\Models\Photo;
use App\Models\Slider;
use App\Models\SocialResponcibilities;
use App\Models\Sprit;
use App\Models\TermCondition;
use App\Models\Video;
use App\Models\WelcomeNote;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders'] = Slider::get();
        $data['videos'] = Video::get();
        $data['images'] = Photo::get();
        $data['managements'] = Managment::get();
        $data['hotel_resorts'] = HotelResort::take(4)->get();
        $data['partnars'] = Partner::orderBy('id', 'ASC')->get();
        $data['partnar'] = Partner::orderBy('id', 'DESC')->get();
        $data['company_profiles'] = CompanyProfile::get();
        $data['welcome_notes'] = WelcomeNote::first();
        $data['achievments'] = Achievment::first();
        $data['maps'] = Map::first();
        $data['business_query'] = Banner::first();
        $data['business_companies'] = Business::get();
        return view("frontend.home", $data);
    }


    public function photo()
    {
        $data['images'] = Photo::get();
        return view('frontend.photos', $data);
    }


    public function newsEvent()
    {
        $data['news_events'] = NewsEvent::get();
        return view('frontend.newsEvents', $data);
    }


    public function newsEventDetails($id)
    {
        $data['news_events'] = NewsEvent::find($id);
        return view('frontend.newsEventDetails', $data);
    }


    public function hotelResortDetails($id)
    {
        $data['hotel_resort'] = HotelResort::find($id);
        return view('frontend.hotelResortDetails', $data);
    }


    public function career()
    {
        $data['careers'] = Career::first();
        return view('frontend.career', $data);
    }


    public function contact()
    {
        $data['maps'] = Map::first();
        $data['business_query'] = Banner::first();
        $data['hotel_resort'] = HotelResort::where('id', 2)->first();
        return view('frontend.contact', $data);
    }


    public function about()
    {
        $data['partnars'] = Partner::orderBy('id', 'ASC')->get();
        $data['achievments'] = Achievment::first();
        $data['about_us'] = AboutUniqueGroup::first();
        $data['business_query'] = Banner::first();
        return view('frontend.about', $data);
    }


    public function message()
    {
        $data['messages'] = Message::first();
        return view('frontend.message', $data);
    }


    public function mission()
    {
        $data['mission'] = Mission::first();
        return view('frontend.mission', $data);
    }


    public function governance()
    {
        $data['governence'] = Governence::get();
        $data['partnars'] = Partner::orderBy('id', 'ASC')->get();
        return view('frontend.governance', $data);
    }


    public function charter()
    {
        $data['charters'] = Charter::first();
        $data['cultures'] = Culture::take(6)->get();
        return view('frontend.charter', $data);
    }


    public function managment()
    {

        $data['management'] = Managment::get();
        return view('frontend.managment', $data);
    }


    public function culture()
    {

        $data['cultures'] = Culture::get();
        $data['partnars'] = Partner::orderBy('id', 'ASC')->get();
        return view('frontend.culture', $data);
    }


    public function termCondition()
    {

        $data['terms_conditions'] = TermCondition::first();
        return view('frontend.termConditions', $data);
    }


    public function spritOfUniqueGroup()
    {

        $data['sprit'] = Sprit::first();
        $data['partnars'] = Partner::orderBy('id', 'ASC')->get();
        $data['achievments'] = Achievment::first();
        return view('frontend.sprit', $data);
    }


    public function socialResponsibilites()
    {

        $data['socials'] = SocialResponcibilities::get();
        return view('frontend.socialResponsibilites', $data);
    }


    public function businessEntities($id)
    {
        $data['businesses'] = Business::find($id);
        return view('frontend.businesses', $data);
    }
}



