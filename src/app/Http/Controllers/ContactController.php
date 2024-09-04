<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', ]);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {   Contact::create($contact);
        $contact = $request->only(['name', 'email', 'tel', 'content']);
    }
}
