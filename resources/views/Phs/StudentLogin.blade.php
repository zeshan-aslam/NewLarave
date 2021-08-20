@extends('Phs.Patient.StudentMaster')
@section('content')
<div class="contianer"> 
    <div class="row">
        <div class="col-sm-4  col-sm-offset-4">
        <form action="{{'StudentRegister'}}" method="post">
        @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">FirstName</label>
    <input type="text" class="form-control" id="name" name="name">
  @error('name')
      <li>{{ $message }}</li>
  @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control"  id="password" name="password">
    
  </div>
  <hr>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>


<!-- <button class ="btn btn-primary"> click me</button> -->
@endsection