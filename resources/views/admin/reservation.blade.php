<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table style="border: 1px Solid">
                        <thead>
                            <tr style="border: 1px solid">
                                <th style="border: 1px solid">ID</th>
                                <th style="border: 1px solid">Name</th>
                                <th style="border: 1px solid">Phone No</th>
                                <th style="border: 1px solid">No. Of People</th>
                                <th style="border: 1px solid">Date</th>
                                <th style="border: 1px solid">Branch</th>
                                <th style="border: 1px solid">Event</th>
                                <th style="border: 1px solid">Email</th>
                                <th style="border: 1px solid">Message</th>
                                
                              
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($reservations as $reservation)
                            <tr>
                                <td style="border: 1px solid">{{$reservation->id}}</td>
                                <td style="border: 1px solid">{{$reservation->name}}</td>
                                <td style="border: 1px solid">{{$reservation->phone_no}}</td>
                                <td style="border: 1px solid">{{$reservation->num_of_people}}</td>
                                <td style="border: 1px solid">{{$reservation->date}}</td>
                                <td style="border: 1px solid">{{$reservation->branch}}</td>
                                <td style="border: 1px solid">{{$reservation->event}}</td>
                                <td style="border: 1px solid">{{$reservation->email}}</td>
                                <td style="border: 1px solid">{{$reservation->message}}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9"> No Reservation Available</td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>