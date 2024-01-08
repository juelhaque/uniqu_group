<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Governence;
use Illuminate\Http\Request;

class GoverenceController extends Controller
{
    public function index(){

        $governence = Governence::latest()->paginate(8);
        return view('admin.Governence.index', compact('governence'));
    }


    public function create(){

        return view('admin.Governence.create');
    }


    public function store(Request $request){

        try {
            $governence = new Governence();
            $governence->title = $request->title;
            $governence->details = $request->details;


            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/governence', $imageName);
                $governence->image = 'uploads/governence/' . $imageName;
            }
            $governence->save();
            return redirect()->route('governence.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function edit($id){

        $governence = Governence::find($id);
        return view('admin.Governence.edit', compact('governence'));
    }


    public function update($id, Request $request){

        try {
            $governence = Governence::find($id);

            $governence->title = $request->title;
            $governence->details = $request->details;

            if ($request->hasfile('image')) {

                if(file_exists($governence->image) && $governence->image != null) {
                    unlink($governence->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/governence', $imageName);
                $governence->image = 'uploads/governence/' . $imageName;
            }

            $governence->update();
            return redirect()->route('governence.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function delete($id){

        try {
            $governence = Governence::find($id);
            if (file_exists($governence->image) && $governence->image != null) {
                unlink($governence->image);
            }
            $governence->delete();
            return redirect()->route('governence.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
