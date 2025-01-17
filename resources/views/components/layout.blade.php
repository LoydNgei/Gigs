<!DOCTYPE html>
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


