<?php

namespace App\Http\Controllers;

use App\Models\Achievment;
use Illuminate\Http\Request;

class AchievmentController extends Controller
{
    public function index()
    {
        $details = Achievment::first();
        return view('admin.achievment.index', compact('details'));
    }


    public function update(Request $request)
    {
        try {
            $details = Achievment::first();

            $details->group = $request->group;
            $details->company = $request->company;
            $details->business = $request->business;
            $details->employee = $request->employee;
            $details->group_data = $request->group_data;
            $details->company_data = $request->company_data;
            $details->business_data = $request->business_data;
            $details->employee_data = $request->employee_data;

            $details->update();

            return redirect()->route('dashboard')->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }
    }
}
