<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Charter;
use App\Models\WeValue;
use Illuminate\Http\Request;

class CharterController extends Controller
{
    public function index()
    {
        $charter = Charter::first();
        return view('admin.Charter.index', compact('charter'));
    }


    public function update(Request $request)
    {
        try {
            $charter = Charter::first();

            $charter->details = $request->details;

            $charter->update();

            return redirect()->route('charter.index')->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            throw $th;
            // return redirect()->back()->with('error', 'Update failed');
        }
    }



    public function valueIndex(){

        $value = WeValue::latest()->paginate(8);
        return view('admin.WeValue.index', compact('value'));
    }


    public function valueCreate(){

        return view('admin.WeValue.create');
    }


    public function valueStore(Request $request){

        try {
            $value = new WeValue();
            $value->icon_class = $request->icon_class;
            $value->title = $request->title;
            $value->details = $request->details;

            $value->save();
            return redirect()->route('value.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function valueEdit($id){

        $value = WeValue::find($id);
        return view('admin.WeValue.edit', compact('value'));
    }


    public function valueUpdate($id, Request $request){

        try {
            $value = WeValue::find($id);

            $value->icon_class = $request->icon_class;
            $value->title = $request->title;
            $value->details = $request->details;


            $value->update();
            return redirect()->route('value.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function delete($id){

        try {
            $value = WeValue::find($id);
            $value->delete();
            return redirect()->route('value.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }






}
