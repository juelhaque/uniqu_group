<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VissionController extends Controller
{
    public function index(){

        $vision = Vision::latest()->paginate(8);
        return view('admin.Vision.index', compact('vision'));
    }


    public function create(){

        return view('admin.Vision.create');
    }


    public function store(Request $request){

        try {
            $vision = new Vision();
            $vision->title = $request->title;
            $vision->details = $request->details;


            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/vision', $imageName);
                $vision->image = 'uploads/vision/' . $imageName;
            }
            $vision->save();
            return redirect()->route('vision.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function edit($id){

        $vision = Vision::find($id);
        return view('admin.Vision.edit', compact('vision'));
    }


    public function update($id, Request $request){

        try {
            $vision = Vision::find($id);

            $vision->title = $request->title;
            $vision->details = $request->details;

            if ($request->hasfile('image')) {

                if(file_exists($vision->image) && $vision->image != null) {
                    unlink($vision->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/vision', $imageName);
                $vision->image = 'uploads/vision/' . $imageName;
            }

            $vision->update();
            return redirect()->route('vision.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function delete($id){

        try {
            $vision = Vision::find($id);
            if (file_exists($vision->image) && $vision->image != null) {
                unlink($vision->image);
            }
            $vision->delete();
            return redirect()->route('vision.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
