<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NewsEvent;
use Illuminate\Http\Request;

class NewsEventController extends Controller
{

    public function index(){

        $NewsEvent = NewsEvent::latest()->paginate(8);
        return view('admin.NewsEvent.index', compact('NewsEvent'));
    }


    public function create(){

        return view('admin.NewsEvent.create');
    }


    public function store(Request $request){

        try {
            $NewsEvent = new NewsEvent();
            $NewsEvent->title = $request->title;
            $NewsEvent->details = $request->details;


            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/NewsEvent', $imageName);
                $NewsEvent->image = 'uploads/NewsEvent/' . $imageName;
            }
            $NewsEvent->save();
            return redirect()->route('event.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function edit($id){

        $NewsEvent = NewsEvent::find($id);
        return view('admin.NewsEvent.edit', compact('NewsEvent'));
    }


    public function update($id, Request $request){

        try {
            $NewsEvent = NewsEvent::find($id);

            $NewsEvent->title = $request->title;
            $NewsEvent->details = $request->details;

            if ($request->hasfile('image')) {

                if(file_exists($NewsEvent->image) && $NewsEvent->image != null) {
                    unlink($NewsEvent->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/NewsEvent', $imageName);
                $NewsEvent->image = 'uploads/NewsEvent/' . $imageName;
            }

            $NewsEvent->update();
            return redirect()->route('event.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function delete($id){

        try {
            $NewsEvent = NewsEvent::find($id);
            if (file_exists($NewsEvent->image) && $NewsEvent->image != null) {
                unlink($NewsEvent->image);
            }
            $NewsEvent->delete();
            return redirect()->route('event.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
