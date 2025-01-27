<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Gigs</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ Vite::asset('resources/img/favicon.png') }}">

  @vite(['resources/im/favicon.png',
         'resources/img/logo.png',
         'resources/css/bootstrap.min.css',
         'resources/css/owl.carousel.min.css',
         'resources/css/magnific-popup.css',
         'resources/css/font-awesome.min.css',
         'resources/css/themify-icons.css',
         'resources/css/nice-select.css',
         'resources/css/flaticon.css',
         'resources/css/gijgo.css',
         'resources/css/animate.min.css',
         'resources/css/slicknav.css',
         'resources/css/style.css',
         'resources/css/responsive.css'])

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            laravel: "#ef3b2d",
          },
        },
      },
    };
  </script>
</head>

<body>
  <main>
    {{ $slot }}
  </main>

  @vite(['resources/js/vendor/modernizr-3.5.0.min.js',
         'resources/js/vendor/jquery-1.12.4.min.js',
         'resources/js/popper.min.js',
         'resources/js/bootstrap.min.js',
         'resources/js/owl.carousel.min.js',
         'resources/js/isotope.pkgd.min.js',
         'resources/js/ajax-form.js',
         'resources/js/waypoints.min.js',
         'resources/js/jquery.counterup.min.js',
         'resources/js/imagesloaded.pkgd.min.js',
         'resources/js/scrollIt.js',
         'resources/js/jquery.scrollUp.min.js',
         'resources/js/wow.min.js',
         'resources/js/nice-select.min.js',
         'resources/js/jquery.slicknav.min.js',
         'resources/js/jquery.magnific-popup.min.js',
         'resources/js/plugins.js',
         'resources/js/gijgo.min.js',
         'resources/js/contact.js',
         'resources/js/jquery.ajaxchimp.min.js',
         'resources/js/jquery.form.js',
         'resources/js/jquery.validate.min.js',
         'resources/js/mail-script.js',
         'resources/js/main.js'])

  </body>
</html>