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
    <title>Poovar</title>

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

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M58MJ9H');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M58MJ9H"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
        rel="stylesheet">

    @stack('scripts')
</body>

</html>