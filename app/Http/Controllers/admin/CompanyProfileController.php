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
            $details->about_description = $request->about_description;
            $details->business_sector1_icon = $request->business_sector1_icon;
            $details->business_sector1_title = $request->business_sector1_title;
            $details->business_sector1_details = $request->business_sector1_details;
            $details->business_sector2_icon = $request->business_sector2_icon;
            $details->business_sector2_title = $request->business_sector2_title;
            $details->business_sector2_details = $request->business_sector2_details;

            $details->facebook = $request->facebook;
            $details->youtube = $request->youtube;
            $details->instagram = $request->instagram;
            $details->address = $request->address;

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

            return redirect()->route('company-profile.index')->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            throw $th;
            // return redirect()->back()->with('error', 'Update failed');
        }
    }
}
