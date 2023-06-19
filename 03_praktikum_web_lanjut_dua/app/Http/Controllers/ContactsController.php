<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contact=Contact::all();
        // $data_contact = Contact::all();
        return view('contact', compact('contact'));
        // return view('contact', compact('data_contact'));
    }
}
