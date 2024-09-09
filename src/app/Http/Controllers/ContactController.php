<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\RegisterRequest;


class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact(RegisterRequest $request)
    {
        $contact = $request->only(['name', 'email', 'password',]);
        return view('contact', compact('contact'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name','gender', 'email', 'tel', 'address', 'inquiry_type', 'inquiry_content']);
        Contact::create($contact);

        return view('confirm', compact('confirm'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'gender', 'email', 'tel', 'address', 'inquiry_type', 'inquiry_content']);
        Contact::create($contact);

        return view('thanks');
    }
}
