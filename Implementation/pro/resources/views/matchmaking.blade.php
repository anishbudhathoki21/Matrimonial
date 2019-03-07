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
      <a class="nav-link" href="index.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="matchmaking.html">Matchmaking</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="aboutus.html">About Us</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="contactus.html">Contact US</a>
    </li>

  
  </ul>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark ml-auto">
  <form class="form-inline" >
    <input class="form-control mr-sm-3" type="text" placeholder="Search">
    <button class="btn btn-success mr-2" type="submit">Search</button>

   
    
  </form>
</nav>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Find Your Partner</h1> 
  <form action="/matchmaking" method="get">
    <div class="form-group">
   <input type="search" class="form-control" name="search" placeholder="Enter name">
      <select class="custom-select" id="inputGroupSelect" name="Religion">
        <option>Select Religion</option>
      
        @foreach($users as $key=>$user)
        <option value="{{$users->id}}">{{$users->religion}}</option>
        @endforeach
        
      <input type="search"  class="form-control" name="search" placeholder="Enter gender">
    <button type="submit" class="form-control btn btn-success">Search</button>
</div>
  </form>
</div>
  </div>
</div>
<!-- <h1>Featured Profiles</h1> -->
<div class="container">
 <!--  <h2>Card Image</h2>
  <p>Image at the top (card-img-top):</p> -->
<!--   <div class="card" style="width:400px">
    <img class="card-img-top" src="g1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Jasmine Clay</h4>
      <p class="card-text"> Jasmine is an architect and engineer</p>
      <p class="card-text"> Age:28</p>
      <a href="#" class="btn btn-primary">See Profile</a>
      <a href="#" class="btn btn-primary">Invite</a>
    </div>
  </div> -->
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