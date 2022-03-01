{{--
  Template Name: Notary Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    <div class="container page-landing-container">
            <div class="row page-landing-row">
                <div class="col page-landing-col  mt-5 mb-5" style="background-image:url(@asset('images/0.jpg'));"></div>
            </div>
    </div>
    <div class="container page-container">
        <div class="row page-title-row">
            <div class="col-md-5 page-title-col no-padding">
                <h1>Notary Public Services</h1>
            </div>
        </div>
        <div class="row page-subtitle-row mt-5">
            <div class="col-md-6">
                <h5>About</h5>
            </div>
            <div class="col-md-6">
                <h5>Steps</h5>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <p>Antonio is also a commissioned Notary Public in Prince George’s County, Maryland. Through, Intentional Interpreting, LLC, we provide in-person, remote and e-notarizations for a nominal fee.</p>
                <p>Given the current times, remote services are preferred. The process is fairly simple and quick!</p>
            </div>
            <div class="col-md-6">
                <ol>
                    <li>
                        <p>Email your electronic document as a PDF.</p>
                    </li>
                    <li>
                        <p>Verify your identity using video technology, e.g. Google Meet, Zoom, etc.</p>
                    </li>
                    <li>
                        <p>Signage of the document(s) occurs.</p>
                    </li>
                    <li>
                        <p>The signed document(s) is returned to you.</p>
                    </li>
                    <li>
                        <p>Payment is requested.</p>
                    </li>
                    <li>
                        <p>The notarial act is recorded in the Notary Public Record Book.</p>
                    </li>
                </ol>
                <p>That’s it!</p>
                <p>If you need notary services (mobile or otherwise), please contact us.</p>

            </div>
        </div>
        <!-- Calendly inline widget begin -->
        <div class="calendly-inline-widget" id="SAMPLEdivID" data-url="https://calendly.com/intllc" style="min-width:320px;height:630px;"></div>
        <!--script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script-->
        <!-- Calendly inline widget end -->
        

        <div class="row mt-5 justify-content-end">
            <div class="col-md-6">
                <h1>Contact</h1>
                <?/*php
                gravity_form( 1, false, false, false, '', false );
                */?>
                @php the_content() @endphp
            </div>
            
        </div>
    </div>

  @endwhile
@endsection
