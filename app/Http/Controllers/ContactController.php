<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ContactController extends Controller
{  
    public function viewForm() 
{
        return view('pages.contacts', [
            'title' => 'Contatti'
        ]);
}

public function send(Request $request)
{
    if($request->email == '') {
        return redirect()->back()->with(['error' => 'Il campo email non può essere vuoto.']);
    }
    if($request->message == '') {
        return redirect()->back()->with(['error' => 'Il campo messaggio non può essere vuoto.']);
    }

    

    \Illuminate\Support\Facades\Mail::to('admin@example.com')
    ->send(new \App\Mail\ContactMail($request->email, $request->message));

    return redirect()->back()->with(['success' => 'Richiesta inviata correttamente']);
}

}