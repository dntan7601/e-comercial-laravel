
<?php
  use App\Http\Controllers\ProductController;
  use App\Http\Controllers\UserController;
  if(Session::has('user')) {
    $totalItems = ProductController::totalItems();
    $userName = UserController::getCurrentUser();
  } else {
    $totalItems = '0';
    $userName = 'Guest';
  }
  
?>
<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="/lar-53/public"><i class="fa-solid fa-shop me-2"></i> <strong>GEAR SHOP</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
      <div class="input-group">
        <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
        <input type="text" class="form-control border-warning" style="color:#7a7a7a">
        <button class="btn btn-warning text-white">Search</button>
      </div>
    </div>
    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
      <div class="ms-auto d-none d-lg-block">
        <div class="input-group">
          <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
          <input type="text" class="form-control border-warning" style="color:#7a7a7a">
          <button class="btn btn-warning text-white">Search</button>
        </div>
      </div>
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link mx-2 text-uppercase active" aria-current="page" href="#">Offers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 text-uppercase" href="./">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 text-uppercase" href="#">Catalog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 text-uppercase" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 text-uppercase" href="#">About</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto ">

        <li class="nav-item">
          <a class="nav-link mx-2 text-uppercase" href="#"><i class="fa-solid fa-cart-shopping me-1"></i> Cart({{$totalItems}})</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mx-2 text-uppercase" href="#" role="button" data-bs-toggle="dropdown">{{$userName}}</a>
          <ul class="dropdown-menu">
            @if(Session::has('user')) 
              <li><a class="dropdown-item" href="logout">Logout</a></li>
            @else
              <li><a class="dropdown-item" href="login">Login</a></li>
            @endif
          </ul>
        </li>

        
      </ul>
    </div>
  </div>
</nav>