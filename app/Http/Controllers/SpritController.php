<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sprit;
use Illuminate\Http\Request;

class SpritController extends Controller
{
    public function index(){

        $sprit = Sprit::first();
        return view('admin.Sprit.index', compact('sprit'));
    }

    public function update(Request $request){
        try {
            $sprit = Sprit::first();

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
}
