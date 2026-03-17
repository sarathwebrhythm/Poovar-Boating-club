@extends('layouts.user')

@section('title', 'Poovar Boating Packages Upto 70% Offer  Resort Rooms  Book Now')

@section('header')
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block"
  data-navbar-on-scroll="data-navbar-on-scroll">
  <div class="container"><a class="navbar-brand"><a class="navbar-brand" href="{{ route('user.index') }}"><img src="assets/img/logo-Fenlake-default.png" alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"> </span></button>
      <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
          <li class="nav-item px-3 px-xl-3"><a class="nav-link fw-medium" aria-current="page"
              href="#service">Services</a></li>
          <li class="nav-item px-3 px-xl-3"><a class="nav-link fw-medium" aria-current="page"
              href="#packages">Packages</a></li>
          <li class="nav-item px-3 px-xl-3"><a class="nav-link fw-medium" aria-current="page"
              href="#gallery">Gallery</a></li>
          <li class="nav-item px-3 px-xl-3"><a class="nav-link fw-medium" aria-current="page"
              href="#testimonial">Testimonial</a></li>
          <li class="nav-item px-3 px-xl-3"><a class="nav-link fw-medium tele fn-call-btn" aria-current="page"
              href="tel:+919778500322"><img src="assets/img/phone-call.png" style="margin-right: 14px" width="20"
                alt="" />Call Us: 97785 00322</a></li>
        </ul>
      </div>
  </div>
</nav>
@endsection
@section('content')
<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->

<section class="bg-intro" style="padding-top: 7rem;">
  <div class="gradient"></div>

  <div class="container contentWrapper">
    <div class="row align-items-center">
      <div class="col-md-7 col-lg-10 text-md-start text-center pt-60">
        <h1 class="hero-title">Door to the magic of Poovar</h1>
        <p class="mb-4 mt-4 fw-medium">Visit today and get a 50 % - 70 % Discount Offers</p>
        <div class="text-center text-md-start">
          <!-- <a
              class="btn btn-primary btn-lg me-md-1 mb-3 mb-md-0 border-0 fn-btn primary-blue" data-bs-toggle="modal"
              data-bs-target="#booknow">Book Now</a> -->
          <a
            class="btn btn-primary btn-lg me-md-1 mb-3 mb-md-0 border-0 fn-btn primary-blue" href="#packages">Book Now</a>
          <a
            class="btn btn-primary btn-lg  mb-3 mb-md-0 border-0 fn-btn primary-green" href="tel:+919778500322">Call Now</a>
          <div class="w-100 d-block d-md-none"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pt-5 pt-md-9 mob-0" id="service">

  <div class="container">
    <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img src="{{ asset('assets/img/shape.svg') }}"
        style="max-width: 200px" alt="service" /></div>
    <div class="mb-7 text-center">
      <h5 class="text-secondary">SERVICES </h5>
      <h3 class="font-cursive text-capitalize">What we Offer</h3>
    </div>



    <div class="row">
      <div class="col-lg-4 col-sm-6 mb-6">
        <div class="card service-card shadow-hover rounded-3 text-left align-items-center">
          <div class="card-body p-xxl-5 p-4 mob-pt-0"> <img class="w-100" src="{{ asset('assets/img/ser-1.jpeg') }}" />
            <h4 class="mb-3 mt-4">BOATING</h4>
            <p class="mb-0">We Offers Different Variety of Boating services and packages like Island watching,
              Sunrise, Sunset Watching, Birds watching...</p>
            <a class="btn btn-primary btn-lg mt-4 me-md-4 mb-3 mb-md-0" href="https://wa.me/+919778500322"
              target="_blank" role="button"><i class="fab fa-whatsapp me-2 fn-icon-cta"></i> Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-6">
        <div class="card service-card shadow-hover rounded-3 text-left align-items-center">
          <div class="card-body p-xxl-5 p-4"> <img class="w-100" src="{{ asset('assets/img/ser-2.jpeg') }}" />
            <h4 class="mb-3 mt-4">ROOMS</h4>
            <p class="mb-0">We Arrange all types rooms for our clients like Pool villa, Garden view villa, maharaja
              suite, luxury villas, Floating rooms...</p>
            <a class="btn btn-primary btn-lg mt-4 me-md-4 mb-3 mb-md-0" href="https://wa.me/+919778500322"
              target="_blank" role="button"><i class="fab fa-whatsapp me-2 fn-icon-cta"></i> Book Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 mb-6">
        <div class="card service-card shadow-hover rounded-3 text-left align-items-center">
          <div class="card-body p-xxl-5 p-4"> <img class="w-100" src="{{ asset('assets/img/ser-3.jpeg') }}" />
            <h4 class="mb-3 mt-4">SEAFOOD RESTAURANTS</h4>
            <p class="mb-0">We offers Poovar’s most attractive seafood for your lunch/dinner cruise in floating
              restaurant with boating pickup/ drop facilities...</p>
            <a class="btn btn-primary btn-lg mt-4 me-md-4 mb-3 mb-md-0 fn-btn-cta" href="https://wa.me/+919778500322"
              target="_blank" role="button"><i class="fab fa-whatsapp me-2 fn-icon-cta"></i> Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div><!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->



<!-- <section> close ============================-->
<!-- ============================================-->


<section class="pt-5 package mob-0" id="packages">

  <div class="container">

    <div class="mb-7 text-center">
      <h5 class="text-secondary">Poovar Boating Club Offers</h5>
      <h3 class="font-cursive text-capitalize">Boating Packages</h3>
    </div>

    <div class="row">

      @foreach($packages as $package)
      <div class="col-md-4 mb-5">
        <div class="card overflow-hidden shadow h-100">

          {{-- Package Image --}}
          <img class="card-img-top"
            src="{{ asset('storage/' . $package->image) }}"
            alt="{{ $package->image_alt ?? $package->name }}">

          <div class="card-body py-4 px-4 d-flex flex-column">

            {{-- Package Name --}}
            <h4>
              {{ $package->name }}
            </h4>

            {{-- Short Description --}}
            <p class="flex-grow-1">
              {{ ($package->short_description) }}
            </p>

            {{-- Book Button --}}
            <div  style="text-align: center;" class="mt-3" >
              <a href="{{ route('user.package.detail', $package->slug) }}" 
                class="btn btn-primary btn-lg fn-btn-cta blue" >
                Book A Ride 
              </a>
            </div>

          </div>
        </div>
      </div>
      @endforeach

    </div>

  </div>

</section>

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="mob-0" id="gallery">

  <div class="container">
    <div class="row align-items-center">
      <div class="mb-7 text-center">
        <h5 class="text-secondary">Explore The Beauty of Poovar
        </h5>
        <h3 class="font-cursive text-capitalize">Gallery</h3>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card overflow-hidden shadow">
          <a data-bs-toggle="modal" data-bs-target="#gallery-1">
            <img src="{{ asset('assets/img/gal-1.jpeg') }}" class="w-100" />
          </a>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card overflow-hidden shadow">
          <a data-bs-toggle="modal" data-bs-target="#gallery-2">
            <img src="{{ asset('assets/img/gal-2.jpeg') }}" class="w-100" />
          </a>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card overflow-hidden shadow">
          <a data-bs-toggle="modal" data-bs-target="#gallery-3">
            <img src="{{ asset('assets/img/gal-3.jpeg') }}" class="w-100" />
          </a>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card overflow-hidden shadow">
          <a data-bs-toggle="modal" data-bs-target="#gallery-4">
            <img src="{{ asset('assets/img/gal-4.jpeg') }}" class="w-100" />
          </a>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card overflow-hidden shadow">
          <a data-bs-toggle="modal" data-bs-target="#gallery-5">
            <img src="{{ asset('assets/img/gal-5.jpeg') }}" class="w-100" />
          </a>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card overflow-hidden shadow">
          <a data-bs-toggle="modal" data-bs-target="#gallery-6">
            <img src="{{ asset('assets/img/gal-6.jpeg') }}" class="w-100" />
          </a>
        </div>
      </div>
    </div>

    <div class="collapse" id="collapseExample">
      <div class="row align-items-center">
        <div class="col-md-4 mb-4">
          <div class="card overflow-hidden shadow">
            <a data-bs-toggle="modal" data-bs-target="#gallery-7">
              <img src="{{ asset('assets/img/gal-7.jpeg') }}" class="w-100" />
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card overflow-hidden shadow">
            <a data-bs-toggle="modal" data-bs-target="#gallery-8">
              <img src="{{ asset('assets/img/gal-8.jpeg') }}" class="w-100" />
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card overflow-hidden shadow">
            <a data-bs-toggle="modal" data-bs-target="#gallery-9">
              <img src="{{ asset('assets/img/gal-9.jpeg') }}" class="w-100" />
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card overflow-hidden shadow">
            <a data-bs-toggle="modal" data-bs-target="#gallery-10">
              <img src="{{ asset('assets/img/gal-10.jpeg') }}" class="w-100" />
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card overflow-hidden shadow">
            <a data-bs-toggle="modal" data-bs-target="#gallery-11">
              <img src="{{ asset('assets/img/gal-11.jpeg') }}" class="w-100" />
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card overflow-hidden shadow">
            <a data-bs-toggle="modal" data-bs-target="#gallery-12">
              <img src="{{ asset('assets/img/gal-12.jpeg') }}" class="w-100" />
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow fn-btn-cta blue" onclick="myFunction()"
        id="cusButton" value="View More" data-bs-toggle="collapse" href="#collapseExample" role="button"
        aria-expanded="false" aria-controls="collapseExample">View More</a>
    </div>
  </div><!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->

<!-- ============================================-->
<!-- <section> begin ============================-->
<section id="testimonial" class="mob-0">

  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="mb-8 text-start">
          <h5 class="text-secondary">Testimonials </h5>
          <h3 class="font-cursive text-capitalize">What people say about Us.</h3>
        </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-6">
        <div class="pe-7 ps-5 ps-lg-0">
          <div class="carousel slide carousel-fade position-static" id="testimonialIndicator" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button class="active" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="0"
                aria-current="true" aria-label="Testimonial 0"></button>
              <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="1"
                aria-current="true" aria-label="Testimonial 1"></button>
              <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="2"
                aria-current="true" aria-label="Testimonial 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item position-relative active">
                <div class="card shadow" style="border-radius:10px;">
                  <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover"
                      src="{{ asset('assets/img/author.png') }}" height="65" width="65" alt="" /></div>
                  <div class="card-body p-4">
                    <p class="fw-medium mb-4">&quot;Very fantastic and must do activity We have taken service through
                      club Mahindra and it is very enjoyful.&quot;</p>
                    <h5 class="text-secondary">Sam</h5>
                    <p class="fw-medium fs--1 mb-0">Customer</p>
                  </div>
                </div>
                <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                  style="border-radius:10px;transform:translate(25px, 25px)"> </div>
              </div>
              <div class="carousel-item position-relative ">
                <div class="card shadow" style="border-radius:10px;">
                  <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover"
                      src="{{ asset('assets/img/author.png') }}" height="65" width="65" alt="" /></div>
                  <div class="card-body p-4">
                    <p class="fw-medium mb-4">&quot;Had a great time there as a part of friends get together. Boat was
                      such a new experience staffs are good and communicated well.&quot;</p>
                    <h5 class="text-secondary">Jackson Michael</h5>
                    <p class="fw-medium fs--1 mb-0">Customer</p>
                  </div>
                </div>
                <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                  style="border-radius:10px;transform:translate(25px, 25px)"> </div>
              </div>
              <div class="carousel-item position-relative ">
                <div class="card shadow" style="border-radius:10px;">
                  <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover"
                      src="{{ asset('assets/img/author.png') }}" height="65" width="65" alt="" /></div>
                  <div class="card-body p-4">
                    <p class="fw-medium mb-4">&quot;On Sunday I went to Poovar. Attracted by scenes Jumped into an out
                      board boat. Traveled for about one hour.&quot;</p>
                    <h5 class="text-secondary">Pradeep Kumar</h5>
                    <p class="fw-medium fs--1 mb-0">Customer</p>
                  </div>
                </div>
                <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                  style="border-radius:10px;transform:translate(25px, 25px)"> </div>
              </div>
            </div>
            <div
              class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0"
              style="height:60px;width:20px;">
              <button class="carousel-control-prev position-static" type="button"
                data-bs-target="#testimonialIndicator" data-bs-slide="prev"><img src="{{ asset('assets/img/up.svg') }}"
                  width="16" alt="icon" /></button>
              <button class="carousel-control-next position-static" type="button"
                data-bs-target="#testimonialIndicator" data-bs-slide="next"><img src="{{ asset('assets/img/down.svg') }}"
                  width="16" alt="icon" /></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pt-6 mob-0">

  <div class="container">
    <div class="py-8 px-5 position-relative text-center mt-5"
      style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
      <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img
          src="{{ asset('assets/img/send.png') }}" style="max-width:70px;" alt="send icon" /></div>
      <div class="position-absolute end-0 top-0 z-index--1"> <img src="{{ asset('assets/img/shape-bg2.png') }}" width="264"
          alt="cta shape" /></div>
      <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img
          src="{{ asset('assets/img/shape-bg1.png') }}" style="max-width: 340px;" alt="cta shape" /></div>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <h2 class="text-secondary lh-1-7 mb-3">Opening Timings</h2>
          <h3 class="mb-4 font-35 mob-font-18">Mon - Sun : 6.00 AM To 06.45 PM</h3>

          <!-- <a href="#!" role="button" data-bs-toggle="modal" data-bs-target="#popupVideo"><span
                class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow"> <img
                  src="assets/img/hero/play.svg" width="15" alt="play" /></span></a><span class="fw-medium">Explore
              Now</span> -->
          <div>
            <iframe width="100%" height="450" src="https://www.youtube.com/embed/PwgV3bhLt24?si=aeLq4Uv6r7moesFt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <iframe class="rounded" style="width:100%;max-height:500px;" height="500px"
                  src="https://www.youtube.com/embed/PwgV3bhLt24?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=http://youtubeembedcode.com"
                  title="YouTube video player"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen="allowfullscreen"></iframe>
              </div>
            </div>
          </div>

          <div class="mt-5"><a class="link-900 text-decoration-none call-btn" href="tel:+919778500322"><img
                src="{{ asset('assets/img/phone-call-w.png') }}" style="margin-right: 14px" width="20" alt="navigation" /><span
                class="fw-medium">Call Us: 97785 00322</span></a></div>

        </div>
      </div>
    </div>
  </div><!-- end of .container-->

  <div class="container">
    <div class="py-8 px-5 position-relative text-center mt-5"
      style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
      <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img
          src="{{ asset('assets/img/send.png') }}" style="max-width:70px;" alt="send icon" /></div>
      <div class="position-absolute end-0 top-0 z-index--1"> <img src="{{ asset('assets/img/shape-bg2.png') }}" width="264"
          alt="cta shape" /></div>
      <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img
          src="{{ asset('assets/img/shape-bg1.png') }}" style="max-width: 340px;" alt="cta shape" /></div>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <h2 class="text-secondary lh-1-7 mb-3">Best Boating in Poovar</h2>

          <p style="text-align:justify">Experience one of Thiruvananthapuram's top attractions with our Poovar boating service! Poovar,
            renowned for its breathtaking backwaters, offers a scenic and serene escape in Kerala. Our reliable
            and enjoyable boating tours let you immerse yourself in the natural splendor of Poovar, exploring
            stunning sights like Mangroves Island, the golden sand beach, and Elephant Rock.

            Enjoy bird watching, visit the unique Estuary Point where the river meets the sea, and dine at the
            floating restaurant. Don't miss out on the chance to see the Mother Mary statue, stroll around
            Coconut Island, and glide through the enchanting AVM canal. For a truly unique stay, consider the
            floating cottages and resorts.

            Perfect for nature lovers and those seeking a peaceful retreat, Poovar's calm waters and lush green
            surroundings offer an idyllic setting. Our boating service is the best way to take in all this
            natural beauty. For some added adventure, try camel and horse riding on the beaches.

            Located conveniently in the heart of Poovar, our service ensures you can easily access all these
            wonderful experiences. Book online or call us to embark on an unforgettable boating adventure
            through Neyyar Lake and the enchanting backwaters of Poovar, Kerala.

            Discover the magic of Poovar – your perfect getaway awaits!
          </p>

          <div class="mt-5"><a class="link-900 text-decoration-none call-btn" href="tel:+919778500322"><img
                src="assets/img/phone-call-w.png" style="margin-right: 14px" width="20" alt="navigation" /><span
                class="fw-medium">Call Us: 97785 00322</span></a></div>

        </div>
      </div>
    </div>
  </div><!-- end of .container-->

</section>

@endsection