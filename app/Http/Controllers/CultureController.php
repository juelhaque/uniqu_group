<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Culture;
use Illuminate\Http\Request;

class CultureController extends Controller
{
    public function index(){

        $culture = Culture::latest()->paginate(8);
        return view('admin.Culture.index', compact('culture'));
    }


    public function create(){

        return view('admin.Culture.create');
    }


    public function store(Request $request){

        try {
            $culture = new Culture();
            $culture->icon = $request->icon;
            $culture->title = $request->title;
            $culture->details = $request->details;

            $culture->save();
            return redirect()->route('culture.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function edit($id){

        $culture = Culture::find($id);
        return view('admin.Culture.edit', compact('culture'));
    }


    public function update($id, Request $request){

        try {
            $culture = Culture::find($id);

            $culture->icon = $request->icon;
            $culture->title = $request->title;
            $culture->details = $request->details;


            $culture->update();
            return redirect()->route('culture.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function delete($id){

        try {
            $culture = Culture::find($id);
            $culture->delete();
            return redirect()->route('culture.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
