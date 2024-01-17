<?php

namespace App\Http\Controllers;

use App\Models\BusinessQuery;
use Illuminate\Http\Request;

class BusinessQueryController extends Controller
{
    public function index(){
        $messages = BusinessQuery::paginate(8);
        return view('admin.message.index', compact('messages'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required|max:255',
            'message' => 'required'
        ]);

        try {
            $messages = new BusinessQuery;
            $messages->name = $request->name;
            $messages->email = $request->email;
            $messages->phone = $request->phone;
            $messages->subject = $request->subject;
            $messages->message = $request->message;
            $messages->save();

            return response()->json(['status' => true, 'message' => 'Message Send Successfully']);

        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()]);
        }
    }


    public function destroy($id){

        $messages = BusinessQuery::find($id);
        $messages->delete();
        return Redirect()->back()->with("success", "Message Deleted Successfully");
    }
}

