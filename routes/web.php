<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'email' => 'required|email',
        'message' => 'required',
        'marketing' => 'nullable'
    ]);

    Mail::to('addnnann5@gmail.com')->send(new ContactFormMail($validated));

    return back()->with('success', 'Thank you for your message! We will get back to you soon.');
})->name('contact.submit');
