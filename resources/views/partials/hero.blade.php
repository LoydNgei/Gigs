<!-- Hero -->
<section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">
<div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"></div>

<div class="z-10">
    <h1 class="text-6xl font-bold uppercase text-white">
        Get<span class="text-black">Gigs</span>
    </h1>

    <p class="text-2xl text-gray-200 font-bold my-4">
        Your trusted platform to Post and find gigs
    </p>

    <div>
        <a href="http://127.0.0.1:8000/listings/form" class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">
            Post a Gig
        </a>
        <a href="{{ route('listing.show') }}"class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">
            Find a Gig
        </a>
    </div>
</div>
</section>