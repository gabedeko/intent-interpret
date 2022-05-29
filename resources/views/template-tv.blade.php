{{--
  Template Name: TV Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    <div class="container page-landing-container">
            <div class="row page-landing-row">
                <div class="col page-landing-col tv-service-bg mt-5 mb-5" style="background-image:url(@asset('images/tfithp_video_img.png'));"></div>
            </div>
    </div>
    <div class="container page-container">
        <div class="row page-title-row">
            <div class="col-md-5 page-title-col no-padding">
                <h1>TV Streaming Services</h1>
            </div>
        </div>
        <div class="row page-subtitle-row mt-5">
            <div class="col-md-6">
                <h5>For the Low, On the Low...</h5>
            </div>
            
        </div>
        <div class="row mt-5">
            <div class="col-md-6 d-flex align-items-center">
                <ul>
                    <li>1,700+ CHANNELS</li>
                    <li>SPORTS</li>
                    <li>PPV</li>
                    <li>LOCAL AND NATIONAL NEWS</li>
                    <li>INTERNATIONAL CHANNELS</li>
                    <li>PREMIUM MOVIE CHANNELS</li>
                </ul>
                

            </div>
            <div class="col-md-6 text-center">
            <p class="body-1">All you need is INTERNET and a post first-gen Amazon Fire TV Stick to put it on your TV!</p>
                <p class="body-2">NO CONTRACT!</p>
                <p class="body-2">NO HIDDEN FEES!</p>
                <p class="body-2">NO LATE FEES, EVER!</p>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-md-3 d-flex flex-column text-center">
                <!--img src="@asset('images/roman-1-4.jpg')" class="tv-option-img" alt="Cinque Terre"--> 
                <h2>1 Plug</h2>
                <p class="body-2">1 PLUG – $30</p>
                <p class="body-3">One active line of service that can be used on one device at a time.</p>
            </div>
            <div class="col-md-3 d-flex flex-column text-center">
                <h2>2 Plugs</h2>
                <p class="body-2">2 PLUGS – $60</p>
                <p class="body-3">Two active lines of service that can be used on one device at a time.</p>
            </div>
            <div class="col-md-3 d-flex flex-column text-center">   
                <h2>3 Plugs</h2>
                <p class="body-2">3 PLUGS – $90</p>
                <p class="body-3">Three active lines of service that can be used on one device at a time.</p>
            </div>
            <div class="col-md-3 d-flex flex-column text-center">   
                <h2>4 Plugs</h2>
                <p class="body-2">4 PLUGS – $120</p>
                <p class="body-3">Four active lines of service that can be used on one device at a time.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 justify-content-center">
            <iframe width="100%" height="480" src="https://www.youtube.com/embed/ecJLpUMBIM8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 justify-content-center">
            <iframe width="100%" height="480" src="https://www.youtube.com/embed/z5RA71jAPfQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 justify-content-center">
            <iframe width="100%" height="480" src="https://www.youtube.com/embed/ZvKXCDbapAM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 justify-content-center">
            <iframe width="100%" height="480" src="https://www.youtube.com/embed/Gtwe7qAlKD8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 justify-content-center">
            <iframe width="100%" height="480" src="https://www.youtube.com/embed/DSTVSgjE1Go" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row mt-5">
        <div class="col-md-6  d-flex align-items-center">
            <p class="body-1">Easy Two Step Process:</p>
            </div>
            <div class="col-md-6 text-center">
                <ol>
                    <li>Fill out the contact form below indicating which plug and type of service you would like, e.g. “2 plugs, family friendly” or “1 plug, adult.</li>
                    <li>I will email you payment instructions, your account info, and access instructions.</li>
                    <li>BONUS: If you bring / refer a friend, you will receive 10% off of your next invoice!</li>
                </ol>
            </div>
            
        </div>
        <div class="row mt-5 justify-content-end">
            <div class="col-md-6 text-center">
                <h2 class="general-link">Contact</h2>
                <?/*php
                gravity_form( 1, false, false, false, '', false );
                */?>
                @php the_content() @endphp
            </div>
            
        </div>
    </div>

  @endwhile
@endsection
