{{--
  Template Name: Contact Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp


    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Notary Public Services</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5>About</h5>
            </div>
            <div class="col-md-6">
                <h5>Steps</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>Antonio is also a commissioned Notary Public in Prince George’s County, Maryland. Through, TFITHP, LLC, we provide in-person, remote and e-notarizations for a nominal fee.</p>
                <p>Given the current times, remote services are preferred. The process is fairly simple and quick!</p>
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
    </div>

  @endwhile
@endsection
