@extends('layouts.home')


@section('event')

<?php
    $pageTitle = 'Gallery'
?>
<section class="gallery">

  <div class="heading">
    <b ><a href="/events" style="color:white;" ><h4>GALLERY<h4></a></b>
  </div>
        <div class="photos" data-aos="zoom-in-up" data-aos-duration="1000">
         <div class="container">
           <a href="{{ asset('images/g.jpg') }}"data-lightbox="models" data-title="caption1">
           <img src="{{ asset('images/g.jpg') }}"alt="">
          </a>
          <a href="{{ asset('images/h.jpg') }}"data-lightbox="models" data-title="caption2">
            <img src="{{ asset('images/h.jpg') }}" alt="">
           </a>
           <a href="{{ asset('images/i.jpg') }}"data-lightbox="models" data-title="caption3">
            <img src="{{ asset('images/i.jpg') }}" alt="">
           </a>
           <a href="{{ asset('images/j.jpg') }}"data-lightbox="models" data-title="caption4">
            <img src="{{ asset('images/j.jpg') }}" alt="">
           </a>
           <a href="{{ asset('images/k.jpg') }}"data-lightbox="models" data-title="caption5">
            <img src="{{ asset('images/k.jpg') }}" alt="">
           </a>
           <a href="{{ asset('images/l.jpg') }}"data-lightbox="models" data-title="caption6">
            <img src="{{ asset('images/l.jpg') }}" alt="">
           </a>
           <a href="{{ asset('images/x.jpg') }}"data-lightbox="models" data-title="caption7">
            <img src="{{ asset('images/x.jpg') }}" alt="">
           </a>
           <a href="{{ asset('images/y.jpg') }}"data-lightbox="models" data-title="caption8">
            <img src="{{ asset('images/y.jpg') }}"alt="">
           </a>
           <a href="{{ asset('images/z.jpg') }}"data-lightbox="models" data-title="caption9">
            <img src="{{ asset('images/z.jpg') }}"alt="">
           </a>
           <a href="{{ asset('images/h.jpg') }}"data-lightbox="models" data-title="caption9">
            <img src="{{ asset('images/h.jpg') }}" alt="">
           </a>
        </div>
         
       </div>
 




</section>
@endsection()