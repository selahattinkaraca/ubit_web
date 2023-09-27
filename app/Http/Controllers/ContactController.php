<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', ['contacts' => $contacts]);
    }

    public function create()
    {
        return view('admin.contact.create');
    }

    public function store(ContactRequest $request)
    {
        $slider = Contact::create($request->validated());
        return redirect(route('contacts.index'));
    }

    public function edit(Contact $contact)
    {
        return view('admin.contact.edit',['contact'=>$contact]);

    }

    public function update(ContactRequest $request ,Contact $contact)
    {
        $contact->update($request->validated());
        return redirect(route('contacts.index'));
    }

    public function destroy(Contact $contact)
    {
        $contact->clearMediaCollection();
        Contact::deleted($contact->id);
        return redirect(route('contacts.index'));
    }

}
