@extends('layouts.user')

@section('title', 'Payment Failed | Poovar Boating Club')

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
                            href="{{route('user.index')}}#service" style="color: black;">Services</a></li>
                    <li class="nav-item px-3 px-xl-3"><a class="nav-link fw-medium" aria-current="page"
                            href="{{route('user.index')}}#packages" style="color: black;">Packages</a></li>
                    <li class="nav-item px-3 px-xl-3"><a class="nav-link fw-medium" aria-current="page"
                            href="{{route('user.index')}}#gallery" style="color: black;">Gallery</a></li>
                    <li class="nav-item px-3 px-xl-3"><a class="nav-link fw-medium" aria-current="page"
                            href="{{route('user.index')}}#testimonial" style="color: black;">Testimonial</a></li>
                    <li class="nav-item px-3 px-xl-3"><a class="nav-link fw-medium tele fn-call-btn" aria-current="page"
                            href="tel:+919778500322"><img src="{{ asset('assets/img/phone-call.png') }}" style="margin-right: 14px" width="20"
                                alt="" />Call Us: 97785 00322</a></li>
                </ul>
            </div>
    </div>
</nav>
@endsection


@section('content')

<section class="bg-intro d-flex align-items-center justify-content-center"
    style="min-height:100vh; padding-top:0;">

    <div class="gradient"></div>

    <div class="container text-center" style="margin-top:100px;">

        {{-- Failed Icon --}}
        <div class="mb-4">
            <div style="width:80px;height:80px;background:#dc3545;border-radius:50%;
                        display:flex;align-items:center;justify-content:center;margin:auto;">
                <i class="fas fa-times text-white" style="font-size:32px;"></i>
            </div>
        </div>

        {{-- Heading --}}
        <h1 class="text-white fw-bold" style="font-size:48px;">
            Sorry! Payment Failed
        </h1>

        {{-- Message --}}
        <p class="text-white mt-3 mb-4" style="font-size:18px;">
            Your payment could not be completed.<br>
            Please try again or contact our support team.
        </p>

        {{-- Buttons --}}
        <div>

            <a href="{{ route('user.index') }}"
                class="btn btn-primary btn-lg me-3 border-0 fn-btn primary-blue">
                Back to Home
            </a>

            <a href="tel:+919778500322"
                class="btn btn-primary btn-lg border-0 fn-btn primary-green">
                Call Now
            </a>

        </div>

    </div>

</section>

@endsection