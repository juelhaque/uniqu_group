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
            $details->professional_repair_description = $request->professional_repair_description;
            $details->facebook = $request->facebook;
            $details->youtube = $request->youtube;
            $details->instagram = $request->instagram;
            $details->repaired_device = $request->repaired_device;
            $details->repaire_specialist = $request->repaire_specialist;
            $details->years_of_work = $request->years_of_work;
            $details->service_lab = $request->service_lab;
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
            if ($request->hasfile('professional_repair_image')) {
                if (file_exists($details->professional_repair_image) && $details->professional_repair_image != null) {
                    unlink($details->professional_repair_image);
                }
                $image = $request->file('professional_repair_image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/profile', $imageName);
                $details->professional_repair_image = 'uploads/profile/' . $imageName;
            }

            $details->update();

            return redirect()->route('dashboard')->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            throw $th;
            // return redirect()->back()->with('error', 'Update failed');
        }
    }
}
