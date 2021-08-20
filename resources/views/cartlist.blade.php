@extends('master')
@section('content')


<div class="container">
@foreach($products as $pro)
<div class="row">
<div class="col-sm-10" style="border-bottom: 1px solid;
    margin-bottom: 23px;
    padding-bottom: 23px;">
  
<div class="col-sm-4">
<img src="  {{$pro->gallery}}" style="width:152px;"> </img>
</div>

<div class="col-sm-4" style="text-align: center;
    margin-top: 39px;">
<h3> {{$pro->name}}</h3>
<h3>{{$pro->price}}</h3>
</div>

<div class="col-sm-4" style="text-align: center;
    margin-top: 53px;">
<a href="remove/{{$pro->cart_id}}"><button class="btn btn-warning">Remove From Cart</button></a>
</div>

</div>
</div>
@endforeach
</div>

@endsection