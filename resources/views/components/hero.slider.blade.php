@extends('app')

@section('content')
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <!-- Slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://via.placeholder.com/1920x500" class="d-block w-100" alt="Slide 1">
      <div class="carousel-caption d-none d-md-block">
        <h1>Welcome to Our Website</h1>
        <p>Discover amazing features and opportunities.</p>
        <a href="#features" class="btn btn-primary">Learn More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/1920x500" class="d-block w-100" alt="Slide 2">
      <div class="carousel-caption d-none d-md-block">
        <h1>Our Services</h1>
        <p>Explore the wide range of services we offer.</p>
        <a href="#services" class="btn btn-success">Get Started</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/1920x500" class="d-block w-100" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
        <h1>Contact Us</h1>
        <p>We are here to help you 24/7.</p>
        <a href="#contact" class="btn btn-warning">Contact Now</a>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


@endsection
