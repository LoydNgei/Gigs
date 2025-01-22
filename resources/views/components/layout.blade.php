{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
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
        <title>Gigs</title>
    </head>
    <body class="flex flex-col min-h-screen">
            <nav class="flex justify-between items-center mb-4">
                <a href="/"
                    ><img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo"
                /></a>
                <ul class="flex space-x-6 mr-6 text-lg">
                    @auth
                    <li>
                        <span class="font-bold uppercase">
                            Welcome {{auth()->user()->name}}
                        </span>
                    </li>
                    <li>
                        <a href="/listings/manage" class="hover:text-laravel">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            Manage Listings
                        </a>
                    </li>

                    <li>
                        <form class="inline" method="POST" action="/logout">
                            @csrf
                            <button type="submit">
                                <i class="fa-solid fa-door-closed"></i>Logout
                            </button>
                        </form>
                    </li>

                    @else

                    <li>
                        <a href="/register" class="hover:text-laravel"
                            ><i class="fa-solid fa-user-plus"></i> Register</a
                        >
                    </li>
                    <li>
                        <a href="/login" class="hover:text-laravel"
                            ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                            Login
                        </a>
                    </li>
                    @endauth
                </ul>
            </nav>
            
                <main class="flex-grow">
                    {{ $slot }}
                </main>

            <footer class="w-full flex items-center justify-start font-bold bg-black text-white h-16 opacity-70 md:justify-center">
                <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
            </footer>
        <x-flash-message />
    </body>
</html>

 --}}


 <!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gigs</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/responsive.css') }}"> 
     
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

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="{{ asset ('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset ('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset ('js/popper.min.js') }}"></script>
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset ('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset ('js/ajax-form.js') }}"></script>
    <script src="{{ asset ('js/waypoints.min.js') }}"></script>
    <script src="{{ asset ('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset ('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset ('js/scrollIt.js') }}"></script>
    <script src="{{ asset ('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset ('js/wow.min.js') }}"></script>
    <script src="{{ asset ('js/nice-select.min.js') }}"></script>
    <script src="{{ asset ('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset ('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset ('js/plugins.js') }}"></script>
    <script src="{{ asset ('js/gijgo.min.js') }}"></script>
    
    <!--contact js -->
    <script src="{{ asset ('js/contact.js') }}"></script>
    <script src="{{ asset ('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset ('js/jquery.form.js') }}"></script>
    <script src="{{ asset ('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset ('js/mail-script.js') }}"></script>
    <script src="{{ asset ('js/main.js') }}"></script>
</body>
</html>