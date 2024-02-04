<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(){

        $partner = Partner::latest()->paginate(8);
        return view('admin.business_associate.index', compact('partner'));
    }


    public function create(){

        return view('admin.business_associate.create');
    }


    public function store(Request $request){
        try {
            $partner = new Partner();
            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/partner', $imageName);
                $partner->image = 'uploads/partner/' . $imageName;
            }
            $partner->save();
            return redirect()->route('partners.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function edit($id){

        $partner = Partner::find($id);
        return view('admin.business_associate.edit', compact('partner'));
    }


    public function update($id, Request $request){

        try {
            $partner = Partner::find($id);

            if ($request->hasfile('image')) {

                if(file_exists($partner->image) && $partner->image != null) {
                    unlink($partner->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/partner', $imageName);
                $partner->image = 'uploads/partner/' . $imageName;
            }

            $partner->update();
            return redirect()->route('partners.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function delete($id){

        try {
            $partner = Partner::find($id);
            if (file_exists($partner->image) && $partner->image != null) {
                unlink($partner->image);
            }
            $partner->delete();
            return redirect()->route('partners.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
