<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::paginate(8);
        return view('admin.message.index', compact('messages'));
    }

    public function store(Request $request){

        // return $request->all();
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required|max:255',
            'message' => 'required'
        ]);

        try {
            $messages = new Message;
            $messages->name = $request->name;
            $messages->email = $request->email;
            $messages->phone = $request->phone;
            $messages->subject = $request->subject;
            $messages->message = $request->message;
            $messages->save();

            return redirect()->back()->with('success', 'Message Send Successfully');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Message Delivered fail');
        }
    }


    public function destroy($id){

        $messages = Message::find($id);
        $messages->delete();
        return Redirect()->back()->with("success", "Message Deleted Successfully");
    }
}
