@extends('layouts.main')

@section('navigation')

<!-- navbar -->

<nav class="navbar navbar-expand-lg fixed-top ">
    <a class="navbar-brand" href="#">Med Health</a>
   <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-4">
        
        <li class="nav-item">
          <a class="nav-link" data-value="about" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "    href="register.html">Register</a>
        </li>
        <li class="nav-item">
         <a class="nav-link "  href="client_login.html">Client</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " data-value="team" href="#">
          About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " data-value="About" href="#">Contact</a>
        </li>
      </ul>
      
    </div>
</nav>

  
@endsection

@section('content')

<!-- header -->
<header class="header ">
    <div class="overlay"></div>
     <div class="container">
           <div class="description ">
        <h1>
            Hello ,This is  medical requests from the clients
  
        </h1>
               <!--start of form-->
  <hr>
  <div class="container pt-1">
  <form action="request.html" method="POST">
  <div class="row">
    
     <div class="col-md-6">
    <div class="form-group">
      <label for="email">Email </label>
      <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter Email">
    </div>
      <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter Your Password">
    </div>
    </div>
      <div class="col-md-6">
    </div>
  
  </div>
    <hr>
    Don't have account?<a href="client_reg.html">Create account</a>
    <div class="row">
      <div class="col text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  </div>
    <!--end of form-->
  
    </div>
     </div>
  
  
    
  </header>
  
  

@endsection