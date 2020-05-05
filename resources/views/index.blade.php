@extends('layouts.main')

{{-- navigation menu --}}
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
          <a class="nav-link" data-value="about" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " data-value="portfolio" href="register.html">Medical Doctor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "   href="pharmacist_reg.html">Pharmacist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="client_login.html">Client</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="nut_reg.html">
          Nutritionist</a>
        </li>
      </ul>
      
    </div>
  </nav>
  
    
@endsection

{{-- content --}}
@section('content')

<!-- header -->
<header class="header ">
    <div class="overlay"></div>
     <div class="container">
           <div class="description ">
        <h1>
            Hello ,Welcome To My Med Health
            <p>
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <button class="btn btn-outline-secondary btn-lg">See more</button>
        </h1>
    </div>
     </div>
    
  </header>
 
@endsection