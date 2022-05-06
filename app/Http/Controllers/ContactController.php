<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessageCreated;


class ContactController extends Controller
{

    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactFormRequest $request)
    {
        $maillable = new ContactMessageCreated($request->name, $request->email, $request->message);
        Mail::to('dindjipierre77@gmail.com')->send($maillable);
        session()->flash('message', 'Mail envoye avec success !');
        return redirect()->route('root_path');
    }
};
