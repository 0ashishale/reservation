<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Reservation;

class RouteController extends Controller
{
     function contact(){
        $contacts = Contact::all();
            return view('admin.contact', compact('contacts'));
    }


     function reservation(){
        $reservations = Reservation::all();
            return view('admin.reservation', compact('reservations'));
     } 


     


     
}
