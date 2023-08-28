<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Package;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function create()
    {
        return view('emails.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'body' => 'required'
        ]);

        Email::create([
            'subject' => $request->subject,
            'body' => $request->body,
            'user_id' => auth()->user()->id
        ]);

        return redirect(route('dashboard'));
    }
}
