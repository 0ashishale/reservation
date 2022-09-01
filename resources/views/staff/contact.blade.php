<x-staff-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2> <b>Contact Details:</h2> </b> <br/>
                    <table >
                        <thead>
                            <tr>
                              
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone No</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($contacts as $contact)
                            <tr>
                               
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->phn_num}}</td>
                               

                            </tr>
                            @empty
                            <tr>
                                <td colspan="4"> No Contacts Available</td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-staff-layout>