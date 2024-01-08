<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SocialResponcibilities;
use Illuminate\Http\Request;

class SocialResponcibilitiesController extends Controller
{

    public function index(){

        $social = SocialResponcibilities::latest()->paginate(8);
        return view('admin.Social.index', compact('social'));
    }


    public function create(){

        return view('admin.Social.create');
    }


    public function store(Request $request){

        try {
              $social = new SocialResponcibilities();

              $social->details=$request->details;

            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/social', $imageName);
                $social->image = 'uploads/social/' . $imageName;
            }
            $social->save();
          
            return redirect()->route('social.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function edit($id){

        $social = SocialResponcibilities::find($id);
        return view('admin.Social.edit', compact('social'));
    }


    public function update($id, Request $request){

        try {
            $social=SocialResponcibilities::find($id);
            $social->details = $request->details;

            if ($request->hasfile('image')) {

                if(file_exists($social->image) && $social->image != null) {
                    unlink($social->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/social', $imageName);
                $social->image = 'uploads/social/' . $imageName;
            }

            $social->update();
            return redirect()->route('hotel.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function delete($id){

        try {
            $social = SocialResponcibilities::find($id);
            if (file_exists($social->image) && $social->image != null) {
                unlink($social->image);
            }
            $social->delete();
            return redirect()->route('hotel.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
