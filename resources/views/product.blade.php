@extends('master')
@section('content')
<div class="custom">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  @foreach( $products as $items )
  
    <div class="item {{ $items['id']==2?'active':''}}">
    <a href="detail/{{$items['id']}}">
      <img class="slider_img" src="{{ $items['gallery'] }}" alt="Chania">
      <div class="carousel-caption " style="background:#a09a9a61;">
        <h3>{{ $items['name'] }}</h3>
        <p > {{ $items['description'] }}</p>
      </div>
    </div>
    </a>

      @endforeach
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div>
<h1 style="margin-left:15px;">Trending Products</h1>
<div class="trending">
  @foreach( $products as $items )
    <div class="trending_item">
    <a href="detail/{{$items['id']}}"> 
    <img  class="t_img"src="{{ $items['gallery'] }}" >
      <div>
        <h3>{{ $items['name'] }}</h3>
      </div>
    </div>
    </a>  
    @endforeach
</div>
</div>

 

@endsection