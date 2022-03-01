@extends('layouts.app')

@section('content')



<div class="container-fluid landing-container">
  <div class="row landing-row">
    <div class="col-md-12 landing-col-right">
      <div class="landing-intro fadeIn_">
        <?php/* the_field('landing_msg'); */?>
        <video src="@asset('images/videos/intent_interp_intro_video_v1.mp4')" type="video/mp4" data-autoplay loop class="landing-video" muted plays-inline autoplay>
      </video>
      </div>
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

<div class="container about-container" id="experience">
  <div class="row about-row-1 mt-3 mb-3">
    <div class="col-md-6 about-title">
        <h5>About</h5>
    </div>
    <div class="col-md-6 fadeIn about-col-1">
            <!--h3>Experience</h3>
            <hr>
            <p>As an interpreter, one gets the opportunity to work in a variety of settings and fields, such as business, legal, mental health, and so many more. Some notable settings we have serviced include:</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Federal government</li>
              <li class="list-group-item">Business</li>
              <li class="list-group-item">Non-profit</li>
              <li class="list-group-item">Education</li>
              <li class="list-group-item">Spiritual</li>
              <li class="list-group-item">Rehabilitation / Physical Therapy</li>
              <li class="list-group-item">Canvassing</li>
              <li class="list-group-item">Medical</li>
            </ul>
            <p>We provide services in many more settings and are always willing to expand. For additional or unusual setting inquires, please contact me.</p-->
            <?php the_field('about_msg'); ?>
    </div>
  </div>
  <div class="row">
  <?php the_field('professionalism'); ?>
  </div>
  <div class="row professionalism-row">
    <div class="col-md professionalism-col">
      <img class="professionalism-img" src="@asset('images/ii_prof_img_0.png')" alt="">
    </div>
    <div class="col-md professionalism-col">
      <img class="professionalism-img" src="@asset('images/ii_prof_img_0.png')" alt="">
    </div>
    <div class="col-md professionalism-col">
      <img class="professionalism-img" src="@asset('images/ii_prof_img_0.png')" alt="">
    </div>
  </div>
  
</div>
<div class="container-fluid about-container">
  <div class="row about-row-2">
      <div class="col-md-10 about-row-2-left fadeIn">
        <h1 class="exp-title">Community Involvement +</h1>
      </div>
      <div class="col-md-2 about-row-2-right">
      <svg width="120" height="120" viewBox="0 0 472 672" fill="none" xmlns="http://www.w3.org/2000/svg" class="about-row-2-arrow-lg">
      <path d="M213.373 662.627C225.869 675.124 246.131 675.124 258.627 662.627L462.274 458.981C474.771 446.484 474.771 426.223 462.274 413.726C449.777 401.229 429.516 401.229 417.019 413.726L236 594.745L54.9807 413.726C42.4839 401.229 22.2226 401.229 9.72583 413.726C-2.77095 426.223 -2.77095 446.484 9.72583 458.981L213.373 662.627ZM204 0L204 640H268L268 0L204 0Z" fill="black"/>
      </svg>
      <svg width="32" height="32" viewBox="0 0 472 672" fill="none" xmlns="http://www.w3.org/2000/svg" class="about-row-2-arrow-sm">
      <path d="M213.373 662.627C225.869 675.124 246.131 675.124 258.627 662.627L462.274 458.981C474.771 446.484 474.771 426.223 462.274 413.726C449.777 401.229 429.516 401.229 417.019 413.726L236 594.745L54.9807 413.726C42.4839 401.229 22.2226 401.229 9.72583 413.726C-2.77095 426.223 -2.77095 446.484 9.72583 458.981L213.373 662.627ZM204 0L204 640H268L268 0L204 0Z" fill="white"/>
      </svg>

      </div>
  </div>
</div>

<div class="container-fluid parallax-container" id="organization">
  <div class="bg" style="background-image:url(@asset('images/0.jpg'))"></div>
  <div class="row parallax-row p-3">
    <div class="exp-num fadeIn">01</div>
    <div class="exp-desc fadeIn">
      <?php the_field('info_1'); ?>
    </div>
  </div>
</div>
<div class="container-fluid parallax-container">
  <div class="bg" style="background-image:url(@asset('images/1.jpg'))"></div>
  <div class="row parallax-row p-3">
    <div class="exp-num fadeIn">02</div>
    <div class="exp-desc fadeIn">
    <?php the_field('info_2'); ?>
    </div>
  </div>
</div>
<div class="container-fluid community-container">
  <div class="row community-row">
    <div class="col-md-6 community-left p-3">
      <h5>03</h5>
      <h1>COMMUNITY INVOLVEMENT</h1>
        <h5><a class="community-btn" href="https://www.pcrid.org/" target="_blank">Website</a></h5> 
        <svg width="64" height="64" viewBox="0 0 672 472" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M662.627 258.627C675.124 246.131 675.124 225.869 662.627 213.373L458.981 9.72601C446.484 -2.77099 426.223 -2.77099 413.726 9.72601C401.229 22.223 401.229 42.484 413.726 54.981L594.745 236L413.726 417.019C401.229 429.516 401.229 449.777 413.726 462.274C426.223 474.771 446.484 474.771 458.981 462.274L662.627 258.627ZM0 268H640V204L0 204L0 268Z" fill="black"/>
        </svg>
      </a>
    </div>
    <div class="col-md-6 community-right" style="background-image:url(@asset('images/2.jpg'))"></div>
    
  </div>
</div>

<div class="container-fluid process-container">
  <div class="row process-row-1 fadeIn">
    <div class="col p-0">
      <h4>Strategy</h4>
    </div>
  </div>
  <div class="row process-row-2 fadeIn">
    <div class="col">
      <h1 class="process-row-header mb-4" mb-4>Reliability</h1>
      <h1 class="process-row-header mb-4">Expertise</h1>
      <h1 class="process-row-header">Leadership</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 fadeIn">
      <?php the_field('org_1'); ?>
    </div>
    <div class="col-md-4 fadeIn">
      <?php the_field('org_2'); ?>
    </div>
    <div class="col-md-4 fadeIn">
      <?php the_field('org_3'); ?>
    </div>
  </div>
</div>
<div class="container-fluid testimonial-container pt-5">
  <h1 class="testimonial-title">Testimonials</h1>
  <div class="row testimonial-row">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          <?php if( have_rows('testimonials') ): ?>
          <?php
            //add active to first of list
            $num = 0;
          ?>
          <?php while( have_rows('testimonials') ): the_row(); 
                  $testimonial_name = get_sub_field('testimonial_name');
                  $testimonial_title = get_sub_field('testimonial_title');
                  $testimonial_msg = get_sub_field('testimonial_msg');
                  ?>
                  <div class="carousel-item <?php echo ($num == 0) ? "active" : ""; ?>">
              <div class="carousel-item-container">
                <div class="carousel-item-content">
                      <div class="carousel-item-top">
                        <h3><?php echo $testimonial_name ?></h3>
                        </div>
                      <div class="carousel-item-btm">
                      <h5><?php echo $testimonial_title ?></h5>
                      <?php echo $testimonial_msg ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $num++; ?>
              <?php endwhile; ?>
              
          <?php endif; ?>
        <!--div class="carousel-item">
          <div class="carousel-item-container">
            <div class="carousel-item-content">
               <div class="carousel-item-top">
                 <h3>John Doe</h3>
                </div>
               <div class="carousel-item-btm">
               <h5>Organizer</h5>
                <p>Donec placerat congue tortor id vestibulum. Aliquam velit turpis, porta quis dapibus sed, posuere vitae metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
               </div>
            </div>
          </div>
        </div-->
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<div class="container-fluid contact-container" id="contact">
  <div class="row contact-row">
    <div class="col-md-7 contact-left">
      <h5 class="pt-5 contact-left-top">Book an appointment for free!</h5>
      <h1 class="contact-left-btm">Let's Communicate</h1>
    </div>
    <div class="col-md-4 contact-right">
      <div class="contact-right-top mt-5">
        <h2>Contact</h2>
        <p>For work inquiries feel free to get in touch with me</p>
        <?/*php
        gravity_form( 1, false, false, false, '', false );
        */?>

        @php the_content() @endphp
      </div>
      <div class="contact-right-btm">
        <h2 class="mt-5 mb-5">Social</h2>
        <div class="social-links mt-5">
          <p><a class="social-link" href="https://www.linkedin.com/in/intllcx2/" target="_blank">LinkedIn</a></p> 
        </div>
      </div>
    </div>
  </div>
</div>


@endsection