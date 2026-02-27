@extends('layouts.user')

@section('title', 'Thank You | Poovar Boating Club')

@section('content')

<section class="bg-intro d-flex align-items-center justify-content-center"
         style="min-height:100vh; padding-top:0;">

    <div class="gradient"></div>

    <div class="container text-center" style="margin-top: 100px;">

        {{-- Success Icon --}}
        <div class="mb-4">
            <div style="width:80px;height:80px;background:#28a745;border-radius:50%;
                        display:flex;align-items:center;justify-content:center;margin:auto;">
                <i class="fas fa-check text-white" style="font-size:32px;"></i>
            </div>
        </div>

        {{-- Smaller Heading --}}
        <h1 class="text-white fw-bold" style="font-size:48px;">
            Thank You for Your Booking!
        </h1>

        {{-- Sub Text --}}
        <p class="text-white mt-3 mb-4" style="font-size:18px;">
            Your request has been successfully submitted.<br>
            Our team will contact you shortly.
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