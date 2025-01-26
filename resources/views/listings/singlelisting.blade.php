<x-layout>
    <div class="navbar bg-primary text-white p-3 d-flex justify-content-between align-items-center">
        {{-- <h5 class="mb-0"></h5> --}}
        <div class="text-white py-2 px-2 rounded hover:bg-red-400 transition duration-300">
            <a href="{{route('listing.show')}}" class="inline-block text-black ml-2 mb-2"><i class="fa-solid fa-arrow-left"></i>
                Back
            </a>           
        </div>
    </div>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6" src="{{$listing->logo ? asset('storage/' .$listing->logo) : asset('/images/no-image.png')}}" alt=""/>
                <h3 class="text-2xl mb-2">
                    {{$listing->title}}
                </h3>
                <div class="text-xl font-bold mb-4">
                    {{$listing->company}}            
                </div>
                    <x-listing-tags :tagsCsv="$listing->tags"/>
                <div class="text-lg my-4"><i class="fa-solid fa-location-dot"></i>
                    {{$listing->location}}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">Job Description</h3>
                    <div class="text-lg space-y-6">
                        {{$listing->description}}
                        <a href="{{route('job.form', ["listing" => $listing->id])}}" class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80">
                                <i class="fa-solid"></i>
                            Apply Now
                        </a>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
    {{-- <x-card class="mt-4 p-2 flex space-x-6">
        <a href="{{ route('listing.edit', ['listing' => $listing->id]) }}">
            <i class="fa-solid fa-pencil"> Edit</i>
        </a>        
        <form method="POST" action="{{ route('listing.destroy', ['id' => $listing->id]) }}">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
        </form>        
    </x-card> --}}
</x-layout>