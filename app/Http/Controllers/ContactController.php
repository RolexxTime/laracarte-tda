<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Message;
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
        $message = new Message;
        $message -> name = $request -> name;
        $message -> email = $request -> email;
        $message -> message = $request -> message;
        $message ->save();

        $maillable = new ContactMessageCreated($message);
        Mail::to(config('laracarte.admin_support_email'))->send($maillable);
        session()->flash('message', 'Mail envoye avec success !');
        return redirect()->route('root_path');
    }
};
