<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class Posts extends Controller
{
    //

    public function contact(Request $request)
    {
        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'topic' => 'required|min:5',
            'message' => 'required|min:20'

        ];
        $validator = Validator::make($request->post(), $rules);
        if ($validator->fails()) {
            return redirect()->route('contact')->withErrors($validator)->withInput();
        }
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->message = $request->message;
        $contact->topic = $request->topic;
        $contact->email = $request->email;
        $contact->save();
        return redirect()->route('contact')->with('success', "Mesajınız başarıyla iletildi.");
    }
}
