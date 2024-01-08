<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index()
    {

        $video = Video::latest()->paginate(8);
        return view('admin.Video.index', compact('video'));
    }

    public function create()
    {

        return view('admin.Video.create');
    }

    public function store(Request $request)
    {
        try {
            $video = new Video();
            $video->video_url = $request->video_url;
            $video->save();
            return redirect()->route('video.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }

    public function edit($id)
    {

        $video = video::find($id);
        return view('admin.Video.edit', compact('video'));
    }

    public function update($id, Request $request)
    {

        try {
            $video = Video::find($id);
            $video->video_url = $request->video_url;

            $video->update();
            return redirect()->route('video.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }

    public function delete($id)
    {

        try {
            $video = Video::find($id);
            $video->delete();
            return redirect()->route('video.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
