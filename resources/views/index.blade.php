@extends('layout.layout') 

@section('title', 'Home Page')

@section('content') 
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

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
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
