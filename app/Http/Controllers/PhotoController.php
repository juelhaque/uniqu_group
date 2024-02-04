<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{

    public function index(){

        $photo = Photo::latest()->paginate(8);
        return view('admin.Photo.index', compact('photo'));
    }


    public function create(){

        return view('admin.Photo.create');
    }


    public function store(Request $request){
        try {
            $photo = new Photo();
            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/photo', $imageName);
                $photo->image = 'uploads/photo/' . $imageName;
            }
            $photo->save();
            return redirect()->route('photo.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function edit($id){

        $photo = Photo::find($id);
        return view('admin.photo.edit', compact('photo'));
    }


    public function update($id, Request $request){

        try {
            $photo = Photo::find($id);

            if ($request->hasfile('image')) {
                if(file_exists($photo->image) && $photo->image != null) {
                    unlink($photo->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/photo', $imageName);
                $photo->image = 'uploads/photo/' . $imageName;
            }

            $photo->update();
            return redirect()->route('photo.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function delete($id){

        try {
            $photo = Photo::find($id);
            if (file_exists($photo->image) && $photo->image != null) {
                unlink($photo->image);
            }
            $photo->delete();
            return redirect()->route('photo.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
