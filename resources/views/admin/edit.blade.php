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
                    <form action="{{ url('admin/reservation/'.$reservation->id) }}" method="POST" style="background-color:black; width:800px; padding:30px;">
                        @csrf
                        <div data-aos="zoom-in-up" data-aos-duration="1000">
                            <div class="row1">
                                <div class="input-group">
                                    <input type="text" id="Name" name="name" value="{{$reservation->name}}" required>
                                    <label for="name"><i class="fa fa-user"></i>Your Name</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="number" name="phone_no" value="{{$reservation->phone_no}}"  required>
                                    <label for="number"><i class="fa fa-phone"></i>Phone No.</label>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="input-group">
                                    <input type="number" id="people" name="num_of_people" value="{{$reservation->num_of_people}}"  required>
                                    <label for="number"><i class="fa fa-users"></i>NO. Of People</label>
                                </div>
                                <div class="input-group">
                                    <input type="date" name="date" value="{{$reservation->date}}"  required>
                                    <label for="date"></label>
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="email" id="email" name="email"  value="{{$reservation->email}}"  required>
                                <label for="email"><i class="fa fa-envelope"></i>Email Id</label>
                            </div>

                            <div class="input-group">
                                <textarea id="message" rows="8" name="message"   required  style="color:white; background-color:black; ">{{$reservation->message}}</textarea>
                                <label for="message" style="color:rgb(197, 180, 180) "><i class="fa fa-comments-o"></i>Your Message</label>
                            </div>

                            <div class="select__branch">
                                <span class="" style="color: aliceblue;">Select Branches:</span><br>
                                <input type="radio" name="branch" value="pokhara" required>
                                <p style="color: aliceblue;">Pokhara</p>
                                <input type="radio" name="branch" value="syangja" required>
                                <p style="color: aliceblue;">Shyanja</p>
                                <input type="radio" name="branch" value="baglung" required>
                                <p style="color: aliceblue;">Baglung</p> <br><br>
                            </div>

                            <div class="select__branch">
                                <span class="" style="color: aliceblue;">Select Event:</span><br>
                                <input type="radio" name="event" value="Non Stop Party" required>
                                <p style="color: aliceblue;">Non stop party</p>
                                <input type="radio" name="event" value="Special" required>
                                <p style="color: aliceblue;">Special</p>
                                <input type="radio" name="event" value="Top Residence" required>
                                <p style="color: aliceblue;">Top residence</p> <br><br>
                            </div>
                            <div>
                                <button  style="color:white; type="submit">UPDATE<i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </form> 

                    
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
