<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\ReservationFormRequest;
use App\Models\Reservation;
use App\Models\Contact;

class FrontController extends Controller
{
    public function route()
    {
        return view('welcome', ['text' => 'ENJOY THE MUSIC', 'title' => 'MAKE YOUR NIGHT']);
    }

    function services()
    {
        return view('components.front.services', ['text' => 'Full services to meet your every need', 'title' => 'Our Services']);
    }
    function event()
    {
        return view('components.front.events', ['text' => 'See the events Happening now', 'title' => 'Events']);
    }
    function reservation()
    {
        return view('components.front.reservation', ['text' => 'Scrooll up for', 'title' => 'Reservation']);
    }

    function gallery()
    {
        return view('components.front.gallery', ['text' => 'Memories from the Events', 'title' => 'Gallery']);
    }
    function about()
    {
        return view('components.front.about', ['text' => 'Know More About Us', 'title' => 'About Us']);
    }
    function contact()
    {
        return view('components.front.contact', ['text' => 'Contact for more details', 'title' => 'Contact Us']);
    }
    function branches()
    {
        return view('components.front.branches', ['text' => 'Choose your place.', 'title' => 'Branches']);
    }

    function branch1()
    {
        return view('components.front.branches.branch1', ['text' => 'Pokhara', 'title' => 'Pokhara Club']);
    }
    function branch2()
    {
        return view('components.front.branches.branch2', ['text' => 'Kathmandu', 'title' => 'Kathmandu Club']);
    }
    function branch3()
    {
        return view('components.front.branches.branch3', ['text' => 'Illam', 'title' => 'Illam Club']);
    }

    public function contact_store(request $request)
    {
       
        $contact = new Contact();
        $contact->name = $request['name'];
        $contact->phn_num = $request['phn_num'];
        $contact->email = $request['email'];
        $contact->message = $request['message'];

        $contact->save();

        return redirect('/contact')->with('Thank for your information');
    }
 

    public function reservation_store(request $request)
    {
        
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->phone_no = $request->phone_no;
        $reservation->email = $request->email;
        $reservation->message = $request->message;
        $reservation->date = $request->date;
        $reservation->num_of_people = $request->num_of_people;
        $reservation->branch = $request->branch;
        $reservation->event = $request->event;

        $reservation->save();

        return redirect('/reservation')->with('message', 'Reservation Done Successfully');
    }

    public function reservation_delete($reservation)
    {
        
        $reservation = Reservation::findOrfailReservation($reservation);
      

        $reservation->delete();

        return redirect('admin/reservation')->with('message', 'Reservation Deleted Successfully');
    }
}
