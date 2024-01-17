<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Charter;
use App\Models\WeValue;
use Illuminate\Http\Request;

class CharterController extends Controller
{
    public function index()
    {
        $charter = Charter::first();
        return view('admin.Charter.index', compact('charter'));
    }


    public function update(Request $request)
    {
        try {
            $charter = Charter::first();
            $charter->details = $request->details;
            // $charter->we_value = $request->we_value;
            $charter->update();

            return redirect()->route('charter.index')->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }
    }

}
