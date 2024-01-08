<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function index(){

        $mission = Mission::latest()->paginate(8);
        return view('admin.Mission.index', compact('mission'));
    }


    public function create(){

        return view('admin.Mission.create');
    }


    public function store(Request $request){

        try {
            $mission = new Mission();
            $mission->title = $request->title;
            $mission->details = $request->details;


            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/mission', $imageName);
                $mission->image = 'uploads/mission/' . $imageName;
            }
            $mission->save();
            return redirect()->route('mission.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function edit($id){

        $mission = Mission::find($id);
        return view('admin.Mission.edit', compact('mission'));
    }


    public function update($id, Request $request){

        try {
            $mission = Mission::find($id);

            $mission->title = $request->title;
            $mission->details = $request->details;

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

            $mission->update();
            return redirect()->route('mission.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function delete($id){

        try {
            $mission = Mission::find($id);
            if (file_exists($mission->image) && $mission->image != null) {
                unlink($mission->image);
            }
            $mission->delete();
            return redirect()->route('mission.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
