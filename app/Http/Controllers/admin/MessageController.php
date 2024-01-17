<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $message = Message::first();
        return view('admin.director_message.index', compact('message'));
    }


    public function update(Request $request)
    {
        try {
            $message = Message::first();

            $message->name = $request->name;
            $message->email = $request->email;
            $message->phone = $request->phone;
            $message->designation = $request->designation;
            $message->message = $request->message;


            if ($request->hasfile('image')) {
                if (file_exists($message->image) && $message->image != null) {
                    unlink($message->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/message', $imageName);
                $message->image = 'uploads/message/' . $imageName;
            }

            $message->update();

            return redirect()->route('dashboard')->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            throw $th;
            // return redirect()->back()->with('error', 'Update failed');
        }
    }
}
