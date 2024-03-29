<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index(){

        $business = Business::latest()->paginate(8);
        return view('admin.Business_concern.index', compact('business'));
    }


    public function create(){

        return view('admin.Business_concern.create');
    }


    public function store(Request $request){
        try {
            $business = new Business();
            $business->name = $request->name;
            $business->link = $request->link;
            $business->description = $request->description;
            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/business', $imageName);
                $business->image = 'uploads/business/' . $imageName;
            }
            if ($request->hasfile('logo')) {
                $image = $request->file('logo');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/business', $imageName);
                $business->logo = 'uploads/business/' . $imageName;
            }

            $business->save();
            return redirect()->route('business.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            throw $th;
            // return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function edit($id){

        $business = Business::find($id);
        return view('admin.Business_concern.edit', compact('business'));
    }


    public function update($id, Request $request){

        try {
            $business = Business::find($id);
            $business->name = $request->name;
            $business->link = $request->link;
            $business->description = $request->description;
            if ($request->hasfile('image')) {
                if(file_exists($business->image) && $business->image != null) {
                    unlink($business->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/business', $imageName);
                $business->image = 'uploads/business/' . $imageName;
            }
            if ($request->hasfile('logo')) {
                if(file_exists($business->logo) && $business->logo != null) {
                    unlink($business->logo);
                }
                $image = $request->file('logo');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/business', $imageName);
                $business->logo = 'uploads/business/' . $imageName;
            }

            $business->update();
            return redirect()->route('business.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            throw $th;
            // return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function delete($id){

        try {
            $business = Business::find($id);
            if (file_exists($business->image) && $business->image != null) {
                unlink($business->image);
            }
            $business->delete();
            return redirect()->route('business.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
