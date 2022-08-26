<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;


class ContactController extends Controller
{
       public function store(ContactFormRequest $request){
            $validatedData = $request->validate();

            $contact = new Contact();
            $contact->name = $validatedData['name'];
            $contact->name = $validatedData['name'];
            $contact->name = $validatedData['name'];
            $contact->name = $validatedData['name'];

            $contact->save();
        }
}
