<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    // Show contact form
    public function index()
    {
        $contacts = Contact::get();
        return view('contact',compact('contacts'));
    }

    // Store contact request
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    // Admin: list messages
    public function adminIndex()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    // Admin: show single message
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.showContact', compact('contact'));
    }

    // Admin: delete message
    public function destroy($id)
    {
    $contact = Contact::findOrFail($id);
    $contact->delete();

    return redirect()->route('admin.dashboard')->with('success', 'Message deleted successfully');
    }
}
