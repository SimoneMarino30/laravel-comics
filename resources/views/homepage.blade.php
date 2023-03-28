@extends('layouts.app')

@section('page_name')
Homepage
@endsection

@section('main_content')
<section class="container">
  <div class="row row-cols-6">
    @foreach ($comics as $comic)
    <div class="img-fluid d-flex flex-column">
      <img src="{{ $comic['thumb'] }}" alt="">
      <div class="col">{{ strtoupper($comic['series']) }}</div>
    </div>
    @endforeach
    <div class="">
      <button class="">LOAD MORE</button>
    </div>
    
  </div>
</section>
@endsection