<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function index(){

        $mission = Mission::first();
        return view('admin.mission.index', compact('mission'));
    }


    public function update(Request $request){
        try {
            $mission = Mission::first();
            $mission->title = $request->title;
            $mission->details = $request->details;
            $mission->vision_title = $request->vision_title;
            $mission->vision_details = $request->vision_details;

            if ($request->hasfile('image')) {

                if(file_exists($mission->image) && $mission->image != null) {
                    unlink($mission->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/mission', $imageName);
                $mission->image = 'uploads/mission/' . $imageName;
            }
            if ($request->hasfile('vision_image')) {

                if(file_exists($mission->vision_image) && $mission->vision_image != null) {
                    unlink($mission->vision_image);
                }
                $image = $request->file('vision_image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/mission', $imageName);
                $mission->vision_image = 'uploads/mission/' . $imageName;
            }

            $mission->update();
            return redirect()->route('mission.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            throw $th;
            // return redirect()->back()->with('error', 'Update failed');
        }
    }

}
