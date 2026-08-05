@extends('layouts.user')

@section('title', '404 - Page Not Found | Poovar Boating Club')

@section('header')
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block " style="background:white; box-shadow:0 4px 12px rgba(0,0,0,.5);" data-navbar-on-scroll="data-navbar-on-scroll">

    <div class="container"><a class="navbar-brand" href="{{ route('user.index') }}"><img src="{{ asset('assets/img/logo-Fenlake-default.png') }}" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"> </span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                <li class="nav-item px-3 px-xl-3"><a class="nav-link fw-medium" aria-current="page"
                        href="{{route('user.index')}}#service" style="color: black;">Services</a></li>
                <li class="nav-item px-3 px-xl-3"><a class="nav-link fw-medium" aria-current="page"
                        href="{{route('user.index')}}#packages" style="color: black;">Packages</a></li>
                <li class="nav-item px-3 px-xl-3"><a class="nav-link fw-medium" aria-current="page"
                        href="{{route('user.index')}}#gallery" style="color: black;">Gallery</a></li>
                <li class="nav-item px-3 px-xl-3"><a class="nav-link fw-medium" aria-current="page"
                        href="{{route('user.index')}}#testimonial" style="color: black;">Testimonial</a></li>

            </ul>
            <a class="nav-link fw-medium tele fn-call-btn ms-lg-3"
                href="tel:+919778500322">
                <img src="assets/img/phone-call.png" width="20" class="me-2" alt="">
                Call Us: 97785 00322
            </a>
        </div>
    </div>
</nav>
@endsection

@section('content')

<section class="py-5 d-flex align-items-center" style="min-height:80vh; margin-top:120px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">

                <h1 class="display-1 fw-bold text-warning">404</h1>

                <h2 class="fw-bold mb-3">
                    Oops! Page Not Found
                </h2>

                <p class="text-muted mb-4">
                    The page you are looking for may have been removed, renamed,
                    or is temporarily unavailable.
                </p>

                <a href="{{ route('user.index') }}" class="btn btn-primary btn-lg fn-btn-cta blue">
                    Back to Home
                </a>

            </div>
        </div>
    </div>
</section>

@endsection