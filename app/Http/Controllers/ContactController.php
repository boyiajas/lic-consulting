<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send Email
        Mail::to('info@licconsulting.co.za')->send(new ContactFormSubmitted($validated));

        // Redirect with flash message
        return redirect()->back()->with('success', 'Thank you for contacting us. We will respond shortly!');
    }
}
