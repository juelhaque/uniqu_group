<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sprit;
use Illuminate\Http\Request;

class SpritController extends Controller
{
    public function index(){

        $sprit = Sprit::latest()->paginate(8);
        return view('admin.Sprit.index', compact('sprit'));
    }


    public function create(){

        return view('admin.Sprit.create');
    }


            public function store(Request $request){

                try {
                    $sprit = new Sprit();
                    $sprit->title = $request->title;
                    $sprit->details = $request->details;


                    if ($request->hasfile('image')) {
                        $image = $request->file('image');
                        $ext = $image->getClientOriginalExtension();
                        $imageName = rand() . "." . $ext;
                        $image->move('uploads/sprit', $imageName);
                        $sprit->image = 'uploads/sprit/' . $imageName;
                    }
                    $sprit->save();
                    return redirect()->route('sprit.index')->with('success', 'Insert Successful');

                } catch (\Throwable $th) {
                    // throw $th;
                    return redirect()->back()->with('error', 'Insert failed');
                }

            }



    public function edit($id){
        $sprit = Sprit::find($id);
        return view('admin.Sprit.edit', compact('sprit'));
    }
    public function update($id, Request $request){

        try {
            $sprit = Sprit::find($id);

            $sprit->title = $request->title;
            $sprit->details = $request->details;

            if ($request->hasfile('image')) {

                if(file_exists($sprit->image) && $sprit->image != null) {
                    unlink($sprit->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/sprit', $imageName);
                $sprit->image = 'uploads/sprit/' . $imageName;
            }

            $sprit->update();
            return redirect()->route('sprit.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function delete($id){

        try {
            $sprit=Sprit::find($id);
            if (file_exists($sprit->image) && $sprit->image != null) {
                unlink($sprit->image);
            }
            $sprit->delete();
            return redirect()->route('sprit.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
