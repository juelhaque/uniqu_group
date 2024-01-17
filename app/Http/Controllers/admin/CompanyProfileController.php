<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $details = CompanyProfile::first();
        return view('admin.companyProfile.index', compact('details'));
    }

    public function update(Request $request)
    {
        try {
            $details = CompanyProfile::first();
            $details->about_title = $request->about_title;
            $details->phone = $request->phone;
            $details->email = $request->email;
            $details->facebook = $request->facebook;
            $details->linkedin = $request->linkedin;
            $details->twitter = $request->twitter;
            $details->youtube = $request->youtube;
            $details->instagram = $request->instagram;
            $details->address = $request->address;

            if ($request->hasfile('company_logo')) {
                if (file_exists($details->company_logo) && $details->company_logo != null) {
                    unlink($details->company_logo);
                }
                $image = $request->file('company_logo');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/profile', $imageName);
                $details->company_logo = 'uploads/profile/' . $imageName;
            }

            $details->update();

            return redirect()->route('company-profile.index')->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            throw $th;
            // return redirect()->back()->with('error', 'Update failed');
        }
    }
}
