<x-layout>
    <div class="navbar bg-primary text-white p-3 d-flex justify-content-between align-items-center">
        {{-- <h5 class="mb-0"></h5> --}}
        <div class="text-white py-2 px-2 rounded hover:bg-red-400 transition duration-300">
            <a href="{{route('home')}}" class="inline-block text-black ml-2 mb-2"><i class="fa-solid fa-arrow-left"></i>
                Back
            </a>          
        </div>
    </div>
    <div class="relative pt-16 lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless(count($listings) == 0)
            @foreach($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
        @else
            <p>No listings found</p>
        @endunless
    </div>
</x-layout>