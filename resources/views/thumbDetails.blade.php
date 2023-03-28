@extends('layouts.app')

@section('page_name')
Details
@endsection

@section('thumb_details')
<div class="thumb-bar"></div>
<section class="thumb-section position-relative container">
  <img class="thumb-active" src="{{ $comic['thumb'] }}" alt="thum-key">
    <div class="">
      <h2>{{ $comic['title'] }}</h2>
        <div class="price-bar d-flex justify-content-between align-items-center">
          <span>U.S. Price: {{ $comic['price'] }}</span>
          <span>AVAILABLE</span>
            <div class="dropdown drop-butt">
              <button class="btn dropdown-toggle drop-color" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Check Avaibility
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
        </div>
        <div class="description">
            {{ $comic['description'] }}
        </div>
        {{-- adv image non funziona --}}
        <img class="adv" src="{{ $comic['thumb'] }}"alt="">
    </div>
</section>
<section class="container">
    <div class="row row-cols-2">
         <div class="my-5">
      <h4>Talent</h4>
      <div>
        <h5>
        Art by:@foreach($comic['artists'] as $artist)
        <span>{{ $artist }}</span> 
         @endforeach
        </h5>  
        
      </div>
      <div>
        <h5>
        Written by:@foreach($comic['writers'] as $writer)
        <span>{{ $writer }}</span> 
         @endforeach
        </h5> 
        
      </div>
    </div>
    <div class="row row-cols-2">
         
    <div class="my-5">
      <h4>Specs</h4>
      <div>
        <h5>Series: {{ strtoupper($comic['series']) }}</h5>  
      </div>

      <div>
        <h5>U.S. Price: {{ $comic['price'] }}</h5>  
      </div>

      <div>
        <h5>On Sale date: {{ $comic['sale_date'] }}</h5>  
      </div>
      
    </div>
   
</section>

@endsection