@extends('layouts.main')

@section('navigation')

<!-- navbar -->

<nav class="navbar navbar-expand-lg fixed-top ">
    <a class="navbar-brand" href="#">Med Health</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-4">
        
        <li class="nav-item">
          <a class="nav-link" data-value="about" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="#">Medical Doctor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="client_login.html">Client</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="#">
          Pharmacist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="nut_reg.html">Nutritionist</a>
        </li>
      </ul>
      
    </div>
</nav>
  
@endsection

@section('content')

<header class="header ">
    <div class="overlay"></div>
     <div class="container">
           <div class="description ">
        <h1>
            Hello ,Welcome To My Med Health Register now as a Pharmacist
  
        </h1>	
        <!--start of form-->
  <hr>
  <div class="container pt-1">
  <form action="pharmacist_login.html" method="POST">
  <div class="row">
    <div class="col-md-6">
    <div class="form-group">
      <label for="name">Full name</label>
      <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter Your name" required>
    </div>
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    </div>
  
     <div class="form-group">
      <label for="loc">Location</label>
      <input type="text" name="loc" class="form-control" id="loc" aria-describedby="loc" placeholder="Enter Your Location" required>
    </div>
  
    </div>
    <div class="col-md-6">
      <div class="form-group">
      <label for="phone_no"">Phone Number</label>
      <input type='tel' name="phone_no" class="form-control" id="phone_no"" aria-describedby="phone_no"" placeholder="Enter Your Phone number"  required>
    </div>
    <div class="form-group">
      <label for="id_no">ID Number</label>
      <input type="text" name="id_no" class="form-control" id="id_no" aria-describedby="id_no" placeholder="Enter Your ID Number" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="text" name="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter Your ID Number" required>
    </div>
    </div>
    
  
  </div>
    <hr>
    <p>Already have an account? <a href="pharmacist_login.html">Login</a></p>
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

