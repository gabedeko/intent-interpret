@extends('layouts.app')

@section('content')



<div class="container-fluid landing-container">
  <div class="row justify-content-md-center">
    <div class="col landing-col">
      <video src="@asset('images/videos/bridge.mp4')" type="video/mp4" data-autoplay loop class="landing-video" muted plays-inline autoplay>
      </video>
      <h1 class="landing-msg fadeIn">Providing quality ASL-English interpretation services in the DC metro area</h1>
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
    <div class="col fadeIn about-col-1">
            <h1>12+</h1>
            <p>Years of experience</p>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla metus nulla, commodo at varius vel, lobortis quis quam. Quisque a euismod sapien, vel euismod elit. Vestibulum in urna velit. Nulla facilisi. Nunc viverra eros id ipsum viverra, eget mollis ex rutrum. Donec eros velit, facilisis ut nisl vel, mattis ullamcorper justo. Nam vel nulla eu sem tempus ullamcorper. Phasellus a arcu lacinia, tristique dolor sed, tempor elit. </p>
    </div>
    <div class="col fadeIn about-col-1">
            <h1>02</h1>
            <p>Organization</p>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla metus nulla, commodo at varius vel, lobortis quis quam. Quisque a euismod sapien, vel euismod elit. Vestibulum in urna velit. Nulla facilisi. Nunc viverra eros id ipsum viverra, eget mollis ex rutrum. Donec eros velit, facilisis ut nisl vel, mattis ullamcorper justo. Nam vel nulla eu sem tempus ullamcorper. Phasellus a arcu lacinia, tristique dolor sed, tempor elit. </p>
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

<div class="container-fluid parallax-container">
  <div class="bg"></div>
  <div class="row parallax-row">
    <div class="exp-num">01</div>
    <div class="exp-desc">
      <h2>Reality of ASL Interpreting - PoC</h2>
      <button type="button" class="btn btn-primary">More Info</button>
    </div>
  </div>
</div>
<div class="container-fluid parallax-container">
  <div class="bg"></div>
  <div class="row parallax-row">
    <div class="exp-num">01</div>
    <div class="exp-desc">
      <h2>Reality of ASL Interpreting - PoC</h2>
      <button type="button" class="btn btn-primary">More Info</button>
    </div>
  </div>
</div>

<div class="container-fluid process-container">
  <div class="row process-row-1">
    <div class="col">
      <h4>Capabilities & Process</h4>
    </div>
  </div>
  <div class="row process-row-2">
    <div class="col">
      <h1>User Experience</h1>
      <h1>Strategy</h1>
      <h1>User Interface</h1>
      <h1>Leadership</h1>
    </div>
  </div>
  <div class="row justify-content-start process-row-3">
    <div class="col-md-4">
      <h3>Morbi tempor</h3>
      <p>Sed ut est imperdiet, sodales nibh non, vehicula magna. Praesent aliquet libero et elit cursus consectetur. Aliquam in dapibus tortor. Vestibulum ipsum purus, sagittis id tincidunt cursus, suscipit a ante. Vestibulum a venenatis magna.</p>
    </div>
    <div class="col-md-4">
      <h3>Sed ut est </h3>
      <p>Sed ut est imperdiet, sodales nibh non, vehicula magna. Praesent aliquet libero et elit cursus consectetur. Aliquam in dapibus tortor. Vestibulum ipsum purus, sagittis id tincidunt cursus, suscipit a ante. Vestibulum a venenatis magna.</p>
    </div>
  </div>
  <div class="row justify-content-end process-row-4">
    <div class="col-md-4">
      <h3>Morbi tempor</h3>
      <p>Sed ut est imperdiet, sodales nibh non, vehicula magna. Praesent aliquet libero et elit cursus consectetur. Aliquam in dapibus tortor. Vestibulum ipsum purus, sagittis id tincidunt cursus, suscipit a ante. Vestibulum a venenatis magna.</p>
    </div>
    <div class="col-md-4">
      <h3>Cras pretium</h3>
      <p>Sed ut est imperdiet, sodales nibh non, vehicula magna. Praesent aliquet libero et elit cursus consectetur. Aliquam in dapibus tortor. Vestibulum ipsum purus, sagittis id tincidunt cursus, suscipit a ante. Vestibulum a venenatis magna.</p>
    </div>
  </div>
</div>


@endsection