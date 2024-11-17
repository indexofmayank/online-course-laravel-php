@extends('app')

@section('content')
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
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
<!-- resources/views/horizontal_list_with_badges.blade.php -->
<div class="container py-5">

    <!-- Horizontal List with Badges -->
    <ul class="list-group list-group-horizontal text-center">
        @foreach($categories as $category)
        <li class="list-group-item">
            {{$category->name}}
            <span class="badge bg-primary ms-2">New</span>
        </li>
        @endforeach
    </ul>
</div>
<div class="container my-3">
    <h1 class="text-center mb-4">Featured Courses</h1>
    <div class="row">
        @foreach($courses as $course)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ $course->image }}" class="card-img-top" alt="{{ $course->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $course->title }}</h5>
                    <p class="card-text">{{ $course->description }}</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $course->title }}</li>
                        <li class="list-group-item"><b><i>Price:</i></b> ₹{{ $course->price }}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>

<div class="d-flex justify-content-between ">
        @if($courses->onFirstPage())
            <button class="btn btn-secondary" disabled>Previous</button>
        @else
            <a href="{{ $courses->previousPageUrl() }}" class="btn btn-primary">Previous</a>
        @endif

        @if($courses->hasMorePages())
            <a href="{{ $courses->nextPageUrl() }}" class="btn btn-primary">Next</a>
        @else
            <button class="btn btn-secondary" disabled>Next</button>
        @endif
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">About Us</h2>
        <p class="text-muted">
            Welcome to our platform! We aim to empower individuals by providing top-notch learning opportunities across various fields.
        </p>
    </div>

    <div class="row text-center">
        <!-- Mission Card -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-lightbulb-fill text-primary fs-1 mb-3"></i>
                    <h5 class="card-title">Our Mission</h5>
                    <p class="card-text">
                        To make quality education accessible to everyone, anywhere.
                    </p>
                </div>
            </div>
        </div>

        <!-- Vision Card -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-eye-fill text-success fs-1 mb-3"></i>
                    <h5 class="card-title">Our Vision</h5>
                    <p class="card-text">
                        A world where knowledge has no boundaries, empowering every individual.
                    </p>
                </div>
            </div>
        </div>

        <!-- Values Card -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <i class="bi bi-heart-fill text-danger fs-1 mb-3"></i>
                    <h5 class="card-title">Our Values</h5>
                    <p class="card-text">
                        We value integrity, inclusivity, and innovation in everything we do.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team or Journey Section -->
    <div class="row align-items-center mt-5">
        <div class="col-md-6">
            <h3 class="fw-bold">Our Journey</h3>
            <p class="text-muted">
                From humble beginnings, we’ve grown into a global community committed to learning and growth. Together, we strive to make education more engaging, interactive, and impactful.
            </p>
        </div>
        <div class="col-md-6">
            <img src="https://via.placeholder.com/500x300" alt="Our Journey" class="img-fluid rounded shadow-sm">
        </div>
    </div>
</div>
@endsection

