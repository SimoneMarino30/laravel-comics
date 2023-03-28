@extends('layouts.app')

@section('page_name')
Homepage
@endsection

@section('main_content')
<section class="container">
  <div class="row row-cols-6">
    @foreach ($comics as $key => $comic)
    <div class="thumbs img-fluid d-flex flex-column">
      <img src="{{ $comic['thumb'] }}" alt="">
      <div class="col">{{ strtoupper($comic['series']) }}</div>
      <a href="{{ route('details',$key) }}" class="btn btn-primary">SHOW DETAILS</a>
    </div>
    @endforeach
    <div class="">
      <button class="">LOAD MORE</button>
    </div>
  </div>
</section>

<section class="middle-bar">
  <div class="container d-flex justify-content-start">
    <div class="img-box">
      <img class="" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
      <span>DIGITAL COMICS</span>
    </div>

    <div class="img-box">
      <img class="" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
      <span>DC MERCHANDISE</span>
    </div>

    <div class="img-box">
       <img class="" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
      <span>SUBSCRIPTION</span>
    </div>

    <div class="img-box">
       <img class="" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
      <span>COMIC SHOP LOCATOR</span>
    </div>
    
    <div class="img-box">
       <img class="" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
      <span>DC POWER VISA</span>
    </div>
  </div>
</section>
@endsection