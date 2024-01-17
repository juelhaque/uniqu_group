<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $details = Career::first();
        return view('admin.career.index', compact('details'));
    }

    public function update(Request $request)
    {
        try {
            $details = Career::first();

            $details->title = $request->title;
            $details->description = $request->description;

            $details->update();

            return redirect()->route('career.index')->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }
    }
}
