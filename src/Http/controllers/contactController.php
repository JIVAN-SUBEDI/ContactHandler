<?php

namespace JivanSubedi\ContactHandler\Http\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JivanSubedi\ContactHandler\Models\contact;
use Illuminate\Support\Facades\Mail;
use JivanSubedi\ContactHandler\mail\contactMaillable;


class contactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $req)
    {
        $req->validate([
            'name' => 'required|max:255',
            'email' => 'email|required|max:255',
            'subject' => 'required|max:255',
            'message' => 'required'
        ]);
        contact::create($req->all());
        Mail::to(config('contact.send_mail_to'))->send(new contactMaillable($req->message,$req->name,$req->email,$req->subject));
        return back()->with('Message send successfully.');
    }
}
