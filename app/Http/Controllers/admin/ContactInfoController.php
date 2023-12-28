<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function index()
    {
        $details = ContactInfo::first();
        return view('admin.contactInfo.index', compact('details'));
    }


    public function update(Request $request)
    {
        try {
            $details = ContactInfo::first();

            $details->address1 = $request->address1;
            $details->location1 = $request->location1;
            $details->phone1 = $request->phone1;
            $details->email1 = $request->email1;
            $details->offday1 = $request->offday1;

            $details->address2 = $request->address2;
            $details->location2 = $request->location2;
            $details->phone2 = $request->phone2;
            $details->email2 = $request->email2;
            $details->offday2 = $request->offday2;

            $details->address3 = $request->address3;
            $details->phone3 = $request->phone3;
            $details->email3 = $request->email3;
            $details->location3 = $request->location3;
            $details->offday3 = $request->offday3;

            $details->address4 = $request->address4;
            $details->phone4 = $request->phone4;
            $details->email4 = $request->email4;
            $details->location4 = $request->location4;
            $details->offday4 = $request->offday4;

            if ($request->hasfile('image')) {
                if (file_exists($details->image) && $details->image != null) {
                    unlink($details->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/contact_info', $imageName);
                $details->image = 'uploads/contact_info/' . $imageName;
            }

            $details->update();

            return redirect()->route('dashboard')->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }
    }
}
