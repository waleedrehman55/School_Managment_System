@extends('layout.layout') 

@section('title', 'Home Page')

@section('content') 
  {{-- First Open Modal Window --}}
<div class="modal fade" id="attentionModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content position-relative p-0 border-0 rounded-3 overflow-hidden">
      <button type="button" class="btn-close position-absolute end-0 m-2 z-3" data-bs-dismiss="modal" aria-label="Close"></button>

      <img src="{{ asset('assets/images/alert_post.jpg') }}" alt="Admissions Banner" class="img-fluid w-100 d-block">
      
    </div>
  </div>
</div>
  {{-- First Open Modal Window --}}
<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
  <div class="swiper-wrapper">

    <!-- Slide 1 -->
    <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/hero-img.jpg') }}'); background-size: cover; background-position: center;">
      <div class="overlay-content">
        <h1 class="carousel_title" data-swiper-parallax="-300">Welcome to Star School</h1>
        <h1 class="carousel_title2">The Best Platform for Kids</h1>
        <button class="learn-btn" role="button"><span>Apply Now</span></button>
      </div>
    </div>

    <!-- Slide 2 -->
   <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/hero-img.jpg') }}'); background-size: cover; background-position: center;">
      <div class="overlay-content">
        <h1 class="carousel_title" data-swiper-parallax="-300">Welcome to Star School</h1>
        <h1 class="carousel_title2">The Best Platform for Kids</h1>
        <button class="learn-btn" role="button"><span>Apply Now</span></button>
      </div>
    </div>

    <!-- Slide 3 -->
   <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/hero-img.jpg') }}'); background-size: cover; background-position: center;">
      <div class="overlay-content">
        <h1 class="carousel_title" data-swiper-parallax="-300">Welcome to Star School</h1>
        <h1 class="carousel_title2">The Best Platform for Kids</h1>
        <button class="learn-btn" role="button"><span>Learn More</span></button>
      </div>
    </div>
    </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
      {{-- Notice Section --}}
    <div class="myMarquee">
      <div class="scroller">
        <div>📢 Admissions are open for session 2025! <a href="/admissions">Apply Now</a></div>
        <div>📢 PTM will be held on 10th August. <a href="/calendar">Check Details</a></div>
      </div>
    </div>
    {{-- Notice Section --}}
  <!-- About Section -->
<section class="about_container">
  <div class="container-fluid">
    <div class="row d-flex align-items-center flex-wrap">

      <!-- Left Side Image -->
      <div class="col-md-5 about-left p-4">
        <div class="img_container">
          <img src="{{ asset('assets/images/hero-img.jpg') }}" alt="Hero Image" class="img-fluid">
        </div>
      </div>

      <!-- Right Side Content -->
      <div class="col-md-7 about-right p-4">
        <h1 class="about-heading mb-3">About Us</h1>
        <p class="about-text">
          We Learn Smart Way To Build Bright Futute For Your Children
        </p>
        <span class="about-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolores, sint sed ducimus ipsam corporis minima eaque tempora ad soluta, corrupti eum saepe doloribus facere rerum. Voluptatum fugiat architecto sequi.lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolores, sint sed ducimus ipsam corporis minima eaque tempora ad soluta, corrupti eum saepe doloribus facere rerum. Voluptatum fugiat architecto sequi.lorem</span>
        <div>
              <button class="learn-btn mt-4" role="button"><span>Read More ..</span></button>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- About Sec End --}}
{{-- Our Highlight Section --}}
<section class="why-choose-us py-5 bg-light">
  <div class="container text-center w-75">
    <h1 class="section-title1">Why Choose Us</h1>
    <h2 class="section-title">Thanks To Get Started With Our School</h2>
    <div class="row g-4 justify-content-center mt-5">

      <div class="col-md-4 col-sm-6">
        <div class="card h-100 shadow-sm custom-card">
          <div class="card-body">
            <div class="img-container mb-3">
              <img src="{{ asset('assets/images/card_img.jpg') }}" alt="Faculty" />
            </div>
            <h5 class="card-title">Qualified Faculty</h5>
            <p class="card-text">Our team includes trained and experienced educators.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card h-100 shadow-sm custom-card">
          <div class="card-body">
            <div class="img-container mb-3">
              <img src="{{ asset('assets/images/card_img.jpg') }}" alt="Modern Labs" />
            </div>
            <h5 class="card-title">Modern Labs</h5>
            <p class="card-text">Equipped with advanced technology and safety.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card h-100 shadow-sm custom-card">
          <div class="card-body">
            <div class="img-container mb-3">
              <img src="{{ asset('assets/images/card_img.jpg') }}" alt="Safe Campus" />
            </div>
            <h5 class="card-title">Safe Campus</h5>
            <p class="card-text">24/7 security and child-safe infrastructure.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card h-100 shadow-sm custom-card">
          <div class="card-body">
            <div class="img-container mb-3">
              <img src="{{ asset('assets/images/card_img.jpg') }}" alt="Award" />
            </div>
            <h5 class="card-title">Award-Winning Education</h5>
            <p class="card-text">Recognized for academic and co-curricular excellence.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Our Highlight Section --}}
{{-- Our Campuses --}}
<section class="py-4 bg-light">
  <div class="campuses_head text-center w-75 col-md-6 mb-5">
    <div>
      <h2 class="section-title1">Our Campuses</h2>
      <h2 class="section-title">Thanks To Get Started With Our School</h2>
    </div>
  </div>
  <div class="container ">
    <div class="row justify-content-center">

      <div class="col-md-4 col-sm-6">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/images/card_img.jpg') }}" class="card-img-top" alt="Main Campus">
          <div class="card-body">
            <h5 class="card-title">Main Campus</h5>
            <p class="card-text text-muted">📍 Lahore, Pakistan</p>
            <p class="card-text">Our main campus offers modern labs, experienced faculty, and a vibrant environment.</p>
            <button class="learn-btn" role="button"><span>Learn More</span></button>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/images/card_img.jpg') }}" class="card-img-top" alt="Main Campus">
          <div class="card-body">
            <h5 class="card-title">Second Campus</h5>
            <p class="card-text text-muted">📍 Karachi, Pakistan</p>
            <p class="card-text">Our main campus offers modern labs, experienced faculty, and a vibrant environment.</p>
            <button class="learn-btn" role="button"><span>Learn More</span></button>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/images/card_img.jpg') }}" class="card-img-top" alt="Main Campus">
          <div class="card-body">
            <h5 class="card-title">Third Campus</h5>
            <p class="card-text text-muted">📍 Islamabad, Pakistan</p>
            <p class="card-text">Our main campus offers modern labs, experienced faculty, and a vibrant environment.</p>
            <button class="learn-btn" role="button"><span>Learn More</span></button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
{{-- Our Campuses --}}
{{-- Faculty Section --}}
<section class="about_container py-5">
  <div class="campuses_head text-center w-75 col-md-6 mb-5">
    <div>
      <h2 class="section-title1">Our Expert Teachers</h2>
      <h2 class="section-title">Meet With Our Expert Teacher</h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
   {{-- card_1 --}}
    <div class="col-md-3 col-sm-6">
    <div class="card text-center team-card shadow">
    <div class="card-img-top d-flex justify-content-center">
      <img src="{{ asset('assets/images/team.jpg') }}" class="team-img" alt="Teacher Name">
    </div>
    <div class="card-body mt-3">
      <h5 class="card-title">Ms. Linda</h5>
      <p class="card-text text-center text-muted">English Teacher</p>
    <!-- Social Icons -->
      <div class="social-icons d-flex justify-content-center gap-2 mt-3">
        <a href="#" class="icon-circle bg-primary">
          <iconify-icon icon="ri:facebook-fill" style="color: white;"></iconify-icon>
        </a>
        <a href="#" class="icon-circle bg-info">
          <iconify-icon icon="ri:twitter-fill" style="color: white;"></iconify-icon>
        </a>
        <a href="#" class="icon-circle bg-danger">
          <iconify-icon icon="ri:instagram-fill" style="color: white;"></iconify-icon>
        </a>
      </div>
    </div>
    </div>
  </div>
  {{-- Card_2 --}}
   <div class="col-md-3 col-sm-6">
    <div class="card text-center team-card shadow">
    <div class="card-img-top d-flex justify-content-center">
      <img src="{{ asset('assets/images/team.jpg') }}" class="team-img" alt="Teacher Name">
    </div>
    <div class="card-body mt-3">
      <h5 class="card-title">Ms. Linda</h5>
      <p class="card-text text-center text-muted">English Teacher</p>
    <!-- Social Icons -->
      <div class="social-icons d-flex justify-content-center gap-2 mt-3">
        <a href="#" class="icon-circle bg-primary">
          <iconify-icon icon="ri:facebook-fill" style="color: white;"></iconify-icon>
        </a>
        <a href="#" class="icon-circle bg-info">
          <iconify-icon icon="ri:twitter-fill" style="color: white;"></iconify-icon>
        </a>
        <a href="#" class="icon-circle bg-danger">
          <iconify-icon icon="ri:instagram-fill" style="color: white;"></iconify-icon>
        </a>
      </div>
    </div>
    </div>
  </div>
  {{-- Card_3 --}}
   <div class="col-md-3 col-sm-6">
    <div class="card text-center team-card shadow">
    <div class="card-img-top d-flex justify-content-center">
      <img src="{{ asset('assets/images/team.jpg') }}" class="team-img" alt="Teacher Name">
    </div>
    <div class="card-body mt-3">
      <h5 class="card-title">Ms. Linda</h5>
      <p class="card-text text-center text-muted">English Teacher</p>
    <!-- Social Icons -->
      <div class="social-icons d-flex justify-content-center gap-2 mt-3">
        <a href="#" class="icon-circle bg-primary">
          <iconify-icon icon="ri:facebook-fill" style="color: white;"></iconify-icon>
        </a>
        <a href="#" class="icon-circle bg-info">
          <iconify-icon icon="ri:twitter-fill" style="color: white;"></iconify-icon>
        </a>
        <a href="#" class="icon-circle bg-danger">
          <iconify-icon icon="ri:instagram-fill" style="color: white;"></iconify-icon>
        </a>
      </div>
    </div>
    </div>
  </div>
  {{-- Card_4 --}}
   <div class="col-md-3 col-sm-6">
    <div class="card text-center team-card shadow">
    <div class="card-img-top d-flex justify-content-center">
      <img src="{{ asset('assets/images/team.jpg') }}" class="team-img" alt="Teacher Name">
    </div>
    <div class="card-body mt-3">
      <h5 class="card-title">Ms. Linda</h5>
      <p class="card-text text-center text-muted">English Teacher</p>
    <!-- Social Icons -->
      <div class="social-icons d-flex justify-content-center gap-2 mt-3">
        <a href="#" class="icon-circle bg-primary">
          <iconify-icon icon="ri:facebook-fill" style="color: white;"></iconify-icon>
        </a>
        <a href="#" class="icon-circle bg-info">
          <iconify-icon icon="ri:twitter-fill" style="color: white;"></iconify-icon>
        </a>
        <a href="#" class="icon-circle bg-danger">
          <iconify-icon icon="ri:instagram-fill" style="color: white;"></iconify-icon>
        </a>
      </div>
    </div>
    </div>
  </div>

  </div>
    </div>
  </div>
</section>
{{-- Faculty Section --}}
@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Modal Open
    var attentionModal = new bootstrap.Modal(document.getElementById('attentionModal'));
    attentionModal.show();

    // Swiper Slider Initialization
    var swiper = new Swiper(".mySwiper", {
      speed: 600,
      parallax: true,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });
</script>
@endpush
@endsection
