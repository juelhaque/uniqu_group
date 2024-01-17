<?php

namespace App\Http\Controllers;

use App\Models\AboutUniqueGroup;
use Illuminate\Http\Request;

class AboutUniqueGroupController extends Controller
{
    public function index()
    {
        $details = AboutUniqueGroup::first();
        return view('admin.aboutUniqueGroup.index', compact('details'));
    }

    public function update(Request $request)
    {
        try {
            $details = AboutUniqueGroup::first();

            $details->title = $request->title;
            $details->about_description = $request->about_description;

            if ($request->hasfile('about_image')) {
                if (file_exists($details->about_image) && $details->about_image != null) {
                    unlink($details->about_image);
                }
                $image = $request->file('about_image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/about', $imageName);
                $details->about_image = 'uploads/about/' . $imageName;
            }

            $details->update();

            return redirect()->route('about_unique_group.index')->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }
    }
}
