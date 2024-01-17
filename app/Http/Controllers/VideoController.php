<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index(){

        $videoGalleries = Video::orderBy('rank', 'ASC')->latest()->paginate(10);
        return view('admin.video.index', compact('videoGalleries'));
    }


    public function create(){

        return view('admin.video.create');
    }


    public function store(Request $request){

        try {
            $videoGalleries = new Video();
            $videoGalleries->title = $request->title;
            $videoGalleries->rank = $request->rank;
            $videoGalleries->video = $request->video;

            $videoGalleries->save();
            return redirect()->route('video-gallery.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }
    }


    public function edit($id){

        $videoGallery = Video::find($id);
        return view('admin.video.edit', compact('videoGallery'));
    }


    public function update($id, Request $request){

        try {
            $videoGalleries = Video::find($id);
            $videoGalleries->title = $request->title;
            $videoGalleries->rank = $request->rank;
            $videoGalleries->video = $request->video;

            $videoGalleries->update();
            return redirect()->route('video-gallery.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function destroy($id){

        try {
            $videoGalleries = Video::find($id);

            $videoGalleries->delete();

            return redirect()->route('video-gallery.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
