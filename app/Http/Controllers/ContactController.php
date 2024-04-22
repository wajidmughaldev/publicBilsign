<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        Mail::to('jahangirshahzabtech@gmail.com')->send(new ContactFormMail($request->all()));

        // Redirect back with a success message or do whatever you want
        return back()->with('message', 'Email sent successfully!');
    }
}
