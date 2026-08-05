@extends('layouts.user')

@section('title', 'Refund and Cancellation policy | Poovar Boating Club')

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

<section class="py-5" style="margin-top:120px;">
    <div class="container">

        <div class="row ">
            <div class="col-12 " style="line-height:2.0;">
                <h2>Refund and Cancellation policy</h2>
                <p>This Refund and Cancellation Policy outlines how you can cancel or seek a refund for a boat booking made through the Platform. Under this policy:</p>
                <ol>
                    <li>
                        Cancellation requests will be considered only if the request is made at least 24 hours before the scheduled boating time. Cancellation requests made after this period may not be eligible for a refund.
                    </li>
                    <li>If the boating service is cancelled by Poovar Boating Club due to bad weather, safety concerns, operational issues, or any unavoidable circumstances, customers may choose to reschedule the booking or receive a refund.</li>
                    <li>No refund will be provided for late arrival, no-show, or failure to report at the boarding point at the scheduled time In case a customer has made a duplicate payment or an excess payment for a booking, the eligible refund amount will be processed after verification by Poovar Boating Club.</li>
                    <li>For any complaints regarding the boating service, customers may contact our customer support within 24 hours of availing the service. We will review the complaint and take an appropriate decision.</li>
                    <li>Any refund approved by Poovar Boating Club will normally be processed within 1–7 business days to the original mode of payment.</li>
                </ol>
            </div>
        </div>




    </div>
</section>









@endsection