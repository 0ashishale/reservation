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
                                @if (session('message'))
                                    <div class="alert alert-success">{{ session('message') }} </div>
                                @endif
                                <b>
                                    <h1 style="font-size: 2rem">Reservation Details:</h1>
                                </b>
                                <br />
                                <table>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Phone No</th>
                                            <th>No. Of People</th>
                                            <th>Date</th>
                                            <th>Branch</th>
                                            <th>Event</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($reservations as $reservation)
                                            <tr>
                                                <td>{{ $reservation->id }}</td>
                                                <td>{{ $reservation->name }}</td>
                                                <td>{{ $reservation->phone_no }}</td>
                                                <td>{{ $reservation->num_of_people }}</td>
                                                <td>{{ $reservation->date }}</td>
                                                <td>{{ $reservation->branch }}</td>
                                                <td>{{ $reservation->event }}</td>
                                                <td>{{ $reservation->email }}</td>
                                                <td>{{ $reservation->message }}</td>
                                                <td>
                                                    <a
                                                        href="{{ url('admin/reservation/' . $reservation->id . '/edit') }}">Edit</a><br><br>
                                                    <a
                                                        href="{{ url('admin/reservation/' . $reservation->id . '/destroy') }}">Delete</a>
                                                </td>

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
