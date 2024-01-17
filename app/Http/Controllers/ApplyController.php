<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function index(){
        $applications = Apply::paginate(8);
        return view('admin.candidatesApplication.index', compact('applications'));
    }

    public function store(Request $request){

        $request->validate([
            'position' => 'required|max:255',
            'company' => 'required',
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        try {
            $applications = new Apply;
            $applications->position = $request->position;
            $applications->company = $request->company;
            $applications->name = $request->name;
            $applications->email = $request->email;
            $applications->phone = $request->phone;

            if ($request->hasfile('file')) {
                $file = $request->file('file');
                $ext = $file->getClientOriginalExtension();
                $fileName = rand() . "." . $ext;
                $file->move('uploads/apply', $fileName);
                $applications->file = 'uploads/apply/' . $fileName;
            }

            $applications->save();
            return response()->json(['status' => true, 'message' => 'Apply Successful']);

        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()]);
        }
    }


    public function destroy($id)
    {
        try {
            $applications = Apply::find($id);
            if (file_exists($applications->file) && $applications->file != null) {
                unlink($applications->file);
            }
            $applications->delete();
            return redirect()->route('apply.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }
    }
}

