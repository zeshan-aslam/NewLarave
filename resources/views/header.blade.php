<?php
use App\Http\Controllers\ProductController;
$total=ProductController::Cartitem();
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="/example-app">MobilesShop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/example-app">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="/Orders">Orders</a></li>
      
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cartdetail">Cart({{$total}})</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ Session::get('user')['name'] }}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">logout</a></li>
            <li><a href="#">edit</a></li>
            <li><a href="#">home</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>