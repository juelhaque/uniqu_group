<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Managment;
use Illuminate\Http\Request;

class ManagmentController extends Controller
{

    public function index(){

        $managment = Managment::latest()->paginate(8);
        return view('admin.Managment.index', compact('managment'));
    }


    public function create(){

        return view('admin.Managment.create');
    }


    public function store(Request $request){

        try {
            $managment = new Managment;
            $managment->name = $request->name;
            $managment->designation = $request->designation;
            $managment->Email = $request->Email;
            $managment->facebook = $request->facebook;
            $managment->linkdin = $request->linkdin;
            $managment->twitter = $request->twitter;
            $managment->phone = $request->phone;

            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/managment', $imageName);
                $managment->image = 'uploads/managment/' . $imageName;
            }
            $managment->save();
            return redirect()->route('managment.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function edit($id){

        $managment = Managment::find($id);
        return view('admin.Managment.edit', compact('managment'));
    }


    public function update($id, Request $request){

        try {
            $managment = Managment::find($id);

            $managment->name = $request->name;
            $managment->designation = $request->designation;
            $managment->Email = $request->Email;
            $managment->facebook = $request->facebook;
            $managment->linkdin = $request->linkdin;
            $managment->twitter = $request->twitter;
            $managment->phone = $request->phone;
            if ($request->hasfile('image')) {

                if(file_exists($managment->image) && $managment->image != null) {
                    unlink($managment->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/managment', $imageName);
                $managment->image = 'uploads/managment/' . $imageName;
            }

            $managment->update();
            return redirect()->route('managment.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function delete($id){

        try {
            $managment = Managment::find($id);
            if (file_exists($managment->image) && $managment->image != null) {
                unlink($managment->image);
            }
            $managment->delete();
            return redirect()->route('managment.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
