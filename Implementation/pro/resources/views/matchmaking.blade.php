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
    <script src="ja/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{url('sign/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

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
<!--   <div class="container">
    <h1>Find Your Partner</h1> 
<input type="text" name="search" id="search" placeholder="Show info">
<div class="table">
  <h3>Total Data:<span id="total_records"></span></h3>
  <table class="table table-striped table=bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name:</th>
        <th>Religion</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
      
    </tbody>
    
  </table>

  
</div>
</div> -->
<div class="container">
    <form action="/matchmaking" method="POST" role="search">
      {{ csrf_field() }}
      <div class="input-group">
        <input type="text" class="form-control" name="q"
          placeholder="Search users"> <span class="input-group-btn">
          <button type="submit" class="btn btn-default">
            <span ><i class="zmdi zmdi-search"></i></span>
          </button>
        </span>
      </div>
    </form>
    <div class="container">
      @if(isset($details))
      <p> The Search results for your query <b> {{ $query }} </b> are :</p>
      <h2>Partners details</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Religion</th>
            <th>Address</th>
            <th>Gender</th>
            <th>View Profile</th>
          </tr>
        </thead>
        <tbody>
          @foreach($details as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->religion}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->gender}}</td>
            <td><a href="">View Profile</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @elseif(isset($message))
      <p>{{ $message }}</p>
      @endif
    </div>
    
      
    </div>
  </div>
</div>
<div class="container">
      <p class="mbr-text mbr-fonts-style display-5">
        {{!! str_limit($user->name) !!}}</p>
        <div>
          <p class="mbr-text mbr-fonts-style display-5">
        {{!! str_limit($user->address) !!}}</p>
        </div>
        <div>
          <p class="mbr-text mbr-fonts-style display-5">
        {{!! str_limit($user->gender) !!}}</p>
        </div>
         <div>
          <p class="mbr-text mbr-fonts-style display-5">
        {{!! str_limit($user->religion) !!}}</p>
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

