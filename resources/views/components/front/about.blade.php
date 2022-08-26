@extends('layouts.home')


@section('event')
<?php
    $pageTitle = 'About'
?>


<section class="about-us">
  <div class="container " data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="content-section">
      <div class="heading" style=" font-family: Nanum Gothic Coding;">
        <h3>About Us </h3>
      </div>



      <div class="content">
        <h4>Status : Open</h4>
        <h4>Opening Hours: 9PM-3AM</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Nisi, atque sequi totam voluptas veritatis expedita dolorum praesentium ratione,
          accusamus id ad fugit, deserunt accusantium incidunt nam delectus labore qui perferendis!</p>

        <a href="{{url('/reservation')}}"><button>Reservation</button></a>
      </div>
      <div class="image-section">

       

        <a href="#map"><img id="photo" src="{{asset('/images/logo.png')}}"
            style="height: 50vh; width:60vh; border-radius: 5%;" alt=""></a>


      </div>

    </div>

    


  </div>
  <div class="social content">
    <a href="#" style="color:white"><i class="fa-solid fa-phone"></i> +9779876543218</a>
    <a href="#" style="color:white"><i class="fa-brands fa-facebook-f"> Facebook</i></a>
    <a href="#" style="color:white"><i class="fa-brands fa-instagram"> Instagram</i></a>
    <a href="#" style="color:white"><i class="fa-brands fa-twitter"> Twitter </i></a>
 </div>


  <div class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7029.990810664071!2d83.98180702529555!3d28.237819136874638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995945d57d28ba5%3A0xdd52869218279546!2sShree%20Bindhyabasini%20Temple!5e0!3m2!1sen!2snp!4v1653900842774!5m2!1sen!2snp"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>

</section>

@endsection()