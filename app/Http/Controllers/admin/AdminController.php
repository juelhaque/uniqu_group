<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\HotelResort;
use App\Models\Message;
use App\Models\Photo;
use App\Models\Video;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        $data['business_entities'] = count(Business::all());
        $data['photo'] = count(Photo::all());
        $data['hotelResort'] = count(HotelResort::all());
        $data['videos'] = count(Video::all());
        return view('admin.dashboard', $data);
    }

}
