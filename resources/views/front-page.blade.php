@extends('layouts.app')

@section('content')



<div class="container-fluid landing-container">
  <div class="row landing-row justify-content-md-center">
    <div class="col landing-col">
      <video src="@asset('images/videos/intent_interp_intro_video_test.mp4')" type="video/mp4" data-autoplay loop class="landing-video" muted plays-inline autoplay>
      </video>
      <div class="landing-msg-container">
        <h1 class="landing-msg fadeIn">Providing quality ASL-English interpretation services in the DC metro area</h1>  
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
            <h3>Experience</h3>
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
            <p>We provide services in many more settings and are always willing to expand. For additional or unusual setting inquires, please contact me.</p>
            
    </div>
    <div class="col fadeIn about-col-1">
            <h3>Professionalism</h3>
            <hr>
            <p>We abide by the Registry of Interpreters for the Deaf’s (RID) Code of Professional Conduct (CPC). There is an expanded version of the CPC, however, it has also been truncated.</p>
            <ol class="list-group list-group-flush">
              <li class="list-group-item">1. Interpreters adhere to standards of confidential communication.</li>
              <li class="list-group-item">2. Interpreters possess the professional skills and knowledge required for the specific interpreting situation.</li>
              <li class="list-group-item">3. Interpreters conduct themselves in a manner appropriate to the specific interpreting situation.</li>
              <li class="list-group-item">4. Interpreters demonstrate respect for consumers.</li>
              <li class="list-group-item">5. Interpreters demonstrate respect for colleagues, interns, and students of the profession.</li>
              <li class="list-group-item">6. Interpreters maintain ethical business practices.</li>
              <li class="list-group-item">7. Interpreters engage in professional development.</li>
            </ol>
    </div>
  </div>
</div>
<div class="container-fluid about-container">
  <div class="row about-row-2">
      <div class="col-md-10 about-row-2-left fadeIn">
        <h1 class="exp-title">Organizations + Foundations + Community</h1>
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
      <h2>Reality of ASL Interpreting - PoC</h2>
      <p>Antonio founded this Facebook group in 2018 and it has been thriving ever since! It currently has 1K+ members nationally and is still growing. This group focuses on bringing people of color together in the interpreting and Deaf communities for empowerment and resources.</p>
      <button type="button" class="btn btn-light">More Info</button>
    </div>
  </div>
</div>
<div class="container-fluid parallax-container">
  <div class="bg" style="background-image:url(@asset('images/1.jpg'))"></div>
  <div class="row parallax-row p-3">
    <div class="exp-num fadeIn">02</div>
    <div class="exp-desc fadeIn">
      <h2>SOUTHERN MARYLAND ASL CONNECTION</h2>
      <p>This endeavor was the first of its kind. It brought together people in the D.C. metropolitan area who were interested in sign language. While it was a successful, it was only a pilot. Stay tuned for updates because it may be making a return.</p>
      <button type="button" class="btn btn-light">More Info</button>
    </div>
  </div>
</div>
<div class="container-fluid community-container">
  <div class="row community-row">
    <div class="col-md-6 community-left p-3">
      <h5>03</h5>
      <h1>COMMUNITY INVOLVEMENT</h1>
      <a href="#" class="community-left-btm">
        <h5>Website</h5>
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
      <h4>Organizations</h4>
    </div>
  </div>
  <div class="row process-row-2 fadeIn">
    <div class="col">
      <h1 class="process-row-header mb-4">User Experience</h1>
      <h1 class="process-row-header mb-4" mb-4>Strategy</h1>
      <h1 class="process-row-header mb-4">User Interface</h1>
      <h1 class="process-row-header">Leadership</h1>
    </div>
  </div>
  <div class="row justify-content-start process-row-3">
    <div class="col-md-4 fadeIn">
      <h3>REGISTRY OF INTERPRETERS FOR THE DEAF</h3>
      <p>The Registry of Interpreters for the Deaf, Inc. (RID), a national membership organization, plays a leading role in advocating for excellence in the delivery of interpretation and transliteration services between people who use sign language and people who use spoken language. </p>
    </div>
    <div class="col-md-4 fadeIn">
      <h3>POTOMAC CHAPTER OF RID</h3>
      <p>The Potomac Chapter of RID is a local affiliate chapter of RID. This organization is mostly made up of sign language interpreters who practice in Maryland and Washington, D.C.</p>
    </div>
  </div>
  <div class="row justify-content-end process-row-4">
    <div class="col-md-4 fadeIn">
      <h3>NATIONAL ALLIANCE OF BLACK INTERPRETERS – DISTRICT OF COLUMBIA</h3>
      <p>The purpose of this organization is to promote excellence, empowerment and the continued growth of African American/Black professionals in the field of sign language interpreting in the context of a multicultural, multilingual environment.</p>
    </div>
    <div class="col-md-4 fadeIn">
      <h3>Cras pretium</h3>
      <p>Sed ut est imperdiet, sodales nibh non, vehicula magna. Praesent aliquet libero et elit cursus consectetur. Aliquam in dapibus tortor. Vestibulum ipsum purus, sagittis id tincidunt cursus, suscipit a ante. Vestibulum a venenatis magna.</p>
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
      <div class="contact-right-top">
        <h2>Contact</h2>
        <p>For work inquiries feel free to get in touch with me</p>
        <?php
        gravity_form( 1, false, false, false, '', false );
        ?>
      </div>
      <div class="contact-right-btm">
        <h2>Social</h2>
        <div class="social-links">
          <p>Facebook</p>
          <p>Twitter</p>
          <p>Instagram</p>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection