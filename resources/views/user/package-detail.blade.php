@extends('layouts.user')

@section('title', 'Poovar Boating Packages Upto 70% Offer Resort Rooms Book Now')

@section('header')
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block " style="background:white; box-shadow:0 4px 12px rgba(0,0,0,.5);" data-navbar-on-scroll="data-navbar-on-scroll">

    <div class="container"><a class="navbar-brand"><a class="navbar-brand" href="{{ route('user.index') }}"><img src="{{ asset('assets/img/logo-Fenlake-default.png') }}" alt="logo" /></a>
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

<section class="py-5" style="margin-top:120px;">
    <div class="container">

        <div class="row align-items-strech">

            <!-- IMAGE  -->
            <div class="col-lg-5 col-md-12 mb-4 order-2 order-lg-1 d-flex">
                <img src="{{ asset('storage/'.$package->image) }}"
                    alt="{{ $package->image_alt }}"
                    class="img-fluid w-100 rounded shadow"
                    style="height:100%; object-fit:cover;">
            </div>

            <!-- FORM  -->
            <div class="col-lg-7 col-md-12 mb-4 order-1 order-lg-2 d-flex">

                <div class="card shadow p-4 sticky-top w-100"
                    style="top:120px; border:2px solid #0a7b3c;">

                    <h3 style="color: #0a7b3c;" class="mb-4">Book This Package</h3>

                    <form id="bookingForm" action="{{ route('user.booking.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="package_id" value="{{ $package->id }}">

                        <div class="row">

                            <!-- NAME -->
                            <div class="col-md-6 mb-2">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Enter your full name">
                                <small style="color:red;" class="error-message" id="nameError"></small>
                            </div>

                            <!-- PHONE -->
                            <div class="col-md-6 mb-2">
                                <label>Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    maxlength="10" placeholder="Enter phone number">
                                <small style="color:red;" class="error-message" id="phoneError"></small>
                            </div>

                            <!-- EMAIL -->
                            <div class="col-md-6 mb-2">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Enter your email">
                                <small style="color:red;" class="error-message" id="emailError"></small>
                            </div>

                            <!-- DATE -->
                            <div class="col-md-6 mb-2">
                                <label>Booking Date</label>
                                <input type="date" name="booking_date" class="form-control"
                                    min="{{ date('Y-m-d') }}">
                                <small style="color:red;" class="error-message" id="dateError"></small>
                            </div>

                        </div>

                        <div class="row">

                            <!-- DURATION -->
                            <div class="col-md-6 mb-2">

                                <label>Duration</label>

                                @if($package->pricing_type == 'flexible')

                                <select class="form-select" name="duration" id="duration">

                                    @for($i = $package->base_duration; $i <= $package->max_duration; $i += $package->increment_minutes)

                                        <option value="{{ $i }}">
                                            {{ $i }} minutes
                                        </option>

                                        @endfor

                                </select>

                                @else

                                <input type="text"
                                    class="form-control"
                                    value="{{ $package->duration }} minutes"
                                    readonly>

                                <input type="hidden" name="duration" value="{{ $package->duration }}">

                                @endif

                            </div>


                            <!-- PEOPLE -->
                            <div class="col-md-6 mb-2">

                                <label>Number Of People</label>

                                @if($package->is_custom_people || $package->pricing_type == 'flexible')

                                <input type="number"
                                    name="people"
                                    id="people"
                                    class="form-control"
                                    min="1"
                                     step="1"
                                    placeholder="Enter number of people">

                                <small style="color:red;" class="error-message" id="peopleError"></small>

                                @else

                                <input type="text"
                                    class="form-control"
                                    value="{{ $package->people_count }}"
                                    readonly>

                                <input type="hidden" name="people" value="{{ $package->people_count }}">

                                @endif

                            </div>

                        </div>


                        <!-- PRICE -->
                        <div class="mb-3">

                            <!-- <label class="mb-1">Price</label> -->

                            <div style="font-size:18px; font-weight:500;">
                                Total Amount :
                                <span id="priceText" style="font-size:26px; font-weight:700; color:#198754;">
                                    ₹{{ $package->pricing_type == 'flexible' ? $package->base_price : $package->price }}
                                </span>

                                <span style="font-size:13px; color:#6c757d;">
                                    (Including tax)
                                </span>
                            </div>

                            <!-- Hidden input for JS logic -->
                            <input type="hidden"
                                id="price"
                                data-price="{{ $package->price }}"
                                data-base-duration="{{ $package->base_duration }}"
                                data-base-price="{{ $package->base_price }}"
                                data-increment-minutes="{{ $package->increment_minutes }}"
                                data-increment-price="{{ $package->increment_price }}"
                                value="{{ $package->pricing_type == 'flexible' ? $package->base_price : $package->price }}">

                        </div>


                        <small id="boatMessage" class="text-muted"></small>


                        <!-- BUTTON -->
                        <div class="text-center mt-3">

                            <button type="button"
                                id="confirmBtn"
                                class="btn btn-primary px-5   w-100"
                                style="border-radius:1.5rem;">

                                Book Now

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>


        <!-- PACKAGE DETAILS -->
        <div class="row mt-4">

            <div class="col-12">

                <h2 class="mb-3">{{ $package->name }}</h2>

                <p class="mb-4">
                    {{ $package->short_description }}
                </p>

                <div>
                    {!! $package->details !!}
                </div>

            </div>

        </div>

    </div>
</section>


<!-- pop model for confirmation -->
<div class="modal fade" id="confirmModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" style="max-width:420px;">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Confirm Your Booking</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <p><strong>Package:</strong> {{ $package->name }}</p>
                <p><strong>Name:</strong> <span id="confirmName"></span></p>
                <p><strong>Phone:</strong> <span id="confirmPhone"></span></p>
                <p><strong>Email:</strong> <span id="confirmEmail"></span></p>
                <p><strong>People:</strong> <span id="confirmPeople"></span></p>
                <p><strong>Duration:</strong> <span id="confirmDuration"></span></p>
                <p><strong>Total Price:</strong> <span id="confirmPrice"></span></p>

            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">
                    Edit
                </button>

                <button id="payNowBtn" class="btn btn-success">
                    Pay Now
                </button>
            </div>

        </div>

    </div>
</div>

@push('scripts')
<script>
    const peopleInput = document.getElementById('people');
    const durationInput = document.getElementById('duration');
    const priceInput = document.getElementById('price');
    const boatMessage = document.getElementById('boatMessage');
    const priceText = document.getElementById('priceText');

    function calculatePrice() {

        let people = peopleInput ? parseInt(peopleInput.value) || 1 : 1;

        let boats = Math.ceil(people / 8);

        // check pricing type
        let baseDuration = parseInt(priceInput.dataset.baseDuration) || 0;
        let basePrice = parseInt(priceInput.dataset.basePrice) || 0;
        let incrementMinutes = parseInt(priceInput.dataset.incrementMinutes) || 0;
        let incrementPrice = parseInt(priceInput.dataset.incrementPrice) || 0;

        let fixedPrice = parseInt(priceInput.dataset.price) || 0;

        let durationPrice = fixedPrice;


        // FLEXIBLE TIME PACKAGE
        if (durationInput) {

            let selectedDuration = parseInt(durationInput.value);

            let extraDuration = selectedDuration - baseDuration;

            let increments = extraDuration / incrementMinutes;

            durationPrice = basePrice + (increments * incrementPrice);

        }


        // FINAL PRICE
        let total = boats * durationPrice;

        priceInput.value = total; // keep logic

        if (priceText) {
            priceText.innerText = "₹" + total;
        }


        // BOAT MESSAGE
        if (people > 8) {
            boatMessage.innerText = ` You need ${boats} boats for ${people} peoples ,Each boats can carry upto 8 people`;

        } else {
            boatMessage.innerText = "";
        }

    }

    // events
    if (peopleInput) {
        peopleInput.addEventListener('input', calculatePrice);
    }

    if (durationInput) {
        durationInput.addEventListener('change', calculatePrice);
    }

    // run on load
    calculatePrice();
</script>

<script>
    document.getElementById("name").addEventListener("blur", function() {
        this.value = this.value.trimStart();
    });
    document.getElementById("phone").addEventListener("input", function() {
        this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
    });
</script>

<script>
    const confirmBtn = document.getElementById("confirmBtn");
    const form = document.getElementById("bookingForm");
    const modal = new bootstrap.Modal(document.getElementById('confirmModal'));

    confirmBtn.addEventListener("click", function() {

        // clear previous errors
        document.querySelectorAll(".error-message").forEach(e => e.innerText = "");

        const name = document.getElementById("name").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const email = document.getElementById("email").value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const date = document.querySelector("input[name='booking_date']").value;

        const peopleElement = document.getElementById("people");
        const people = peopleElement ? peopleElement.value.trim() : "{{ $package->people_count }}";

       
        if (name === "") {
            document.getElementById("nameError").innerText = "Please enter your name";
            document.getElementById("name").focus();
            return;
        }

       
        if (phone === "") {
            document.getElementById("phoneError").innerText = "Please enter phone number";
            document.getElementById("phone").focus();
            return;
        }

        if (phone.length !== 10) {
            document.getElementById("phoneError").innerText = "Phone must be 10 digits";
            document.getElementById("phone").focus();
            return;
        }

       
        if (email === "") {
            document.getElementById("emailError").innerText = "Please enter your email";
            document.getElementById("email").focus();
            return;
        }

        if (!emailPattern.test(email)) {
            document.getElementById("emailError").innerText = "Please enter a valid email";
            document.getElementById("email").focus();
            return;
        }

        
        if (date === "") {
            document.getElementById("dateError").innerText = "Please select booking date";
            document.querySelector("input[name='booking_date']").focus();
            return;
        }

        
        if (peopleElement) {

            if (people === "") {
                document.getElementById("peopleError").innerText = "Please enter number of people";
                peopleElement.focus();
                return;
            }

            if (parseInt(people) < 1) {
                document.getElementById("peopleError").innerText = "People must be at least 1";
                peopleElement.focus();
                return;
            }
            if (!Number.isInteger(Number(people))) {
                document.getElementById("peopleError").innerText = "People must be a whole number";
                peopleElement.focus();
                return;
            }
        }

        // Fill modal values
        document.getElementById("confirmName").innerText = name;
        document.getElementById("confirmPhone").innerText = phone;
        document.getElementById("confirmEmail").innerText = email;
        document.getElementById("confirmPeople").innerText = people;

        const durationElement = document.getElementById("duration");
        const duration = durationElement ? durationElement.value : "{{ $package->duration }}";

        document.getElementById("confirmDuration").innerText = duration + " minutes";

        document.getElementById("confirmPrice").innerText =
            document.getElementById("price").value;

        modal.show();
    });

    document.getElementById("payNowBtn").addEventListener("click", function() {
        form.submit();
    });
</script>

@endpush


@endsection