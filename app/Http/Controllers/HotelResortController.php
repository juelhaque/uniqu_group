<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HotelResort;
use Illuminate\Http\Request;

class HotelResortController extends Controller
{

    public function index(){

        $hotelResort = HotelResort::latest()->paginate(8);
        return view('admin.HotelResort.index', compact('hotelResort'));
    }


    public function create(){

        return view('admin.HotelResort.create');
    }


    public function store(Request $request){

        try {
            $hotelResort = new HotelResort();
            $hotelResort->title = $request->title;
            $hotelResort->details = $request->details;


            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/hotelResort', $imageName);
                $hotelResort->image = 'uploads/hotelResort/' . $imageName;
            }
            $hotelResort->save();
            return redirect()->route('hotel.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function edit($id){

        $hotelResort = HotelResort::find($id);
        return view('admin.HotelResort.edit', compact('hotelResort'));
    }


    public function update($id, Request $request){

        try {
            $hotelResort = HotelResort::find($id);

            $hotelResort->title = $request->title;
            $hotelResort->details = $request->details;

            if ($request->hasfile('image')) {

                if(file_exists($hotelResort->image) && $hotelResort->image != null) {
                    unlink($hotelResort->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/hotelResort', $imageName);
                $hotelResort->image = 'uploads/hotelResort/' . $imageName;
            }

            $hotelResort->update();
            return redirect()->route('hotel.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function delete($id){

        try {
            $hotelResort = HotelResort::find($id);
            if (file_exists($hotelResort->image) && $hotelResort->image != null) {
                unlink($hotelResort->image);
            }
            $hotelResort->delete();
            return redirect()->route('hotel.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
