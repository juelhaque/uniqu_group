<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Message;
use App\Models\Product;
use App\Models\ServiceItem;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        $data['messages'] = count(Message::all());
        return view('admin.dashboard', $data);
    }

}
