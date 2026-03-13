@extends('layouts.user')

@section('title', 'Poovar Boating Packages Upto &#8211; 70% Offer &#8211; Resort Rooms &#8211; Book Now')

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

        
        <div class="row align-items-start">

            <!-- IMAGE -->
            <div class="col-lg-7 col-md-12 mb-4 order-2 order-lg-1">
                <img src="{{ asset('storage/'.$package->image) }}"
                    alt="{{ $package->image_alt }}"
                    class="img-fluid w-100 rounded shadow">
            </div>

            <!-- FORM -->
            <div class="col-lg-5 col-md-12 mb-4 order-1 order-lg-2">

                <div class="card shadow p-4 sticky-top"
                    style="top:120px; border:2px solid #00ba16;">

                    <h3 class="mb-4">Book This Package</h3>

                    <form id="bookingForm" action="{{ route('user.booking.store') }}" method="POST">
                    @csrf
                        <input type="hidden" name="package_id" value="{{ $package->id }}">

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your full name" required>
                        </div>

                        <div class="mb-3">
                            <label>Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control"  pattern="[0-9]{10}" maxlength="10" placeholder="Enter phone number" required 
                            oninvalid="this.setCustomValidity('Please enter a 10 digit phone number')"
                            oninput="this.setCustomValidity('')">
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        

                        @if($package->pricing_type == 'flexible')

                        <div class="mb-3">
                            <label>Duration</label>

                            <select class="form-select" name="duration" id="duration">

                                @for($i = $package->base_duration; $i <= $package->max_duration; $i += $package->increment_minutes)

                                    <option value="{{ $i }}">
                                        {{ $i }} minutes
                                    </option>

                                    @endfor

                            </select>

                        </div>

                        @else

                        <div class="mb-3">
                            <label>Duration</label>

                            <input type="text"
                           
                                class="form-control"
                                value="{{ $package->duration }} minutes"
                                readonly>
                                <input type="hidden" name="duration" value="{{ $package->duration }}">

                        </div>

                        @endif
                        <!-- People -->
                        <div class="mb-3">
                            <label>Number Of People</label>

                            @if($package->is_custom_people || $package->pricing_type == 'flexible')

                            <input type="number"
                            name="people"
                                id="people"
                                class="form-control"
                                min="1"
                                placeholder="Enter number of people"
                                required>

                            @else

                            <input type="text"
                                class="form-control"
                                value="{{ $package->people_count }}"
                                readonly>
                                <input type="hidden" name="people" value="{{ $package->people_count }}">

                            @endif

                        </div>
                        <!-- Price -->
                        <div class="mb-3">
                            <label>Price</label>
                            <input type="text"
                                class="form-control"
                               
                                id="price"
                                data-price="{{ $package->price }}"
                                data-base-duration="{{ $package->base_duration }}"
                                data-base-price="{{ $package->base_price }}"
                                data-increment-minutes="{{ $package->increment_minutes }}"
                                data-increment-price="{{ $package->increment_price }}"
                                value="₹{{ $package->pricing_type == 'flexible' ? $package->base_price : $package->price }}"
                                readonly>
                        </div>
                        <small id="boatMessage" class="text-muted"></small>
                        <button type="button" id="confirmBtn" class="btn btn-primary w-100" style="border-radius: 1.5rem;">
                            Book Now
                        </button>

                    </form>

                </div>

            </div>

        </div>


        <!-- ROW 2 : DETAILS -->
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

        priceInput.value = "₹" + total;


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
document.getElementById("name").addEventListener("input", function () {
    this.value = this.value.replace(/^\s+/, '');
});
document.getElementById("phone").addEventListener("input", function () {
    this.value = this.value.replace(/[^0-9]/g, '').slice(0,10);
});
</script>

<script>
const confirmBtn = document.getElementById("confirmBtn");
const form = document.getElementById("bookingForm");
const modal = new bootstrap.Modal(document.getElementById('confirmModal'));

confirmBtn.addEventListener("click", function(){

    // Validate form first
    if (!form.checkValidity()) {
        form.reportValidity(); // show browser validation messages
        return;
    }

    document.getElementById("confirmName").innerText =
        document.getElementById("name").value;

    document.getElementById("confirmPhone").innerText =
        document.getElementById("phone").value;

    document.getElementById("confirmEmail").innerText =
        document.getElementById("email").value;

    const peopleElement = document.getElementById("people");
    const people = peopleElement ? peopleElement.value : "{{ $package->people_count }}";

    document.getElementById("confirmPeople").innerText = people;

    const durationElement = document.getElementById("duration");
    const duration = durationElement ? durationElement.value : "{{ $package->duration }}";

    document.getElementById("confirmDuration").innerText = duration + " minutes";

    document.getElementById("confirmPrice").innerText =
        document.getElementById("price").value;

    modal.show();
});

document.getElementById("payNowBtn").addEventListener("click", function(){
    form.submit();
});
</script>
@endpush


@endsection
