@extends('layouts.home')
@section('event')
<?php
    $pageTitle = 'Contact'
?>

<section>
  <div class="reservation " >
  <div class="heading">
        <b><a href="/contact" style="color:white;">Contact Us</a> </b>
   </div>
      <div class="contactadd" data-aos="zoom-in-up" data-aos-duration="1000">
        <p>An establishment for evening entertainment,  generally open until the early morning,that serves liquor and usually food and offers patrons music, comedy acts, a floor show, or dancing. 
          Feel free to contact us for your night, It will surely be your loved moment.
        </p><br>
        </div>
      <div class="bcontact" data-aos="zoom-in-up" data-aos-duration="1000"> 
      <a href="#"  > <i  class="fa fa-map-marker"  ></i> Address: <br> <p>Pokhara,Nepal</p> </a> &nbsp;
      <a href="#"  > <i  class="fa fa-envelope" ></i> Email: <br><p>ra01@gmail.com</p></a> &nbsp; 
      <a href="#"  > <i  class="fa fa-phone-square"></i> Phone No: <br><p>1234567789</p></a>
     
      </div>
     <div class="heading">
        <b><a href="/contact" style="color:white;">Feel Free To Contact Us</a> </b>
   </div>


   <form action="{{url('/contact')}}" method="POST">
    @csrf
    <div data-aos="zoom-in-up" data-aos-duration="1000">
      <div class="row1">
        <div class="input-group">
          <input type="text" id="Name" required name="name">
          <label for="name"><i class="fa fa-user"></i>Your Name</label>
        </div>
        <div class="input-group">
          <input type="text" id="number" name="phn_num" required>
          <label for="number"><i class="fa fa-phone"></i>Phone No.</label>
        </div>
      </div>
      <div class="input-group">
        <input type="email" id="email" name="email" required>
        <label for="email"><i class="fa fa-envelope"></i>Email Id</label>
      </div>

      <div class="input-group">
        <textarea id="message" rows="8"name="message" required></textarea>
        <label for="message"><i class="fa fa-comments-o"></i>Your Message</label>
      </div>
      <div>
        <button type="submit">Send<i class="fa fa-paper-plane"></i></button>
      </div>
    </div>
    
    </form>
    <div class="social content">
    <a href="#" style="color:white"><i class="fa-solid fa-phone"></i> +9779876543218</a>
    <a href="#" style="color:white"><i class="fa-brands fa-facebook-f"> Facebook</i></a>
    <a href="#" style="color:white"><i class="fa-brands fa-instagram"> Instagram</i></a>
    <a href="#" style="color:white"><i class="fa-brands fa-twitter"> Twitter </i></a>
   
   
  </div>
  </div>
 
</section>

@endsection()