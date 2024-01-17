<?php

namespace App\Http\Controllers;

use App\Models\TermCondition;
use Illuminate\Http\Request;

class TermConditionController extends Controller
{
    public function index()
    {
        $details = TermCondition::first();
        return view('admin.termsCondition.index', compact('details'));
    }

    public function update(Request $request)
    {
        try {
            $details = TermCondition::first();

            $details->title = $request->title;
            $details->description = $request->description;
            $details->points = $request->points;

            if ($request->hasfile('image')) {
                if (file_exists($details->image) && $details->image != null) {
                    unlink($details->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/terms', $imageName);
                $details->image = 'uploads/terms/' . $imageName;
            }
            $details->update();

            return redirect()->route('terms_and_condition.index')->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }
    }
}
