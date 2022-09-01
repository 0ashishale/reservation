@extends('layouts.home')

@section('event')

<?php
    $pageTitle = 'Reservation'
?>
<section>
  <div class="reservation">
    <div class="heading">
      <b><a href="/events" style="color:white;">
          <h4>RESERVATION<h4>
        </a></b>
    </div>
            @if(session('message'))
    <div class="alert alert-success">{{session('message')}} </div>

    @endif
    <form action="{{url('/reservation')}}" method="POST" >
      @csrf
      <div data-aos="zoom-in-up" data-aos-duration="1000">
        <div class="row1">
          <div class="input-group">
            <input type="text" id="Name" name="name" required>
            <label for="name"><i class="fa fa-user"></i>Your Name</label>
          </div>
          <div class="input-group">
            <input type="text" id="number" name="phone_no" required>
            <label for="number"><i class="fa fa-phone"></i>Phone No.</label>
          </div>
        </div>
        <div class="row2">
          <div class="input-group">
            <input type="number" id="people" name="num_of_people" required>
            <label for="number"><i class="fa fa-users"></i>NO. Of People</label>
          </div>
          <div class="input-group">
            <input type="date" name="date" required>
            <label for="date"></label>
          </div>
        </div>
        <div class="input-group">
          <input type="email" id="email" name="email" required>
          <label for="email"><i class="fa fa-envelope"></i>Email Id</label>
        </div>

        <div class="input-group">
          <textarea id="message" rows="8" name="message" required></textarea>
          <label for="message"><i class="fa fa-comments-o"></i>Your Message</label>
        </div>
       
        <div class="select__branch">
                <span class="" style="color: aliceblue;">Select Branches:</span><br> &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="radio" name="branch" value="pokhara">  <p>Pokhara</p> &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="radio" name="branch" value="syangja"><p>Shyanja</p>  &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="radio" name="branch" value="baglung"><p>Baglung</p> <br><br><br>
        </div>
        
        <div class="select__branch">
          <span class="" style="color: aliceblue;">Select Event:</span><br> &nbsp; &nbsp; &nbsp; &nbsp;
          <input type="radio" name="event" value="Non Stop Party">  <p>Non stop party</p>  &nbsp; &nbsp; &nbsp; &nbsp;
          <input type="radio" name="event" value="Special"><p >Special</p>  &nbsp; &nbsp; &nbsp; &nbsp;
          <input type="radio" name="event" value="Top Residence"><p >Top residence</p> <br><br>
  </div>
        <div>
          <button type="submit">SUBMIT<i class="fa fa-paper-plane"></i></button>
        </div>
      </div>
    </form>
  </div>
</section>

@endsection()