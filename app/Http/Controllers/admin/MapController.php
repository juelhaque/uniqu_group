<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(){

        $mapp = Map::first();
        return view('admin.map.index', compact('mapp'));
    }


    public function update($id, Request $request){

        try {
            $mapp=Map::find($id);
            $mapp->map = $request->map;
            if ($request->hasfile('image')) {

                if(file_exists($mapp->image) && $mapp->image != null) {
                    unlink($mapp->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/map', $imageName);
                $mapp->image = 'uploads/map/' . $imageName;
            }
            $mapp->update();
            return redirect()->route('dashboard')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }
}
