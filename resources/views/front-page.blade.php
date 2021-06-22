@extends('layouts.app')

@section('content')



<div class="container-fluid landing-container">
  <div class="row justify-content-md-center">
    <div class="col landing-col">
      <video src="@asset('images/videos/bridge.mp4')" type="video/mp4" data-autoplay loop class="landing-video" muted plays-inline autoplay>
      </video>
      <h1 class="landing-msg">Providing quality ASL-English interpretation services in the DC metro area</h1>
    </div>
  </div>
</div>

<?php /*
<div class="container-fluid home-img-container">
  <div class="row justify-content-md-center">
    <div class="col-md-12 home-img-col" style="background-image:url('https://via.placeholder.com/250')">
    </div>
  </div>
</div>
*/ ?>

<div class="container-fluid about-container">
  <div class="row about-row-1">
    <div class="col">
        <h5>About</h5>
    </div>
    <div class="col">
        <div>
            <h1>12+</h1>
            <p>Years of experience</p>
        </div>
        <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla metus nulla, commodo at varius vel, lobortis quis quam. Quisque a euismod sapien, vel euismod elit. Vestibulum in urna velit. Nulla facilisi. Nunc viverra eros id ipsum viverra, eget mollis ex rutrum. Donec eros velit, facilisis ut nisl vel, mattis ullamcorper justo. Nam vel nulla eu sem tempus ullamcorper. Phasellus a arcu lacinia, tristique dolor sed, tempor elit. </p>
        </div>
        
    </div>
    <div class="col">
    <div>
            <h1>02</h1>
            <p>Organization</p>
        </div>
        <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla metus nulla, commodo at varius vel, lobortis quis quam. Quisque a euismod sapien, vel euismod elit. Vestibulum in urna velit. Nulla facilisi. Nunc viverra eros id ipsum viverra, eget mollis ex rutrum. Donec eros velit, facilisis ut nisl vel, mattis ullamcorper justo. Nam vel nulla eu sem tempus ullamcorper. Phasellus a arcu lacinia, tristique dolor sed, tempor elit. </p>
        </div>
    </div>
  </div>
  <div class="row about-row-2">
      <div class="col-md-10">
        <h1 class="exp-title">Service + Experience</h1>
      </div>
      <div class="col-md-2">
          
      </div>
  </div>
</div>

<div class="container-fluid exp-container">
  <div class="row">
    <div class="exp-num">01</div>
    <div class="exp-desc">
      <h2>Reality of ASL Interpreting - PoC</h2>
      <button type="button" class="btn btn-primary">More Info</button>
    </div>
  </div>
</div>

<div class="container-fluid parallax-container">
  <div class="bg"></div>
  <h1>Simple parallax sections</h1>
</div>
<div class="container-fluid parallax-container">
  <div class="bg"></div>
  <h1>Hey look, a title</h1>
</div>


@endsection