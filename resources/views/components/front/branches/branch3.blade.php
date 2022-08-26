@extends('layouts.home')


@section('event')
<?php
$pageTitle = 'Illam'
?>
<!-- --------------about us--------- -->
<section class="about-us">
  <div class="container " data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="content-section">
      <div class="heading" style=" font-family: Nanum Gothic Coding;">
        <h3>ILLAM CLUB</h3>
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

        <div class="image-content">
          <div class="icon">

            <a href="#map"><img src="{{asset('images/location.png')}}" alt="Location"
                style="height:65px; width:65px; "></a>

            <span class="hover-text">Go to Map</span>
          </div>
          <div class="address">
         
              <h4>Ghattekulo</h4>
              <p>Illam, Nepal</p>
            
          </div>

        </div>

        <a href="#map"><img id="photo" src="{{asset('/images/photo.jpg')}}"
            style="height: 50vh; width:60vh; border-radius: 5%;" alt=""></a>


      </div>

    </div>


  </div>
  <div class="social content">
    <a href="#" style="color:white"><i class="fa-solid fa-phone"> +9779876543218</i></a>
    <a href="#" style="color:white"><i class="fa-brands fa-facebook-f"> Facebook</i></a>
    <a href="#" style="color:white"><i class="fa-brands fa-instagram"> Instagram</i></a>
    <a href="#" style="color:white"><i class="fa-brands fa-twitter"> Twitter </i></a>
  </div>



</section>
<!-- -----------Event Section---------- -->

<section class="book-table">

  <div class="heading">
    <b><a href="/events" style="color:white;">
        <h4>EVENTS<h4>
      </a></b>
  </div>
  <div class="booktable-row" data-aos="zoom-in-up" data-aos-duration="1000">
    <img src="{{ asset('images/e.jpg') }}" alt="">
    <h1>NON STOP PARTY</h1>
    <p>Enjoy the event throughout the entire night. </p>

    <a class="hero-btn" href="{{url('/reservation')}}"> Book A Table</a>
  </div>

  <div class="booktable-row" data-aos="zoom-in-up" data-aos-duration="1000">
    <img src="{{ asset('images/table2.jpg') }}" alt="">
    <h1>SPECIAL PROGRAM</h1>
    <p>Enjoy the special progaram every night. </p>

    <a class="hero-btn" href="{{url('/reservation')}}"> Book A Table</a>
  </div>

  <div class="booktable-row" data-aos="zoom-in-up" data-aos-duration="1000">
    <img src="{{ asset('images/c.jpg') }}" alt="">
    <h1>TOP RESIDENCE</h1>
    <p>Enjoy the event throughout the entire night </p>

    <a class="hero-btn" href="{{url('/reservation')}}"> Book A Table</a>
  </div>

  <!-- -----------about us----------- -->

</section>


<!-- ----------gallery--------- -->
<section class="gallery">

  <div class="heading">
    <b><a href="/events" style="color:white;">
        <h4>GALLERY<h4>
      </a></b>
  </div>
  <div class="photos" data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="container">
      <a href="{{ asset('images/g.jpg') }}" data-lightbox="models" data-title="caption1">
        <img src="{{ asset('images/g.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/h.jpg') }}" data-lightbox="models" data-title="caption2">
        <img src="{{ asset('images/h.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/i.jpg') }}" data-lightbox="models" data-title="caption3">
        <img src="{{ asset('images/i.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/j.jpg') }}" data-lightbox="models" data-title="caption4">
        <img src="{{ asset('images/j.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/k.jpg') }}" data-lightbox="models" data-title="caption5">
        <img src="{{ asset('images/k.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/l.jpg') }}" data-lightbox="models" data-title="caption6">
        <img src="{{ asset('images/l.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/x.jpg') }}" data-lightbox="models" data-title="caption7">
        <img src="{{ asset('images/x.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/y.jpg') }}" data-lightbox="models" data-title="caption8">
        <img src="{{ asset('images/y.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/z.jpg') }}" data-lightbox="models" data-title="caption9">
        <img src="{{ asset('images/z.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/h.jpg') }}" data-lightbox="models" data-title="caption9">
        <img src="{{ asset('images/h.jpg') }}" alt="">
      </a>
    </div>

  </div>





</section>

<!-- --------------branch section--------- -->

<section class="branch">


  <div class="" data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="heading">
      <b><a href="/events" style="color:white;">
          <h4>BRANCHES<h4>
        </a></b>
    </div>
    <div class="branches">

      <div class="branch1">
        <div class="text" onclick="location.href='/branches/branch1'">
          <a href="/branches/branch1">
            <h1>Pokhara Club</h1>
          </a>

          <p>Pokhara </p>
        </div>
        <a href="{{url('/reservation')}}"><button>Reservation</button></a>

      </div>

      <div class="branch2">


        <div class="text" onclick="location.href='/branches/branch2'">
          <a href="/branches/branch2">
            <h1>kathmandu Club</h1>

          </a>
          <p>Kathmandu</p>
        </div>
        <a href="{{url('/reservation')}}"><button>Reservation</button></a>

      </div>

    </div>

  </div>

  </div>
</section>

<div id="map">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7029.990810664071!2d83.98180702529555!3d28.237819136874638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995945d57d28ba5%3A0xdd52869218279546!2sShree%20Bindhyabasini%20Temple!5e0!3m2!1sen!2snp!4v1653900842774!5m2!1sen!2snp"
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
@endsection()