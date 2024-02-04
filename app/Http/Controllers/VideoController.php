<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index(){

        $videoGalleries = Video::orderBy('rank', 'ASC')->latest()->paginate(8);
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
            if ($request->hasfile('video')) {
                $video = $request->file('video');
                $ext = $video->getClientOriginalExtension();
                $videoName = rand() . "." . $ext;
                $video->move('uploads/video', $videoName);
                $videoGalleries->video = 'uploads/video/' . $videoName;
            }
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
            if ($request->hasfile('video')) {
                if(file_exists($videoGalleries->video) && $videoGalleries->video != null) {
                    unlink($videoGalleries->video);
                }
                $video = $request->file('video');
                $ext = $video->getClientOriginalExtension();
                $videoName = rand() . "." . $ext;
                $video->move('uploads/video', $videoName);
                $videoGalleries->video = 'uploads/video/' . $videoName;
            }
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
            if (file_exists($videoGalleries->video) && $videoGalleries->video != null) {
                unlink($videoGalleries->video);
            }
            $videoGalleries->delete();

            return redirect()->route('video-gallery.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
