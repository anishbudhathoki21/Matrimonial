<!DOCTYPE html>
<html>
<head>
    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.min.css')}}" />
  <title>Matrimonial Website</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Matrimonial</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="matchmaking.html">Matchmaking</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="about.html">About Us</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="contactus.html">Contact US</a>
    </li>

  
  </ul>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark ml-auto">
  <form class="form-inline" >
    <input class="form-control mr-sm-3" type="text" placeholder="Search">
    <button class="btn btn-success mr-2" type="submit">Search</button>

    <a href="{!! url('login') !!}"  class="btn btn-outline-success mr-2" >Login</a>
    <a href="{{ route('register') }}" button class="btn btn-outline-success mr-2">SignUp</a>
    
  </form>
</nav>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('img/mt2.jpg')}}" alt="Los Angeles" width="900" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{url('img/mt2.jpg')}}" alt="Chicago" width="900" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{url('img/mt2.jpg')}}" alt="New York" width="900" height="500">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="jumbotron jumbotron-fluid bg-dark mb-4">
  <div class="container bg-dark">
    <h1 class="text-light">About Matrimonial Website</h1>      
    <p class="text-light">Matrimonail website helps you tofind the right partner .
    </p>
  </div>
</div>
<div class="col-md-4"></div>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4 bg-dark text-light  ">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">Matrimonial</h5>
          <p>Find the perfect match for you.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Home</a>
              </li>
              <li>
                <a href="#!">Matchmaking</a>
              </li>
              <li>
                <a href="#!">About Us</a>
              </li>
              <li>
                <a href="#!">Feedback</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
        
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> Matrimonial.com</a>
    </div>
    <!-- Copyright -->

  </footer>

  <!-- Footer -->
</body>
</html>