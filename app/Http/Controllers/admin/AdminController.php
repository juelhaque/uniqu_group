<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\HotelResort;
use App\Models\Message;
use App\Models\Photo;
use App\Models\Product;
use App\Models\ServiceItem;
use App\Models\Video;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        $data['Banners'] = count(Banner::all());
        $data['photo'] = count(Photo::all());
        $data['hotelResort'] = count(HotelResort::all());
        $data['videos'] = count(Video::all());
        return view('admin.dashboard', $data);
    }

}
