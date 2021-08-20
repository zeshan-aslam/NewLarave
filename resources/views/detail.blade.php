@extends('master')
@section('content')

<div class="container">
<div class="row">

<div class="col-sm-6">
<img src="../{{ $products['gallery'] }}" alt="not show"/>
</div>

<div class="col-sm-6">
<h1> Name:{{$products['name']}}</h1>
<p>  Price:{{$products['price']}}</p>
<p>  Catagory:{{$products['catagory']}}</p>
<p> Description {{$products['description']}}</p>
<form action="../addtocart" method="POST">
<input type="hidden" name="product_id" value="{{$products['id']}}">
@csrf
<button class="btn btn-primary">Add to Cart</button>
</form>
<button class="btn btn-primary">Buy Now</button>
</div>


</div>
</div>
@endsection