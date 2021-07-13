<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\ContactModel;

class ContactController extends Controller
{
    public function submit(ContactRequest $request){

        $contact = new ContactModel();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('home');

    }
}
