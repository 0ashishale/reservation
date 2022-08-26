@extends('layouts.home')
@section('event')
<?php
    $pageTitle = 'Branches'
?>
<section class="branch" >


  <div class="" data-aos="zoom-in-up" data-aos-duration="1000" >
  <div class="heading">
    <b ><a href="/events" style="color:white;" ><h4>BRANCHES<h4></a></b>
  </div>
  <div class="branches" >
    <div class="branch1">
      <div class="text" onclick="location.href='/branches/branch1'">
        <a href="/branches/branch1">
          <h1>Pokhara Club</h1>
        </a>

        <p>Pokhara </p>
      </div>
      <a href="{{url('/reservation')}}" ><button>Reservation</button></a>

    </div>

    <div class="branch2">


      <div class="text" onclick="location.href='/branches/branch2'">
        <a href="/branches/branch2">
          <h1>kathmandu Club</h1>

        </a>
        <p>Kathmandu</p>
      </div>
      <a href="{{url('/reservation')}}" ><button>Reservation</button></a>

    </div>

    <div class="branch3">


      <div class="text" onclick="location.href='/branches/branch3'">
        <a href="/branches/branch3">
          <h1>Illam Club</h1>

        </a>

        <p>Illam</p>
      </div>
      <a href="{{url('/reservation')}}" ><button>Reservation</button></a>

    </div>
  </div>
  
  </div>

</div>
</section>


@endsection()