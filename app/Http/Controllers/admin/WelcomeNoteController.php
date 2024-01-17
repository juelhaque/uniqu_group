<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\WelcomeNote;
use Illuminate\Http\Request;

class WelcomeNoteController extends Controller
{
    public function index()
    {
        $details = WelcomeNote::first();
        return view('admin.welcomeNote.index', compact('details'));
    }

    public function update(Request $request)
    {
        try {
            $details = WelcomeNote::first();

            $details->welcome_note = $request->welcome_note;
            $details->about_description = $request->about_description;
            $details->accessories = $request->accessories;
            $details->analysis = $request->analysis;

            if ($request->hasfile('about_image')) {
                if (file_exists($details->about_image) && $details->about_image != null) {
                    unlink($details->about_image);
                }
                $image = $request->file('about_image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/profile', $imageName);
                $details->about_image = 'uploads/profile/' . $imageName;
            }

            if ($request->hasfile('about_image2')) {
                if (file_exists($details->about_image2) && $details->about_image2 != null) {
                    unlink($details->about_image2);
                }
                $image = $request->file('about_image2');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/profile', $imageName);
                $details->about_image2 = 'uploads/profile/' . $imageName;
            }
            if ($request->hasfile('about_image3')) {
                if (file_exists($details->about_image3) && $details->about_image3 != null) {
                    unlink($details->about_image3);
                }
                $image = $request->file('about_image3');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/profile', $imageName);
                $details->about_image3 = 'uploads/profile/' . $imageName;
            }
            if ($request->hasfile('about_image4')) {
                if (file_exists($details->about_image4) && $details->about_image2 != null) {
                    unlink($details->about_image4);
                }
                $image = $request->file('about_image4');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/profile', $imageName);
                $details->about_image4 = 'uploads/profile/' . $imageName;
            }
            $details->update();

            return redirect()->route('welcome_note.index')->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }
    }
}
