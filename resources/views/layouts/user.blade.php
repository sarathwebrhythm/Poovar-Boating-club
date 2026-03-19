
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@400;600&display=swap" rel="stylesheet">

  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <!-- <title>Poovar Boating Packages Upto &#8211; 70% Offer &#8211; Resort Rooms &#8211; Book Now</title> -->
  <title>@yield('title')</title>

  <!-- ===============================================-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon-16x16.png') }}">
    <meta name=" theme-color" content="#ffffff">

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
  
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M58MJ9H');</script>
<!-- End Google Tag Manager -->
 

</head>

<body>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M58MJ9H"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@yield('header')
  

@yield('content')

@if(session('error'))
<script>
    alert("{{ session('error') }}");
</script>
@endif

@yield('footer')

<!-- footer -->

<section class="pb-0 pb-lg-4 mob-0">

    <div class="container mob-text-center">
      <div class="row">
        <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0"> <img class="mb-4 footer-logo" src="{{ asset('assets/img/logo.jpeg') }}" width="90%" alt="Fenlake" />
          <p class="fs--1 text-secondary mb-0 fw-medium foot-note">Door to the magic of Poovar, Explore poovar backwaters.</p>
        </div>
        <div class="col-lg-3 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
          <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Company</h4>
          <ul class="list-unstyled mb-0 navigation">
            <li class="mb-2"><a class="link-900 text-decoration-none" href="/">Home</a></li>
            <li class="mb-2"><a class="link-900 text-decoration-none" href="{{route('user.index')}}#packages">Boating Packages</a></li>
            <!-- <li class="mb-2"><a class="link-900 text-decoration-none" href="#!">Rooms</a></li> -->
            <!-- <li class="mb-2"><a class="link-900 text-decoration-none" href="#!" data-bs-toggle="modal"
              data-bs-target="#booknow">Booking</a></li> -->
            <li class="mb-2"><a class="link-900 text-decoration-none" href="#!" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
          <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Contact</h4>
          <p>Poovar – Uchakkada Bypass Road, Poovar.</p>
        </div>
        <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
          <div class="icon-group mb-4">
            <a class="text-decoration-none icon-item shadow-social" id="facebook"
              href="https://www.facebook.com/poovarboatingclub" target="_blank"><i class="fab fa-facebook-f"> </i></a>
            <a class="text-decoration-none icon-item shadow-social" id="instagram"
              href="https://www.instagram.com/poovarboatingclub.com" target="_blank"><i class="fab fa-instagram">
              </i></a>
            <a class="text-decoration-none icon-item shadow-social" id="twitter"
              href="https:www.twitter.com/poovarboatingclub" target="_blank"><i class="fab fa-twitter"> </i></a>
          </div>

        </div>
      </div>
    </div><!-- end of .container-->

  </section>

  <footer>
    <div class="container">
      <div class="d-flex justify-content-between py-5">
        <p class="text-secondary fs--1 fw-medium foot-note">&copy; 2023 Fenlake. All rights reserved</p>
        <p class="text-secondary fs--1 fw-medium  foot-note">Powered by <a href="https://cozmea.com/" target="_blank">COZMEA</a></p>
      </div>
    </div>
  </footer>

  <div class="sticky-mobile-footer d-block d-sm-none">
    <a class="nav-link fw-medium tele" href="tel:+919778500322"><i class="fa-solid fa-phone me-2 fn-icon-cta"></i>Call Us</a>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header px-4">
          <h5 class="modal-title" id="exampleModalLabel">Privacy Policy</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-4 py-4">
          <p>We may use third-party Service Providers to provide better improvement of our Service.</p>
          <p class="fw-bold">Google Places</p>
          <p>Google Places is a service that returns information about places using HTTP requests. It is operated by
            Google</p>
          <p>Google Places service may collect information from You and from Your Device for security purposes.</p>
          <p>The information gathered by Google Places is held in accordance with the Privacy Policy of Google:
            https://www.google.com/intl/en/policies/privacy/</p>
          <p class="fw-bold">Children’s Privacy</p>
          <p>Our Service does not address anyone under the age of 13. We do not knowingly collect personally
            identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware
            that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have
            collected Personal Data from anyone under the age of 13 without verification of parental consent, We take
            steps to remove that information from Our servers.</p>
          <p>If We need to rely on consent as a legal basis for processing Your information and Your country requires
            consent from a parent, We may require Your parent’s consent before We collect and use that information.</p>
          <p class="fw-bold">Links to Other Websites</p>
          <p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party
            link, You will be directed to that third party’s site. We strongly advise You to review the Privacy Policy
            of every site You visit.</p>
          <p>We have no control over and assume no responsibility for the content, privacy policies or practices of any
            third party sites or services.</p>
          <p class="fw-bold">Changes to this Privacy Policy</p>
          <p>We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new
            Privacy Policy on this page.</p>
          <p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming
            effective and update the “Last updated” date at the top of this Privacy Policy.</p>
          <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy
            are effective when they are posted on this page.</p>
          <p class="fw-bold">Contact Us</p>
          <p>If you have any questions about this Privacy Policy, You can contact us:</p>
          <p>By email: admin@poovarboatingclub.com</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="booknow" tabindex="-1" aria-labelledby="booknow" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content"> 
        <div class="modal-body p-0">
          <div class="row">
            <div class="col-md-5 p-0">
              <img class="w-100 h-100" src="assets/img/dest/ser-1.jpg" />
            </div>
            <div class="col-md-7 px-5 py-4">
              <div class="d-flex justify-content-between">
                <h5 class="modal-title" id="exampleModalLabel">Book a ride with us</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              
              <form name="contact-form" method="post" action="contact.php">
                <div class="row mb-2">
                  <label class="col-sm-12 col-form-label">Name</label>
                  <div class="col-sm-12">
                    <input type="text" name="fname"  id="fname" class="form-control" placeholder="Name" required>
                  </div>
                </div>
                <div class="row mb-2">
                  <label class="col-sm-12 col-form-label">Email</label>
                  <div class="col-sm-12">
                    <input type="text" name="emailid" id="emailid" class="form-control" placeholder="Email" required>
                  </div>
                </div>
                <div class="row mb-2">
                  <label class="col-sm-12 col-form-label">Phone</label>
                  <div class="col-sm-12">
                    <input type="text" name="phoneno" id="phoneno" class="form-control" placeholder="Phone" required>
                  </div>
                </div>
                <div class="row mb-2">
                  <label class="col-sm-12 col-form-label">Please Choose our service</label>
                  <div class="col-sm-12">
                    <select class="form-select" name="question" id="question" aria-label="Please Choose our service">
                      <option selected>Please Choose our service</option>
                      <option value="Island Watching">Island Watching</option>
                      <option value="Sunset watching">Sunset watching</option>
                      <option value="Sunrise Watching">Sunrise Watching</option>
                      <option value="Birds watching">Birds watching</option>
                      <option value="Lunch Cruise">Lunch Cruise</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-2">
                  <label class="col-sm-12 col-form-label">Date of Arrival</label>
                  <div class="col-sm-12">
                    <input type="date" name="arrivaldate" id="arrivaldate" class="form-control" placeholder="Date">
                  </div>
                </div>
                <div class="row mb-2">
                  <label class="col-sm-12 col-form-label">Addon Services</label>
                  <div class="col-sm-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox"  name="cabfacility" id="cabfacility">
                      <label class="form-check-label" for="cabfacility" >Taxi / cab - Pickup Drop</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="rooms" id="rooms">
                      <label class="form-check-label" for="rooms" >Rooms</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="lunchdinnercruise" id="lunchdinnercruise" >
                      <label class="form-check-label" for="lunchdinnercruise" >Lunch / Dinner Cruise</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="noitem" id="noitem">
                      <label class="form-check-label" for="noitem">No</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-12 col-form-label">Message</label>
                  <div class="col-sm-12">
                    <textarea class="form-control"  rows="3" name="noitem" id="msg"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <!-- <div class="g-recaptcha" data-sitekey="6LeaCEkUAAAAAPrZiFyGOW8z2Uy3VmYURJUzJVA3"></div> -->
                </div>
                <div class="row">
                  <div class="d-flex justify-content-end">
                    <button type="submit" name="contact_btn_submit" 
                    class="btn btn-primary btn-lg  mb-3 mb-md-0 border-0 fn-btn-cta blue">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="gallery-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body popup">
          <img class="img-fluid w-100" src="{{ asset('assets/img/gal-1l.jpeg') }}" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="gallery-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body popup">
          <img class="img-fluid w-100" src="{{ asset('assets/img/gal-2l.jpeg') }}" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="gallery-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body popup">
          <img class="img-fluid w-100" src="{{ asset('assets/img/gal-3l.jpeg') }}" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="gallery-4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body popup">
          <img class="img-fluid w-100" src="{{ asset('assets/img/gal-4l.jpeg') }}" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="gallery-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body popup">
          <img class="img-fluid w-100" src="{{ asset('assets/img/gal-5l.jpeg') }}"alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="gallery-6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body popup">
          <img class="img-fluid w-100" src="{{ asset('assets/img/gal-6l.jpeg') }}" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="gallery-7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body popup">
          <img class="img-fluid w-100" src="{{ asset('assets/img/gal-7l.jpeg') }}" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="gallery-8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body popup">
          <img class="img-fluid w-100" src="{{ asset('assets/img/gal-8l.jpeg') }}" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="gallery-9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body popup">
          <img class="img-fluid w-100" src="{{ asset('assets/img/gal-9l.jpeg') }}" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="gallery-10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body popup">
          <img class="img-fluid w-100" src="{{ asset('assets/img/gal-10l.jpeg') }}" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="gallery-11" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body popup">
          <img class="img-fluid w-100" src="{{ asset('assets/img/gal-11l.jpeg') }}" alt="gallery" />
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="gallery-12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body popup">
          <img class="img-fluid w-100" src="{{ asset('assets/img/gal-12l.jpeg') }}" alt="" />
        </div>
      </div>
    </div>
  </div>

  </div>
  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->

  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
   <!-- Bootstrap JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="vendors/@popperjs/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script> -->
  <script src="vendors/is/is.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <!-- <script src="vendors/fontawesome/all.min.js"></script> -->
  <!-- <script src="assets/js/theme.js"></script> -->
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> -->
   <script src="{{ asset('/assets/js/script.js') }}"></script>
   <script>
grecaptcha.ready(function () {
    grecaptcha.execute('{{ env("RECAPTCHA_SITE_KEY") }}', {action: 'page_view'})
    .then(function (token) {

        fetch('/verify-recaptcha', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                token: token
            })
        });

    });
});
</script>

  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
    rel="stylesheet">

     @stack('scripts')
</body>

</html>