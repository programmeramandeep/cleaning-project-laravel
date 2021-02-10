<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function contact_request(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required|max:50',
            'email'   => 'required|email|max:50',
            'contact' => 'required|min:10|max:10',
            'subject' => 'required|max:100',
            'message' => 'required|max:500',
        ]);

        Mail::send(new ContactMail($request));

        return back()->with('status', 'Your form submitted successfully.');
    }

    public function booking()
    {
        return view('pages.booking.index');
    }

    public function booking_request(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required|max:50',
            'email'   => 'required|email|max:50',
            'contact' => 'required|min:10|max:10',
            'subject' => 'required|max:100',
            'date'    => 'required|date',
            'message' => 'required|max:500',
        ]);

        Mail::send(new BookingMail($request));

        return back()->with('status', 'Your booking is completed. Check your email for confirmation.');
    }
}
