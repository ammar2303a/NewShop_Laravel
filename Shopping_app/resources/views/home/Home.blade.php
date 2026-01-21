@extends('layouts.homeLayout')

@section('homeContent')
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="{{asset('home/assets/img/hero-carousel/hero-carousel-1.jpg')}}" alt="">
          <div class="carousel-container">
            <h2>Welcome to Sailor<br></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#featured-services" class="btn-get-started">Get Started</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{asset('home/assets/img/hero-carousel/hero-carousel-2.jpg')}}" alt="">
          <div class="carousel-container">
            <h2>At vero eos et accusamus</h2>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
            <a href="#featured-services" class="btn-get-started">Get Started</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{asset('home/assets/img/hero-carousel/hero-carousel-3.jpg')}}" alt="">
          <div class="carousel-container">
            <h2>Temporibus autem quibusdam</h2>
            <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
            <a href="#featured-services" class="btn-get-started">Get Started</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <div class="row gy-4 isotope-container mt-3" data-aos="fade-up" data-aos-delay="200">

@foreach($products as $product)
  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">

    <!-- IMAGE BOX -->
    <div class="product-img-box">
        <img src="{{ asset('uploads/products/'.$product->image) }}"
             alt="{{ $product->name }}">
    </div>

    <!-- PRODUCT INFO -->
    <div class="portfolio-info">
      <h4>{{ $product->name }}</h4>

      <p class="small text-muted">
        {{ Str::limit($product->description, 60) }}
      </p>

      <p class="fw-bold mb-2">Rs {{ number_format($product->price) }}</p>

      <a href="{{ asset('uploads/products/'.$product->image) }}"
         data-gallery="portfolio-gallery-product"
         class="glightbox preview-link"
         title="{{ $product->name }}">
         <i class="bi bi-zoom-in"></i>
      </a>

      <a href="#"
         title="More Details"
         class="details-link">
         <i class="bi bi-link-45deg"></i>
      </a>
    </div>

  </div>
@endforeach

</div>


</mail>
<style>
/* IMAGE WRAPPER */
.product-img-box {
    width: 100%;
    height: 400px;          /* sab images same height */
    overflow: hidden;       /* extra part hide */
    border-radius: 10px;
}

/* IMAGE ITSELF */
.product-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;      /* crop karega, distort nahi */
    display: block;
}


</style>
@endsection