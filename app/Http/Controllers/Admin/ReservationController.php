<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Reservation;

class ReservationController extends Controller
{
   public  function store(ReservationFormRequest $request){
            $validatedData = $request->validate();

            $contact = new Reservation();
            $contact->name = $validatedData['name'];
            $contact->name = $validatedData['phone_no'];
            $contact->name = $validatedData['email'];
            $contact->name = $validatedData['message'];
            $contact->name = $validatedData['date'];
            $contact->name = $validatedData['no_of_people'];
            $contact->name = $validatedData['branch'];
            $contact->name = $validatedData['event'];
            $contact->name = $validatedData['message'];

            $reservation->save();

            return redirect('/contact')->with('message', 'Thanks For Contacting Us!') ;
        }
}
